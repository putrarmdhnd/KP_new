@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-start">
        <div class="col-lg-5 col-sm-12 py-2">
            <div class="card " role="listitem" data-region="course-content" data-course-id="651">
            <a href="{{ route('admin.kelola-akun') }}" tabindex="-1">
                    <div class="card-img dashboard-card-img" style="background-image: url('{{ asset('images/human.jpg') }}');">
                        
                    </div>
                </a>
                <div class="card-body pr-1 course-info-container border-5" id="course-info-container-651-13">
                    <div class="d-flex align-items-start">
                        <div class="w-100 text-truncate">
                            <div class="text-muted muted d-flex mb-1 flex-wrap">
                                <span class="categoryname">
                                    Kelola Akun
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer dashboard-card-footer" style="border-color: black;">
                        <div class="small">
                        <p class="card-text">Mengelola akun untuk login</p>
                            <a href="{{ route('admin.kelola-akun') }}" class="btn btn-primary btn-card float-end">Buka</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-sm-12 py-2">
            <div class="card " role="listitem" data-region="course-content" data-course-id="651">
                <a href="{{ route('admin.konfirmasi_apl1') }}" tabindex="-1">
                    <div class="card-img dashboard-card-img" style="background-image: url('{{ asset('images/human.jpg') }}');">
                        
                    </div>
                </a>
                <div class="card-body pr-1 course-info-container border-5" id="course-info-container-651-13">
                    <div class="d-flex align-items-start">
                        <div class="w-100 text-truncate">
                            <div class="text-muted muted d-flex mb-1 flex-wrap">
                                <span class="categoryname">
                                    Konfirmasi LPK-1
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer dashboard-card-footer" style="border-color: black;">
                        <div class="small">
                        <p class="card-text ">Konfirmasi hasil pengisian LPK-1</p>
                            <a href="{{ route('admin.konfirmasi_apl1') }}" class="btn btn-primary btn-card float-end">Buka</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-sm-12 py-2">
            <div class="card " role="listitem" data-region="course-content" data-course-id="651">
                <a href="{{ route('admin.laporan') }}" tabindex="-1">
                    <div class="card-img dashboard-card-img" style="background-image: url('{{ asset('images/human.jpg') }}');">
                        
                    </div>
                </a>
                <div class="card-body pr-1 course-info-container border-5" id="course-info-container-651-13">
                    <div class="d-flex align-items-start">
                        <div class="w-100 text-truncate">
                            <div class="text-muted muted d-flex mb-1 flex-wrap">
                                <span class="categoryname">
                                    Laporan
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer dashboard-card-footer" style="border-color: black;">
                        <div class="small">
                        <p class="card-text ">Unduh PDF Laporan Hasil LPK1 dan LPK2</p>
                            <a href="{{ route('admin.laporan') }}" class="btn btn-primary btn-card float-end">Buka</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection