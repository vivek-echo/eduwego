@extends('WebView.WebViewLayouts.WebViewLayout')

@section('webContent')

<main class="main_wrapper overflow-hidden">


<!-- topbar__section__stert -->
<div class="topbararea">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="topbar__left">
                    <ul>
                        <li>
                            <i class="icofont-phone"></i> 080 2955 6773
                        </li>
                        <li>
                            <i class="icofont-email ms-2"></i> enlighteducationaltrust@gmail.com
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="topbar__right">
                    <div class="topbar__icon">
                        <i class="icofont-location-pin"></i>
                    </div>
                    <div class="topbar__text">
                        <p>82/17, Tavarekere, Bangalore, Karnataka - 562130</p>
                    </div>
                    <div class="topbar__list">
                        <ul>
                            <li>
                                <a title="Facebook" target="_blank"
                                    href="https://www.facebook.com/enlightgroup2020"><i
                                        class="icofont-facebook"></i></a>
                            </li>
                            <li>
                                <a title="Twitter" target="_blank"
                                    href="https://x.com/of_enlight?t=IIT52UV_BZ1hzOkmeuhHGQ&s=08"><i
                                        class="icofont-twitter"></i></a>
                            </li>
                            <li>
                                <a title="Instagram" target="_blank"
                                    href="https://www.instagram.com/enlight_group?igsh=Z2Foc3c4b2hhOTkz"><i
                                        class="icofont-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- topbar__section__end -->


<!-- headar section start -->
<header>
    <div class="headerarea headerarea__3 header__sticky header__area">
        <div class="container desktop__menu__wrapper">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-6">
                    <div class="headerarea__left">
                        <div class="headerarea__left__logo">

                            <a href="index.html"><img loading="lazy" src="{{asset('assets/img/logo/enlight-group-logo.png')}}"
                                    alt="logo" height="80"></a>
                        </div>

                    </div>
                </div>
                <div class="col-xl-10 col-lg-10 main_menu_wrap">
                    <div class="headerarea__main__menu">
                        <nav>
                            <ul>

                                <li>
                                    <a href="index.html">Home</a>
                                </li>

                                <li>
                                    <a href="about.html">About</a>
                                </li>

                                <li>
                                    <a class="headerarea__has__dropdown" href="javascript:void(0);">Courses
                                        <i class="icofont-rounded-down"></i>
                                    </a>
                                    <ul class="headerarea__submenu">
                                        <li><a href="nursing.html">Nursing</a></li>
                                        <li><a href="paramedical.html">Paramedical</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a class="headerarea__has__dropdown" href="javascript:void(0);">Admissions
                                        <i class="icofont-rounded-down"></i>
                                    </a>
                                    <ul class="headerarea__submenu">
                                        <li><a href="javascript:void(0);">Online Admission</a></li>
                                        <li><a href="javascript:void(0);">Admission Cell</a></li>
                                        <li><a href="javascript:void(0);">Application Form</a></li>
                                        <li><a href="javascript:void(0);">Download Prospectus</a></li>
                                        <li><a href="javascript:void(0);">Pay Online</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a class="headerarea__has__dropdown" href="javascript:void(0);">Institutions
                                        <i class="icofont-rounded-down"></i>
                                    </a>
                                    <ul class="headerarea__submenu">
                                        <li><a href="javascript:void(0);">Rama Krishna School of Nursing</a>
                                        </li>
                                        <li><a href="javascript:void(0);">Sri Krishna College Of Nursing</a>
                                        </li>
                                        <li><a href="javascript:void(0);">Sapthagiri School Of Nursing</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a class="headerarea__has__dropdown" href="javascript:void(0);">Campus
                                        <i class="icofont-rounded-down"></i>
                                    </a>
                                    <ul class="headerarea__submenu">
                                        <li><a href="javascript:void(0);">Overview</a>
                                        </li>
                                        <li><a href="javascript:void(0);">Hostel</a>
                                        </li>
                                        <li><a href="javascript:void(0);">Sports</a></li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="facilities.html">Facilities</a>
                                </li>

                                <li>
                                    <a href="scholarship.html">Scholarship</a>
                                </li>

                                <li>
                                    <a href="contact.html">Contact</a>
                                </li>


                            </ul>
                        </nav>
                    </div>
                </div>

            </div>

        </div>


        <div class="container-fluid mob_menu_wrapper">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="mobile-logo">
                        <a class="logo__dark" href="#"><img loading="lazy" src="{{asset('assets/img/logo/enlight-group-logo.png')}}"
                                height="60" alt="logo"></a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="header-right-wrap">
                        <div class="mobile-off-canvas">
                            <a class="mobile-aside-button" href="#"><i class="icofont-navigation-menu"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header section end -->

<!-- Mobile Menu Start Here -->
<div class="mobile-off-canvas-active">
    <a class="mobile-aside-close"><i class="icofont  icofont-close-line"></i></a>
    <div class="header-mobile-aside-wrap">
        <div class="mobile-menu-wrap headerarea">

            <div class="mobile-navigation">

                <nav>
                    <ul class="mobile-menu">

                        <li>
                            <a href="home.html">Home</a>
                        </li>

                        <li>
                            <a href="about.html">About</a>
                        </li>

                        <li class="menu-item-has-children"><a href="javascript:void(0);">Courses</a>
                            <ul class="dropdown">
                                <li><a href="nursing.html">Nursing</a></li>
                                <li><a href="paramedical.html">Paramedical</a></li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children"><a href="javascript:void(0);">Admissions</a>
                            <ul class="dropdown">
                                <li><a href="javascript:void(0);">Online Admission</a></li>
                                <li><a href="javascript:void(0);">Admission Cell</a></li>
                                <li><a href="javascript:void(0);">Application Form</a></li>
                                <li><a href="javascript:void(0);">Download Prospectus</a></li>
                                <li><a href="javascript:void(0);">Pay Online</a></li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children"><a href="javascript:void(0);">Institutions</a>
                            <ul class="dropdown">
                                <li><a href="javascript:void(0);">Rama Krishna School of Nursing</a>
                                </li>
                                <li><a href="javascript:void(0);">Sri Krishna College Of Nursing</a>
                                </li>
                                <li><a href="javascript:void(0);">Sapthagiri School Of Nursing</a></li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children"><a href="javascript:void(0);">Campus</a>
                            <ul class="dropdown">
                                <li><a href="javascript:void(0);">Overview</a>
                                </li>
                                <li><a href="javascript:void(0);">Hostel</a>
                                </li>
                                <li><a href="javascript:void(0);">Sports</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="facilities.html">Facilities</a>
                        </li>

                        <li>
                            <a href="scholarship.html">Scholarship</a>
                        </li>

                        <li>
                            <a href="contact.html">Contact</a>
                        </li>

                    </ul>
                </nav>

            </div>

        </div>
        <div class="mobile-curr-lang-wrap">
            <div class="single-mobile-curr-lang">
                <a class="mobile-account-active" href="#">My Account <i class="icofont-thin-down"></i></a>
                <div class="lang-curr-dropdown account-dropdown-active">
                    <ul>
                        <li><a href="javascript:void(0);">Student Login</a></li>
                        <li><a href="javascript:void(0);">Online Admission</li>
                        <li><a href="javascript:void(0);">Enquiry Now</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="mobile-social-wrap">
            <a class="facebook" target="_blank" href="https://www.facebook.com/enlightgroup2020"><i
                    class="icofont icofont-facebook"></i></a>
            <a class="twitter" target="_blank" href="https://x.com/of_enlight?t=IIT52UV_BZ1hzOkmeuhHGQ&s=08"><i
                    class="icofont icofont-twitter"></i></a>
            <a class="instagram" target="_blank"
                href="https://www.instagram.com/enlight_group?igsh=Z2Foc3c4b2hhOTkz"><i
                    class="icofont icofont-instagram"></i></a>
        </div>
    </div>
