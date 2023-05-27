@extends('template')

<body>
    <div class="section-gray">
        <div class="container !direction !spacing ">
            <div class="container-fluid !direction !spacing  ">
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <h3 class="fs-4 fs-lg-5 lh-sm mt-5 centrado titulos">Precio total:</h3>
                        </div>
                        <div class="col-sm">
                            <h3 class="fs-1 fs-lg-5 lh-sm mt-5 centrado titulos">Armario</h3>
                        </div>
                        <div class="col-sm">
                            <h3 class="fs-5 fs-lg-5 lh-sm mt-5 centrado"><a class="button letra" href="#">Añadir prenda</a></h3>
                        </div>
                    </div>
                
                <div class="row">
                    @foreach ($clothes as $ropa)
                        <div id="columns" class="col col-lg-3">
                            <figure>
                                <img src="{{ URL::asset('assets/img/gallery/' . $ropa->image) }}">
                                <figcaption>{{ $ropa->name }}</figcaption>
                                <figcaption>{{ $ropa->brand }}</figcaption>
                                <a class="button" href="#">Recomendación</a>
                            </figure>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>
