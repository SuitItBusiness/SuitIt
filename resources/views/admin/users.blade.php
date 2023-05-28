@extends('layout.main')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4 pt-5">
            <h1 class="h3 mb-0 text-gray-800">Bienvenido Administrador</h1>
        </div>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Lista de Usuarios</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Fecha de Nacimiento</th>
                                <th>Ocupación</th>
                                <th>Personalidad</th>
                                <th>Email</th>
                                <th>Rol</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->surname }}</td>
                                    <td>{{ $user->birthdate }}</td>
                                    <td>{{ $user->occupation }}</td>
                                    <td>{{ $user->personality }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>
                                        @if ($user->trashed())
                                            <a class="btn btn-success" href="{{ route('admin.users.restore',$user->id) }}"><i class="fa-solid fa-eye"></i></a>
                                        @else
                                            <a class="btn btn-danger" href="#" data-bs-toggle="modal" data-bs-target="#modal" data-action="{{ route('admin.users.disable', $user->id) }}" data-title="{{ __('Delete') }}" data-text="{{ __('Are you sure you want to disable :name?', ['name' => $user->name]) }}"><i class="fa-regular fa-trash-can"></i></a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
  
            </div>
        </div>
    </div>
@endsection
