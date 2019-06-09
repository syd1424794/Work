@extends('layouts.home-layout')
@section('content')

<div class="slider">
    <div class="owl-carousel owl-theme">
        <div class="item">
            <img src="{{asset('./images/banner1.jpg')}}" alt="">
        </div>
        <div class="item">
            <img src="{{asset('./images/banner2.jpg')}}" alt="">
        </div>
    </div>
</div>

<div class="sticky-images">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <img src="{{asset('./images/watermelon.jpg')}}" alt="">
            </div>

            <div class="col-lg-8 col-md-8">
                <img src="{{asset('./images/banana.jpg')}}" alt="">
            </div>
        </div>
    </div>
</div>

<div class="latest-offerings">
    <div class="section-title text-center">
        <span>Latest Offerings</span>
    </div>
    <div class="owl-carousel owl-theme">
        <div class="item">
            <div class="product">
                <div class="img">
                    <img src="{{asset('./images/dish1.png')}}" alt="">
                    <div class="overlay">
                        <div class="icons">

                        </div>
                    </div>
                </div>
                <div class="desc">
                    <div class="name">Samosa (2pcs)</div>
                    <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <div class="actions">
                        <button class="add-to-cart"><i class="fa fa-shopping-basket"></i></button>
                        <button class="price"><i class="fa fa-inr"></i> 120</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="item">
            <div class="product">
                <div class="img">
                    <img src="{{asset('./images/samosa.png')}}" alt="">
                    <div class="overlay">
                        <div class="icons">

                        </div>
                    </div>
                </div>
                <div class="desc">
                    <div class="name">Samosa (2pcs)</div>
                    <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <div class="actions">
                        <button class="add-to-cart"><i class="fa fa-shopping-basket"></i></button>
                        <button class="price"><i class="fa fa-inr"></i> 120</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="item">
            <div class="product">
                <div class="img">
                    <img src="{{asset('./images/salad.png')}}" alt="">
                    <div class="overlay">
                        <div class="icons">

                        </div>
                    </div>
                </div>
                <div class="desc">
                    <div class="name">Samosa (2pcs)</div>
                    <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <div class="actions">
                        <button class="add-to-cart"><i class="fa fa-shopping-basket"></i></button>
                        <button class="price"><i class="fa fa-inr"></i> 120</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="item">
            <div class="product">
                <div class="img">
                    <img src="{{asset('./images/fruit-salad.png')}}" alt="">
                    <div class="overlay">
                        <div class="icons">

                        </div>
                    </div>
                </div>
                <div class="desc">
                    <div class="name">Samosa (2pcs)</div>
                    <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <div class="actions">
                        <button class="add-to-cart"><i class="fa fa-shopping-basket"></i></button>
                        <button class="price"><i class="fa fa-inr"></i> 120</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="item">
            <div class="product">
                <div class="img">
                    <img src="{{asset('./images/dish2.png')}}" alt="">
                    <div class="overlay">
                        <div class="icons">

                        </div>
                    </div>
                </div>
                <div class="desc">
                    <div class="name">Samosa (2pcs)</div>
                    <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <div class="actions">
                        <button class="add-to-cart"><i class="fa fa-shopping-basket"></i></button>
                        <button class="price"><i class="fa fa-inr"></i> 120</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="item">
            <div class="product">
                <div class="img">
                    <img src="{{asset('./images/dish1.png')}}" alt="">
                    <div class="overlay">
                        <div class="icons">

                        </div>
                    </div>
                </div>
                <div class="desc">
                    <div class="name">Samosa (2pcs)</div>
                    <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <div class="actions">
                        <button class="add-to-cart"><i class="fa fa-shopping-basket"></i></button>
                        <button class="price"><i class="fa fa-inr"></i> 120</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
