@extends('template')

    <div class="section-gray">
        <div class="container !direction !spacing ">
            <div class="container-fluid !direction !spacing  ">
                <div class="container">
                    <h3 class="fs-1 fs-lg-5 lh-sm centrado titulos">Recomendación</h3>
                    <div class="row">
                        @if(count($clothes) == 3)
                            <div class="row">
                                @foreach($clothes as $item)
                                    <div class="col">
                                        <div class="js-carousel-cell">
                                            <div class="ag-shop-card_box-wrap">
                                                <div class="ag-shop-card_box">
                                                    <div class="ag-shop-card_footer">
                                                        <img src="{{ URL::asset('assets/img/gallery/' . $item->image) }}">
                                                        <span class="ag-shop-card-footer_name">{{ $item['name'] }}</span>
                                                        <span class="ag-shop-card-footer_color">{{ $item['color'] }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @elseif(count($clothes) == 4)
                            <div class="row">
                                @foreach($clothes as $item)
                                    <div class="col">
                                        <div class="js-carousel-cell">
                                            <div class="ag-shop-card_box-wrap">
                                                <div class="ag-shop-card_box">
                                                    <div class="ag-shop-card_footer">
                                                        <img src="{{ URL::asset('assets/img/gallery/' . $item->image) }}">
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
