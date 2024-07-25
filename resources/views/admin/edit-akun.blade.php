@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Akun</h3>
                </div>
                @foreach($data_user as $du)
                <div class="card-body">
                    <form method="post" action="{{ route('admin.update-akun') }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control my-input" name="nama" id="nama" placeholder="Masukan Nama Lengkap Anda" value="{{$du->nama}}" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tahun">Username</label>
                                    <input type="text" class="form-control my-input" name="username" id="username" placeholder="Masukan Username" value="{{$du->username}}" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="penerbit">Password</label>
                                    <input type="text" class="form-control my-input" name="password" id="password" placeholder="Masukan Password Baru" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="roles_id">Role</label><br>
                                    <select class="form-select my-input" aria-label=".form-select-lg example" name="roles_id" id="roles_id" required>
                                        <option selected hidden value="{{ $du->roles_id }}">
                                            @if($du->roles_id == 1)
                                            {{ 'Admin' }}
                                            @elseif($du->roles_id == 2)
                                            {{ 'Assessor' }}
                                            @elseif($du->roles_id == 3)
                                            {{ 'Siswa' }}
                                            @endif
                                        </option>
                                        <option value="1">Admin</option>
                                        <option value="2">Assessor</option>
                                        <option value="3">Siswa</option>

                                    </select>
                                </div>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="id" id="id" value="{{$du->id}}">

                            <div class="card-footer float-end pt-3">
                                <a href="{{ route('admin.kelola-akun') }}" class="btn btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection