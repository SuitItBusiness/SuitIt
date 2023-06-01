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
                            <h3 class="fs-5 fs-lg-5 lh-sm mt-5 centrado"><a class="button letra" href="{{route('addClothes')}}">Añadir prenda</a></h3>
                        </div>
                    </div>
                
                <div class="row">
                    @foreach ($clothes as $ropa)
                        <div id="columns" class="col col-lg-3">
                            <figure>
                                <img src="{{ URL::asset('assets/img/gallery/' . $ropa->image) }}">
                                <figcaption>{{ $ropa->name }}</figcaption>
                                <figcaption>{{ $ropa->brand }}</figcaption>
                                {{-- FORMULARIO PARA RECOMENDACIONES --}}
                                <form action="{{ route('recommendation') }}" method="POST">
                                    @csrf
                                    <select name="eventId" id="event" class="form-control"required>
                                        @foreach ($ropa->events as $event)
                                            <option value="{{ $event->id }}">
                                                {{ $event->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <input name='articleId' value="{{ $ropa->id }}" hidden>
                                <div class="row">
                                    <div class="col-sm-10">
                                        <button class="button" type="submit">Recomendación</button>
                                    </div>
                                </form>
                                    <div class="col-sm-2 mt-4">
                                        {{-- FORMULARIO PARA BORRAR PRENDAS --}}
                                    <form action="" method="POST" class="row justify-content-center">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger" type="submit"><i class="bi bi-trash"></i></button>
                                    </form>
                                </div>
                                  </div>
                            </figure>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
