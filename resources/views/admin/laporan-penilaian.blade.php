@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if($penilaian->isEmpty())
        <div class="col-12">
            <a href="{{ route('admin.home') }}" class="btn btn-secondary">Kembali</a>
        </div>
        <div class="col-12">
            <h4 class="text-center fw-bold mt-5">"DATA LPK-2 UNTUK DI KONFIRMASI KOSONG"</h4>
        </div>
        @else
        <div class="col-12">
            <div class="input-group mb-3">
                <input type="text" id="searchInput" class="form-control" placeholder="Search...">
                <button type="button" onclick="performSearch()" class="btn btn-primary">Search</button>
            </div>
        </div>
        @foreach($penilaian as $data)
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card border-1" role="listitem" data-region="course-content" data-course-id="651">
                <div class="card-body pr-1 course-info-container" id="course-info-container-651-13">
                    <div class="d-flex align-items-start">
                        <div class="w-100 text-truncate">
                            <div class="text-muted muted d-flex mb-1 flex-wrap">
                                <span class="categoryname">
                                    {{$data->nama_asesi}}
                                </span>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="small">
                                <a href="#" onclick="openAndPrint('/admin/{{$data->id}}/pdf-penilaian'); return false;" class="btn btn-primary btn-card float-end">Unduh</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer dashboard-card-footer" style="border-color: black;">
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
    <script>
        const searchInput = document.getElementById('searchInput');
        searchInput.addEventListener('input', performSearch);

        function performSearch() {
            const searchTerm = searchInput.value.toLowerCase();
            const cards = document.getElementsByClassName('card');

            for (let i = 0; i < cards.length; i++) {
                const card = cards[i];
                const categoryName = card.querySelector('.categoryname').innerText.toLowerCase();

                if (categoryName.includes(searchTerm)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            }
        }
    </script>
    <script>
        function openAndPrint(url) {
            const newTab = window.open(url, '_blank');
            newTab.onload = function() {
                newTab.print();
            };
        }
    </script>
</div>

<!-- Add the following link element to specify A4 print size -->
<link rel="stylesheet" type="text/css" media="print" href="{{ asset('css/print.css') }}">

@endsection