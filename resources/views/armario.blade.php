@extends('template')

<body>
    <div class="container-fluid !direction !spacing  ">
        <h3 class="fs-3 fs-lg-5 lh-sm mt-5 centrado">Armario</h3>
        <div id="columns" class="columns_5">
            @foreach ($clothes as $ropa)
                <figure>
                    <img
                        src="https://cdn.wallapop.com/images/10420/e6/d0/__/c10420p857211662/i3079288859.jpg?pictureSize=W640">
                    <figcaption>{{ $ropa->name }}</figcaption>
                    <figcaption>{{ $ropa->brand }}</figcaption>
                    <span class="price">{{ $ropa->price }}€</span>
                    <a class="button" href="#">Buy Now</a>
                </figure>
            @endforeach
        </div>
    </div>
</body>
