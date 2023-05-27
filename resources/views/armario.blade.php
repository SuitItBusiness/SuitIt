@extends('template')

<body>
    <div class="fondoArmario">
        <div class="container !direction !spacing ">
            <div class="container-fluid !direction !spacing  ">
                <h3 class="fs-3 fs-lg-5 lh-sm mt-5 centrado">Armario</h3>
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
