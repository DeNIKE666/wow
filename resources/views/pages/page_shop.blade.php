@extends('layouts.wow')

@section('content')
    <div class="b-pageshopm">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="b-pageshopm-box-out">
                        <div class="pageshop-title">
                            <span>Bfa 8.2</span>
                            <span>raid offers</span>
                        </div>
                        <div class="b-pageshopm-box">
                            @foreach ($categories as $category)
                                <div class="pageshopm-item">
                                    <a href="#" class="{{ $category->icons }}"><span>{!! $category->name !!}</span></a>
                                    <div class="pageshopm-item-inf {{ $category->class }}" style="background: url({{ image($category->image) }}) no-repeat center center; background-size: cover;">
                                        <div class="pageshopm-item-inf-t">
                                            <div class="pageshopm-item-inf-tc">
                                                {{ $category->description }}
                                            </div>
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