</div>
<!-- Mobile Menu end Here -->

<!-- theme fixed shadow -->
<div>
    <div class="theme__shadow__circle"></div>
    <div class="theme__shadow__circle shadow__right"></div>
</div>
<!-- theme fixed shadow -->

<!-- herobannerarea__section__start -->
<div class="herobannerarea herobannerarea__2 herobannerarea__university">

    <div class="swiper university__slider">

        <div class="herobannerarea__slider__wrap swiper-wrapper">

            <div class="swiper-slide herobannerarea__single__slider"
                style="background: url(img/herobanner/bg-1.jpg);">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 col-12" data-aos="fade-up">
                            <div class="herobannerarea__content__wraper text-center">


                                <div class="herobannerarea__title">
                                    <div class="herobannerarea__small__title">
                                        <span>Welcome to Enlight Group of Institutions</span>
                                    </div>
                                    <div
                                        class="herobannerarea__title__heading__2 herobannerarea__title__heading__3">
                                        <h2>Direct Admission For Nursing <span>and</span> Paramedical</h2>
                                    </div>
                                </div>


                                <!-- <div class="herobannerarea__text herobannerarea__text__2">
                                <p>Lorem Ipsum is simply dummy text of the printing typesetting.</p>
                            </div> -->
                                <div class="hreobannerarea__button__2">
                                    <a class="default__button" href="javascript:void(0);">Know More</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide herobannerarea__single__slider"
                style="background: url(img/herobanner/bg-2.jpg);">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 col-12" data-aos="fade-up">
                            <div class="herobannerarea__content__wraper text-center">


                                <div class="herobannerarea__title">
                                    <div class="herobannerarea__small__title">
                                        <span>Welcome to Enlight Group of Institutions</span>
                                    </div>
                                    <div
                                        class="herobannerarea__title__heading__2 herobannerarea__title__heading__3">
                                        <h2>Direct Nursing Admission For <span>B.Sc. Nursing</span> &
                                            <span>GNM</span> Courses Eligibility
                                        </h2>
                                    </div>
                                </div>

                                <div class="hreobannerarea__button__2">
                                    <a class="default__button" href="javascript:void(0);">Know More</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide herobannerarea__single__slider"
                style="background: url(img/herobanner/bg-4.jpg);">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 col-12" data-aos="fade-up">
                            <div class="herobannerarea__content__wraper text-center">


                                <div class="herobannerarea__title">
                                    <div class="herobannerarea__small__title">
                                        <span>Welcome to Enlight Group of Institutions</span>
                                    </div>
                                    <div
                                        class="herobannerarea__title__heading__2 herobannerarea__title__heading__3">
                                        <h2>Direct Admission For Nursing <span>and</span> Paramedical</h2>
                                    </div>
                                </div>


                                <!-- <div class="herobannerarea__text herobannerarea__text__2">
                                <p>Lorem Ipsum is simply dummy text of the printing typesetting.</p>
                            </div> -->
                                <div class="hreobannerarea__button__2">
                                    <a class="default__button" href="#javascript:void(0);">Know More</a>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>


    <div thumbsSlider="" class="swiper university__slider__thumb">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img loading="lazy" src="{{asset('assets/img/herobanner/bg-1.jpg')}}" />
            </div>
            <div class="swiper-slide">
                <img loading="lazy" src="{{asset('assets/img/herobanner/bg-2.jpg')}}" />
            </div>
            <div class="swiper-slide">
                <img loading="lazy" src="{{asset('assets/img/herobanner/bg-4.jpg')}}" />
            </div>
        </div>
    </div>


    <div class="slider__controls__wrap slider__controls__pagination slider__controls__arrows">
        <div class="swiper-button-next arrow-btn"></div>
        <div class="swiper-button-prev arrow-btn"></div>
        <div class="swiper-pagination"></div>
    </div>

    <div class="herobannerarea__icon__2">
        <img loading="lazy" class="herobanner__common__img herobanner__img__1"
            src="{{asset('assets/img/herobanner/herobanner__1.png')}}" alt="photo">
        <img loading="lazy" class="herobanner__common__img herobanner__img__2"
            src="{{asset('assets/img/herobanner/herobanner__2.png')}}" alt="photo">
        <img loading="lazy" class="herobanner__common__img herobanner__img__3"
            src="{{asset('assets/img/herobanner/herobanner__3.png')}}" alt="photo">
        <!--<img loading="lazy"  class="herobanner__common__img herobanner__img__4" src="{{asset('assets/img/herobanner/herobanner__4.png')}}" alt="photo">-->
        <img loading="lazy" class="herobanner__common__img herobanner__img__5"
            src="{{asset('assets/img/herobanner/herobanner__5.png')}}" alt="photo">
    </div>

</div>
<!-- herobannerarea__section__end-->

<!-- animate condtent start-->
<div class="animate__content sp_bottom_40 sp_top_40">
    <div class="container-fluid full__width__padding">
        <div class="animate__content__wrap">
            <div class="animate__content__single">
                <span>ADMISSION OPEN FOR SESSION 2024 - 2025 - Enlight Educational Trust is committed to
                    excellence in education that meets the expectations of the students aspiring for enriching
                    academic and professional careers.</span>
            </div>
            <div class="animate__content__single animate__content__single--2">
                <span> <a href="javascript:void(0);">Apply Online</a></span>
            </div>
            <div class="animate__content__single animate__content__single--2">
                <span> <a href="javascript:void(0);">Download Brochure</a></span>
            </div>
            <div class="animate__content__single animate__content__single--2">
                <span> <a href="javascript:void(0);">Courses</a></span>
            </div>
            <div class="animate__content__single">
                <span>ADMISSION OPEN FOR SESSION 2024 - 2025 - Enlight Educational Trust is committed to
                    excellence in education that meets the expectations of the students aspiring for enriching
                    academic and professional careers.</span>
            </div>
            <div class="animate__content__single animate__content__single--2">
                <span> <a href="javascript:void(0);">Apply Online</a></span>
            </div>
            <div class="animate__content__single animate__content__single--2">
                <span> <a href="javascript:void(0);">Download Brochure</a></span>
            </div>
            <div class="animate__content__single animate__content__single--2">
                <span> <a href="javascript:void(0);">Courses</a></span>
            </div>
        </div>
    </div>
