<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Penilaian;
use App\Models\PilihAssesor;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        return view('admin.admin-home', compact('user'));
    }


    ///KELOLA AKUN
    public function KelolaAkun()
    {
        $user = Auth::user();

        $users = User::all()->filter(function ($user) {
            return in_array($user->roles_id, ['2', '3']);
        });

        $admin = DB::table('users')
            ->select('id', 'nama', 'username', 'roles_id')
            ->where('roles_id', '=', '1')
            ->get();

        return view('admin.kelola-akun', compact('user', 'users', 'admin'));
    }
    public function TambahAkun()
    {
        $user = Auth::user();
        return view('admin.tambah-akun', compact('user'));
    }
    public function TambahAkunUser()
    {
        $user = Auth::user();
        return view('admin.tambah-akun-user', compact('user'));
    }
    public function SubmitAkun(Request $req)
    {
        $validate = $req->validate([
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required',
            'roles_id' => 'required'
        ]);

        $password = $req->get('password');
        $hash_pass = Hash::make($password);

        $users = new User;
        $users->nama = $req->get('nama');
        $users->username = $req->get('username');
        $users->password = $hash_pass;
        $users->roles_id = $req->get('roles_id');

        $users->save();

        $notification = array(
            'message' => 'Data user berhasil ditambahkan',
            'alert-type' => 'success',
        );
        return redirect()->route('admin.kelola-akun')->with($notification);
    }
    public function EditAkun($id)
    {
        $user = Auth::user();
        $data_user['data_user'] = User::findOrFail($id);

        return view('admin.edit-akun', compact('user', 'data_user'));
    }
    public function UpdateAkun(Request $req)
    {
        $data_user = User::find($req->get('id'));

        $validate = $req->validate([
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required',
            'roles_id' => 'required'
        ]);

        $password = $req->get('password');
        $hash_pass = Hash::make($password);

        $data_user->nama = $req->get('nama');
        $data_user->username = $req->get('username');
        $data_user->password = $hash_pass;
        $data_user->roles_id = $req->get('roles_id');


        $data_user->save();

        $notification = array(
            'message' => 'Data user berhasil ubah',
            'alert-type' => 'success',
        );
        return redirect()->route('admin.kelola-akun')->with($notification);
    }
    public function DeleteAkun($id)
    {
        $users = User::find($id);

        $users->delete();

        $notification = array(
            'message' => 'Data user berhasil hapus',
            'alert-type' => 'success',
        );
        return redirect()->route('admin.kelola-akun')->with($notification);;
    }


    //KONFIRMASI APL_1 SISWA LIST JURUSAN
    public function Konfirmasi_APL1()
    {
        $user = Auth::user();
        $Apl1 = Siswa::where('status_konfirmasi', 0)->get();
        return view('admin.konfirmasi-apl1-list_siswa', compact('user', 'Apl1'));
    }

    //KONFIRMASI APL_1 SISWA LIST SISWA
    public function Konfirmasi_APL1_ListSiswa($kode_jurusan)
    {
        $user = Auth::user();
        $siswa = Siswa::where('jurusan', $kode_jurusan)
            ->where('status_konfirmasi', 0)
            ->get();

        return view('', compact('user', 'siswa'));
    }

    //EDIT APL1 SISWA
    public function Edit_APL1_Siswa($nik)
    {
        $user = Auth::user();
        $editsiswa = Siswa::where('nik', $nik)->get();

        $folderPath = storage_path('app/public/TandaTangan');
        $files = glob($folderPath . '/*');

        return view('admin.konfirmasi-apl1-edit', compact('user', 'editsiswa', 'files'));
    }
    //UPDATE APL1 SISWA
    public function Update_APL1_Siswa(Request $req)
    {
        $siswa = Siswa::find($req->get('nik'));

        $validate = $req->validate([
            'ttd_admin' => 'required',
            'status' => 'required',
        ]);

        $folderPath = storage_path('app\public\TandaTanganAdmin'); // Menentukan jalur folder tempat file akan disimpan

        $image_parts = explode(";base64,", $req->ttd_admin);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);

        $nama_ttd = $req->nama;
        $fileName = $nama_ttd . uniqid() . '.' . $image_type; // Nama file khusus yang diinginkan
        $file = $folderPath . '\\' . $fileName; // Menggabungkan jalur folder dengan nama file

        // Membuat direktori jika belum ada
        if (!file_exists($folderPath)) {
            mkdir($folderPath, 0777, true);
        }

        file_put_contents($file, $image_base64); // Menyimpan file gambar ke lokasi yang ditentukan


        $siswa->ttd_admin = $fileName;;
        $siswa->status_konfirmasi = $req->get('status');

        $siswa->save();


        $notification = array(
            'message' => 'Data berhasil di masukan',
            'alert-type' => 'success',
        );
        return redirect()->route('admin.konfirmasi_apl1')->with($notification);
    }

    //PDF APL-1
    public function PDF_APL1($nik)
    {
        $user = Auth::user();
        $apl_1siswa = Siswa::where('nik', $nik)->get();

        $folderPath = storage_path('app/public/TandaTangan');
        $files = glob($folderPath . '/*');

        return view('admin.pdf-apl1', compact('user', 'apl_1siswa', 'files'));
    }
    //PDF APL-2
    public function PDF_APL2($nik)
    {
        $user = Auth::user();
        $siswa = Siswa::where('nik', $nik)->first('ttd_siswa');
        $apl_2siswa = PilihAssesor::where('nik', $nik)->get();

        $assessor = PilihAssesor::where('nik', $nik)->first(); // Retrieve the assessor based on 'nik'
        $nama_assessor = null; // Initialize the variable to hold the assessor's name

        if ($siswa && $siswa->ttd_siswa) {
            $apl_1siswa = $siswa->ttd_siswa;
            
        }

        if ($assessor) {
            $assessor_id = $assessor->id_assesor; // Get the assessor's ID from the retrieved record
            $nama_assessor_record = User::where('id', $assessor_id)->first(); // Retrieve the User record based on assessor ID

            if ($nama_assessor_record) {
                $nama_assessor = $nama_assessor_record->nama; // Get the name from the User record
            }
        }

        $folderPath = storage_path('app/public/TandaTangan');
        $files = glob($folderPath . '/*');

        return view('admin.pdf-apl2', compact('user','apl_1siswa', 'apl_2siswa', 'files', 'nama_assessor'));
    }
    public function PDF_Penilaian($id)
    {
        $user = Auth::user();
        $penilaian = Penilaian::where('id', $id)->get();

        $folderPath = storage_path('app/public/TandaTangan');
        $files = glob($folderPath . '/*');

        return view('admin.pdf-penilaian', compact('user', 'penilaian', 'files'));
    }


    //Laporan 
    public function Laporan()
    {
        $user = Auth::user();

        return view('admin.laporan', compact('user'));
    }

    //Laporan APL1
    public function LaporanApl1()
    {
        $user = Auth::user();
        $apl1 = Siswa::all();

        return view('admin.laporan-apl1', compact('user', 'apl1'));
    }
    //Laporan APL2
    public function LaporanApl2()
    {
        $user = Auth::user();
        $apl2 = PilihAssesor::all();

        return view('admin.laporan-apl2', compact('user', 'apl2'));
    }
    //Laporan Penilaian
    public function LaporanPenilaian()
    {
        $user = Auth::user();
        $penilaian = Penilaian::all();

        return view('admin.laporan-penilaian', compact('user', 'penilaian'));
    }
}
