@extends('template')

<body>
    <div class="container-fluid !direction !spacing  ">
        <h3 class="fs-3 fs-lg-5 lh-sm mt-5 centrado">Armario</h3>
        <div id="columns" class="columns_4">
            @foreach ($clothes as $ropa)
                <figure>
                    <img
                        src="https://cdn.wallapop.com/images/10420/e6/d0/__/c10420p857211662/i3079288859.jpg?pictureSize=W640">
                    <figcaption>{{ $ropa->name }}</figcaption>
                    <figcaption>{{ $ropa->brand }}</figcaption>
                    <a class="button" href="#">Recomendación</a>
                </figure>
            @endforeach
        </div>
    </div>
</body>
