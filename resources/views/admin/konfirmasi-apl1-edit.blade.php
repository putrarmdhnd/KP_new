@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3>Konfirmasi Formulir LPK-1</h3>
                </div>
                @foreach($editsiswa as $es)
                <div class="card-body">
                    <form method="post" action="{{ route('admin.update-apl1') }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" class="form-control my-input" name="nama" id="nama" placeholder="Masukan Nama Lengkap Anda" value="{{$es->nama}}" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tahun">No. KTP/NIK</label>
                                    <input type="text" class="form-control my-input" name="nik" id="nik" placeholder="Masukan No NIK/KTP Anda" value="{{$es->nik}}" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="penerbit">Tanggal Lahir</label>
                                    <input type="text" class="form-control my-input" name="tanggal_lahir" id="tanggal_lahir" value="{{$es->ttl}}" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cover">Jenis Kelamin</label><br>
                                    <select class="form-select my-input" aria-label=".form-select-lg example" name="jk" id="jk" required>
                                        <option selected value="{{$es->jk}}" hidden>{{$es->jk}}</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="penerbit">Kebangsaan</label>
                                    <input type="text" class="form-control my-input" name="kebangsaan" id="kebangsaan" placeholder="Masukan Kebangsaan Anda" value="{{$es->kebangsaan}}" required />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="cover">Alamat Rumah</label>
                                    <textarea class="form-control my-input" placeholder="Masukan Alamat Rumah anda" name="alamat" id="alamat" value="{{$es->alamat}}">{{$es->alamat}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="kodepos">Kode pos</label>
                                    <input type="text" class="form-control my-input" name="kode_pos" id="kode_pos" placeholder="Masukan Kodepos Anda" value="{{$es->kode_pos}}" required />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="mt-2" for="penerbit">No. Telpon/E-mail</label>
                                <div class="d-flex flex-wrap p-3">
                                    <div class="col-md-6 mb-2">
                                        <label for="penerbit">Rumah</label>
                                        <input type="text" class="form-control my-input" name="no_rumah" id="kebangsaan" placeholder="Masukan No.Telpon Rumah Anda" value="{{$es->no_rumah}}" required />
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="penerbit">Kantor</label>
                                        <input type="text" class="form-control my-input" name="no_kantor" id="kebangsaan" placeholder="Masukan No.Telpon Kantor Anda" value="{{$es->no_kantor}}" required />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="penerbit">HP</label>
                                        <input type="text" class="form-control my-input" name="no_hp" id="kebangsaan" placeholder="Masukan No.Telpon HP Anda" value="{{$es->no_hp}}" required />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="penerbit">Email</label>
                                        <input type="text" class="form-control my-input" name="email" id="kebangsaan" placeholder="Masukan Email Anda" value="{{$es->email}}" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kualifikasi_pendidikan">Kualifikasi Pendidikan</label>
                                        <input type="text" class="form-control my-input" name="kualifikasi_pendidikan" id="kualifikasi_pendidikan" placeholder="Masukan Kualifikasi Pendidikan Anda" value="{{$es->kualifikasi_pendidikan}}" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h5 class="fw-bold">b.	Data Pekerjaan Sekarang</h5>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kualifikasi_pendidikan">Perusahaan/Lembaga</label>
                                        <input type="text" class="form-control my-input" name="perusahaan" id="perusahaan" placeholder="Masukan Perusahaan Anda" value="{{$es->perusahaan}}" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kualifikasi_pendidikan">Jabatan</label>
                                        <input type="text" class="form-control my-input" name="jabatan" id="jabatan" placeholder="Masukan Jabatan Anda" value="{{$es->jabatan}}" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="cover">Alamat Rumah</label>
                                    <textarea class="form-control my-input" placeholder="Masukan Alamat Rumah anda" name="alamat_rumah" id="alamat_rumah" >{{$es->alamat_rumah}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="mt-2" for="penerbit">No. Telpon/Fax/E-mail</label>
                                <div class="d-flex flex-wrap p-3">
                                    <div class="col-md-6 mb-2">
                                        <label for="penerbit">Telp</label>
                                        <input type="text" class="form-control my-input" name="no_telp" id="no_telp" placeholder="Masukan No.Telpon Anda" value="{{$es->no_telp}}" required />
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="penerbit">E-mail</label>
                                        <input type="text" class="form-control my-input" name="email_pekerjaan" id="email_pekerjaan" placeholder="Masukan No.Telpon Email Anda" value="{{$es->email_pekerjaan}}" required />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="penerbit">Kode pos</label>
                                        <input type="text" class="form-control my-input" name="kodepos_pekerjaan" id="kodepos_pekerjaan" placeholder="Masukan Kode pos" value="{{$es->kodepos_pekerjaan}}" required />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="penerbit">Fax</label>
                                        <input type="text" class="form-control my-input" name="fax" id="fax" placeholder="Masukan Fax" value="{{$es->fax}}" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p class="font-weight-bold">Bukti Kelengkapan Pemohon</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group d-flex align-items-center justify-content-center fw-bold">
                                            <label for="checkbox1" class="mr-4">Ada</label>
                                            <label for="checkbox2" class="ml-4">Tidak Ada</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>Fotocopy nilai raport semester 1-V</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox1"  name="1_1.1" onchange="handleCheckboxChange(this)" checked>
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox2"  name="1_1.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>Fotocopy Sertifikat PRAKERIN atau Surat Keterangan telah melaksanakan PRAKERIN</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" name="1_1.2" onchange="handleCheckboxChange(this)"checked>
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4"  name="1_1.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>Fotocopy Kartu Pelajar/ Kartu Osis/ Surat Keterangan Siswa Aktif</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3"  name="1_1.3" onchange="handleCheckboxChange(this)" checked>
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4"  name="1_1.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex mb-3">
                                    <div class="col-md-9">
                                        <p>Fotocopy KTP/ Kartu Keluaga</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3"  name="1_1.4" onchange="handleCheckboxChange(this)" checked>
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4"  name="1_1.4" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="mt-4 d-flex gap-5">
                                <div class="col-md-3">
                                    <label class="" for="">Tanda Tangan Admin</label>
                                    <br />
                                    <div id="sig"></div>
                                    <br />
                                    <button id="clear" class="btn btn-danger btn-sm">Ulangi Tanda tangan</button>
                                    <textarea id="signature64" name="ttd_admin" style="display: none"></textarea>
                                </div>

                                <div class="col-md-3">
                                    <label class="" for="">Tanda Tangan Siswa</label>
                                    <div class="form-group">
                                        <div class="col-md-4 ">
                                            <img src="{{ asset('storage/TandaTangan/' . basename($es->ttd_siswa)) }}" alt="{{ basename($es->ttd_siswa) }}">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card-footer float-end pt-3">
                                <input type="hidden" name="status" id="status" value="1">

                                <a href="{{ route('admin.home') }}" class="btn btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                    </form>
                    @endforeach

                    <script type="text/javascript">
                        var sig = $('#sig').signature({
                            syncField: '#signature64',
                            syncFormat: 'PNG'
                        });
                        $('#clear').click(function(e) {
                            e.preventDefault();
                            sig.signature('clear');
                            $("#signature64").val('');
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection