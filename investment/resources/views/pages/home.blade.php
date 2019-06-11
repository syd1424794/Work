@extends('layouts.home-layout')
@section('content')

<div class="slider">
    <div class="owl-carousel owl-theme">
        <div class="item">
            <img src="{{asset('/images/banner1.jpg')}}" alt="">
            <div class="overlay">
                <div class="content">
                    <div class="title">Life Insurance</div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore delectus harum similique inventore omnis repudiandae.</p>
                    <button>GET A QUOTE</button>
                </div>
            </div>
        </div>

        <div class="item">
            <img src="{{asset('/images/banner2.jpg')}}" alt="">
            <div class="overlay">
                <div class="content">
                    <div class="title">Health Insurance</div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore delectus harum similique inventore omnis repudiandae.</p>
                    <button>GET A QUOTE</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="our-products">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center">
                    <span>Our Products</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="product-type">
                    <div class="icon">
                        <span class="lnr lnr-car"></span>
                    </div>
                    <h4>CAR INSURANCE</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita, dolore nemo aspernatur animi maiores maxime eos fuga.</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="product-type">
                    <div class="icon">
                        <span class="lnr lnr-heart"></span>
                    </div>
                    <h4>HEALTH INSURANCE</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita, dolore nemo aspernatur animi maiores maxime eos fuga.</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="product-type">
                    <div class="icon">
                        <span class="lnr lnr-home"></span>
                    </div>
                    <h4>HOME INSURANCE</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita, dolore nemo aspernatur animi maiores maxime eos fuga.</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="product-type">
                    <div class="icon">
                        <span class="lnr lnr-users"></span>
                    </div>
                    <h4>LIFE INSURANCE</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita, dolore nemo aspernatur animi maiores maxime eos fuga.</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="product-type">
                    <div class="icon">
                        <span class="lnr lnr-rocket"></span>
                    </div>
                    <h4>Startup Investments</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita, dolore nemo aspernatur animi maiores maxime eos fuga.</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="product-type">
                    <div class="icon">
                        <span class="lnr lnr-earth"></span>
                    </div>
                    <h4>TRAVEL INSURANCE</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita, dolore nemo aspernatur animi maiores maxime eos fuga.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="subscribe">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <h3>Subscribe And Get Free<br />Insurance Quotes.</h3>
                    <form action="">
                        <input type="text" placeholder="Email">
                        <button>SUBSCRIBE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center">
                    <span>Testimonials</span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="testimonial">
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium cupiditate cum facere consequatur eum debitis nam minus, officiis a necessitatibus sequi deserunt saepe? Cum exercitationem doloribus dolorem, suscipit ab sapiente.</p>

                                <div class="info">
                                    <div class="img">
                                        <img src="{{asset('./images/user.png')}}" alt="">
                                    </div>

                                    <div class="name">
                                        <p>Dummy User</p>
                                        <span>Assistant Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial">
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium cupiditate cum facere consequatur eum debitis nam minus, officiis a necessitatibus sequi deserunt saepe? Cum exercitationem doloribus dolorem, suscipit ab sapiente.</p>

                                <div class="info">
                                    <div class="img">
                                        <img src="{{asset('./images/user.png')}}" alt="">
                                    </div>

                                    <div class="name">
                                        <p>Dummy User</p>
                                        <span>Assistant Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial">
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium cupiditate cum facere consequatur eum debitis nam minus, officiis a necessitatibus sequi deserunt saepe? Cum exercitationem doloribus dolorem, suscipit ab sapiente.</p>

                                <div class="info">
                                    <div class="img">
                                        <img src="{{asset('./images/user.png')}}" alt="">
                                    </div>

                                    <div class="name">
                                        <p>Dummy User</p>
                                        <span>Assistant Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial">
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium cupiditate cum facere consequatur eum debitis nam minus, officiis a necessitatibus sequi deserunt saepe? Cum exercitationem doloribus dolorem, suscipit ab sapiente.</p>

                                <div class="info">
                                    <div class="img">
                                        <img src="{{asset('./images/user.png')}}" alt="">
                                    </div>

                                    <div class="name">
                                        <p>Dummy User</p>
                                        <span>Assistant Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-info">
    <div class="left-sec">
        <div class="query-form">
            <div class="title">
                <span class="lnr lnr-envelope"></span>
                <p>Send us a message</p>
            </div>
            <form>
                <div class="input-div">
                    <input type="text" placeholder="Name">
                </div>
                {{-- <div class="input-div">
                    <input type="text" placeholder="Name">
                </div> --}}
                <div class="input-div">
                    <input type="text" placeholder="Email">
                </div>
                <div class="input-div">
                    <input type="text" placeholder="Phone">
                </div>
                <div class="input-div">
                    <textarea name="" id="" placeholder="Your Enquiry"></textarea>
                </div>
                <div class="input-div text-center">
                    <button type="button">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <div class="right-sec">
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=New%20Delhi&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
        </div>
    </div>
</div>

<div class="brands">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center">
                    <span>Associalted Brands</span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="brand">
                            <img src="https://botw-pd.s3.amazonaws.com/styles/logo-thumbnail/s3/112010/untitled-1_157.png?itok=DXNDaWRt" alt="">
                        </div>
                    </div>

                    <div class="item">
                        <div class="brand">
                            <img src="https://cracku.in/latest-govt-jobs/wp-content/uploads/2019/05/Yes-Bank-Logo.jpg" alt="">
                        </div>
                    </div>

                    <div class="item">
                        <div class="brand">
                            <img src="http://freevectorlogo.net/wp-content/uploads/2014/01/bank-of-baroda-bob-vector-logo-400x400.png" alt="">
                        </div>
                    </div>

                    <div class="item">
                        <div class="brand">
                            <img src="https://botw-pd.s3.amazonaws.com/styles/logo-thumbnail/s3/0020/6049/brand.gif?itok=LmM7oeru" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <div class="logo">
                    <img src="{{asset('images/logo.png')}}" alt="">
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12">
                <div class="quick-links">
                    <ul>
                        <li><a href="#">Home Insurance</a></li>
                        <li><a href="#">Term Insurance</a></li>
                        <li><a href="#">Health Insurance</a></li>
                        <li><a href="#">Life Insurance</a></li>
                        <li><a href="#">Mutual Funds</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12">
                <div class="quick-links">
                    <ul>
                        <li><a href="#">Fixed Deposits</a></li>
                        <li><a href="#">Tax Saving Plans</a></li>
                        <li><a href="#">Health Insurance</a></li>
                        <li><a href="#">Retirement Plans</a></li>
                        <li><a href="#">Startup Investments</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12">
                <div class="social">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="copyright">Copyright © 2019 Insurance Corporation. All rights reserved.</div>
        </div>
    </div>
</footer>

@stop
