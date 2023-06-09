@extends('template')

<body>
    <div class="section-gray">
        <div class="container !direction !spacing ">
            <div class="container-fluid !direction !spacing  ">
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <h3 class="fs-4 fs-lg-5 lh-sm mt-5 centrado titulos">Precio total: {{\App\Models\Wardrobe::where('user_id', Auth::id())->first()->total_price}}€</h3>
                        </div>
                        <div class="col-sm">
                            <h3 class="fs-1 fs-lg-5 lh-sm mt-5 centrado titulos">Armario</h3>
                        </div>
                        <div class="col-sm">
                            <h3 class="fs-5 fs-lg-5 lh-sm mt-5 centrado"><a class="button letra" href="{{route('addClothes')}}">Añadir prenda</a></h3>
                        </div>
                    </div>
                    @if (strlen($errors) > 2)
                    <div class="alert alert-danger">
                        <ul>
                            <li>{{ $errors }}</li>
                        </ul>
                    </div>
                    @endif
                <div class="row">
                    @foreach ($clothes as $ropa) 
                        <div id="columns" class="col col-lg-3">
                            <figure>
                                <img src="{{ URL::asset('assets/img/gallery/' . $ropa->image) }}">
                                <figcaption class="mx-3 titulo mb-3">{{ $ropa->name }}</figcaption>
                                {{-- FORMULARIO PARA RECOMENDACIONES --}}
                                <form action="{{ route('wardrobe.recommendation') }}" method="POST">
                                    @csrf
                                    <select name="eventId" id="event" class="form-control"required>
                                        @foreach ($ropa->events as $event)
                                            <option value="{{ $event->id }}">
                                                {{ $event->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <input name='articleId' value="{{ $ropa->id }}" hidden>
                                <div class="row mt-3">
                                    <div class="col-sm-10 btn-sm mt-2 text-center justify-center text-decoration-none">
                                        <button class="buttonRecommendation letra" type="submit">Recomendación</button>
                                    </div>
                                </form>
                                    <div class="col-sm-2 mt-4">

                                        {{-- FORMULARIO PARA BORRAR PRENDAS --}}
                                    <form action="{{route('wardrobe.delete')}}" method="POST" class="row justify-content-center">
                                        <input name="id" value="{{$ropa->id}}" hidden>
                                        @csrf
                                        <button class="buttonDelete" type="submit"><i class="bi bi-trash"></i></button>
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
