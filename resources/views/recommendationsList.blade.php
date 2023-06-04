@extends('template')

<div class="section-gray">
    <div class="container !direction !spacing">
        <h3 class="fs-1 fs-lg-5 lh-sm centrado titulos">Historial de recomendación</h3>
        @foreach ($recommendations as $recommendation)
            <div class="container mb-5">
                <div class="row bg-white border-1 p-2">
                    @foreach ($recommendation->clothes as $article)
                        <div class="col-2 border">
                            <img src="{{ URL::asset('assets/img/gallery/' . $article->image) }}" width="100%"
                                alt="">
                        </div>
                    @endforeach
                    <div class="col-2 border">
                        <h3 class="titulos">Evento</h3>
                        <p class="titulos2 text-center">{{ $recommendation->description }}</p>
                    </div>
                    <div class="col-2 border">
                        <h3 class="titulos">Fecha</h3>
                        <p class="titulos2 text-center">{{ $recommendation->created_at }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
