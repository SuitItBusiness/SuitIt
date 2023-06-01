@extends('template')

@section('content')
    <div class="section-gray">
        <div class="container !direction !spacing ">
            <div class="container-fluid !direction !spacing  ">
                <div class="container">
                    <h3 class="fs-1 fs-lg-5 lh-sm centrado titulos">Recomendación</h3>
                    <div class="row">
                        @if(count($recomendations) == 3)
                            <div class="row">
                                @foreach($recomendations as $item)
                                    <div class="col">
                                        <div class="js-carousel-cell">
                                            <div class="ag-shop-card_box-wrap">
                                                <div class="ag-shop-card_box">
                                                    <div class="ag-shop-card_body">
                                                        <div class="js-card-bg ag-card-bg" style="background-image: url({{ $item['image_url'] }});"></div>
                                                    </div>
                                                    <div class="ag-shop-card_footer">
                                                        <a href="#" class="ag-shop-card-footer_link"><img src="{{ $item['arrow_image_url'] }}" class="ag-shop-card-footer_arrow"></a>

                                                        <span class="ag-shop-card-footer_name">{{ $item['name'] }}</span>
                                                        <span class="ag-shop-card-footer_color">{{ $item['color'] }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @elseif(count($recomendations) == 4)
                            <div class="row">
                                @foreach($recomendations as $item)
                                    <div class="col">
                                        <div class="js-carousel-cell">
                                            <div class="ag-shop-card_box-wrap">
                                                <div class="ag-shop-card_box">
                                                    <div class="ag-shop-card_body2">
                                                        <div class="js-card-bg ag-card-bg" style="background-image: url({{ $item['image_url'] }});"></div>
                                                        <a href="#"><img src="{{ $item['product_image_url'] }}" alt="{{ $item['product_alt_text'] }}" class="ag-shop-card-body_img"></a>
                                                    </div>
                                                    <div class="ag-shop-card_footer">
                                                        <a href="#" class="ag-shop-card-footer_link"><img src="{{ $item['arrow_image_url'] }}" class="ag-shop-card-footer_arrow"></a>
                                                        <span class="ag-shop-card-footer_name">{{ $item['name'] }}</span>
                                                        <span class="ag-shop-card-footer_color">{{ $item['color'] }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
