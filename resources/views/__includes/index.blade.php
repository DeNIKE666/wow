
<!DOCTYPE html>
<html lang="ru" class="mm">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <meta name="keywords" content="">
    <title>Main</title>
    <!-- Import Styles -->


    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/stylesheet.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
    <!-- Custom Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/common.css') }}">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body class="main">

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

<!-- SCRIPTS -->
<script src="{{ asset('assets/js/jquery-1.11.2.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.matchHeight-min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.maskedinput.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.stellar.js') }}"></script>
<script src="{{ asset('assets/js/parallax.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/common.js') }}"></script>

</body>
</html>
