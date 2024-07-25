@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-sm-12 py-2">
            <div class="card " role="listitem" data-region="course-content" data-course-id="651">
            <a href="{{Auth::user()->id}}/list-siswa" tabindex="-1">
                    <div class="card-img dashboard-card-img" style="background-image: url('{{ asset('images/human.jpg') }}');">
                        
                    </div>
                </a>
                <div class="card-body pr-1 course-info-container border-5" id="course-info-container-651-13">
                    <div class="d-flex align-items-start">
                        <div class="w-100 text-truncate">
                            <div class="text-muted muted d-flex mb-1 flex-wrap">
                                <span class="categoryname">
                                    Penilaian Ujian Praktek
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer dashboard-card-footer" style="border-color: black;">
                        <div class="small">
                        <p class="card-text">Memberi nilai ujian praktek pada siswa</p>
                            <a href="{{Auth::user()->id}}/list-siswa" class="btn btn-primary btn-card float-end">Buka</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-sm-12 py-2">
            <div class="card " role="listitem" data-region="course-content" data-course-id="651">
                <a href="{{Auth::user()->id}}/konfirmasi-apl-2" tabindex="-1">
                    <div class="card-img dashboard-card-img" style="background-image: url('{{ asset('images/human.jpg') }}');">
                        
                    </div>
                </a>
                <div class="card-body pr-1 course-info-container border-5" id="course-info-container-651-13">
                    <div class="d-flex align-items-start">
                        <div class="w-100 text-truncate">
                            <div class="text-muted muted d-flex mb-1 flex-wrap">
                                <span class="categoryname">
                                    Konfirmasi APL-2
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer dashboard-card-footer" style="border-color: black;">
                        <div class="small">
                        <p class="card-text ">Konfirmasi hasil pengisian LPK-2</p>
                            <a href="{{Auth::user()->id}}/konfirmasi-apl2-list-siswa" class="btn btn-primary btn-card float-end">Buka</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection