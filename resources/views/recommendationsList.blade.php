@extends('template')

<div class="section-gray">
    <div class="container !direction !spacing">
        <h3 class="fs-1 fs-lg-5 lh-sm centrado titulos">Historial de recomendación</h3>
        @foreach ($recommendations as $recommendation)
            <div class="container mb-5">
                <div class="row bg-white border-1 p-2">
                    <div class="row col-lg-9 col-sm-12 justify-content-between">

                    @foreach ($recommendation->clothes as $article)
                        <div class="col-3 border border-4 border-dark">
                            <img src="{{ URL::asset('assets/img/gallery/' . $article->image) }}" class="w-100"
                                alt="">
                        </div>
                    @endforeach

                    </div>
                    <div class="col-lg-3 col-sm-12 row pt-2">
                        <div class="col-6 col-lg-12">
                            <h3 class="titulos">Evento</h3>
                            <p class="text-center">{{ $recommendation->description }}</p>
                        </div>
                        <div class="col-6 col-lg-12">
                            <h3 class="titulos">Fecha</h3>
                            <p class="text-center">{{ date_format($recommendation->created_at, 'd-m-Y') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
