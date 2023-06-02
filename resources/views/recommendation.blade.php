@extends('template')

    <div class="section-gray">
        <div class="container !direction !spacing ">
            <div class="container-fluid !direction !spacing  ">
                <div class="container">
                    <h3 class="fs-1 fs-lg-5 lh-sm centrado titulos">Recomendación</h3>
                        @if(count($recommendation) == 3)
                        <div class="container">
                            <div class="row">
                                @foreach($recommendation as $item)
                              <div class="col-sm">
                                <div class="product-card">
                                    <div class="product-tumb">
                                        <img src="{{ URL::asset('assets/img/gallery/' . $item->image) }}" alt="">
                                    </div>
                                    <div class="product-details">
                                        <span class="product-catagory">{{ $item['color'] }}</span>
                                        <h4><a href="">{{ $item['name'] }}</a></h4>
                                        <br>
                                        <div class="product-bottom-details">
                                            <div class="product-price">{{ $item['price'] }}</div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                              @endforeach
                            </div>
                          </div>

                        @elseif(count($recommendation) == 4)
                        <div class="container">
                            <div class="row">
                              <div class="col">Column</div>
                              <div class="col">Column</div>
                            </div>
                            <div class="row">
                                <div class="col">Column</div>
                                <div class="col">Column</div>
                              </div>
                          </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
      