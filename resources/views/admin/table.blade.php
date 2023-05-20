@extends('layout.main')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4 pt-5">
            <h1 class="h3 mb-0 text-gray-800">Bienvenido Administrador </h1>
            <a href="" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Lista de productos</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Name</td>
                                <td>Price</td>
                                <td>Stock</td>
                                <td>Category</td>
                                <td>Editar</td>
                                <td>Eliminar</td>
                        </thead>

                        </tbody>
                        @foreach ($clothes as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->stock }}</td>
                            <td>{{ $product->category }}</td>
                            {{-- <td>
                                <a href="{{ route('admin.table.editar', $product->id) }}"
                                    class="row justify-content-center"><button class="btn btn-primary" type="submit"><i
                                            class="bi bi-pencil"></i></button></a></td>
                            <td>
                                <form action="{{ route('admin.table.eliminar', $product->id) }}" method="POST"
                                    class="row justify-content-center">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger" type="submit"><i class="bi bi-trash"></i></button>
                                </form>
                            </td> --}}
                        </tr>
                    @endforeach
                    </table>

                </div>
                <div class="row justify-content-center text-center">
                    <div class="col-2">
                        {{-- <a href="{{ route('admin.crear') }}"> --}}
                            <button class="btn btn-primary" type="submit">Crear</button></h3></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Main Content -->
@endsection
