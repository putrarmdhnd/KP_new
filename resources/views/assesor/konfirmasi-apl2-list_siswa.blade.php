@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if($siswa->isEmpty())
        <div class="col-12">
            <a href="{{ route('assesor.home') }}" class="btn btn-secondary">Kembali</a>
        </div>
        <div class="col-12">
            <h4 class="text-center fw-bold mt-5">"DATA APL2 UNTUK DI KONFIRMASI KOSONG"</h4>
        </div>
        @else
        @foreach($siswa as $si)
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card border-1" role="listitem" data-region="course-content" data-course-id="651">
                <div class="card-body pr-1 course-info-container" id="course-info-container-651-13">
                    <div class="d-flex align-items-start">
                        <div class="w-100 text-truncate">
                            <div class="text-muted muted d-flex mb-1 flex-wrap">
                                <span class="categoryname">
                                    {{$si->nama_siswa}}
                                </span>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="small">
                                <a href="/assesor/{{$si->nik}}/konfirmasi-apl2-siswa" class="btn btn-primary btn-card float-end">Lihat</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer dashboard-card-footer" style="border-color: black;">
                        <div class="small">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>
@endsection