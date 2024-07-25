@extends('layouts.app')

@section('content')
<div class="container-fluid pt-5">
    <div class="card card-default ">
        <div class="card-header">
            <h3>Kelola Akun Admin</h3>
        </div>
        <div class="card-body">

            <a href="{{ route('admin.tambah-akun') }}"><button class="btn btn-primary mb-4" data-toggle="modal" data-target=""><i class="fa fa-plus"></i> Tambah Data</button></a>
            <table id="table-data" class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Roles</th>
                        <th>Button</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @php $no=1; @endphp
                    @foreach($admin as $ad)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$ad->nama}}</td>
                        <td>{{$ad->username}}</td>
                        <td>@if($ad->roles_id == 1)
                            {{ ('Admin') }}
                            @elseif($ad->roles_id == 2)
                            {{ ('Assessor') }}
                            @elseif($ad->roles_id == 3)
                            {{ ('Siswa') }}
                            @endif
                        </td>
                        <td>
                            <div class="" role="group" aria-label="Basic example">
                                {!! Form::open(['url' => 'admin/akun-delete/'.$ad->id, 'method' => 'DELETE']) !!}
                                {{ Form::button('Hapus', ['class' => 'btn btn-danger btn-sm', 'onclick' => "deleteConfirmation('".$ad->nama."')"]) }}
                                <a href="{{$ad->id}}/edit-akun"><button type="button" id="btn-edit-buku " class="btn btn-success btn-sm" data-id="">Edit</button></a>
                                {!! Form::close() !!}
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="container-fluid pt-5">
    <div class="card card-default ">
        <div class="card-header">
            <h3>Kelola Akun User</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('admin.tambah-akun-user') }}"><button class="btn btn-primary mb-4" data-toggle="modal" data-target=""><i class="fa fa-plus"></i> Tambah Data</button></a>
            <table id="table-data" class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Roles</th>
                        <th>Button</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @php $no=1; @endphp
                    @foreach($users as $datauser)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$datauser->nama}}</td>
                        <td>{{$datauser->username}}</td>
                        <td>@if($datauser->roles_id == 1)
                            {{ ('Admin') }}
                            @elseif($datauser->roles_id == 2)
                            {{ ('Assessor') }}
                            @elseif($datauser->roles_id == 3)
                            {{ ('Siswa') }}
                            @endif
                        </td>
                        <td>
                            <div class="" role="group" aria-label="Basic example">
                                {!! Form::open(['url' => 'admin/akun-delete/'.$datauser->id, 'method' => 'DELETE']) !!}
                                {{ Form::button('Hapus', ['class' => 'btn btn-danger btn-sm', 'onclick' => "deleteConfirmation('".$datauser->nama."')"]) }}
                                <a href="{{$datauser->id}}/edit-akun"><button type="button" id="btn-edit-buku " class="btn btn-success btn-sm" data-id="">Edit</button></a>
                                {!! Form::close() !!}
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection