@extends('layout.main')

@section('content')
    <form action="{{ route('admin.table.save') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="container container-fluid mt-5">
            <div class="row">
                <div class="col-4 form-group">
                    <label for="name">Nombre:</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>

                <div class="col-4 form-group">
                    <label for="color">Color:</label>
                    <input type="text" name="color" id="color" class="form-control" required>
                </div>
            </div>

            <div class="row">
                <div class="col-4 form-group">
                    <label for="season">Temporada:</label>
                    <select name="season" id="season" class="form-control" required>
                        <option value="summer">Verano</option>
                        <option value="winter">Invierno</option>
                        <option value="all">Todo el año</option>
                    </select>
                </div>

                <div class="form-floating mb-3">
                    <label for="image">Imagen<span class="text-danger">*</span></label>
                    <input class="form-control" id="image" type="file" name="image" placeholder="Imagen"
                        accept="image/png, image/jpeg, image/webp" data-sb-validations="required" required />
                </div>
            </div>

            <div class="row">
                <div class="col-4 form-group">
                    <label for="comfort_level">Nivel de comodidad:</label>
                    <input type="number" name="comfort_level" id="comfort_level" class="form-control" required>
                </div>


                <div class="col-4 form-group">
                    <label for="category">Categoría:</label>
                    <select name="category_id" id="category" class="form-control" required>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

            </div>
            <div class="col-4 form-group">
                <div class="form-check">
                    <input type="checkbox" name="general" id="general" class="form-check-input" value="1" hidden>
                    <label class="form-check-label" for="general"></label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-5">Guardar</button>
        </div>
    </form>

@endsection
