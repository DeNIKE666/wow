@extends('layouts.wow')

@section('title' , 'Products')

@section('content')
    <div class="b-pageshop">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="b-pageshopcopy-box">
                        <div class="pageshop-title">
                            <span>Shop</span>
                            <span>Business</span>
                        </div>

                        <div class="b-pageshopcopy-card-box">
                            @foreach ($category->products as $product)
                                <div class="shop-card">
                                    <a href="#">
                                        <div class="shop-card-head">
                                            {!! replaceDiv($product->title) !!}
                                        </div>
                                        <div class="shop-card-img">
                                            <div style="background: url({{ image($product->image) }}) no-repeat center 0;"></div>
                                            <div style="background: url({{ image($product->image) }}) no-repeat center 0;"></div>
                                        </div>
                                        <div class="shop-card-price">
                                            <div class="shop-card-yellow">
                                                {{ $product->price }} <sup> €</sup>
                                            </div>
                                            <span>info</span>
                                        </div>
                                    </a>
                                </div>


                            @endforeach
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
