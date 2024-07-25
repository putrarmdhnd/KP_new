<?php

namespace App\Http\Controllers;

use App\Models\Penilaian;
use App\Models\PilihAssesor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Siswa;

class AssesorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        return view('assesor.assesor-home', compact('user'));
    }

    public function KonfirmasiAPL2($id)
    {
        $user = Auth::user();
        $siswa = PilihAssesor::where('id_assesor', $id)
            ->where('status_konfirmasi', 0)
            ->get();

        return view('assesor.konfirmasi-apl2-list_siswa', compact('user', 'siswa'));
    }

    public function KonfirmasiAPL2_Edit($id)
    {
        $user = Auth::user();
        $assesor = Siswa::find($id)->siswa_apl2->id_assesor;
        $nama_assessor = User::where('id', $assesor)->get();

        $siswa = Siswa::find($id)->siswa_apl2->where('nik', $id)->get();

        return view('assesor.konfirmasi-apl2-siswa', compact('user', 'siswa', 'nama_assessor'));
    }
    public function KonfirmasiAPL2_Store(Request $req)
    {
        $validate = $req->validate([
            'ttdAssesor' => 'required',
            'statusKonfirmasi' => 'required',
        ]);

        $siswa = PilihAssesor::findOrFail($req->get('idApl2'));

        $folderPath = storage_path('app/public/TandaTanganAssessor');

        $image_parts = explode(";base64,", $req->ttdAssesor);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);

        $nama_ttd = $req->nama_siswa;
        $fileName = $nama_ttd . uniqid() . '.' . $image_type;
        $file = $folderPath . '/' . $fileName;

        if (!file_exists($folderPath)) {
            mkdir($folderPath, 0777, true);
        }

        file_put_contents($file, $image_base64);

        $siswa->update([
            'ttd_assesor' => $fileName,
            'status_konfirmasi' => $req->get('statusKonfirmasi')
        ]);

        $kodeAssesor = $siswa->id_assesor;

        $notification = array(
            'message' => 'Data berhasil dimasukkan',
            'alert-type' => 'success',
        );
        return redirect()->route('admin.konfirmasi_apl2_listsiswa', ['id' => $kodeAssesor])->with($notification);
    }

    public function listSiswaPenilaian($idAssessor)
    {

        $user = Auth::user();
        $apl2 = PilihAssesor::where('id_assesor', $idAssessor)->where('status_penilaian', 0)->get();


        return view('assesor.list_siswa-penilaian', compact('user', 'apl2'));
    }

    public function detailPenilaian($nik)
    {
        $user = Auth::user();
        $siswa = PilihAssesor::where('nik', $nik)->get();

        $assessor = PilihAssesor::where('nik', $nik)->first(); // Retrieve the assessor based on 'nik'
        $nama_assessor = null; // Initialize the variable to hold the assessor's name

        if ($assessor) {
            $assessor_id = $assessor->id_assesor; // Get the assessor's ID from the retrieved record
            $nama_assessor_record = User::where('id', $assessor_id)->first(); // Retrieve the User record based on assessor ID

            if ($nama_assessor_record) {
                $nama_assessor = $nama_assessor_record->nama; // Get the name from the User record
            }
        }


        return view('assesor.penilaian', compact('user', 'siswa', 'nama_assessor'));
    }

    public function submitPenilaian(Request $req)
    {
        $validate = $req->validate([
            'nama_asesor' => 'required',
            'nama_asesi' => 'required',
            'tempat_ujian' => 'required',
        ]);


        $nilai = new Penilaian();

        $nilai->nama_asesor = $req->get('nama_asesor');
        $nilai->nama_asesi = $req->get('nama_asesi');
        $nilai->tempat_ujian = $req->get('tempat_ujian');
        $nilai->{'111'} = $req->get('111');
        $nilai->{'112'} = $req->get('112');
        $nilai->{'113'} = $req->get('113');
        $nilai->{'121'} = $req->get('121');
        $nilai->{'122'} = $req->get('122');
        $nilai->{'123'} = $req->get('123');
        $nilai->{'124'} = $req->get('124');
        $nilai->{'211'} = $req->get('211');
        $nilai->{'212'} = $req->get('212');
        $nilai->{'221'} = $req->get('221');
        $nilai->{'222'} = $req->get('222');
        $nilai->{'311'} = $req->get('311');
        $nilai->{'312'} = $req->get('312');
        $nilai->{'313'} = $req->get('313');
        $nilai->{'314'} = $req->get('314');
        $nilai->{'321'} = $req->get('321');
        $nilai->{'322'} = $req->get('322');
        $nilai->{'323'} = $req->get('323');
        $nilai->{'324'} = $req->get('324');
        $nilai->{'325'} = $req->get('325');
        $nilai->{'331'} = $req->get('331');
        $nilai->{'332'} = $req->get('332');
        $nilai->{'411'} = $req->get('411');
        $nilai->{'412'} = $req->get('412');
        $nilai->{'413'} = $req->get('413');
        $nilai->{'421'} = $req->get('421');
        $nilai->{'422'} = $req->get('422');
        $nilai->{'423'} = $req->get('423');
        $nilai->{'424'} = $req->get('424');
        $nilai->{'425'} = $req->get('425');
        $nilai->{'431'} = $req->get('431');
        $nilai->{'432'} = $req->get('432');
        $nilai->{'433'} = $req->get('433');
        $nilai->{'434'} = $req->get('434');
        $nilai->{'511'} = $req->get('511');
        $nilai->{'512'} = $req->get('512');
        $nilai->{'513'} = $req->get('513');
        $nilai->{'521'} = $req->get('521');
        $nilai->{'522'} = $req->get('522');
        $nilai->{'523'} = $req->get('523');
        $nilai->{'531'} = $req->get('531');
        $nilai->{'532'} = $req->get('532');
        $nilai->{'611'} = $req->get('611');
        $nilai->{'612'} = $req->get('612');
        $nilai->{'613'} = $req->get('613');
        $nilai->{'621'} = $req->get('621');
        $nilai->{'622'} = $req->get('622');
        $nilai->{'623'} = $req->get('623');
        $nilai->{'631'} = $req->get('631');
        $nilai->{'632'} = $req->get('632');
        $nilai->{'711'} = $req->get('711');
        $nilai->{'712'} = $req->get('712');
        $nilai->{'721'} = $req->get('721');
        $nilai->{'722'} = $req->get('722');
        $nilai->{'723'} = $req->get('723');
        $nilai->{'724'} = $req->get('724');
        $nilai->{'725'} = $req->get('725');
        $nilai->{'726'} = $req->get('726');
        $nilai->{'727'} = $req->get('727');
        $nilai->{'811'} = $req->get('811');
        $nilai->{'812'} = $req->get('812');
        $nilai->{'821'} = $req->get('821');
        $nilai->{'822'} = $req->get('822');
        $nilai->{'823'} = $req->get('823');
        $nilai->{'831'} = $req->get('831');
        $nilai->{'832'} = $req->get('832');
        $nilai->{'911'} = $req->get('911');
        $nilai->{'912'} = $req->get('912');
        $nilai->{'921'} = $req->get('921');
        $nilai->{'922'} = $req->get('922');
        $nilai->{'931'} = $req->get('931');
        $nilai->{'932'} = $req->get('932');
        $nilai->{'933'} = $req->get('933');
        $nilai->{'934'} = $req->get('934');
        $nilai->{'1011'} = $req->get('1011');
        $nilai->{'1012'} = $req->get('1012');
        $nilai->{'1013'} = $req->get('1013');
        $nilai->{'1021'} = $req->get('1021');
        $nilai->{'1022'} = $req->get('1022');
        $nilai->{'1023'} = $req->get('1023');
        $nilai->{'1024'} = $req->get('1024');
        $nilai->{'1031'} = $req->get('1031');
        $nilai->{'1032'} = $req->get('1032');
        $nilai->{'1033'} = $req->get('1033');
        $nilai->{'1034'} = $req->get('1034');
        $nilai->{'1041'} = $req->get('1041');
        $nilai->{'1111'} = $req->get('1111');
        $nilai->{'1112'} = $req->get('1112');
        $nilai->{'1121'} = $req->get('1121');
        $nilai->{'1122'} = $req->get('1122');
        $nilai->{'1123'} = $req->get('1123');
        $nilai->{'1124'} = $req->get('1124');
        $nilai->{'1131'} = $req->get('1131');
        $nilai->{'1132'} = $req->get('1132');
        $nilai->{'1133'} = $req->get('1133');
        $nilai->{'1141'} = $req->get('1141');
        $nilai->{'1142'} = $req->get('1142');
        $nilai->{'1211'} = $req->get('1211');
        $nilai->{'1212'} = $req->get('1212');
        $nilai->{'1213'} = $req->get('1213');
        $nilai->{'1214'} = $req->get('1214');
        $nilai->{'1215'} = $req->get('1215');
        $nilai->{'1216'} = $req->get('1216');
        $nilai->{'1217'} = $req->get('1217');
        $nilai->{'1218'} = $req->get('1218');
        $nilai->{'1221'} = $req->get('1221');
        $nilai->{'1222'} = $req->get('1222');
        $nilai->{'1223'} = $req->get('1223');
        $nilai->{'1224'} = $req->get('1224');
        $nilai->{'1225'} = $req->get('1225');
        $nilai->{'1226'} = $req->get('1226');
        $nilai->{'1227'} = $req->get('1227');
        $nilai->{'1231'} = $req->get('1231');
        $nilai->{'1232'} = $req->get('1232');
        $nilai->{'1233'} = $req->get('1233');
        $nilai->{'1234'} = $req->get('1234');
        $nilai->{'1311'} = $req->get('1311');
        $nilai->{'1312'} = $req->get('1312');
        $nilai->{'1313'} = $req->get('1313');
        $nilai->{'1321'} = $req->get('1321');
        $nilai->{'1322'} = $req->get('1322');
        $nilai->{'1331'} = $req->get('1331');
        $nilai->{'1332'} = $req->get('1332');
        $nilai->{'1341'} = $req->get('1341');
        $nilai->{'1342'} = $req->get('1342');
        $nilai->{'1343'} = $req->get('1343');

        $nilai->save();

        $notification = array(
            'message' => 'Data berhasil ditambahkan',
            'alert-type' => 'success',
        );
        return redirect()->route('assesor.home')->with($notification);
    }
}
