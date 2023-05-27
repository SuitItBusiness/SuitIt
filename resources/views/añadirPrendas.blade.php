@extends('template')

<body>
    <div class="section-gray">
        <div class="container !direction !spacing ">
            <div class="container-fluid !direction !spacing  ">
                <div class="container">
                    <h3 class="fs-1 fs-lg-5 lh-sm centrado titulos">Añadir Prenda</h3>
                    <form id="loginForm" action="" method="POST">
                        @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="floatingInput" placeholder=""
                                name='name' required>
                            <label for="floatingInput">Nombre</label>
                        </div>
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="floatingInput" placeholder=""
                                name='color' required>
                            <label for="floatingInput">Color</label>
                        </div>
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="floatingInput" placeholder=""
                                name='brand' required>
                            <label for="floatingInput">Marca</label>
                        </div>
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="floatingInput" placeholder=""
                                name='brand' required>
                            <label for="floatingInput">Marca</label>
                        </div>
                        <div class="form-floating mb-2">
                            <select class="form-select" id="season" aria-label="season" name="season"
                                required>
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
                            <label for="occupation">Estacion</label>
                        </div>
                        <div class="form-floating mb-2">
                            <input type="number" class="form-control" id="floatingInput" placeholder=""
                                name='price' required>
                            <label for="floatingInput">Precio</label>
                        </div>
                        <div class="form-floating mb-2">
                            <input class="form-control form-control-sm" id="formFileSm" name="images" type="file" value="">
                            <label for="floatingInput">Imagen</label>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Añadir</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