</div>
<!-- animate condtent end-->

<!-- aboutarea__section__start -->
<div class="aboutarea__2 sp_top_100">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12" data-aos="fade-up">
                <div class="about__right__wraper__2">
                    <div class="educationarea__img" data-tilt>
                        <img loading="lazy" class="aboutarea__2__img__1" src="{{asset('assets/img/about/institute-1.jpg')}}"
                            alt="education">
                        <img loading="lazy" class="aboutarea__2__img__2" src="{{asset('assets/img/about/institute-2.jpg')}}"
                            alt="education">
                        <img loading="lazy" class="aboutarea__2__img__3" src="{{asset('assets/img/about/about_4.png')}}"
                            alt="education">
                        <img loading="lazy" class="aboutarea__2__img__4" src="{{asset('assets/img/about/about_11.png')}}"
                            alt="education">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12" data-aos="fade-up">

                <div class="aboutarea__content__wraper">
                    <div class="aboutarea__button">
                        <div class="default__small__button">About Us</div>
                    </div>
                    <div class="aboutarea__headding heading__underline">
                        <h2>Reliable & Trusted <span>Institutions</span></h2>
                    </div>
                    <div class="aboutarea__para aboutarea__para__2">
                        <p>The Enlight Group Of Institutions Is Located In A Sprawling Green Campus Which Is
                            Spread Over 2 Acres Of Land With Great Ambience And Is Easily Accessible By Road,
                            Rail, Metro And Air. The Institution Is Built With The State Of The Art
                            Infrastructure Creating A Favorable Environment To Explore Higher Learning,
                            Enriching Personal Growth And Evolving As Better Versions Of Oneself. Thus The
                            Tagline Of Enlight Group Of Institutions – Explore, Enrich And Evolve...</p>
                    </div>
                    <div>
                        <a title="Know more about us" class="default__button" href="about.html">Know More</a>
                    </div>
                    <!-- <div class="aboutarea__para aboutarea__para__2">
                        <p>Honourable Chairman Of Enlight Group Of Institutions Driven With A Philanthropic Vision And Mission And Believes That Education Should Make Human-Beings Self-Reliant, Selfless And Liberated. Enlight Group Of Institutions Is Driven By Values Like Innovation, Commitment, Passion And Integrity. The Institution Boasts Of Internal Quality Delivery Monitoring Mechanism To Ensure Top-Notch Outcome And Highly Qualified, Committed And Experienced Teaching-Staff, Who Ensure That Every Student Will Go Through The Journey Of Exploring, Enriching And Evolving As Enlightened Human Beings.</p>
                    </div> -->
                    <!-- <div class="aboutarea__list__2">
                        <ul>
                            <li>
                                <i class="icofont-check"></i> Lorem Ipsum is simply dummy
                            </li>

                            <li>
                                <i class="icofont-check"></i> Explore a variety of fresh educational teach
                            </li>

                            <li>
                                <i class="icofont-check"></i> Lorem Ipsum is simply dummy text of
                            </li>
                        </ul>
                    </div> -->

                </div>

            </div>
        </div>
    </div>
</div>
<!-- aboutarea__section__end -->

<!-- news and notices - start -->
<div class="blogarea sp_bottom_70 sp_top_100">
    <div class="container">
        <div class="row aos-init" data-aos="fade-up">
            <div class="col-xl-12">
                <div class="section__title text-center">
                    <div class="section__title__button">
                        <div class="default__small__button">News &amp; Notices</div>
                    </div>
                    <div class="section__title__heading">
                        <h2>Latest News &amp; Notices</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6" data-aos="fade-up">
                <div class="blogarea__content__wraper__scroll">
                    <div class="">
                        <h3>News</h3>
                    </div>
                    <div class="blogarea__content__wraper">
                        <div class="blogarea__text__wraper">
                            <div class="blogarea__img">
                                <div class="blogarea__date">
                                    <i class="icofont-news"></i>
                                </div>
                            </div>
                            <div class="blogarea__para">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, excepturi! Adipisci sint earum qui. Aspernatur omnis maiores rem dolor impedit tenetur, doloremque iste amet quis in, consequatur optio non similique?</p>
                                <p class="align-items-center d-flex gap-2"><span><i
                                            class="icofont-calendar text-primary"></i></span>19-05-2024</p>
                            </div>
                        </div>

                        <div class="blogarea__text__wraper">
                            <div class="blogarea__img">
                                <div class="blogarea__date">
                                    <i class="icofont-news"></i>
                                </div>
                            </div>
                            <div class="blogarea__para">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, excepturi! Adipisci sint earum qui. Aspernatur omnis maiores rem dolor impedit tenetur, doloremque iste amet quis in, consequatur optio non similique?</p>
                                <p class="align-items-center d-flex gap-2"><span><i
                                            class="icofont-calendar text-primary"></i></span>19-05-2024</p>
                            </div>
                        </div>

                        <div class="blogarea__text__wraper">
                            <div class="blogarea__img">
                                <div class="blogarea__date">
                                    <i class="icofont-news"></i>
                                </div>
                            </div>
                            <div class="blogarea__para">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, excepturi! Adipisci sint earum qui. Aspernatur omnis maiores rem dolor impedit tenetur, doloremque iste amet quis in, consequatur optio non similique?</p>
                                <p class="align-items-center d-flex gap-2"><span><i
                                            class="icofont-calendar text-primary"></i></span>19-05-2024</p>
                            </div>
                        </div>

                        <div class="blogarea__text__wraper">
                            <div class="blogarea__img">
                                <div class="blogarea__date">
                                    <i class="icofont-news"></i>
                                </div>
                            </div>
                            <div class="blogarea__para">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, excepturi! Adipisci sint earum qui. Aspernatur omnis maiores rem dolor impedit tenetur, doloremque iste amet quis in, consequatur optio non similique?</p>
                                <p class="align-items-center d-flex gap-2"><span><i
                                            class="icofont-calendar text-primary"></i></span>19-05-2024</p>
                            </div>
                        </div>

                        <div class="blogarea__text__wraper">
                            <div class="blogarea__img">
                                <div class="blogarea__date">
                                    <i class="icofont-news"></i>
                                </div>
                            </div>
                            <div class="blogarea__para">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, excepturi! Adipisci sint earum qui. Aspernatur omnis maiores rem dolor impedit tenetur, doloremque iste amet quis in, consequatur optio non similique?</p>
                                <p class="align-items-center d-flex gap-2"><span><i
                                            class="icofont-calendar text-primary"></i></span>19-05-2024</p>
                            </div>
                        </div>

                    </div>
                    <div class="text-end">
                        <a href="javascript:void(0);" class="default__button">View More</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6" data-aos="fade-up">
                <div class="blogarea__content__wraper__scroll">
                    <div class="">
                        <h3>Notices</h3>
                    </div>
                    <div class="blogarea__content__wraper">
                        <div class="blogarea__text__wraper">
                            <div class="blogarea__img">
                                <div class="blogarea__date">
                                    <i class="icofont-file-document"></i>
                                </div>
                            </div>
                            <div class="blogarea__para">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, excepturi! Adipisci sint earum qui. Aspernatur omnis maiores rem dolor impedit tenetur, doloremque iste amet quis in, consequatur optio non similique?</p>
                                <p class="align-items-center d-flex gap-2"><span><i
                                            class="icofont-calendar text-primary"></i></span>19-05-2024</p>
                            </div>
                        </div>

                        <div class="blogarea__text__wraper">
                            <div class="blogarea__img">
                                <div class="blogarea__date">
                                    <i class="icofont-file-document"></i>
                                </div>
                            </div>
                            <div class="blogarea__para">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, excepturi! Adipisci sint earum qui. Aspernatur omnis maiores rem dolor impedit tenetur, doloremque iste amet quis in, consequatur optio non similique?</p>
                                <p class="align-items-center d-flex gap-2"><span><i
                                            class="icofont-calendar text-primary"></i></span>19-05-2024</p>
                            </div>
                        </div>

                        <div class="blogarea__text__wraper">
                            <div class="blogarea__img">
                                <div class="blogarea__date">
                                    <i class="icofont-file-document"></i>
                                </div>
                            </div>
                            <div class="blogarea__para">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, excepturi! Adipisci sint earum qui. Aspernatur omnis maiores rem dolor impedit tenetur, doloremque iste amet quis in, consequatur optio non similique?</p>
                                <p class="align-items-center d-flex gap-2"><span><i
                                            class="icofont-calendar text-primary"></i></span>19-05-2024</p>
                            </div>
                        </div>

                        <div class="blogarea__text__wraper">
                            <div class="blogarea__img">
                                <div class="blogarea__date">
                                    <i class="icofont-file-document"></i>
                                </div>
                            </div>
                            <div class="blogarea__para">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, excepturi! Adipisci sint earum qui. Aspernatur omnis maiores rem dolor impedit tenetur, doloremque iste amet quis in, consequatur optio non similique?</p>
                                <p class="align-items-center d-flex gap-2"><span><i
                                            class="icofont-calendar text-primary"></i></span>19-05-2024</p>
                            </div>
                        </div>

                        <div class="blogarea__text__wraper">
                            <div class="blogarea__img">
                                <div class="blogarea__date">
                                    <i class="icofont-file-document"></i>
                                </div>
                            </div>
                            <div class="blogarea__para">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, excepturi! Adipisci sint earum qui. Aspernatur omnis maiores rem dolor impedit tenetur, doloremque iste amet quis in, consequatur optio non similique?</p>
                                <p class="align-items-center d-flex gap-2"><span><i
                                            class="icofont-calendar text-primary"></i></span>19-05-2024</p>
                            </div>
                        </div>

                    </div>
                    <div class="text-end">
                        <a href="javascript:void(0);" class="default__button">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- news and notices - end -->

<!-- our__best__institutes - start -->
<div class="blogarea__2 sp_top_40 sp_bottom_100">
    <div class="container">
        <div class="row">
            <div class="col-xl-12" data-aos="fade-up">
                <div class="section__title__2 text-center teamarea__margin">
                    <div class="section__small__title">
                        <span>Institutes</span>
                    </div>
                    <div class="section__title__heading__2 section__title__heading__3 heading__fontsize__2">
                        <h2>Our Best Institutes</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12" data-aos="fade-up">
                <div class="single__blog__wraper">
                    <div class="single__blog__img">
                        <img loading="lazy" src="{{asset('assets/img/about/rama-krishna.jpg')}}" alt="Institute">
                    </div>
                    <div class="single__blog__content">
                        <p>Institute</p>
                        <h4> <a href="#">Rama Krishna School of Nursing </a></h4>
                        <div class="single__blog__bottom__button">
                            <a href="#">Read More
                                <i class="icofont-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12" data-aos="fade-up">
                <div class="single__blog__wraper">
                    <div class="single__blog__img">
                        <img loading="lazy" src="{{asset('assets/img/about/sri-krishna.jpg')}}" alt="Institute">
                    </div>
                    <div class="single__blog__content">
                        <p>Institute</p>
                        <h4> <a href="#">Sri Krishna College Of Nursing </a></h4>
                        <div class="single__blog__bottom__button">
                            <a href="#">Read More
                                <i class="icofont-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12" data-aos="fade-up">
                <div class="single__blog__wraper">
                    <div class="single__blog__img">
                        <img loading="lazy" src="{{asset('assets/img/about/sapthagiri.jpg')}}" alt="Institute">
                    </div>
                    <div class="single__blog__content">
                        <p>Institute</p>
                        <h4> <a href="#">Sapthagiri School Of <br>Nursing</a></h4>
                        <div class="single__blog__bottom__button">
                            <a href="#">Read More
                                <i class="icofont-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- our__best__institutes - end -->

<!-- .about__tap__section__end -->
<div class="gridarea__2 sp_bottom_100" data-aos="fade-up">
    <div class="container-fluid full__width__padding">

        <div class="section__title">

            <div class="section__title__heading">
                <h2>Courses We Offer</h2>
            </div>
        </div>

        <div class="row row__custom__class">

            <div class="swiper featured__course">
                <div class="swiper-wrapper">
                    <!-- for nursing -->
                    <div
                        class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 grid-item column__custom__class swiper-slide">
                        <div class="gridarea__wraper">
                            <div class="gridarea__img">
                                <a href="course-details.html"><img loading="lazy" src="{{asset('assets/img/courses/course-1.jpg')}}"
                                        alt="grid"></a>
                                <div class="gridarea__small__button gridarea__small__button__1">
                                    <div class="grid__badge">Nursing</div>
                                </div>

                            </div>
                            <div class="gridarea__content">
                                <div class="gridarea__list">
                                    <ul>
                                        <li>
                                            <i class="icofont-chair"></i> 20 seats
                                        </li>
                                        <li>
                                            <div class="text-end"><i class="icofont-clock-time"></i> 4 Years
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="gridarea__heading">
                                    <h3><a href="course-details.html">B.SC Nursing</a></h3>
                                </div>
                                <div>
                                    <p>The course of study shall extend over 4 academic years from the date of
                                        commencement of his/ her study of ....</p>
                                </div>
                                <div class="gridarea__bottom">

                                    <a href="instructor-details.html">
                                        <div class="gridarea__small__img">
                                            <div class="gridarea__small__content ms-0">
                                                <h6>Read More <i class="icofont-long-arrow-right"></i></h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 grid-item column__custom__class swiper-slide">
                        <div class="gridarea__wraper">
                            <div class="gridarea__img">
                                <a href="course-details.html"><img loading="lazy" src="{{asset('assets/img/courses/course-2.jpg')}}"
                                        alt="grid"></a>
                                <div class="gridarea__small__button">
                                    <div class="grid__badge">Nursing</div>
                                </div>

                            </div>
                            <div class="gridarea__content">
                                <div class="gridarea__list">
                                    <ul>
                                        <li>
                                            <i class="icofont-chair"></i> 20 seats
                                        </li>
                                        <li>
                                            <div class="text-end"><i class="icofont-clock-time"></i> 2 Years
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="gridarea__heading">
                                    <h3><a href="course-details.html">M.SC Nursing</a></h3>
                                </div>
                                <div>
                                    <p>MSc Nursing will prepare Nurses, to improve the quality of nursing
                                        education and practice, in India. It will build upon....</p>
                                </div>
                                <div class="gridarea__bottom">

                                    <a href="instructor-details.html">
                                        <div class="gridarea__small__img">
                                            <div class="gridarea__small__content ms-0">
                                                <h6>Read More <i class="icofont-long-arrow-right"></i></h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- for paramedical -->
                    <div
                        class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 grid-item column__custom__class swiper-slide">
                        <div class="gridarea__wraper">
                            <div class="gridarea__img">
                                <a href="course-details.html"><img loading="lazy" src="{{asset('assets/img/courses/course-3.jpg')}}"
                                        alt="grid"></a>
                                <div class="gridarea__small__button">
                                    <div class="grid__badge blue__color">Paramedical</div>
                                </div>
                                <div class="gridarea__small__icon">
                                    <a href="#"><i class="icofont-heart-alt"></i></a>
                                </div>

                            </div>
                            <div class="gridarea__content">
                                <div class="gridarea__list">
                                    <ul>
                                        <li>
                                            <i class="icofont-chair"></i> 40 seats
                                        </li>
                                        <li>
                                            <div class="text-end"><i class="icofont-clock-time"></i> 2 Years
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="gridarea__heading">
                                    <h3><a href="course-details.html">Diploma in Medical Laboratory Technology
                                            (DMLT)</a></h3>
                                </div>
                                <div>
                                    <p>DMLT is a two years course. A professional with DMLT examines and
                                        analyzes different body....</p>
                                </div>
                                <div class="gridarea__bottom">

                                    <a href="instructor-details.html">
                                        <div class="gridarea__small__img">
                                            <div class="gridarea__small__content ms-0">
                                                <h6>Read More <i class="icofont-long-arrow-right"></i></h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 grid-item column__custom__class swiper-slide">
                        <div class="gridarea__wraper">
                            <div class="gridarea__img">
                                <a href="course-details.html"><img loading="lazy" src="{{asset('assets/img/courses/course-4.jpg')}}"
                                        alt="grid"></a>
                                <div class="gridarea__small__button gridarea__small__button__1">
                                    <div class="grid__badge blue__color">Paramedical</div>
                                </div>

                            </div>
                            <div class="gridarea__content">
                                <div class="gridarea__list">
                                    <ul>
                                        <li>
                                            <i class="icofont-chair"></i> 20 seats
                                        </li>
                                        <li>
                                            <div class="text-end"><i class="icofont-clock-time"></i> 2 Years
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="gridarea__heading">
                                    <h3><a href="course-details.html">Diploma in Medical Imaging/X-Ray
                                            Technology (DMXT)</a></h3>
                                </div>
                                <div>
                                    <p>DMXT is an undergraduate radiology course and is all about how
                                        electromagnetic radiation....</p>
                                </div>
                                <div class="gridarea__bottom">

                                    <a href="instructor-details.html">
                                        <div class="gridarea__small__img">
                                            <div class="gridarea__small__content">
                                                <h6>Read More <i class="icofont-long-arrow-right"></i></h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- for nursing -->
                    <div
                        class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 grid-item column__custom__class swiper-slide">
                        <div class="gridarea__wraper">
                            <div class="gridarea__img">
                                <a href="course-details.html"><img loading="lazy" src="{{asset('assets/img/courses/course-5.jpg')}}"
                                        alt="grid"></a>
                                <div class="gridarea__small__button gridarea__small__button__1">
                                    <div class="grid__badge">Nursing</div>
                                </div>

                            </div>
                            <div class="gridarea__content">
                                <div class="gridarea__list">
                                    <ul>
                                        <li>
                                            <i class="icofont-chair"></i> 20 seats
                                        </li>
                                        <li>
                                            <div class="text-end"><i class="icofont-clock-time"></i> 2 Years
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="gridarea__heading">
                                    <h3><a href="course-details.html">PBBSc Nursing</a></h3>
                                </div>
                                <div>
                                    <p>The B.Sc Nursing (Post certificate) course of study shall extend over a
                                        period of 2 academic years from the date....</p>
                                </div>
                                <div class="gridarea__bottom">

                                    <a href="instructor-details.html">
                                        <div class="gridarea__small__img">
                                            <div class="gridarea__small__content ms-0">
                                                <h6>Read More <i class="icofont-long-arrow-right"></i></h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 grid-item column__custom__class swiper-slide">
                        <div class="gridarea__wraper">
                            <div class="gridarea__img">
                                <a href="course-details.html"><img loading="lazy" src="{{asset('assets/img/courses/course-6.jpg')}}"
                                        alt="grid"></a>
                                <div class="gridarea__small__button gridarea__small__button__1">
                                    <div class="grid__badge">Nursing</div>
                                </div>

                            </div>
                            <div class="gridarea__content">
                                <div class="gridarea__list">
                                    <ul>
                                        <li>
                                            <i class="icofont-chair"></i> 20 seats
                                        </li>
                                        <li>
                                            <div class="text-end"><i class="icofont-clock-time"></i> 3 Years
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="gridarea__heading">
                                    <h3><a href="course-details.html">GNM Nursing</a></h3>
                                </div>
                                <div>
                                    <p>GNM referred to as General Nursing and Midwifery deals with the education
                                        of nurses in general health care, nursing, and....</p>
                                </div>
                                <div class="gridarea__bottom">

                                    <a href="instructor-details.html">
                                        <div class="gridarea__small__img">
                                            <div class="gridarea__small__content ms-0">
                                                <h6>Read More <i class="icofont-long-arrow-right"></i></h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- for paramedical -->
                    <div
                        class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 grid-item column__custom__class swiper-slide">
                        <div class="gridarea__wraper">
                            <div class="gridarea__img">
                                <a href="course-details.html"><img loading="lazy" src="{{asset('assets/img/courses/course-7.jpg')}}"
                                        alt="grid"></a>
                                <div class="gridarea__small__button gridarea__small__button__1">
                                    <div class="grid__badge blue__color">Paramedical</div>
                                </div>

                            </div>
                            <div class="gridarea__content">
                                <div class="gridarea__list">
                                    <ul>
                                        <li>
                                            <i class="icofont-chair"></i> 20 seats
                                        </li>
                                        <li>
                                            <div class="text-end"><i class="icofont-clock-time"></i> 2 Years
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="gridarea__heading">
                                    <h3><a href="course-details.html">Diploma in Medical Operation Technology
                                            (DMOT)</a></h3>
                                </div>
                                <div>
                                    <p>DMOT is a two-year diploma program designed to create trained and
                                        qualified professionals ....</p>
                                </div>
                                <div class="gridarea__bottom">

                                    <a href="instructor-details.html">
                                        <div class="gridarea__small__img">
                                            <div class="gridarea__small__content">
                                                <h6>Read More <i class="icofont-long-arrow-right"></i></h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 grid-item column__custom__class swiper-slide">
                        <div class="gridarea__wraper">
                            <div class="gridarea__img">
                                <a href="course-details.html"><img loading="lazy" src="{{asset('assets/img/courses/course-8.jpg')}}"
                                        alt="grid"></a>
                                <div class="gridarea__small__button gridarea__small__button__1">
                                    <div class="grid__badge blue__color">Paramedical</div>
                                </div>

                            </div>
                            <div class="gridarea__content">
                                <div class="gridarea__list">
                                    <ul>
                                        <li>
                                            <i class="icofont-chair"></i> 20 seats
                                        </li>
                                        <li>
                                            <div class="text-end"><i class="icofont-clock-time"></i> 2 Years
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="gridarea__heading">
                                    <h3><a href="course-details.html">Diploma in Medical Anesthesia Technology
                                            (DOT/DAT)</a></h3>
                                </div>
                                <div>
                                    <p>DOT/DAT leads the students to a comprehensive study of the field of
                                        anesthetics and its .....</p>
                                </div>
                                <div class="gridarea__bottom">

                                    <a href="instructor-details.html">
                                        <div class="gridarea__small__img">
                                            <div class="gridarea__small__content">
                                                <h6>Read More <i class="icofont-long-arrow-right"></i></h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="slider__controls__wrap slider__controls__arrows">
                    <div class="swiper-button-next arrow-btn"></div>
                    <div class="swiper-button-prev arrow-btn"></div>
                </div>

            </div>
        </div>
    </div>
</div>


<!-- register__section__start-->
<!-- <div class="registerarea sp_top_90">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12" data-aos="fade-up">
                <div class="registerarea__wraper">
                    <div class="section__title registerarea__section__title">
                        <div class="section__title__button">
                            <div class="default__small__button">Course List</div>
                        </div>
                        <div class="section__title__heading heading__underline">
                            <h2>Register Your <span>Account </span>Get free access to <small>60000</small>
                                online course
                            </h2>
                        </div>
                    </div>
                    <div class="registerarea__content">
                        <div class="registerarea__video">
                            <div class="video__pop__btn">
                                <a class="video-btn" href="https://www.youtube.com/watch?v=vHdclsdkp28"> <img
                                        loading="lazy" src="{{asset('assets/img/icon/video.png')}}" alt=""></a>
                            </div>
                            <div class="registerarea__para">
                                <p>Learn Something new & Build Your Career From Anywhere In The World</p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <div class="registerarea__img">
        <img loading="lazy" class="register__1" src="{{asset('assets/img/register/register__1.png')}}" alt="register">
        <img loading="lazy" class="register__2" src="{{asset('assets/img/register/register__2.png')}}" alt="register">
        <img loading="lazy" class="register__3" src="{{asset('assets/img/register/register__3.png')}}" alt="register">
    </div>
</div> -->
<!-- register__section__end-->


<!-- facility__start -->
<div class="aboutarea__2 aboutarea__4 sp_bottom_100">
    <div class="container">
        <div class="row">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" data-aos="fade-up">

                <div class="aboutarea__content__wraper">

                    <div class="section__title__2">
                        <div class="section__small__title">
                            <span>Facility</span>
                        </div>
                        <div class="section__title__heading__2 section__title__heading__3 heading__fontsize__2">
                            <h2>Facility & Services Provided By Us</h2>
                        </div>
                    </div>
                    <div class="aboutarea__list__2 sp_top_40">
                        <ul>
                            <li class="d-flex gap-1">
                                <span><i class="icofont-read-book"></i></span> <span><b
                                        class="text-primary">Library</b> - The library at Enlight Group Of
                                    Institutions (ELGI) is a collection of resources, both physical and digital,
                                    that is made available to students and faculty for use and study related to
                                    nursing , paramedical, pharmacy,Allied health science.</span>
                            </li>

                            <li class="d-flex gap-1">
                                <span><i class="icofont-stethoscope"></i></span> <span><b
                                        class="text-primary">Clinical Training</b> - The Clinical Training
                                    program at ENLIGHT GROUP OF INSTITUTIONS (ELGI) is designed to provide
                                    students with hands-on experience in diagnosing and treating mental health
                                    disorders. Students learn from experienced clinicians and participate in
                                    supervised clinical rotations, gaining the skills and knowledge necessary to
                                    become competent mental health professionals.</span>
                            </li>

                            <li class="d-flex gap-1">
                                <span><i class="icofont-bus-alt-1"></i></span> <span><b
                                        class="text-primary">Transport</b> - The transport facility at Enlight
                                    Group Of Institutions (ELGI) provides safe and efficient transportation for
                                    students, faculty and staff to and from the institute.</span>
                            </li>

                            <li class="d-flex gap-1">
                                <span><i class="icofont-wifi"></i></span> <span><b class="text-primary">Wifi</b>
                                    - The wifi at Enlight Group Of Institutions (ELGI)provides internet
                                    connectivity to students to facilitate online learning, research <br>and
                                    communication.</span>
                            </li>

                            <li class="d-flex gap-1">
                                <span><i class="icofont-brain-alt"></i></span> <span><b
                                        class="text-primary">Demonstartion Room</b> - The demonstartion room at
                                    ENLIGHT GROUP OF INSTITUTIONS (ELGI) is a specialized space for students and
                                    faculty to conduct and observe hands-on demonstrations, experiments and
                                    practicals related to nursing and paramedical science.</span>
                            </li>

                            <li class="d-flex gap-1">
                                <span><i class="icofont-graduate-alt"></i></span> <span><b
                                        class="text-primary">Placement</b> - The wifi at Enlight Group Of
                                    Institutions (ELGI)provides internet connectivity to students to facilitate
                                    online learning, research and communication.</span>
                            </li>

                        </ul>
                    </div>

                </div>

            </div>
            <!-- <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12" data-aos="fade-up">
                <div class="about__right__wraper__2 about__right__wraper__4">
                    <div class="educationarea__img" data-tilt="" style="will-change: transform; transform: perspective(2000px) rotateX(0deg) rotateY(0deg);">
                        <img loading="lazy" class="aboutimg__4__img__1" src="{{asset('assets/img/about/about_12.png')}}" alt="about">
                    </div>

                </div>
            </div> -->
        </div>
    </div>
</div>
<!-- facility__end -->


<!-- testmonialarea__section__atart -->
<div class="testmonialarea sp_top_100 sp_bottom_110">
    <div class="container">
        <div class="row" data-aos="fade-up">
            <div class="section__title text-center">
                <div class="section__title__button">
                    <div class="default__small__button">Testimonials</div>
                </div>
                <div class="section__title__heading heading__underline">
                    <h2>What <span>Students</span> Say About Us</h2>
                </div>
            </div>
        </div>
        <div class="row row__custom__class testimonial__slider__active default__arrow" data-aos="fade-up">
            <div class="col-xl-6 column__custom__class">
                <div class="single__testimonial__wraper">
                    <div class="single__testimonial__inner">
                        <div class="testimonial__img">
                            <img loading="lazy" src="{{asset('assets/img/testimonial/student-1.jpg')}}" alt="student-photo"
                                height="60" class="rounded-circle">
                            <div class="testimonial__name">
                                <h6>Mousumita Das</h6>
                                <span>Assam</span>
                            </div>
                        </div>
                        <div class="testimonial__icon">
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                        </div>
                    </div>

                    <div class="testimonial__content">
                        <p>At Enlight Group Of Institutions’ pharmacy college, students benefit from innovative
                            teaching methods and industry-relevant curriculum, ensuring their readiness for the
                            pharmaceutical field.</p>
                    </div>


                </div>
            </div>
            <div class="col-xl-6 column__custom__class">
                <div class="single__testimonial__wraper">
                    <div class="single__testimonial__inner">
                        <div class="testimonial__img">
                            <img loading="lazy" src="{{asset('assets/img/testimonial/student-2.jpg')}}" alt="student-photo"
                                height="60" class="rounded-circle">
                            <div class="testimonial__name">
                                <h6>Megha Dey</h6>
                                <span>Tripura</span>
                            </div>
                        </div>
                        <div class="testimonial__icon">
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                        </div>
                    </div>

                    <div class="testimonial__content">
                        <p>Enlight Group of Institutions excels in nursing education, offering comprehensive
                            programs and expert faculty for aspiring healthcare professionals. </p>
                    </div>


                </div>
            </div>
            <div class="col-xl-6 column__custom__class">
                <div class="single__testimonial__wraper">
                    <div class="single__testimonial__inner">
                        <div class="testimonial__img">
                            <img loading="lazy" src="{{asset('assets/img/testimonial/student-3.jpg')}}" alt="student-photo"
                                height="60" class="rounded-circle">
                            <div class="testimonial__name">
                                <h6>Mitan Das</h6>
                                <span>Tripura</span>
                            </div>
                        </div>
                        <div class="testimonial__icon">
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                        </div>
                    </div>

                    <div class="testimonial__content">
                        <p>Pharmacy education at ELGI is top-notch, with modern facilities and dedicated faculty
                            fostering future pharmacists’ growth.</p>
                    </div>


                </div>
            </div>
            <div class="col-xl-6 column__custom__class">
                <div class="single__testimonial__wraper">
                    <div class="single__testimonial__inner">
                        <div class="testimonial__img">
                            <img loading="lazy" src="{{asset('assets/img/testimonial/student-4.jpg')}}" alt="student-photo"
                                height="60" class="rounded-circle">
                            <div class="testimonial__name">
                                <h6>Susmita Roy</h6>
                                <span>Tripura</span>
                            </div>
                        </div>
                        <div class="testimonial__icon">
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                        </div>
                    </div>

                    <div class="testimonial__content">
                        <p>Enlight Group of Institutions’ nursing college provides rigorous training, preparing
                            students with hands-on experience and valuable skills for their healthcare careers.
                        </p>
                    </div>


                </div>
            </div>
            <div class="col-xl-6 column__custom__class">
                <div class="single__testimonial__wraper">
                    <div class="single__testimonial__inner">
                        <div class="testimonial__img">
                            <img loading="lazy" src="{{asset('assets/img/testimonial/student-5.jpg')}}" alt="student-photo"
                                height="60" class="rounded-circle">
                            <div class="testimonial__name">
                                <h6>Susmita Singha</h6>
                                <span>Assam</span>
                            </div>
                        </div>
                        <div class="testimonial__icon">
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                        </div>
                    </div>

                    <div class="testimonial__content">
                        <p>Enlight Group Of Institutions sets the standard for excellence in nursing and
                            pharmacy education, with a supportive environment and career-focused programs
                            propelling students toward success.</p>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- testmonialarea__section__end-->

<!-- brand__section__start -->
<div class="brandarea sp_bottom_60">
    <div class="container">
        <div class="row">
            <div class="col-xl-12" data-aos="fade-up">
                <div class="section__title text-center">

                    <div class="section__title__heading heading__underline">
                        <h2><span>Placement</span> In Associated With
                        </h2>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="brandarea__wraper" data-aos="fade-up">
                <div class="brandarea__img">
                    <a href="#"><img loading="lazy" src="{{asset('assets/img/brand/partner-1.png')}}" alt="brand" height="70"></a>
                </div>
                <div class="brandarea__img">
                    <a href="#"><img loading="lazy" src="{{asset('assets/img/brand/partner-3.png')}}" alt="brand" height="70"></a>
                </div>
                <div class="brandarea__img">
                    <a href="#"><img loading="lazy" src="{{asset('assets/img/brand/partner-3.png')}}" alt="brand" height="70"></a>
                </div>
                <div class="brandarea__img">
                    <a href="#"><img loading="lazy" src="{{asset('assets/img/brand/partner-4.png')}}" alt="brand" height="70"></a>
                </div>
                <div class="brandarea__img">
                    <a href="#"><img loading="lazy" src="{{asset('assets/img/brand/partner-5.png')}}" alt="brand" height="70"></a>
                </div>
                <div class="brandarea__img">
                    <a href="#"><img loading="lazy" src="{{asset('assets/img/brand/partner-6.png')}}" alt="brand" height="70"></a>
                </div>
                <div class="brandarea__img">
                    <a href="#"><img loading="lazy" src="{{asset('assets/img/brand/partner-7.png')}}" alt="brand" height="70"></a>
                </div>
                <div class="brandarea__img">
                    <a href="#"><img loading="lazy" src="{{asset('assets/img/brand/partner-8.png')}}" alt="brand" height="70"></a>
                </div>
                <div class="brandarea__img">
                    <a href="#"><img loading="lazy" src="{{asset('assets/img/brand/partner-9.png')}}" alt="brand" height="70"></a>
                </div>
                <div class="brandarea__img">
                    <a href="#"><img loading="lazy" src="{{asset('assets/img/brand/partner-10.png')}}" alt="brand" height="70"></a>
                </div>
                <div class="brandarea__img">
                    <a href="#"><img loading="lazy" src="{{asset('assets/img/brand/partner-11.png')}}" alt="brand" height="70"></a>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- brand__section__end -->

