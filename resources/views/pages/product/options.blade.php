@extends('layouts.wow')

@section('title' , 'Cart')

@section('content')
    <div class="b-pageshopmo">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="b-pageshopmo-box-out">
                        <div class="pageshop-title">
                            <span>Bfa 8.2</span>
                            <span>raid offers</span>
                        </div>
                        <div class="b-pageshopmo-box">
                            <div class="b-pageshopmo-box-left">
                                <div class="b-pageshopmo-img">
                                    <img src="{{ asset('img/menu-open-img.png') }}" alt="img">
                                    <div>
                                        {!! replaceDiv($product->title) !!}
                                    </div>
                                </div>
                                <ul id="shopTab" class="nav nav-tabs">
                                    <li><a data-toggle="tab" href="#panely1">Note</a></li>
                                    <li><a data-toggle="tab" href="#panely2">requirements</a></li>
                                    <li><a data-toggle="tab" href="#panely3">description</a></li>
                                    <li><a data-toggle="tab" href="#panely4">receive</a></li>
                                </ul>
                            </div>
                            <div class="b-pageshopmo-box-right">
                                <div class="b-pageshopmo-main">
                                    <div class="b-pageshopmo-main-acc">your account from <span>110</span></div>
                                    <div class="circle-box">
                                        <!-- <div class="circle-box circle-box-full"> -->
                                        <span class="nofull">+ 30%</span>
                                        <span class="full">MAX <span>level</span></span>
                                        <svg height="100%" width="100%">
                                            <circle class="sicle1" cx="43" cy="43" r="43"></circle>
                                        </svg>
                                        <svg height="100%" width="100%">
                                            <circle class="sicle2" cx="43" cy="43" r="43"></circle>
                                        </svg>
                                        <div class="tooltip-graph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis ab consequatur temporibus dicta odio consectetur quo.</div>
                                    </div>
                                        <div class="b-pageshopmo-main-title">Options</div>
                                        <div class="radio-items2">
                                            <div class="radio-item">
                                                <label>
                                                    <input class="radio" type="radio" name="radio-1" checked data-percent="30" data-price="279">
                                                    <span class="radio-custom"></span>
                                                    <span class="label">Standart (<span>24</span> <span>hours</span>)</span>
                                                    <div class="tooltip-rch">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis ab consequatur temporibus dicta odio consectetur quo.</div>
                                                </label>
                                            </div>
                                            <div class="radio-item">
                                                <label>
                                                    <input class="radio" type="radio" name="radio-1" data-percent="47" data-price="500">
                                                    <span class="radio-custom"></span>
                                                    <span class="label">Expanded (<span>48</span> <span>hours</span>)</span>
                                                    <div class="tooltip-rch">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis ab consequatur temporibus dicta odio consectetur quo.</div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="b-pageshopmo-main-title">additional options</div>
                                        <div class="check-items2">
                                            <div class="check-item">
                                                <label>
                                                    <input class="checkbox" type="checkbox" name="checkbox-1" data-percent="3" data-price="42">
                                                    <span class="checkbox-custom"></span>
                                                    <span class="label">Lorem Ipsum is simply dummy (<span>+ 42</span>€)</span>
                                                    <div class="tooltip-rch">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis ab consequatur temporibus dicta odio consectetur quo.</div>
                                                </label>
                                            </div>
                                            <div class="check-item">
                                                <label>
                                                    <input class="checkbox" type="checkbox" name="checkbox-1" data-percent="22" data-price="82">
                                                    <span class="checkbox-custom"></span>
                                                    <span class="label">Lorem Ipsum is simply dummy (<span>+ 82</span>€)</span>
                                                    <div class="tooltip-rch">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis ab consequatur temporibus dicta odio consectetur quo.</div>
                                                </label>
                                            </div>
                                            <div class="check-item">
                                                <label>
                                                    <input class="checkbox" type="checkbox" name="checkbox-1" data-percent="15" data-price="22">
                                                    <span class="checkbox-custom"></span>
                                                    <span class="label">Lorem Ipsum is simply dummy (<span>+ 22</span>€)</span>
                                                    <div class="tooltip-rch">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis ab consequatur temporibus dicta odio consectetur quo.</div>
                                                </label>
                                            </div>
                                            <div class="check-item">
                                                <label>
                                                    <input class="checkbox" type="checkbox" name="checkbox-1" data-percent="13" data-price="60">
                                                    <span class="checkbox-custom"></span>
                                                    <span class="label">Lorem Ipsum is simply dummy (<span>+ 60</span>€)</span>
                                                    <div class="tooltip-rch">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis ab consequatur temporibus dicta odio consectetur quo.</div>
                                                </label>
                                            </div>
                                        </div>
                                    <div class="b-pageshopmo-main-btn">
                                        <form action="{{ route('product.cart', $product) }}" method="POST">
                                            @csrf
                                            <div class="b-card-ident">QTY -</div>
                                            <div class="quantity-block">
                                                <button type="button" class="quantity-arrow-minus btn"><span class="caret"></span></button>
                                                <input class="quantity-num form-control" name="count" type="number" value="1">
                                                <button type="button" class="quantity-arrow-plus btn"><span class="caret"></span></button>
                                            </div>

                                            <input type="hidden" name="sum" id="priceToOrder" value="{{ $product->price }}">

                                            <button type="submit" class="btn btn2">
                                                <span class="span-btn-price"><b class="span-btn-price-value">{{ $product->price }}</b><span>€</span></span>
                                                <span class="span-btn-price-hover">add to <span>card</span></span>
                                                <span class="span-btn-price-active">in <span>card</span></span>
                                            </button>

                                        </form>
                                    </div>

                                </div>
                                <div class="tab-content">
                                    <div id="panely1" class="tab-pane fade">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <div class="tab-close">close</div>
                                    </div>
                                    <div id="panely2" class="tab-pane fade">
                                        <div class="tab-pane-tit">Your account must have the following requirements:</div>
                                        <ol>
                                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</li>
                                            <li>Standard dummy text ever since the 1500s, when an</li>
                                            <li>Five centuries, but also the leap into electronic</li>
                                            <li>Typesetting, remaining essentially unchanged.</li>
                                        </ol>
                                        <div class="tab-pane-graytext">If it does not meet these requirements, you can <a href="#">order</a> an additional pumping account to the desired indicators.</div>
                                        <div class="tab-close">close</div>
                                    </div>
                                    <div id="panely3" class="tab-pane fade">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <div class="tab-pane-tit">It was popularised</div>
                                        <ol>
                                            <li>in the 1960s with the release</li>
                                            <li>of Letraset sheets containing Lorem Ipsum</li>
                                            <li>passages, and more recently with desktop</li>
                                        </ol>
                                        <p>Publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <div class="tab-close">close</div>
                                    </div>
                                    <div id="panely4" class="tab-pane fade">
                                        <div class="tab-pane-tit">when ordering pumping you get:</div>
                                        <ol>
                                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</li>
                                            <li>Standard dummy text ever since the 1500s, when an</li>
                                            <li>Five centuries, but also the leap into electronic</li>
                                            <li>Typesetting, remaining essentially unchanged.</li>
                                        </ol>
                                        <div class="tab-pane-graytext">If you need to pump your account by another method, you can <a href="#">order</a> individual characteristics by <a href="#">contacting</a> us.</div>
                                        <div class="tab-close">close</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>

            $(document).ready(function () {

                var price =  $('#priceToOrder');
                var countInput =  $('form .quantity-num');

                $('.span-btn-price-value').on('DOMSubtreeModified', function () {
                    var sum = parseInt($(this).text());
                    price.attr('value', sum);
                });

                $input = $('.quantity-arrow-plus').on('click' , function () {
                    var c = countInput.val();
                    countInput.attr('value' , c);
                })

                $input = $('.quantity-arrow-minus').on('click' , function () {
                    var c = countInput.val();
                    countInput.attr('value' , c);
                })

            });

        </script>
    @endpush
@endsection
