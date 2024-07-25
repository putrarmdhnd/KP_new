@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3>Formulir LPK-2</h3>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('siswa.submit-apl-2') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row g-3 m-3">
                            <div class="col-12">
                                <div class="col-6 ">
                                    <div class="form-group">
                                        <label class="fw-bold" for="id_assesor">Pilih Assessor</label><br>
                                        <select class="form-select my-input" aria-label=".form-select-lg example" name="id_assesor" id="id_assesor" required>
                                            <option selected disabled hidden>Pilih Assessor untuk ujian</option>
                                            @foreach($assessor as $as)
                                            <option value="{{ $as->id }}">{{ $as->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6 ">
                                    <div class="form-group">
                                        <label class="fw-bold" for="id_assesor">Nama Siswa</label><br>
                                        <input type="text" class="form-control my-input" name="nama_siswa" id="nama_siswa" value="{{ Auth::user()->nama }}" placeholder="" readonly />
                                    </div>
                                </div>
                            </div>


                            <div class="col-12 kode_1">
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p class="font-weight-bold">1. Mengumpulkan Kebutuhan Teknis Pengguna yang Menggunakan Jaringan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group d-flex align-items-center justify-content-center fw-bold">
                                            <label for="checkbox1" class="mr-3">Kompeten</label>
                                            <label for="checkbox2" class="ml-3">Tidak Kompeten</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="">
                                        <p>Elemen 1 : Melakukan survei teknis</p>
                                    </div>
                                    <div class="m-0">
                                        <div class="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>1.1 Menententukan Daftar kebutuhan pengguna</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox1" value="kompeten" name="1_1.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox2" value="tidak_kompeten" name="1_1.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>1.2 Menententukan Informasi yang dibutuhkan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="1_1.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="1_1.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>1.3 Merancang Dokumen survei teknis</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="1_1.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="1_1.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="">
                                        <p>Elemen 2 : Membuat daftar kebutuhan teknis pengguna jaringan</p>
                                    </div>
                                    <div class="m-0">
                                        <div class="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>2.1 Mempersiapkan tabel untuk merangkum hasil survey teknis telah</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox1" value="kompeten" name="1_2.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox2" value="tidak_kompeten" name="1_2.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>2.2 Membuat Kebutuhan teknis pengguna yang menggunakan jaringan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="1_2.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="1_2.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>2.3 Membuat Daftar jumlah kebutuhan pengguna</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="1_2.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="1_2.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12 kode_2">
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p class="font-weight-bold">2. Mengumpulkan Data Peraiatan Jaringan Dengan Teknologi yang Sesuain</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group d-flex align-items-center justify-content-center fw-bold">
                                            <label for="checkbox1" class="mr-3">Kompeten</label>
                                            <label for="checkbox2" class="ml-3">Tidak Kompeten</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="">
                                        <p>Elemen 1 : Membuat daftar teknologi dan perangkat jaringan saat ini (existing)</p>
                                    </div>
                                    <div class="m-0">
                                        <div class="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>1.1 Menyusun Daftar teknologi yang saat ini dipakai</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox1" value="kompeten" name="2_1.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox2" value="tidak_kompeten" name="2_1.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>1.2 Menyusun Daftar perangkat jaringan yang ada beserta kinerjanya</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="2_1.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="2_1.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="">
                                        <p>Elemen 2 : Membuat daftar teknologi yang dapat memperbaiki kinerja jaringan</p>
                                    </div>
                                    <div class="m-0">
                                        <div class="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>2.1 Merangkum Perkembangan yang ada dari semua teknologi yang dipakai</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox1" value="kompeten" name="2_2.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox2" value="tidak_kompeten" name="2_2.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>2.2 Menententukan Teknologi yang berpotensi meningkatkan kinerja jaringan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="2_2.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="2_2.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 kode_3">
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p class="font-weight-bold">3. Menyiapkan Kabel Jaringan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group d-flex align-items-center justify-content-center fw-bold">
                                            <label for="checkbox1" class="mr-3">Kompeten</label>
                                            <label for="checkbox2" class="ml-3">Tidak Kompeten</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="">
                                        <p>Elemen 1 : Mempersiapkan peralatan dan bahan yang diperlukan dimensi atau variabel</p>
                                    </div>
                                    <div class="m-0">
                                        <div class="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>1.1 Mengidentifikasi Spesifikasi jaringan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox1" value="kompeten" name="3_1.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox2" value="tidak_kompeten" name="3_1.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>1.2 Menyiapkan Bahan-bahan yang diperlukan sesuai spesifikasi</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="3_1.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="3_1.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>1.3 Menyiapkan Peralatan yang sesuai</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="3_1.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="3_1.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>1.4 Menyiapkan Alat ukur untuk pengujian</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="3_1.4" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="3_1.4" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="">
                                        <p>Elemen 2 : Memasang konektor pada kabel jaringan</p>
                                    </div>
                                    <div class="m-0">
                                        <div class="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>2.1 Memotong Kabel sesuai keperluan dengan mempertimbangkan standar batasan panjang maksimum kabel</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox1" value="kompeten" name="3_2.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox2" value="tidak_kompeten" name="3_2.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>2.2 Mengupas Kabel sesuai dengan ukuran Konektor</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="3_2.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="3_2.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>2.3 Memasang konektor pada kabel sesuai dengan standar urutan warna</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="3_2.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="3_2.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>2.4 Memastikan urutan warna kabel (jika ada warna) sudah sesuai standar</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="3_2.4" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="3_2.4" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>2.5 emasang bagian kabel ke dalam Konektor</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="3_2.5" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="3_2.5" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="">
                                        <p>Elemen 3 : Menguji koneksi kabel</p>
                                    </div>
                                    <div class="m-0">
                                        <div class="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>3.1 Menguji Konektivitas antar pin pada kedua konektor yang berada di ujung kabel dengan menggunakan alat ukur</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox1" value="kompeten" name="3_3.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox2" value="tidak_kompeten" name="3_3.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>3.2 Menguji hubungan antar perangkat jaringan untuk memastikan konektivitas pada jaringan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="3_3.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="3_3.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 kode_4">
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p class="font-weight-bold">4. Memasang Kabel Jaringan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group d-flex align-items-center justify-content-center fw-bold">
                                            <label for="checkbox1" class="mr-3">Kompeten</label>
                                            <label for="checkbox2" class="ml-3">Tidak Kompeten</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="">
                                        <p>Elemen 1 : Merencanakan pengkabelan horizontal</p>
                                    </div>
                                    <div class="m-0">
                                        <div class="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>1.1 Menyiapkan prosedur instalasi jaringan yang aman baik dari segi elektris maupun konstruksi</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox1" value="kompeten" name="4_1.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox2" value="tidak_kompeten" name="4_1.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>1.2 Membuat diagram jalur perkabelan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="4_1.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="4_1.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>1.3 Menentukan jadwal dan urutan penyelesaian pekerjaan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="4_1.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="4_1.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="">
                                        <p>Elemen 2 : Menginstalasi pengkabelan horizontal</p>
                                    </div>
                                    <div class="m-0">
                                        <div class="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>2.1 Memasangkan soket RJ-45 pada dinding di wiring closet</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox1" value="kompeten" name="4_2.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox2" value="tidak_kompeten" name="4_2.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>2.2 Memasang perangkat dalam wiring closet </p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="4_2.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="4_2.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p> 2.3 Memasang terminal utama (main distribution frame) atau terminal cabang (intermediate distribution frame) jika diperlukan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="4_2.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="4_2.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>2.4 Menyiapkan Jalur kabel</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="4_2.4" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="4_2.4" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p> 2.5 Melakukan Pelabelan kabel dengan benar</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="4_2.5" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="4_2.5" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="">
                                        <p>Elemen 3 : Membuat dokumentasi pengkabelan terstruktur horizontal</p>
                                    </div>
                                    <div class="m-0">
                                        <div class="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p> 3.1 Menggambarkan topologi fisik jaringan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox1" value="kompeten" name="4_3.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox2" value="tidak_kompeten" name="4_3.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>3.2 Menggambarkan topologi logis jaringan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="4_3.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="4_3.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>3.3 Mencatat outlet dan jalur kabel</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="4_3.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="4_3.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>3.4 Mendokumentasikan perangkat, MAC address dan IP address</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="4_3.4" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="4_3.4" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12 kode_5">
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p class="font-weight-bold">5. Menentukan Spesifikasi Perangkat Jaringan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group d-flex align-items-center justify-content-center fw-bold">
                                            <label for="checkbox1" class="mr-3">Kompeten</label>
                                            <label for="checkbox2" class="ml-3">Tidak Kompeten</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="">
                                        <p>Elemen 1 : Mempersiapkan peralatan dan bahan/materi yang diperlukan</p>
                                    </div>
                                    <div class="m-0">
                                        <div class="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>1.1 Menententukan topologi jaringan yang membutuhkan perangkat baru </p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox1" value="kompeten" name="5_1.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox2" value="tidak_kompeten" name="5_1.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>1.2 Membuat daftar perangkat jaringan dan rancangan kapasitasnya</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="5_1.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="5_1.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>1.3 Mempersiapkan perangkat komputer yang akanterhubung ke jaringan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="5_1.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="5_1.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="">
                                        <p>Elemen 2 : Perangkat komputer yang akan terhubung ke jaringan dipersiapkan</p>
                                    </div>
                                    <div class="m-0">
                                        <div class="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p> 2.1 Membuat daftar perangkat jaringan yang dapat memenuhi kebutuhan dari berbagai vendor</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox1" value="kompeten" name="5_2.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox2" value="tidak_kompeten" name="5_2.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>2.2 Menuliskan rentang kapasitas yang mencakup perangkat jaringan yang ada di pasaran</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="5_2.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="5_2.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>2.3 Menententukan nilai kapasitas yang dapat dipenuhi oleh beberapa vendor</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="5_2.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="5_2.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="">
                                        <p>Elemen 3 : Menuliskan spesifikasi perangkat jaringan untuk keperluan pengguna</p>
                                    </div>
                                    <div class="m-0">
                                        <div class="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>3.1 Membuat dokumen spesifikasi perangkat jaringan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox1" value="kompeten" name="5_3.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox2" value="tidak_kompeten" name="5_3.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p> 3.2 Mengumpulkan spesifikasi yang sesuai dengan pasar dan kebutuhan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="5_3.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="5_3.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12 kode_6">
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p class="font-weight-bold">6. Memasang Jaringan Nirkabel</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group d-flex align-items-center justify-content-center fw-bold">
                                            <label for="checkbox1" class="mr-3">Kompeten</label>
                                            <label for="checkbox2" class="ml-3">Tidak Kompeten</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="">
                                        <p>Elemen 1 : Menentukan spesifikasi perangkat</p>
                                    </div>
                                    <div class="m-0">
                                        <div class="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p> 1.1 Menetapkan Kebutuhan detail dari perangkat sesuai dengan kebutuhan jaringan saat ini dan masa yang akan datang</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox1" value="kompeten" name="6_1.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox2" value="tidak_kompeten" name="6_1.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p> 1.2 Menetapkan Kapasitas jaringan saat ini dan masa yang akan datang sesuai dengan kebutuhan jumlah pengguna saat ini dan masa yang akan datang</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="6_1.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="6_1.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>1.3 Menetapkan kebutuhan keamanan dan manajemen jaringan sesuai dengan kebutuhan jaringan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="6_1.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="6_1.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="">
                                        <p>Elemen 2 : Menginstalasi perangkat</p>
                                    </div>
                                    <div class="m-0">
                                        <div class="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>2.1 Memiilih perangkat dengan fitur yang tepat berdasarkan kebutuhan teknis</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox1" value="kompeten" name="6_2.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox2" value="tidak_kompeten" name="6_2.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>2.2 Memasang perangkat sesuai dengan kebutuhan teknis</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="6_2.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="6_2.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p> 2.3 Mengkonfigurasi perangkat nirkabel untuk dapat berinteraksi dengan perangkatjaringan lainnya</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="6_2.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="6_2.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="">
                                        <p>ELemen 3 : Menguji perangkat</p>
                                    </div>
                                    <div class="m-0">
                                        <div class="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p> 3.1 Menetetapkan rencana pengujian berdasarkan standar pengujian yang berlaku</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox1" value="kompeten" name="6_3.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox2" value="tidak_kompeten" name="6_3.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>3.2 Melakukan penyesuaian jaringan sesuai dengan hasil pengujian</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="6_3.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="6_3.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12 kode_7">
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p class="font-weight-bold">7. Merancang Topologi Jaringan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group d-flex align-items-center justify-content-center fw-bold">
                                            <label for="checkbox1" class="mr-3">Kompeten</label>
                                            <label for="checkbox2" class="ml-3">Tidak Kompeten</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="">
                                        <p>Elemen 1 : Menentukan kebutuhan pengguna secara keseluruhan</p>
                                    </div>
                                    <div class="m-0">
                                        <div class="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>1.1 Mengidentifikasi ruang lingkup jaringan sesuai dengan usulan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox1" value="kompeten" name="7_1.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox2" value="tidak_kompeten" name="7_1.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>1.2 Menghihitung besarnya kapasitas jaringan berdasarkan kebutuhan bisnis</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="7_1.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="7_1.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="">
                                        <p>Elemen 2 : Membuat spesifikasi topologi jaringan</p>
                                    </div>
                                    <div class="m-0">
                                        <div class="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>2.1 Menentukan besaran bandwidth setiap segmen</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox1" value="kompeten" name="7_2.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox2" value="tidak_kompeten" name="7_2.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>2.2 Memilih lokasi penempatan Topologi perangkat jaringan dengan mempertimbangkan jarak dan jumlah pengguna </p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="7_2.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="7_2.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p> 2.3 Mempertimbangkan Fitur-fitur fisik sebagai hasil dari desain jaringan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="7_2.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="7_2.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>2.4 Membuat Peta jaringan sesuai dengan keadaan gedung/lapangan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="7_2.4" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="7_2.4" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>2.5 Menyusun Rancangan kebutuhan perkabelan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="7_2.5" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="7_2.5" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>2.6 Apakah anda dapatmenghitung Biaya keseluruhan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="7_2.6" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="7_2.6" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>2.7 Apakah anda dapatmembuat analisis proyeksi pengembangan jaringan </p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="7_2.7" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="7_2.7" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="col-12 kode_8">
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p class="font-weight-bold">8. Merancang Pengalamatan Jaringan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group d-flex align-items-center justify-content-center fw-bold">
                                            <label for="checkbox1" class="mr-3">Kompeten</label>
                                            <label for="checkbox2" class="ml-3">Tidak Kompeten</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="">
                                        <p>Elemen 1 : Mengidentifikasi sistem operasi pada jaringan</p>
                                    </div>
                                    <div class="m-0">
                                        <div class="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>1.1 Mengidentifikasi sistem operasi yang berjalan di jaringan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox1" value="kompeten" name="8_1.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox2" value="tidak_kompeten" name="8_1.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>1.2 Mengkumpulkan informasi cara menginstal dan mengkonfigurasi jaringan pada sistemoperasi yang dipakai</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="8_1.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="8_1.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="">
                                        <p>Elemen 2 : Membagi alamat jaringan pada perangkat jaringan </p>
                                    </div>
                                    <div class="m-0">
                                        <div class="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>2.1 Menentukan jumlah node (host) jaringan berdasarkan kebutuhan pengguna</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox1" value="kompeten" name="8_2.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox2" value="tidak_kompeten" name="8_2.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>2.2 Menentuka nkelas atau segmen alamat jaringan berdasarkan besarnya jumlah node (host) jaringan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="8_2.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="8_2.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p> 2.3 Memberi node atau perangkat jaringan alamat jaringan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="8_2.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="8_2.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="">
                                        <p>Elemen 3 : Mendokumentasikan pengalamatan jaringan</p>
                                    </div>
                                    <div class="m-0">
                                        <div class="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>3.1 Mencatat alamat masing-masing node atau perangkat jaringan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox1" value="kompeten" name="8_3.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox2" value="tidak_kompeten" name="8_3.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>3.2 Membuat dokumentasi pengalamatan jaringan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="8_3.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="8_3.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12 kode_9">
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p class="font-weight-bold">9. Mengkonfigurasi Switch pada Jaringan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group d-flex align-items-center justify-content-center fw-bold">
                                            <label for="checkbox1" class="mr-3">Kompeten</label>
                                            <label for="checkbox2" class="ml-3">Tidak Kompeten</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="">
                                        <p>Elemen 1 : Menentukan spesifikasi switch</p>
                                    </div>
                                    <div class="m-0">
                                        <div class="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>1.1 Menyesuaikan kapasitas jaringan berdasarkan dokumentasi kebutuhan bisnis saat ini</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox1" value="kompeten" name="9_1.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox2" value="tidak_kompeten" name="9_1.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>1.2 Menetapkan tipe dan jumlah switch berdasarkan kebutuhan jaringan saatini</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="9_1.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="9_1.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="">
                                        <p>Elemen 2 : Memilih switch yang tepat </p>
                                    </div>
                                    <div class="m-0">
                                        <div class="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>2.1 Memilih switch dengan fitur yang cocok sesuai kebutuhan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox1" value="kompeten" name="9_2.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox2" value="tidak_kompeten" name="9_2.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>2.2 Menyesuaikan Jumlah port dengan kebutuhan jaringan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="9_2.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="9_2.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="">
                                        <p>Elemen 3 : Memasang switch</p>
                                    </div>
                                    <div class="m-0">
                                        <div class="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>3.1 Memasang switch dan perangkat pendukungnya berdasarkan kebutuhan jaringan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox1" value="kompeten" name="9_3.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox2" value="tidak_kompeten" name="9_3.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>3.2 Membuat hubungan antar switch atau perangkat jaringan dengan menyambungkan kabel jaringan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="9_3.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="9_3.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>3.3 Mengkonfigurasi switch berdasarkan kebutuhan jaringan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="9_3.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="9_3.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>3.4 Menempatkan switch di area yang aman</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="9_3.4" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="9_3.4" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="">
                                        <p>Elemen 4 : Menguji switch pada jaringan</p>
                                    </div>
                                    <div class="m-0">
                                        <div class="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>4.1 Menguji Perangkat switch berdasarkan petunjuk pengujian kebutuhan jaringan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox1" value="kompeten" name="9_4.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox2" value="tidak_kompeten" name="9_4.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>4.2 Memastikan Perangkat switch terhubung dengan perangkat jaringan yang lain</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="9_4.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="9_4.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 kode_10">
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p class="font-weight-bold">10. Memasang Perangkat Jaringan ke dalam Sistem Jaringan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group d-flex align-items-center justify-content-center fw-bold">
                                            <label for="checkbox1" class="mr-3">Kompeten</label>
                                            <label for="checkbox2" class="ml-3">Tidak Kompeten</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="">
                                        <p>Elemen 1 : Menetapkan persyaratan perangkat jaringan dari pengguna</p>
                                    </div>
                                    <div class="m-0">
                                        <div class="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>1.1 Mengidentifikasi perangkat jaringan sesuai dengan kebutuhan jaringan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox1" value="kompeten" name="10_1.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox2" value="tidak_kompeten" name="10_1.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>1.2 Menganalisis persyaratan sesuai kebutuhan teknis dan pengguna</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="10_1.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="10_1.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>1.3 Mengevaluasi Persyaratan pengguna sesuai pedoman organisasi</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="10_1.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="10_1.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="">
                                        <p>Elemen 2 : Menyiapkan perangkat jaringan</p>
                                    </div>
                                    <div class="m-0">
                                        <div class="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>2.1 Memilih perangkat jaringan sesuai dengan kebutuhan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox1" value="kompeten" name="10_2.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox2" value="tidak_kompeten" name="10_2.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>2.2 Mengevaluasi perangkat jaringan sesuai dengan kebutuhan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="10_2.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="10_2.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>2.3 Menetapkan perangkat jaringan sesuai dengan kebutuhan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="10_2.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="10_2.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>2.4 Menetapkan Peraturan lisensi dan keamanan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="10_2.4" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="10_2.4" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="">
                                        <p>Elemen 3 : Meng-install perangkat keras jaringan</p>
                                    </div>
                                    <div class="m-0">
                                        <div class="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>3.1 Memilih perangkat jaringan sesuai dengan kebutuhan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox1" value="kompeten" name="10_3.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox2" value="tidak_kompeten" name="10_3.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>3.2 Mengevaluasi perangkat jaringan sesuai dengan kebutuhan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="10_3.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="10_3.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>3.3 Menetapkan perangkat jaringan sesuai dengan kebutuhan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="10_3.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="10_3.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>3.4 Menetapkan peraturan lisensi dan keamanan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="10_3.4" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="10_3.4" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="">
                                        <p>Elemen 4 : Menyediakan dukungan untuk produk-produk yang diinstal</p>
                                    </div>
                                    <div class="m-0">
                                        <div class="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>4.1 Membuat Dokumentasi petunjuk pengoperasian untuk pengguna</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox1" value="kompeten" name="10_4.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox2" value="tidak_kompeten" name="10_4.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>4.2 Memberikan Instruksi secara individu pada pengguna sesuai kebutuhan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="10_4.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="10_4.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 kode_11">
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p class="font-weight-bold">11. Mengkonfigurasi Routing pada Perangkat Jaringan dalam Satu Autonomous System</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group d-flex align-items-center justify-content-center fw-bold">
                                            <label for="checkbox1" class="mr-3">Kompeten</label>
                                            <label for="checkbox2" class="ml-3">Tidak Kompeten</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="">
                                        <p>Elemen 1 : Menyiapkan perangkat jaringan</p>
                                    </div>
                                    <div class="m-0">
                                        <div class="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>1.1 Mengidentifikasi konfigurasi routing</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox1" value="kompeten" name="11_1.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox2" value="tidak_kompeten" name="11_1.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>1.2 Menentukan akses konfigurasi ke perangkat jaringan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="11_1.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="11_1.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="">
                                        <p>Elemen 2 : Mengkonfigurasi router pada perangkat jaringan</p>
                                    </div>
                                    <div class="m-0">
                                        <div class="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>2.1 Mengkonfigurasi interface pada router</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox1" value="kompeten" name="11_2.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox2" value="tidak_kompeten" name="11_2.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p> 2.2 Mengkonfigurasi hubungan antar router</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="11_2.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="11_2.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>2.3 Mengaktifkan routing pada router</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="11_2.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="11_2.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>2.4 Mengkonfigurasi default routing</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="11_2.4" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="11_2.4" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="">
                                        <p>Elemen 3 : Menguji routing pada perangkat jaringan</p>
                                    </div>
                                    <div class="m-0">
                                        <div class="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>3.1 Membangun Koneksi antar perangkat yang terhubung ke jaringan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox1" value="kompeten" name="11_3.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox2" value="tidak_kompeten" name="11_3.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>3.2 Mencoba koneksi perangkat yang terhubung ke jaringan dengan perangkat lain di luar jaringan yang telah valid melalui default routing</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="11_3.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="11_3.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>3.3 Mengidentifikasi hasil percobaan default routing</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="11_3.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="11_3.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="">
                                        <p>Elemen 4 : Mendokumentasikan konfigurasi routing</p>
                                    </div>
                                    <div class="m-0">
                                        <div class="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>4.1 Menyimpan Konfigurasi routing</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox1" value="kompeten" name="11_4.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox2" value="tidak_kompeten" name="11_4.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>4.2 Membuat dokumentasi konfigurasi routing</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="11_4.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="11_4.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 kode_12">
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p class="font-weight-bold">12. Memonitor Keamanan dan Pengaturan Akun Pengguna dalam Jaringan Komputer</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group d-flex align-items-center justify-content-center fw-bold">
                                            <label for="checkbox1" class="mr-3">Kompeten</label>
                                            <label for="checkbox2" class="ml-3">Tidak Kompeten</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="">
                                        <p>Elemen 1 : Mengidentifikasi dan memodifikasi akun pengguna agar selalu terkendali</p>
                                    </div>
                                    <div class="m-0">
                                        <div class="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>1.1 Mengidentifikasi Isian akun standar pengguna sesuai dengan kebijakan keamanan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox1" value="kompeten" name="12_1.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox2" value="tidak_kompeten" name="12_1.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>1.2 Mengidentifikasi hak akses user/pengguna</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="12_1.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="12_1.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>1.3 Mengatur hak akses user/pengguna sesuai kebutuhan jabatan, bagian dan pekerjaan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="12_1.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="12_1.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>1.4 Memodifikasi akun pengguna yang telah dibuat dengan keamanan yang longgar sesuai dengan kebijakan akses dan keamanan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="12_1.4" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="12_1.4" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>1.5 Menampilkan pesan resmi yang sesuai dengan akun pengguna saat pengguna log on</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="12_1.5" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="12_1.5" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>1.6 Mengimplementasikan utilitas yang sesuai untuk menguji ketangguhan sandi yang digunakan user/pengguna</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="12_1.6" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="12_1.6" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>1.7 Meninjau ulang prosedur kendali akun untuk memastikan bahwa pengguna yang telah keluar dihapus atau dinonaktifkan akunnya</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="12_1.7" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="12_1.7" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>1.8 Memastikan layanan informasi firewall dan antivirus aktif dan telah diakses untuk mengidentifikasi ancaman keamanan yang sudah dikenal dan terbaru dengan menggunakan perangkat lunak dan atau perangkat keras yang sesuai</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="12_1.8" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="12_1.8" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="">
                                        <p>Elemen 2 : Memastikan akses yang aman ke file dan sumber daya</p>
                                    </div>
                                    <div class="m-0">
                                        <div class="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>2.1 Meninjau ulang Fitur-fitur akses dan keamanan yang terkandung dalam sistem operasi jaringan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox1" value="kompeten" name="12_2.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox2" value="tidak_kompeten" name="12_2.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>2.2 Mengembangkan Skema kategori keamanan file</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="12_2.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="12_2.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>2.3 Mengimplementasikan peningkatan kesadaran pengguna dalam masalah pengaturan keamanan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="12_2.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="12_2.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>2.4 Memonitor Keamanan jaringan dari ancaman seperti hacker, eavesdropping, virus dan lainnya</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="12_2.4" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="12_2.4" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>2.5 Menerapkan perangkat lunak anti virus dan firewall pada server dan workstation</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="12_2.5" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="12_2.5" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>2.6 Melakukan update antivirus dan firewall</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="12_2.6" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="12_2.6" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>2.7 Menerapkan fasilitas enkripsi bawaan dan tambahan dengan tepat.</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="12_2.7" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="12_2.7" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="">
                                        <p>Elemen 3 : Mengembangkan Service Level Agreement (Perjanjian Tingkat Layanan) atau SLA</p>
                                    </div>
                                    <div class="m-0">
                                        <div class="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>3.1 Menggunakan perangkat lunak dari pihak ketiga yang sesuai untuk mengevaluasidan melaporkan keamanan dalam jaringan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox1" value="kompeten" name="12_3.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox2" value="tidak_kompeten" name="12_3.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>3.2 Meninjau ulang Log dan laporan audit untuk mengidentifikasi gangguan dan ancaman keamanan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="12_3.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="12_3.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>3.3 Melaksanakan pemeriksaan kesalahan dan aktivitas lain untuk memastikan bahwa prosedur tidak dilewati</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="12_3.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="12_3.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>3.4 Memperoleh laporan audit dan rekomendasi-rekomendasi disiapkan serta dipresentasikan kepada manajemen senior dan persetujuan untuk penggantian</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="12_3.4" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="12_3.4" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 kode_13">
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p class="font-weight-bold">13. Mengganti Perangkat Jaringan Sesuai dengan Kebutuhan Baru</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group d-flex align-items-center justify-content-center fw-bold">
                                            <label for="checkbox1" class="mr-3">Kompeten</label>
                                            <label for="checkbox2" class="ml-3">Tidak Kompeten</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="">
                                        <p>Elemen 1 : Menyiapkan Data dokumentasi dari jaringan yang berjalan</p>
                                    </div>
                                    <div class="m-0">
                                        <div class="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>1.1 Mengidentifikasi Dokumentasi jaringan sesuai dengan kebutuhan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox1" value="kompeten" name="13_1.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox2" value="tidak_kompeten" name="13_1.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>1.2 Menganalisis Data log dari server syslog berdasarkan prosesor dan memory</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="13_1.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="13_1.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>1.3 Memantau Data realtime dari device dalam beberapa waktu</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="13_1.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="13_1.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="">
                                        <p>Elemen 2 : Menganalisis kebutuhan secara physical</p>
                                    </div>
                                    <div class="m-0">
                                        <div class="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>2.1 Menghitung Kebutuhan jumlah port berdasarkan jumlah user yang akan dipakai</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox1" value="kompeten" name="13_2.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox2" value="tidak_kompeten" name="13_2.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>2.2 Menyesuaikan Jumlah port dan kemampuan peralatan dengan spesifikasi peralatan yang akan dipakai</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="13_2.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="13_2.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="">
                                        <p>Elemen 3 : Mendokumentasi konfigurasi yang sedang beroperasi</p>
                                    </div>
                                    <div class="m-0">
                                        <div class="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>3.1 Mendokumentasikan Konfigurasi perangkat yang akan diganti</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox1" value="kompeten" name="13_3.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox2" value="tidak_kompeten" name="13_3.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>3.2 Menginformasikan Pengguna tentang waktu untuk melakukan penggantian peralatan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="13_3.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="13_3.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="">
                                        <p>Elemen 4 : Mengganti peralatan sesuai dengan konfigurasi sebelumnya</p>
                                    </div>
                                    <div class="m-0">
                                        <div class="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>4.1 Mengganti Peralatan sesuai dengan kebutuhan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox1" value="kompeten" name="13_4.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox2" value="tidak_kompeten" name="13_4.1" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>4.2 Mengkonfigurasi Peralatan sesuai dengan dokumentasi</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="13_4.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="13_4.2" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-md-9">
                                        <p>4.3 Menguji Peralatan sesuai dengan kebutuhan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="form-check mr-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="kompeten" name="13_4.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                            <div class="form-check ml-5">
                                                <input class="form-check-input" type="checkbox" id="checkbox4" value="tidak_kompeten" name="13_4.3" onchange="handleCheckboxChange(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12 d-flex justify-content-end mt-4">

                                    <div class="form-check mr-3">
                                        <input class="form-check-input" type="checkbox" id="toggleAllKompeten" value="kompeten" onchange="toggleAllCheckboxes('kompeten', this.checked)">
                                        <label class="form-check-label" for="toggleAllKompeten">Pilih ceklis semua Kompeten</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="toggleAllTidakKompeten" value="tidak_kompeten" onchange="toggleAllCheckboxes('tidak_kompeten', this.checked)">
                                        <label class="form-check-label" for="toggleAllTidakKompeten">Pilih ceklis semua Tidak Kompeten</label>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="card-footer float-end">
                            <input type="hidden" name="nama_siswa" id="nama_siswa" value="{{Auth::user()->nama}}">

                            <input type="hidden" name="nik" id="nik" value="{{$data_apl1->nik}}">

                            <input type="hidden" name="status" id="status" value="0">

                            <a href="{{ route('siswa.home') }}" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary" id="submitButton" onclick="validateForm(event)">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function validateForm(event) {
        var checkboxKompeten1 = document.getElementById('checkbox1');
        var checkboxKompeten2 = document.getElementById('checkbox3');

        if (!checkboxKompeten1.checked || !checkboxKompeten2.checked) {
            event.preventDefault(); // Mencegah submit form jika checkbox 'kompeten' tidak terpilih
            Swal.fire({
                title: "Peringatan",
                text: "Anda harus memilih setiap check box",
                icon: "error",
                confirmButtonText: "OK",
            });
        }
    }
</script>
@endsection