@extends('layouts.wow')

@section('title' , 'Buy')

@section('content')
    <div class="b-card">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="b-card-box">
                        <div class="b-card-item b-card-left">
                            <div class="your-cart"><img src="{{ asset('img/your-cart.png') }}" alt="img"></div>
                            <div class="b-card-left-line">
                                <div>
                                    {!! replaceDiv($product->title) !!}

                                </div>
                                <div>
                                    <div class="b-card-ident">QTY -</div>
                                    <div class="quantity-block">
                                        <button class="quantity-arrow-minus btn"> <span class="caret"></span> </button>
                                        <input class="quantity-num form-control" type="number" value="{{ $count ?? '1' }}">
                                        <button class="quantity-arrow-plus btn"> <span class="caret"></span> </button>
                                    </div>
                                    <div class="b-card-price">{{ $sum }} <sup>€</sup></div>
                                    <div class="b-card-del">
                                        <span>del</span>
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="b-card-left-cupon">
                                <div class="b-input">
                                    <label for="cupon">Cupon</label>
                                    <input class="form-control" id="cupon" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="b-card-item b-card-item-right">
                            <div class="b-card-item-title">Contact details</div>
                            <div class="contact-details-box">
                                <div class="contact-details-left">
                                    <div class="b-input">
                                        <label for="firstname">First name</label>
                                        <input class="form-control" id="firstname" type="text">
                                    </div>
                                    <div class="radio-items">
                                        <div class="radio-item">
                                            <label>
                                                <input class="radio" type="radio" name="radio-1" checked="checked">
                                                <span class="radio-custom"></span>
                                                <span class="label">Skype</span>
                                            </label>
                                        </div>
                                        <div class="radio-item">
                                            <label>
                                                <input class="radio" type="radio" name="radio-1">
                                                <span class="radio-custom"></span>
                                                <span class="label">Discord</span>
                                            </label>
                                        </div>
                                        <div class="radio-item">
                                            <label>
                                                <input class="radio" type="radio" name="radio-1">
                                                <span class="radio-custom"></span>
                                                <span class="label">WhatsApp</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-details-right">
                                    <div class="b-input">
                                        <label for="emailadress">E-mail adress*</label>
                                        <input class="form-control" id="emailadress" type="text">
                                    </div>
                                    <div class="b-input">
                                        <label for="nickname">Nickname*</label>
                                        <input class="form-control" id="nickname" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="b-card-item-title">Game details</div>
                            <div class="contact-details-box">
                                <div class="contact-details-left">
                                    <div class="b-input">
                                        <label for="charactername">Character name</label>
                                        <input class="form-control" id="charactername" type="text">
                                    </div>
                                    <div class="b-input">
                                        <label for="faction">Faction</label>
                                        <input class="form-control" id="faction" type="text">
                                    </div>
                                    <div class="radio-items">
                                        <div class="radio-item">
                                            <label>
                                                <input class="radio" type="radio" name="radio-2" checked="checked">
                                                <span class="radio-custom"></span>
                                                <span class="label">Credit Card</span>
                                            </label>
                                        </div>
                                        <div class="radio-item">
                                            <label>
                                                <input class="radio" type="radio" name="radio-2">
                                                <span class="radio-custom"></span>
                                                <span class="label">PalPal</span>
                                            </label>
                                        </div>
                                        <div class="radio-item">
                                            <label>
                                                <input class="radio" type="radio" name="radio-2">
                                                <span class="radio-custom"></span>
                                                <span class="label">Skrill</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-details-right">
                                    <div class="b-input">
                                        <label for="server">Server</label>
                                        <input class="form-control" id="server" type="text">
                                    </div>
                                    <div class="b-input">
                                        <label for="battletag">Battle tag</label>
                                        <input class="form-control" id="battletag" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="b-politic-checkbox">
                                <div class="check-item">
                                    <label>
                                        <input class="checkbox" type="checkbox" name="checkbox-1">
                                        <span class="checkbox-custom"></span>
                                        <span class="label">I have read and agree to the website terms and conditions*</span>
                                    </label>
                                </div>
                            </div>
                            <div class="b-card-btn">
                                <button type="submit" class="btn">total <span>{{ $sum }} <span>€</span></span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
