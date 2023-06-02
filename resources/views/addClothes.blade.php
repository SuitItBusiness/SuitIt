@extends('template')

<div class="section-gray">
    <div class="container !direction !spacing ">
        <div class="container-fluid !direction !spacing  ">
            <div class="container">
                <h3 class="fs-1 fs-lg-5 lh-sm centrado titulos">Añadir Prenda</h3>
                <form id="loginForm" action="{{ route('addClothes.add') }}" method="POST" enctype="multipart/form-data">
                    @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-4 form-group">
                            <label for="floatingInput">Nombre</label>
                            <input type="text" class="form-control" id="floatingInput" placeholder="" name='name'
                                required>
                        </div>
                        <div class="col-4 form-group">
                            <label for="floatingInput">Color</label>
                            <input type="text" class="form-control" id="floatingInput" placeholder="" name='color'
                                required>
                        </div>
                        <div class="col-4 form-group">
                            <label for="floatingInput">Marca</label>
                            <input type="text" class="form-control" id="floatingInput" placeholder="" name='brand'
                                required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 form-group">
                            <label for="occupation">Temporada:</label>
                            <select class="form-select" id="season" aria-label="season" name="season" required>
                                <option disabled selected></option>
                                <option value="all">
                                    Todo el año
                                </option>
                                <option value="summer">
                                    Verano
                                </option>
                                <option value="winter">
                                    Invierno
                                </option>
                            </select>
                        </div>
                        <div class="col-4 form-group">
                            <label for="floatingInput">Precio</label>
                            <input type="number" class="form-control" id="floatingInput" placeholder="" name='price'
                                required>
                        </div>
                        <div class="col-4 form-group">
                            <label for="comfort_level">Nivel de comodidad:</label>
                            <input type="number" name="comfort_level" id="comfort_level" class="form-control" required>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-6 form-group">
                            <label for="image">Imagen<span class="text-danger">*</span></label>
                            <input class="form-control" id="image" type="file" name="image"
                                placeholder="Imagen" accept="image/png, image/jpeg, image/webp"
                                data-sb-validations="required" required />
                        </div>
                        <div class="col-6 form-group">
                            <label for="category">Categoría:</label>
                            <select name="category" id="category" class="form-control" required>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div id="checkboxes" name="events">
                        @foreach ($events as $event)
                            <label class="d-flex py-1 px-3 gap-2" for="{{ $event->name }}">{{ $event->name }}
                                <input type="checkbox" id="{{ $event->name }}" name="event[]"
                                    value="{{ $event->id }}" {{ old('state') == '1' ? 'checked' : '' }}></label>
                        @endforeach
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Añadir</button>
                </form>
            </div>
        </div>
    </div>
</div>
