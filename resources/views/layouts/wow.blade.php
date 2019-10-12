

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <meta name="keywords" content="">
    <title>Page Info</title>
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

<body class="inner">

<header>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="header-box">
                    <div class="header-left">
                        <div class="arrow-back"><a href="{{ url()->previous() }}">
                                <img src="img/arrow-left.png" alt="">
                                <span>Back</span></a>
                        </div>
                    </div>
                    <div class="header-right">
                        <a href="#" class="logo-nav"><img src="img/logo-nav.png" alt="img"></a>
                        <div class="basket-box">
                            <div class="basket"></div>
                            <div class="basket-price">
                                <span>443</span>
                                <span data-toggle="dropdown" class="valuta">€ <span class="caret"></span></span>
                                <ul class="dropdown-menu">
                                    <li><a href="#">$</a></li>
                                    <li><a href="#">₽</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="menu-btn"><span></span></div>
                    </div>
                    <ul class="menu">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Refund Policy</a></li>
                        <li><a href="#">Terms &amp; Conditions</a></li>
                        <li><a href="#">Contacts</a></li>
                        <li><a href="#">Our Team</a></li>
                        <li><a href="#">Work With Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>


@yield('content')

<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="footer-right">
                    <div class="footer-title">Follow Us</div>
                    <div class="socials">
                        <div><a href="#" class="ic-email"></a></div>
                        <div><a href="#" class="ic-instagram"></a></div>
                        <div><a href="#" class="ic-youtube"></a></div>
                        <div><a href="#" class="ic-twitter"></a></div>
                        <div><a href="#" class="ic-facebook"></a></div>
                        <div><a href="#" class="ic-telegram"></a></div>
                        <div><a href="#" class="ic-whatsapp"></a></div>
                        <div><a href="#" class="ic-skype"></a></div>
                        <div><a href="#" class="ic-viber"></a></div>
                        <div class="socials-btn"><span></span></div>
                    </div>
                    <div class="footer-title">Contatc Us</div>
                    <div class="footer-email"><span>Email:</span> <a href="mailto:support@ps.com">support@ps.com</a></div>
                </div>
                <div class="footer-left">
                    <div class="footer-logo">
                        <a href="#"><span class="boosting">Boosting</span><span class="prestige">Prestige</span></a>
                    </div>
                    <div class="footer-title">About us</div>
                    <div class="footer-left-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
                    <div class="footer-copyr">All rights reserved <span>©Prestige boosting 2019</span> <br> Professional Game Boosting</div>
                </div>
            </div>
        </div>
    </div>
</footer>



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

@stack('scripts')

</body>
</html>


