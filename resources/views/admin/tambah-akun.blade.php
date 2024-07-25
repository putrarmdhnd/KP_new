@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3>Tambah Akun</h3>
                </div>

                <div class="card-body">
                    <form method="post" action="{{ route('admin.submit-akun') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control my-input" name="nama" id="nama" placeholder="Masukan Nama Lengkap Anda" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tahun">Username</label>
                                    <input type="text" class="form-control my-input" name="username" id="username" placeholder="Masukan Username" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="penerbit">Password</label>
                                    <input type="text" class="form-control my-input" name="password" id="password" placeholder="Masukan Password" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="roles_id">Role</label><br>
                                    <select class="form-select my-input" aria-label=".form-select-lg example" name="roles_id" id="roles_id" required>
                                        <option value="" selected hidden>Pilih Role</option>
                                        <option value="1">Admin</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="card-footer float-end pt-3">
                            <a href="{{ route('admin.kelola-akun') }}" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection