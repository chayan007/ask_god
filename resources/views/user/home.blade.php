@extends('user.layout.user')
@section('title', 'Home')

@section('content')
    <section id="home-slider">
        <div class="container">
            <div class="row">
                <div class="main-slider">
                    <div class="slide-text">
                        <h1>Talk to God</h1>
                        <p>Communicate with the God or the Devil on daily basis. They are here to answer your prayers. Enter Valhalla and enjoy the new journey.</p>
                        @guest
                            <a href="/user/register" class="btn btn-common">SIGN UP</a>
                            <a href="/user/login" class="btn btn-common">SIGN IN</a>
                        @endguest
                        @auth
                        <a href="/user/ask" class="btn btn-common">MESSAGE</a>
                        <a href="/user/complaints" class="btn btn-common">COMPLAINT</a>
                        @endauth

                    </div>
                    <img src="{{ asset('images/home/slider/hill.png') }}" class="slider-hill" alt="slider image">
                    <img src="{{ asset('images/home/slider/house.png') }}" class="slider-house" alt="slider image">
                    <img src="{{ asset('images/home/slider/sun.png') }}" class="slider-sun" alt="slider image">
                    <img src="{{ asset('images/home/slider/birds1.png') }}" class="slider-birds1" alt="slider image">
                    <img src="{{ asset('images/home/slider/birds2.png') }}" class="slider-birds2" alt="slider image">
                </div>
            </div>
        </div>
        <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
    </section>
    <!--/#home-slider-->

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="{{ asset('images/home/god.png') }}" alt="">
                        </div>
                        <h2>Ask Question</h2>
                        <p>Struggling in life ? Share your feelings with your deity. The mighty one will show you the way to lead comfortable life.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                            <img src="{{ asset('images/home/dog.png') }}" alt="">
                        </div>
                        <h2>Lodge Complaints</h2>
                        <p>God ain't helping you ? Giving you pain ? Complaint here and let us show you way to Valhalla.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                            <img src="{{ asset('images/home/future.png') }}" alt="">
                        </div>
                        <h2>Future Prediction</h2>
                        <p>Your forehead, eyes and palms can help Gods predict life. Conventional astrology blended with dark magic of ancient coven.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#services-->

    <section id="action" class="responsive">
        <div class="vertical-center">
            <div class="container">
                <div class="row">
                    <div class="action take-tour">
                        <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                            <h1 class="title">Ready for a journey among mighty ones.</h1>
                            <p>Are you ready to take a ride to Heaven or Hell ?</p>
                        </div>
                        <div class="col-sm-5 text-center wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                            <div class="tour-button">
                                <a href="/user/share" class="btn btn-common">Enter Valhalla</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#action-->

    <section id="features">
        <div class="container">
            <div class="row">
                <div class="single-features">
                    <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="{{ asset('images/home/god.jpg') }}" class="img-responsive" alt="" height="184px" width="400px">
                    </div>
                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>Feel the Gods</h2>
                        <P>The mighty Gods are here to take out your pain and help you in the journey of life. They will guide you and show you the path of success. Love, Finance, Family or anything, let the Gods show you the way.</P>
                    </div>
                </div>
                <div class="single-features">
                    <div class="col-sm-6 col-sm-offset-1 align-right wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>Meet the Satan</h2>
                        <P>If you ever felt that life is worse because Satan is playing with you, then you are exactly right. If you are lucky, you can get dirty if Satan preys over you in here. If your question is meant to reach the Satan, he will answer it. Just stay prepared and do not let 7 sins take you away.</P>
                    </div>
                    <div class="col-sm-5 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="{{ asset('images/home/hades.jpg') }}" class="img-responsive" alt="" height="184px" width="400px">
                    </div>
                </div>
                <div class="single-features">
                    <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="{{ asset('images/home/friends.jpg') }}" class="img-responsive" alt="" height="184px" width="400px">
                    </div>
                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms" style="padding: 30px">
                        <h2>Satisfication</h2>
                        <P>Share your deep and dark desires. Let the mighty <a href="https://en.wikipedia.org/wiki/Aphrodite">Aphrodite</a> take you to a journey where satisfaction is everything. Everything related to love is answered here. You can also anonymously share messages to your liked ones.</P>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#features-->

    <section id="clients">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <p><img src="{{ asset('images/home/clients.png') }}" class="img-responsive" alt=""></p>
                        <h1 class="title">Happy Users</h1>
                        <p>We are happy to have 10K+ patient users communicating with God and Satan everyday. <br> It is free to communicate with God because it is basic spiritual right. <br> Patience is the ultimate key to use this site. <br> You will recieve answers when Gods or Satan feels it. They work in mysterious ways.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#clients-->
@endsection