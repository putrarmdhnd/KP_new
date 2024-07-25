<?php

namespace App\Http\Controllers;

use App\Models\PilihAssesor;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        return view('siswa.siswa-home', compact('user'));
    }


    //LPK-1
    public function APL1($id)
    {
        $user = Auth::user();
        $data_status = User::find($id)->siswa_apl1();
        $data_status_0 = User::find($id)->siswa_apl1()->where('status_konfirmasi', 0);

        if (!$data_status->exists()) {

            return view('siswa.apl1', compact('user'));
        } else {

            $notification = array(
                'message' => 'Data APL-1 anda sudah di isi',
                'alert-type' => 'error',
            );

            return redirect()->route('siswa.home')->with($notification);
        }
    }
    public function SubmitApl_1(Request $req)
    {
        $validate = $req->validate([
            'nik' => 'required',
            'nama' => 'required',
            'ttl' => 'required',
            'jk' => 'required',
            'kebangsaan' => 'required',
            'alamat' => 'required',
            'kode_pos' => 'required',
            'no_rumah' => 'required',
            'no_kantor' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
            'kualifikasi_pendidikan' => 'required',
            'ttd_siswa' => 'required',
            'user_id' => 'required',
            'status' => 'required',
        ]);



        $folderPath = storage_path('app\public\TandaTangan'); // Menentukan jalur folder tempat file akan disimpan

        $image_parts = explode(";base64,", $req->ttd_siswa);
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


        $siswa = new Siswa();

        $siswa->nik = $req->get('nik');
        $siswa->nama = $req->get('nama');
        $siswa->ttl = $req->get('ttl');
        $siswa->jk = $req->get('jk');
        $siswa->kebangsaan = $req->get('kebangsaan');
        $siswa->alamat = $req->get('alamat');
        $siswa->kode_pos = $req->get('kode_pos');
        $siswa->no_rumah = $req->get('no_rumah');
        $siswa->no_kantor = $req->get('no_kantor');
        $siswa->no_hp = $req->get('no_hp');
        $siswa->email = $req->get('email');
        $siswa->kualifikasi_pendidikan = $req->get('kualifikasi_pendidikan');
        $siswa->perusahaan = $req->get('perusahaan');
        $siswa->jabatan = $req->get('jabatan');
        $siswa->alamat_rumah = $req->get('alamat_rumah');
        $siswa->no_telp = $req->get('no_telp');
        $siswa->email_pekerjaan = $req->get('email_pekerjaan');
        $siswa->kodepos_pekerjaan = $req->get('kodepos_pekerjaan');
        $siswa->fax = $req->get('fax');
        $siswa->bukti_syarat = $req->get('bukti_syarat');
        $siswa->ttd_siswa =  $fileName;
        $siswa->ttd_admin =  'Belum';
        $siswa->user_id = $req->get('user_id');
        $siswa->status_konfirmasi = $req->get('status');
        

        $siswa->save();

        $notification = array(
            'message' => 'Data APL-1 berhasil ditambahkan',
            'alert-type' => 'success',
        );
        return redirect()->route('siswa.home')->with($notification);
    }



    //LPK-2\
    public function APL2($id)
{
    $data_apl1 = User::find($id)->siswa_apl1;

    if (is_null($data_apl1)) {
        $notification = array(
            'message' => 'Tolong isi APL-1 terlebih dahulu!!!',
            'alert-type' => 'error',
        );

        return redirect()->route('siswa.home')->with($notification);
    }

    $apl1_nik = $data_apl1->nik;
    $dataApl2 = PilihAssesor::where('nik', $apl1_nik)->exists();

    $data_status_0 = User::find($id)->siswa_apl1()->where('status_konfirmasi', 0)->exists();

    $user = User::find($id);
    $assessor = User::where('roles_id', 2)->get();

    if ($data_status_0) {
        $notification = array(
            'message' => 'Data APL-1 anda sedang di konfirmasi oleh Admin',
            'alert-type' => 'error',
        );

        return redirect()->route('siswa.home')->with($notification);
    }elseif (!$dataApl2) {
        $user = Auth::user();
        return view('siswa.apl2', compact('user', 'assessor', 'data_apl1'));
    } elseif($dataApl2) {
        $notification = array(
            'message' => 'Data APL-1 dengan NIK ' . $apl1_nik . ' sudah ada dalam APL-2',
            'alert-type' => 'error',
        );
    
        return redirect()->route('siswa.home')->with($notification);
    }
}





    public function SubmitApl_2(Request $req)
    {
        $validate = $req->validate([
            'nik' => 'required',
            'id_assesor' => 'required',
            'nama_siswa' => 'required',
        ]);


        $apl2 = new PilihAssesor();

        $apl2->nik = $req->get('nik');
        $apl2->id_assesor = $req->get('id_assesor');
        $apl2->nama_siswa = $req->get('nama_siswa');
        $apl2->tanggal = now();
        $apl2->ttd_assesor =  'Belum';
        $apl2->status_kompeten = 1;
        $apl2->status_konfirmasi = $req->get('status');
        $apl2->status_penilaian = 0;

        $apl2->save();

        $notification = array(
            'message' => 'Data APL-2 berhasil ditambahkan',
            'alert-type' => 'success',
        );
        return redirect()->route('siswa.home')->with($notification);
    }
}
