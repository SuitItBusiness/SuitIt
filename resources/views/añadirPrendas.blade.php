@extends('template')

<div class="section-gray h-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <h3 class="fs-1 fs-lg-5 lh-sm centrado titulos">Añadir Prenda</h3>
                <form id="loginForm" action="" method="POST">
                    @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}
                    <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="floatingInput" placeholder="" name='name'
                            required>
                        <label for="floatingInput">Nombre</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="floatingInput" placeholder="" name='color'
                            required>
                        <label for="floatingInput">Color</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="floatingInput" placeholder="" name='brand'
                            required>
                        <label for="floatingInput">Marca</label>
                    </div>
                    <div class="form-floating mb-2">
                        <select class="form-select" id="season" aria-label="season" name="season" required>
                            <option disabled selected></option>
                            <option value="all">
                                Todas
                            </option>
                            <option value="summer">
                                Verano
                            </option>
                            <option value="winter">
                                Invierno
                            </option>
                        </select>
                        <label for="occupation">Estación</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="number" class="form-control" id="floatingInput" placeholder="" name='price'
                            required>
                        <label for="floatingInput">Precio</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input class="form-control form-control-sm" id="formFileSm" name="images" type="file"
                            value="">
                        <label for="floatingInput">Imagen</label>
                    </div>
                    <div class="form-floating mb-2">
                        <select class="form-select" id="comfort_level" aria-label="comfort_level" name="comfort_level"
                            required>
                            <option disabled selected></option>
                            <option value="1">
                                1
                            </option>
                            <option value="2">
                                2
                            </option>
                            <option value="3">
                                3
                            </option>
                            <option value="4">
                                4
                            </option>
                            <option value="5">
                                5
                            </option>
                            <option value="6">
                                6
                            </option>
                            <option value="7">
                                7
                            </option>
                            <option value="8">
                                8
                            </option>
                            <option value="9">
                                9
                            </option>
                            <option value="10">
                                10
                            </option>
                        </select>
                        <label for="occupation">Nivel de comfort</label>
                    </div>
                    <button class="btn btn-lg btn-primary" type="submit">Añadir</button>
                </form>
            </div>
        </div>
    </div>
</div>
