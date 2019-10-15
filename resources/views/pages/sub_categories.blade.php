@extends('layouts.wow')

@section('title' , 'Subcategories - ' . $category->name)

@section('content')


    <div class="b-pageshop">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="b-pageshop-slider-box">
                        <div class="pageshop-title">
                            <span>Shop</span>
                            <span>Business</span>
                        </div>
                        <div class="pageshop-slider">

                            @foreach ($category->descendants()->get() as $category)
                                <div>
                                    <div class="pageshop-slider-item">
                                        <div class="shop-card">
                                            <a href="{{ route('product', $category) }}">
                                                <div class="shop-card-head">
                                                    {!! replaceDiv($category->name) !!}
                                                </div>
                                                <div class="shop-card-img">
                                                    <div style="background: url({{ image($category->image) }}) no-repeat center 0;"></div>
                                                    <div style="background: url({{ image($category->image) }}) no-repeat center 0;"></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
