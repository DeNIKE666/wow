$(document).ready(function(){
    var sum = 0, dasharray,price;
$('.b-pageshopmo-main').on('change', 'input:not(.quantity-num)', function () {
    calc();
});

function calc(){
    sum = 0;
    price = 0;
    $('.b-pageshopmo-main').find('.radio-item input, .check-item input').each(function () {
        if($(this).prop("checked")===true) {
            sum += Number($(this).attr('data-percent'));
        }
    });

    price += Number($('.radio-item input:checked').attr('data-price'));

    $('.b-pageshopmo-main').find('.check-item input').each(function () {
        if($(this).prop("checked")===true) {
            price += Number($(this).attr('data-price'));
        }
    });

    dasharray = 917 + sum/2;

    if(sum === 100){
        $('.circle-box').addClass('circle-box-full');
        dasharray += 1;
    }else{
        $('.nofull').text('+ ' + sum + '%');
        $('.circle-box').removeClass('circle-box-full');
    }


    $('.circle-box').find('.sicle2').css('stroke-dasharray', dasharray);


    $('.span-btn-price-value').text(price);
   // alert(sum);

}


window.addEventListener('resize', () => {
  // We execute the same script as before
  let vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);
});

  let vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);


    $(".menu-btn").on("click", function(){
      $(this).toggleClass("active");
      $('ul.menu').toggleClass("active");
    });


    $(".basket").on("click", function(){
      $(this).parent().toggleClass("active");
    });



$(".quantity-arrow-minus").click(function(){
  var $quantityNum = $(this).parent('.quantity-block').children('.quantity-num');
  if ($quantityNum.val() > 1) {
        $quantityNum.val(+$quantityNum.val() - 1);
      }
});


$(".quantity-arrow-plus").click(function(){
  var $quantityNum = $(this).parent('.quantity-block').children('.quantity-num');
  $quantityNum.val(+$quantityNum.val() + 1);
});




  $('.b-input > .form-control').on("focus", function () {
      $(this).parent('.b-input').addClass('active');
  });
  $('.b-input > .form-control').on("blur", function () {
      $(this).parent('.b-input').removeClass('active');
      text = $(this).val();
      if(text){
        $(this).parent('.b-input').addClass('active');
      }else{
        $(this).parent('.b-input').removeClass('active');
      }
  });






var slider = $(".pageshop-slider");
var scrollCount = null;
var scroll= null;

slider
  .slick({
    dots: true,
    speed: 700,
    infinite: true,
    arrows: false,
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 520,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  slider.on('wheel', (function(e) {
    e.preventDefault();

    scroll = setTimeout(function(){scrollCount=0;}, 200);
    if(scrollCount) return 0;
    scrollCount=1;

    if (e.originalEvent.deltaY < 0) {
      $(this).slick('slickNext');
    } else {
      $(this).slick('slickPrev');
    }
  }));

  $('#shopTab a').click(function (e) {
    var tab = $(this);
    if(tab.parent('li').hasClass('active')){
        window.setTimeout(function(){
            $(".tab-pane").removeClass('active');
            $(".tab-pane").removeClass('in');
            tab.parent('li').removeClass('active');
        },1);
    }
  });


  $('.tab-close').click(function (e) {
    $(".tab-pane").removeClass('active');
    $(".tab-pane").removeClass('in');
    $('#shopTab > li').removeClass('active');
  });




  $('.b-pageshopcopy-card-box .shop-card > a .shop-card-price > span').hover(
    function(){
      $(this).html('open <span>card</span>');
    },
    function(){
      $(this).html('info');
  });


jQuery(window).scroll(function() {

    if (jQuery(this).scrollTop()>0)
     {
      jQuery('.b-pageinfo-about-policy .nav-tabs > li').fadeOut();  
     }
    else
     {
      jQuery('.b-pageinfo-about-policy .nav-tabs > li').fadeIn();
     }
 });







































  $(".form-phone").mask("+7 (999) 999-99-99");

  $('.b-5-box-item').matchHeight({
    byRow: true,
    property: 'height',
    target: null,
    remove: false
  });

  $(".fancy-modal").fancybox({
    speed : 330,
    touch : false,
    autoFocus:false
  });



});