<div class="gallery">
    <div class="container-fluid full__width__padding sp_top_100 sp_bottom_100">

        <div class="section__title text-center">

            <div class="section__title__heading heading__underline">
                <h2>Our Gallery
                </h2>
            </div>
        </div>

        <div class="blogsidebar__content__wraper__2">

            <div class="photo__gallery__img">

                <div class="single__gallery__img">
                    <img loading="lazy" src="{{asset('assets/img/gallery/gallery-1.jpg')}}" alt="photo">
                    <div class="gallery__icon">
                        <a class="popup__img" href="img/gallery/gallery-1.jpg')}}"> <i
                                class="icofont-eye-alt"></i></a>
                    </div>
                </div>
                <div class="single__gallery__img">
                    <img loading="lazy" src="{{asset('assets/img/gallery/gallery-2.jpg')}}" alt="photo">
                    <div class="gallery__icon">
                        <a class="popup__img" href="img/gallery/gallery-2.jpg')}}"> <i
                                class="icofont-eye-alt"></i></a>
                    </div>
                </div>
                <div class="single__gallery__img">
                    <img loading="lazy" src="{{asset('assets/img/gallery/gallery-3.jpg')}}" alt="photo">
                    <div class="gallery__icon">
                        <a class="popup__img" href="img/gallery/gallery-3.jpg')}}"> <i
                                class="icofont-eye-alt"></i></a>
                    </div>
                </div>
                <div class="single__gallery__img">
                    <img loading="lazy" src="{{asset('assets/img/gallery/gallery-4.jpg')}}" alt="photo">
                    <div class="gallery__icon">
                        <a class="popup__img" href="img/gallery/gallery-4.jpg')}}"> <i
                                class="icofont-eye-alt"></i></a>
                    </div>
                </div>
                <div class="single__gallery__img">
                    <img loading="lazy" src="{{asset('assets/img/gallery/gallery-5.jpg')}}" alt="photo">
                    <div class="gallery__icon">
                        <a class="popup__img" href="img/gallery/gallery-5.jpg')}}"> <i
                                class="icofont-eye-alt"></i></a>
                    </div>
                </div>
                <div class="single__gallery__img">
                    <img loading="lazy" src="{{asset('assets/img/gallery/gallery-6.jpg')}}" alt="photo">
                    <div class="gallery__icon">
                        <a class="popup__img" href="img/gallery/gallery-6.jpg')}}"> <i
                                class="icofont-eye-alt"></i></a>
                    </div>
                </div>

                <div class="single__gallery__img">
                    <img loading="lazy" src="{{asset('assets/img/gallery/gallery-7.jpg')}}" alt="photo">
                    <div class="gallery__icon">
                        <a class="popup__img" href="img/gallery/gallery-7.jpg')}}"> <i
                                class="icofont-eye-alt"></i></a>
                    </div>
                </div>
                <div class="single__gallery__img">
                    <img loading="lazy" src="{{asset('assets/img/gallery/gallery-8.jpg')}}" alt="photo">
                    <div class="gallery__icon">
                        <a class="popup__img" href="img/gallery/gallery-8.jpg')}}"> <i
                                class="icofont-eye-alt"></i></a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<!-- footer__section__start -->
<div class="footerarea">
    <div class="container">
        <div class="footerarea__newsletter__wraper">
            <div class="row">
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12" data-aos="fade-up">
                    <div class="footerarea__text">
                        <h3>Looking For Best Place To Admission In <span>Nursing Courses</span> !</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12" data-aos="fade-up">
                    <div class="footerarea__newsletter">
                        <div class="footerarea__newsletter__input">
                            <form action="#">
                                <div class="footerarea__newsletter__button text-sm-end text-start">
                                    <a href="javascript:void(0);" type="submit" class="subscribe__btn">Apply
                                        Now</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footerarea__wrapper footerarea__wrapper__2">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12" data-aos="fade-up">
                    <div class="footerarea__inner footerarea__about__us">
                        <div class="footerarea__heading">
                            <h3>About us</h3>
                        </div>
                        <div class="footerarea__content">
                            <p>ENLIGHTGROUP OF INSTITUTIONS is one of the best nursing college in Bangalore.
                                It’s recognized by INC & KNC, PCI, Affiliated to RGUHS, Bangalore, Karnataka</p>
                        </div>
                        <div class="foter__bottom__text">
                            <div class="footer__bottom__content">
                                <a href="javascript:void(0);"><img loading="lazy" class="rounded" width="80"
                                        src="{{asset('assets/img/cropped-Logo-180x180.png')}}" alt="logo"></a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-2 col-lg-2  col-md-6 col-sm-6" data-aos="fade-up">
                    <div class="footerarea__inner">
                        <div class="footerarea__heading">
                            <h3>Our Institutes</h3>
                        </div>
                        <div class="footerarea__list">
                            <ul>
                                <li>
                                    <a href="javascript:void(0);">Rama Krishna School of Nursing</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Sri Krishna College Of Nursing</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Sapthagiri School Of Nursing</a>
                                </li>
                            </ul>
                            <hr class="hr-border">
                            <ul>
                                <li>
                                    <a href="javascript:void(0);"><i class="icofont-ui-user"></i> Student
                                        Login</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"><i class="icofont-ui-user"></i> Employee
                                        Login</a>
                                </li>
                            </ul>
                        </div>


                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6" data-aos="fade-up">
                    <div class="footerarea__inner footerarea__padding__left">
                        <div class="footerarea__heading">
                            <h3>Quick Links</h3>
                        </div>
                        <div class="footerarea__list">
                            <ul>
                                <li>
                                    <a href="javascript:void(0);">Campus Life</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Fees Payment</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Apply For Scholarship</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Placement</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Infrastructure</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Route Map</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Students Grievance</a>
                                </li>
                            </ul>
                        </div>


                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12" data-aos="fade-up">
                    <div class="footerarea__right__wraper footerarea__inner">
                        <div class="footerarea__heading">
                            <h3>Get In Touch</h3>
                        </div>
                        <div class="footerarea__right__list">
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="footerarea__right__img">
                                            <i class="fs-5 icofont-phone"></i>
                                        </div>
                                        <div class="footerarea__right__content">
                                            <span>+080 2955 6773</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="footerarea__right__img">
                                            <i class="fs-5 icofont-mobile-phone"></i>
                                        </div>
                                        <div class="footerarea__right__content">
                                            <span>+91 80955 55703</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="footerarea__right__img">
                                            <i class="fs-5 icofont-email"></i>
                                        </div>
                                        <div class="footerarea__right__content">
                                            <span>enlighteducationaltrust@gmail.com</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="footerarea__right__img">
                                            <i class="fs-5 icofont-location-pin"></i>
                                        </div>
                                        <div class="footerarea__right__content">
                                            <span>82/17, Tavarekere Village Bangalore South Taluk,
                                                Karnataka -562130</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footerarea__copyright__wrapper footerarea__copyright__wrapper__2">
            <div class="row">
                <div class="col-xl-9 col-lg-9">
                    <div class="footerarea__copyright__content footerarea__copyright__content__2">
                        <p>Copyright © <span>2024</span> || All Right Reserved by Enlight Educational Trust</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3">
                    <div class="footerarea__icon footerarea__icon__2">
                        <ul>
                            <li><a title="Facebook" href="https://www.facebook.com/enlightgroup2020"
                                    target="_blank"><i class="icofont-facebook"></i></a></li>
                            <li><a title="Twitter"
                                    href="https://x.com/of_enlight?t=IIT52UV_BZ1hzOkmeuhHGQ&s=08"><i
                                        class="icofont-twitter"></i></a></li>
                            <li><a title="Instagram"
                                    href="https://www.instagram.com/enlight_group?igsh=Z2Foc3c4b2hhOTkz"><i
                                        class="icofont-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- footer__section__end -->




</main>




@endsection