@extends('layouts.wow_preview')

@section('title', 'WOW')

@section('content')
    <div class="b-main">
        <div class="hero2"></div>
        <div class="hero3"></div>
        <div class="hero4"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="b-main-box">
                        <div class="main-logo">
                            <img src="img/logo.png" alt="img">
                        </div>
                        <a href="{{ route('frontend.page.info') }}" class="info">Info</a>
                        <a href="{{ route('frontend.page.shop') }}" class="shop">Shop</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal" class="modal-wind">
        <div class="modal-title">Оставить заявку</div>
        <form action="">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="ФИО">
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-phone" placeholder="+7 (___) ___-__-__">
            </div>
            <div class="form-group">
                <button class="btn" type="button">Отправить</button>
            </div>
        </form>
    </div>
@endsection
