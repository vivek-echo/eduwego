<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Dashboard | Edurock - Education LMS Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/aos.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/icofont.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">


</head>

<body class="body__wrapper">
    <!-- pre loader area start -->
    <div id="back__preloader">
        <div id="back__circle_loader"></div>
        <div class="back__loader_logo">
            <img loading="lazy" src="../assets/img/pre.png" alt="Preload">
        </div>
    </div>
    <!-- pre loader area end -->

    <!-- Dark/Light area start -->
    <div class="mode_switcher my_switcher">
        <button id="light--to-dark-button" class="light align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon dark__mode" viewBox="0 0 512 512">
                <path d="M160 136c0-30.62 4.51-61.61 16-88C99.57 81.27 48 159.32 48 248c0 119.29 96.71 216 216 216 88.68 0 166.73-51.57 200-128-26.39 11.49-57.38 16-88 16-119.29 0-216-96.71-216-216z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon light__mode" viewBox="0 0 512 512">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M256 48v48M256 416v48M403.08 108.92l-33.94 33.94M142.86 369.14l-33.94 33.94M464 256h-48M96 256H48M403.08 403.08l-33.94-33.94M142.86 142.86l-33.94-33.94" />
                <circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" />
            </svg>

            <span class="light__mode">Light</span>
            <span class="dark__mode">Dark</span>
        </button>
    </div>
    <!-- Dark/Light area end -->

    <main class="main_wrapper overflow-hidden">


        <!-- topbar__section__stert -->
        <div class="topbararea">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="topbar__left">
                            <ul>
                                <li>
                                    Call Us: +1 800 123 456 789
                                </li>
                                <li>
                                    - Mail Us: Itcroc@mail.com
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
                                <p>684 West College St. Sun City, USA</p>
                            </div>
                            <div class="topbar__list">
                                <ul>
                                    <li>
                                        <a href="#"><i class="icofont-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icofont-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icofont-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icofont-youtube-play"></i></a>
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

                                    <a href="../index.html"><img loading="lazy" src="../assets/img/logo/logo_1.png" alt="logo"></a>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 main_menu_wrap">
                            <div class="headerarea__main__menu">
                                <!-- <nav>
                                    <ul>


                                        <li class="mega__menu position-static">
                                            <a class="headerarea__has__dropdown" href="index.html">Demos<i class="icofont-rounded-down"></i> </a>
                                            <div class="headerarea__submenu mega__menu__wrapper mega__menu__grid__5">

                                                <ul class="nav  tab__button__wrap" id="myTab2" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <button class="single__tab__link active" data-bs-toggle="tab" data-bs-target="#projects__light" type="button">Light</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="single__tab__link" data-bs-toggle="tab" data-bs-target="#projects__dark" type="button">Dark</button>
                                                    </li>
                                                </ul>


                                                <div class="tab-content tab__content__wrapper" id="myTabContent2">
                                                    <div class="tab-pane fade active show" id="projects__light" role="tabpanel" aria-labelledby="projects__light">

                                                        <div class="row">

                                                            <div class="col-3 mega__menu__single__wrap">
                                                                <div class="mega__menu__thumb">
                                                                    <a href="../index.html">
                                                                        <img loading="lazy" src="../assets/img/mega/home-1.png" alt="Mega Menu">
                                                                        <span class="mega__menu__thumb__title">Home
                                                                            (Default)</span>
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-3 mega__menu__single__wrap">
                                                                <div class="mega__menu__thumb">
                                                                    <a href="../home-2.html">
                                                                        <img loading="lazy" src="../assets/img/mega/home-2.png" alt="Mega Menu">
                                                                        <span class="mega__menu__thumb__title">Home
                                                                            (Elegant)</span>
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-3 mega__menu__single__wrap">
                                                                <div class="mega__menu__thumb">
                                                                    <a href="../home-3.html">
                                                                        <img loading="lazy" src="../assets/img/mega/home-3.png" alt="Mega Menu">
                                                                        <span class="mega__menu__thumb__title">Home
                                                                            (Classic)</span>
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-3 mega__menu__single__wrap">
                                                                <div class="mega__menu__thumb">
                                                                    <a href="../home-4.html">
                                                                        <img loading="lazy" src="../assets/img/mega/home-4.png" alt="Mega Menu">
                                                                        <span class="mega__menu__thumb__title">Home
                                                                            (Classic LMS)</span>
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-3 mega__menu__single__wrap">
                                                                <div class="mega__menu__thumb">
                                                                    <a href="../home-5.html">
                                                                        <img loading="lazy" src="../assets/img/mega/home-5.png" alt="Mega Menu">
                                                                        <span class="mega__menu__thumb__title">Home
                                                                            (Online Course)</span>
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-3 mega__menu__single__wrap">
                                                                <div class="mega__menu__thumb">
                                                                    <a href="../home-6.html">
                                                                        <img loading="lazy" src="../assets/img/mega/home-6.png" alt="Mega Menu">
                                                                        <span class="mega__menu__thumb__title">Home
                                                                            (Marketplace)</span>
                                                                    </a>
                                                                    <span class="mega__menu__thumb__label">New</span>
                                                                </div>
                                                            </div>

                                                            <div class="col-3 mega__menu__single__wrap">
                                                                <div class="mega__menu__thumb">
                                                                    <a href="../home-7.html">
                                                                        <img loading="lazy" src="../assets/img/mega/home-7.png" alt="Mega Menu">
                                                                        <span class="mega__menu__thumb__title">Home
                                                                            (University)</span>
                                                                    </a>
                                                                    <span class="mega__menu__thumb__label">New</span>
                                                                </div>
                                                            </div>

                                                            <div class="col-3 mega__menu__single__wrap">
                                                                <div class="mega__menu__thumb">
                                                                    <a href="../home-8.html">
                                                                        <img loading="lazy" src="../assets/img/mega/home-8.png" alt="Mega Menu">
                                                                        <span class="mega__menu__thumb__title">Home
                                                                            (eCommerce)</span>
                                                                    </a>
                                                                    <span class="mega__menu__thumb__label">New</span>
                                                                </div>
                                                            </div>

                                                            <div class="col-3 mega__menu__single__wrap">
                                                                <div class="mega__menu__thumb">
                                                                    <a href="../home-9.html">
                                                                        <img loading="lazy" src="../assets/img/mega/home-9.png" alt="Mega Menu">
                                                                        <span class="mega__menu__thumb__title">Home
                                                                            (Kindergarten)</span>
                                                                    </a>
                                                                    <span class="mega__menu__thumb__label">New</span>
                                                                </div>
                                                            </div>

                                                            <div class="col-3 mega__menu__single__wrap">
                                                                <div class="mega__menu__thumb">
                                                                    <a href="../home-10.html">
                                                                        <img loading="lazy" src="../assets/img/mega/home-10.png" alt="Mega Menu">
                                                                        <span class="mega__menu__thumb__title">Home
                                                                            (Machine Learning)</span>
                                                                    </a>
                                                                    <span class="mega__menu__thumb__label">New</span>
                                                                </div>
                                                            </div>



                                                            <div class="col-3 mega__menu__single__wrap">
                                                                <div class="mega__menu__thumb">
                                                                    <a href="../home-11.html">
                                                                        <img loading="lazy" src="../assets/img/mega/home-11.png" alt="Mega Menu">
                                                                        <span class="mega__menu__thumb__title">Home
                                                                            (Single Course)</span>
                                                                    </a>
                                                                    <span class="mega__menu__thumb__label">New</span>
                                                                </div>
                                                            </div>



                                                            <div class="col-3 mega__menu__single__wrap">
                                                                <div class="mega__menu__thumb">
                                                                    <a href="#">
                                                                        <img loading="lazy" src="../assets/img/mega/coming.png" alt="Mega Menu 1">
                                                                        <span class="mega__menu__thumb__title">Layout
                                                                            Coming Soon 1</span>
                                                                    </a>
                                                                </div>
                                                            </div>


                                                            <div class="col-3 mega__menu__single__wrap">
                                                                <div class="mega__menu__thumb">
                                                                    <a href="#">
                                                                        <img loading="lazy" src="../assets/img/mega/coming.png" alt="Mega Menu 2">
                                                                        <span class="mega__menu__thumb__title">Layout
                                                                            Coming Soon 2</span>
                                                                    </a>
                                                                </div>
                                                            </div>


                                                            <div class="col-3 mega__menu__single__wrap">
                                                                <div class="mega__menu__thumb">
                                                                    <a href="#">
                                                                        <img loading="lazy" src="../assets/img/mega/coming.png" alt="Mega Menu 3">
                                                                        <span class="mega__menu__thumb__title">Layout
                                                                            Coming Soon 3</span>
                                                                    </a>
                                                                </div>
                                                            </div>


                                                            <div class="col-3 mega__menu__single__wrap">
                                                                <div class="mega__menu__thumb">
                                                                    <a href="#">
                                                                        <img loading="lazy" src="../assets/img/mega/coming.png" alt="Mega Menu 4">
                                                                        <span class="mega__menu__thumb__title">Layout
                                                                            Coming Soon 4</span>
                                                                    </a>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="tab-pane fade" id="projects__dark" role="tabpanel" aria-labelledby="projects__dark">

                                                        <div class="row">

                                                            <div class="col-3 mega__menu__single__wrap">
                                                                <div class="mega__menu__thumb">
                                                                    <a href="../index-dark.html">
                                                                        <img loading="lazy" src="../assets/img/mega/home-1-dark.png" alt="Mega Menu">
                                                                        <span class="mega__menu__thumb__title">Home
                                                                            (Default)</span>
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-3 mega__menu__single__wrap">
                                                                <div class="mega__menu__thumb">
                                                                    <a href="../home-2-dark.html">
                                                                        <img loading="lazy" src="../assets/img/mega/home-2-dark.png" alt="Mega Menu">
                                                                        <span class="mega__menu__thumb__title">Home
                                                                            (Elegant)</span>
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-3 mega__menu__single__wrap">
                                                                <div class="mega__menu__thumb">
                                                                    <a href="../home-3-dark.html">
                                                                        <img loading="lazy" src="../assets/img/mega/home-3-dark.png" alt="Mega Menu">
                                                                        <span class="mega__menu__thumb__title">Home
                                                                            (Classic)</span>
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-3 mega__menu__single__wrap">
                                                                <div class="mega__menu__thumb">
                                                                    <a href="../home-4-dark.html">
                                                                        <img loading="lazy" src="../assets/img/mega/home-4-dark.png" alt="Mega Menu">
                                                                        <span class="mega__menu__thumb__title">Home
                                                                            (Classic LMS)</span>
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-3 mega__menu__single__wrap">
                                                                <div class="mega__menu__thumb">
                                                                    <a href="../home-5-dark.html">
                                                                        <img loading="lazy" src="../assets/img/mega/home-5-dark.png" alt="Mega Menu">
                                                                        <span class="mega__menu__thumb__title">Home
                                                                            (Online Course)</span>
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-3 mega__menu__single__wrap">
                                                                <div class="mega__menu__thumb">
                                                                    <a href="../home-6-dark.html">
                                                                        <img loading="lazy" src="../assets/img/mega/home-6-dark.png" alt="Mega Menu">
                                                                        <span class="mega__menu__thumb__title">Home
                                                                            (Marketplace)</span>
                                                                    </a>
                                                                    <span class="mega__menu__thumb__label">New</span>
                                                                </div>
                                                            </div>

                                                            <div class="col-3 mega__menu__single__wrap">
                                                                <div class="mega__menu__thumb">
                                                                    <a href="../home-7-dark.html">
                                                                        <img loading="lazy" src="../assets/img/mega/home-7-dark.png" alt="Mega Menu">
                                                                        <span class="mega__menu__thumb__title">Home
                                                                            (University)</span>
                                                                    </a>
                                                                    <span class="mega__menu__thumb__label">New</span>
                                                                </div>
                                                            </div>

                                                            <div class="col-3 mega__menu__single__wrap">
                                                                <div class="mega__menu__thumb">
                                                                    <a href="../home-8-dark.html">
                                                                        <img loading="lazy" src="../assets/img/mega/home-8-dark.png" alt="Mega Menu">
                                                                        <span class="mega__menu__thumb__title">Home
                                                                            (eCommerce)</span>
                                                                    </a>
                                                                    <span class="mega__menu__thumb__label">New</span>
                                                                </div>
                                                            </div>

                                                            <div class="col-3 mega__menu__single__wrap">
                                                                <div class="mega__menu__thumb">
                                                                    <a href="../home-9-dark.html">
                                                                        <img loading="lazy" src="../assets/img/mega/home-9-dark.png" alt="Mega Menu">
                                                                        <span class="mega__menu__thumb__title">Home
                                                                            (Kindergarten)</span>
                                                                    </a>
                                                                    <span class="mega__menu__thumb__label">New</span>
                                                                </div>
                                                            </div>

                                                            <div class="col-3 mega__menu__single__wrap">
                                                                <div class="mega__menu__thumb">
                                                                    <a href="../home-10-dark.html">
                                                                        <img loading="lazy" src="../assets/img/mega/home-10-dark.png" alt="Mega Menu">
                                                                        <span class="mega__menu__thumb__title">Home
                                                                            (Machine Learning)</span>
                                                                    </a>
                                                                    <span class="mega__menu__thumb__label">New</span>
                                                                </div>
                                                            </div>

                                                            <div class="col-3 mega__menu__single__wrap">
                                                                <div class="mega__menu__thumb">
                                                                    <a href="home-11-dark.html">
                                                                        <img loading="lazy" src="../assets/img/mega/home-11-dark.png" alt="Mega Menu">
                                                                        <span class="mega__menu__thumb__title">Home
                                                                            (Single Course)</span>
                                                                    </a>
                                                                    <span class="mega__menu__thumb__label">New</span>
                                                                </div>
                                                            </div>


                                                            <div class="col-3 mega__menu__single__wrap">
                                                                <div class="mega__menu__thumb">
                                                                    <a href="#">
                                                                        <img loading="lazy" src="../assets/img/mega/coming-dark.png" alt="Mega Menu 1">
                                                                        <span class="mega__menu__thumb__title">Layout
                                                                            Coming Soon 1</span>
                                                                    </a>
                                                                </div>
                                                            </div>


                                                            <div class="col-3 mega__menu__single__wrap">
                                                                <div class="mega__menu__thumb">
                                                                    <a href="#">
                                                                        <img loading="lazy" src="../assets/img/mega/coming-dark.png" alt="Mega Menu 2">
                                                                        <span class="mega__menu__thumb__title">Layout
                                                                            Coming Soon 2</span>
                                                                    </a>
                                                                </div>
                                                            </div>


                                                            <div class="col-3 mega__menu__single__wrap">
                                                                <div class="mega__menu__thumb">
                                                                    <a href="#">
                                                                        <img loading="lazy" src="../assets/img/mega/coming-dark.png" alt="Mega Menu 3">
                                                                        <span class="mega__menu__thumb__title">Layout
                                                                            Coming Soon 3</span>
                                                                    </a>
                                                                </div>
                                                            </div>


                                                            <div class="col-3 mega__menu__single__wrap">
                                                                <div class="mega__menu__thumb">
                                                                    <a href="#">
                                                                        <img loading="lazy" src="../assets/img/mega/coming-dark.png" alt="Mega Menu 4">
                                                                        <span class="mega__menu__thumb__title">Layout
                                                                            Coming Soon 4</span>
                                                                    </a>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </li>

                                        <li class="mega__menu position-static">
                                            <a class="headerarea__has__dropdown" href="about.html">Pages<i class="icofont-rounded-down"></i> </a>
                                            <div class="headerarea__submenu mega__menu__wrapper">

                                                <div class="row">
                                                    <div class="col-3 mega__menu__single__wrap">
                                                        <h4 class="mega__menu__title"><a href="#">Get Started 1 </a>
                                                        </h4>
                                                        <ul class="mega__menu__item">
                                                            <li><a href="../about.html">About <span class="mega__menu__label">Sale
                                                                        Everything</span></a></li>
                                                            <li><a href="../about-dark.html">About (Dark)<span class="mega__menu__label new">New</span></a>
                                                            </li>
                                                            <li><a href="../blog.html">Blog</a></li>
                                                            <li><a href="../blog-dark.html">Blog (Dark)</a></li>
                                                            <li><a href="../blog-details.html">Blog Details</a></li>
                                                            <li><a href="../blog-details-dark.html">Blog Details
                                                                    (Dark)</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-3 mega__menu__single__wrap">
                                                        <h4 class="mega__menu__title"><a href="#">Get Started 2 </a>
                                                        </h4>
                                                        <ul class="mega__menu__item">
                                                            <li><a href="../error.html">Error 404</a></li>
                                                            <li><a href="../error-dark.html">Error (Dark)</a></li>
                                                            <li><a href="../event-details.html">Event Details</a></li>
                                                            <li><a href="../zoom/zoom-meetings.html">Zoom<span class="mega__menu__label">Online Call</span></a>
                                                            </li>
                                                            <li><a href="../zoom/zoom-meetings-dark.html">Zoom Meeting
                                                                    (Dark)</a></li>
                                                            <li><a href="../zoom/zoom-meeting-details.html">Zoom Meeting
                                                                    Details</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-3 mega__menu__single__wrap">
                                                        <h4 class="mega__menu__title"><a href="#">Get Started 3</a></h4>
                                                        <ul class="mega__menu__item">
                                                            <li><a href="../zoom/zoom-meeting-details-dark.html">Meeting
                                                                    Details (Dark)</a></li>
                                                            <li><a href="../login.html">Login</a></li>
                                                            <li><a href="../login-dark.html">Login (Dark)</a></li>
                                                            <li><a href="../maintenance.html">Maintenance</a></li>
                                                            <li><a href="../maintenance-dark.html">Maintenance Dark</a></li>
                                                            <li><a href="#">Terms & Condition</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-3 mega__menu__single__wrap">
                                                        <h4 class="mega__menu__title"><a href="#">Get Started 4</a></h4>
                                                        <ul class="mega__menu__item">
                                                            <li><a href="#">Terms & Condition (Dark)</a></li>
                                                            <li><a href="#">Privacy Policy</a></li>
                                                            <li><a href="#">Privacy Policy (Dark)</a></li>
                                                            <li><a href="#">Success Stories</a></li>
                                                            <li><a href="#">Success Stories (Dark)</a></li>
                                                            <li><a href="#">Work Policy</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-12 mega__menu__single__wrap sp_top_30">
                                                        <div class="mega__menu__img">
                                                            <a href="#"><img loading="lazy" src="../assets/img/mega/mega_menu_2.png" alt="Mega Menu"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </li>


                                        <li class="mega__menu position-static">
                                            <a class="headerarea__has__dropdown" href="../course.html">Courses<i class="icofont-rounded-down"></i> </a>
                                            <div class="headerarea__submenu mega__menu__wrapper">

                                                <div class="row">
                                                    <div class="col-3 mega__menu__single__wrap">
                                                        <h4 class="mega__menu__title"><a href="#">Get Started 1 </a>
                                                        </h4>
                                                        <ul class="mega__menu__item">
                                                            <li><a href="../course.html">Grid <span class="mega__menu__label">All Courses</span></a>
                                                            </li>
                                                            <li><a href="../course-dark.html">Course Grid (Dark)</a>
                                                            </li>
                                                            <li><a href="../course-grid.html">Course Grid</a></li>
                                                            <li><a href="../course-grid-dark.html">Course Grid
                                                                    (Dark)</a></li>
                                                            <li><a href="../course-list.html">Course List</a></li>
                                                            <li><a href="../course-list-dark.html">Course List
                                                                    (Dark)</a></li>

                                                        </ul>
                                                    </div>
                                                    <div class="col-3 mega__menu__single__wrap">
                                                        <h4 class="mega__menu__title"><a href="#">Get Started 2 </a>
                                                        </h4>
                                                        <ul class="mega__menu__item">
                                                            <li><a href="../course-details.html">Course Details</a></li>
                                                            <li><a href="../course-details-dark.html">Course Details
                                                                    (Dark)</a></li>
                                                            <li><a href="../course-details-2.html">Course Details 2</a>
                                                            </li>
                                                            <li><a href="../course-details-2-dark.html">Details 2
                                                                    (Dark)</a></li>
                                                            <li><a href="../course-details-3.html">Course Details 3</a>
                                                            </li>
                                                            <li><a href="../course-details-3.html">Details 3 (Dark)</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-3 mega__menu__single__wrap">
                                                        <h4 class="mega__menu__title"><a href="#">Get Started 3</a></h4>
                                                        <ul class="mega__menu__item">
                                                            <li><a href="become-an-instructor.html">Become
                                                                    An Instructor</a>
                                                            <li><a href="create-course.html">Create Course
                                                                    <span class="mega__menu__label">Career</span></a>
                                                            </li>
                                                            <li><a href="../instructor.html">Instructor</a></li>
                                                            <li><a href="../instructor-dark.html">Instructor (Dark)</a>
                                                            </li>
                                                            <li><a href="../instructor-details.html">Instructor
                                                                    Details</a></li>
                                                            <li><a href="../lesson.html">Course Lesson<span class="mega__menu__label new">New</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-3 mega__menu__single__wrap">
                                                        <div class="mega__menu__img">
                                                            <a href="#"><img loading="lazy" src="../assets/img/mega/mega_menu_1.png" alt="Mega Menu"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </li>


                                        <li><a class="headerarea__has__dropdown" href="instructor-dashboard.html">Dashboard
                                                <i class="icofont-rounded-down"></i>
                                            </a>
                                            <ul class="headerarea__submenu headerarea__submenu--third--wrap">
                                                <li><a href="admin-dashboard.html">Admin <i class="icofont-rounded-right"></i></a>

                                                    <ul class="headerarea__submenu--third">
                                                        <li><a href="admin-dashboard.html">Admin
                                                                Dashboard</a></li>
                                                        <li><a href="admin-profile.html">Admin Profile</a>
                                                        </li>
                                                        <li><a href="admin-message.html">Message</a></li>
                                                        <li><a href="admin-wishlist.html">Popular
                                                                Courses</a></li>
                                                        <li><a href="admin-reviews.html">Review</a></li>
                                                        <li><a href="admin-quiz-attempts.html">Admin
                                                                Quiz</a></li>

                                                        <li><a href="admin-settings.html">Settings</a></li>
                                                    </ul>

                                                </li>
                                                <li>
                                                    <a href="instructor-dashboard.html">Instructor <i class="icofont-rounded-right"></i></a>
                                                    <ul class="headerarea__submenu--third">
                                                        <li><a href="instructor-dashboard.html">Inst.
                                                                Dashboard</a></li>
                                                        <li><a href="instructor-profile.html">Inst.
                                                                Profile</a></li>
                                                        <li><a href="instructor-message.html">Message</a></li>
                                                        <li><a href="instructor-wishlist.html">Wishlist</a>
                                                        </li>
                                                        <li><a href="instructor-reviews.html">Review</a>
                                                        </li>
                                                        <li><a href="instructor-my-quiz-attempts.html">My
                                                                Quiz</a></li>
                                                        <li><a href="instructor-order-history.html">Order
                                                                History</a></li>
                                                        <li><a href="instructor-course.html">My Courses</a>
                                                        </li>
                                                        <li><a href="instructor-announcments.html">Announcements</a>
                                                        </li>
                                                        <li><a href="instructor-quiz-attempts.html">Quiz
                                                                Attempts</a></li>
                                                        <li><a href="instructor-assignments.html">Assignment</a>
                                                        </li>
                                                        <li><a href="instructor-settings.html">Settings</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="student-dashboard.html">Student <i class="icofont-rounded-right"></i></a>
                                                    <ul class="headerarea__submenu--third">
                                                        <li><a href="student-dashboard.html">Dashboard</a>
                                                        </li>
                                                        <li><a href="student-profile.html">Profile</a></li>
                                                        <li><a href="student-message.html">Message</a></li>
                                                        <li><a href="student-enrolled-courses.html">Enrolled
                                                                Courses</a></li>
                                                        <li><a href="student-wishlist.html">Wishlist</a>
                                                        </li>
                                                        <li><a href="student-reviews.html">Review</a></li>
                                                        <li><a href="student-my-quiz-attempts.html">My
                                                                Quiz</a></li>
                                                        <li><a href="student-assignments.html">Assignment</a>
                                                        </li>
                                                        <li><a href="student-settings.html">Settings</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>

                                        <li><a class="headerarea__has__dropdown" href="ecommerce/shop.html">eCommerce
                                                <i class="icofont-rounded-down"></i>
                                            </a>
                                            <ul class="headerarea__submenu">
                                                <li><a href="../ecommerce/shop.html">Shop<span class="mega__menu__label">Online
                                                            Store</span></a></li>
                                                <li><a href="../ecommerce/product-details.html">Product Details</a></li>
                                                <li><a href="../ecommerce/cart.html">Cart</a></li>
                                                <li><a href="../ecommerce/checkout.html">Checkout</a></li>
                                                <li><a href="../ecommerce/wishlist.html">Wishlist</a></li>
                                            </ul>
                                        </li>


                                    </ul>
                                </nav> -->
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="headerarea__right">

                                <div class="header__cart">
                                    <a href="#"> <i class="icofont-cart-alt"></i></a>
                                    <div class="header__right__dropdown__wrapper">
                                        <div class="header__right__dropdown__inner">
                                            <div class="single__header__right__dropdown">

                                                <div class="header__right__dropdown__img">
                                                    <a href="#">
                                                        <img loading="lazy" src="../assets/img/grid/cart1.jpg" alt="photo">
                                                    </a>
                                                </div>
                                                <div class="header__right__dropdown__content">

                                                    <a href="shop-product.html">Web Directory</a>
                                                    <p>1 x <span class="price">$ 80.00</span></p>

                                                </div>
                                                <div class="header__right__dropdown__close">
                                                    <a href="#"><i class="icofont-close-line"></i></a>
                                                </div>
                                            </div>

                                            <div class="single__header__right__dropdown">

                                                <div class="header__right__dropdown__img">
                                                    <a href="#">
                                                        <img loading="lazy" src="../assets/img/grid/cart2.jpg" alt="photo">
                                                    </a>
                                                </div>
                                                <div class="header__right__dropdown__content">

                                                    <a href="shop-product.html">Design Minois</a>
                                                    <p>1 x <span class="price">$ 60.00</span></p>

                                                </div>
                                                <div class="header__right__dropdown__close">
                                                    <a href="#"><i class="icofont-close-line"></i></a>
                                                </div>
                                            </div>

                                            <div class="single__header__right__dropdown">

                                                <div class="header__right__dropdown__img">
                                                    <a href="#">
                                                        <img loading="lazy" src="../assets/img/grid/cart3.jpg" alt="photo">
                                                    </a>
                                                </div>
                                                <div class="header__right__dropdown__content">

                                                    <a href="shop-product.html">Crash Course</a>
                                                    <p>1 x <span class="price">$ 70.00</span></p>

                                                </div>
                                                <div class="header__right__dropdown__close">
                                                    <a href="#"><i class="icofont-close-line"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <p class="dropdown__price">Total: <span>$1,100.00</span>
                                        </p>
                                        <div class="header__right__dropdown__button">
                                            <a href="cart.html" class="white__color">View Cart</a>
                                            <a href="checkout.html" class="blue__color">Checkout</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="headerarea__login">
                                    <a href="../login.html"><i class="icofont-user-alt-5"></i></a>
                                </div>
                                <div class="headerarea__button">
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="icofont-logout"></i>Logout</a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>


                <div class="container-fluid mob_menu_wrapper">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="mobile-logo">
                                <a class="logo__dark" href="#"><img loading="lazy" src="../assets/img/logo/logo_1.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="header-right-wrap">

                                <div class="headerarea__right">

                                    <div class="header__cart">
                                        <a href="#"> <i class="icofont-cart-alt"></i></a>
                                        <div class="header__right__dropdown__wrapper">
                                            <div class="header__right__dropdown__inner">
                                                <div class="single__header__right__dropdown">

                                                    <div class="header__right__dropdown__img">
                                                        <a href="#">
                                                            <img loading="lazy" src="../assets/img/grid/cart1.jpg" alt="photo">
                                                        </a>
                                                    </div>
                                                    <div class="header__right__dropdown__content">

                                                        <a href="shop-product.html">Web Directory</a>
                                                        <p>1 x <span class="price">$ 80.00</span></p>

                                                    </div>
                                                    <div class="header__right__dropdown__close">
                                                        <a href="#"><i class="icofont-close-line"></i></a>
                                                    </div>
                                                </div>

                                                <div class="single__header__right__dropdown">

                                                    <div class="header__right__dropdown__img">
                                                        <a href="#">
                                                            <img loading="lazy" src="../assets/img/grid/cart2.jpg" alt="photo">
                                                        </a>
                                                    </div>
                                                    <div class="header__right__dropdown__content">

                                                        <a href="shop-product.html">Design Minois</a>
                                                        <p>1 x <span class="price">$ 60.00</span></p>

                                                    </div>
                                                    <div class="header__right__dropdown__close">
                                                        <a href="#"><i class="icofont-close-line"></i></a>
                                                    </div>
                                                </div>

                                                <div class="single__header__right__dropdown">

                                                    <div class="header__right__dropdown__img">
                                                        <a href="#">
                                                            <img loading="lazy" src="../assets/img/grid/cart3.jpg" alt="photo">
                                                        </a>
                                                    </div>
                                                    <div class="header__right__dropdown__content">

                                                        <a href="shop-product.html">Crash Course</a>
                                                        <p>1 x <span class="price">$ 70.00</span></p>

                                                    </div>
                                                    <div class="header__right__dropdown__close">
                                                        <a href="#"><i class="icofont-close-line"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <p class="dropdown__price">Total: <span>$1,100.00</span>
                                            </p>
                                            <div class="header__right__dropdown__button">
                                                <a href="#" class="white__color">VIEW
                                                    CART</a>
                                                <a href="#" class="blue__color">CHECKOUT</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
                <div class="mobile-search">
                    <form class="search-form" action="#">
                        <input type="text" placeholder="Search entire store…">
                        <button class="button-search"><i class="icofont icofont-search-2"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-wrap headerarea">

                    <div class="mobile-navigation">

                        <nav>
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children"><a href="../index.html">Home</a>
                                    <ul class="dropdown">
                                        <li class="menu-item-has-children"><a href="../index.html">Homes Light</a>
                                            <ul class="dropdown">
                                                <li><a href="../index.html">Home (Default)</a></li>
                                                <li><a href="../home-2.html">Elegant</a></li>
                                                <li><a href="../home-3.html">Classic</a></li>
                                                <li><a href="../home-4.html">Classic LMS</a></li>
                                                <li><a href="../home-5.html">Online Course </a></li>
                                                <li><a href="../home-6.html">Marketplace </a></li>
                                                <li><a href="../home-7.html">University</a></li>
                                                <li><a href="../home-8.html">eCommerce</a></li>
                                                <li><a href="../home-9.html">Kindergarten</a></li>
                                                <li><a href="../home-10.html">Machine Learning</a></li>
                                                <li><a href="../home-11.html">Single Course</a></li>
                                            </ul>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <a href="../index.html">Homes Dark</a>
                                            <ul class="dropdown">
                                                <li><a href="../index-dark.html">Home Default (Dark)</a></li>
                                                <li><a href="../home-2-dark.html">Elegant (Dark)</a></li>
                                                <li><a href="../home-3-dark.html">Classic (Dark)</a></li>
                                                <li><a href="../home-4-dark.html">Classic LMS (Dark)</a></li>
                                                <li><a href="../home-5-dark.html">Online Course (Dark)</a></li>
                                                <li><a href="../home-6-dark.html">Marketplace (Dark)</a></li>
                                                <li><a href="../home-7-dark.html">University (Dark)</a></li>
                                                <li><a href="../home-8-dark.html">eCommerce (Dark)</a></li>
                                                <li><a href="../home-9-dark.html">Kindergarten (Dark)</a></li>
                                                <li><a href="../home-10-dark.html">Kindergarten (Dark)</a></li>
                                                <li><a href="../home-11-dark.html">Single Course (Dark)</a></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>


                                <li class="menu-item-has-children "><a href="#">Pages</a>

                                    <ul class="dropdown">
                                        <li class="menu-item-has-children">
                                            <a href="#">Get Started 1</a>

                                            <ul class="dropdown">
                                                <li><a href="../about.html">About</a></li>
                                                <li><a href="../about-dark.html">About (Dark)<span class="mega__menu__label new">New</span></a></li>
                                                <li><a href="../blog.html">Blog</a></li>
                                                <li><a href="../blog-dark.html">Blog (Dark)</a></li>
                                                <li><a href="../blog-details.html">Blog Details</a></li>
                                                <li><a href="../blog-details-dark.html">Blog Details (Dark)</a></li>
                                            </ul>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <a href="#">Get Started 2</a>
                                            <ul class="dropdown">
                                                <li><a href="../error.html">Error 404</a></li>
                                                <li><a href="../error-dark.html">Error (Dark)</a></li>
                                                <li><a href="../event-details.html">Event Details</a></li>
                                                <li><a href="../zoom/zoom-meetings.html">Zoom<span class="mega__menu__label">Online Call</span></a></li>
                                                <li><a href="../zoom/zoom-meetings-dark.html">Zoom Meeting (Dark)</a>
                                                </li>
                                                <li><a href="../zoom/zoom-meeting-details.html">Zoom Meeting Details</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <a href="#">Get Started 3</a>
                                            <ul class="dropdown">
                                                <li><a href="../zoom/zoom-meeting-details-dark.html">Meeting Details (Dark)</a>
                                                </li>
                                                <li><a href="../login.html">Login</a></li>
                                                <li><a href="../login-dark.html">Login (Dark)</a></li>
                                                <li><a href="../maintenance.html">Maintenance</a></li>
                                                <li><a href="../maintenance-dark.html">Maintenance Dark</a></li>
                                                <li><a href="#">Terms & Condition</a></li>
                                            </ul>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <a href="#">Get Started 4</a>
                                            <ul class="dropdown">
                                                <li><a href="#">Terms & Condition (Dark)</a></li>
                                                <li><a href="#">Privacy Policy</a></li>
                                                <li><a href="#">Privacy Policy (Dark)</a></li>
                                                <li><a href="#">Success Stories</a></li>
                                                <li><a href="#">Success Stories (Dark)</a></li>
                                                <li><a href="#">Work Policy</a></li>
                                            </ul>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <div class="mega__menu__img">
                                                <a href="#"><img loading="lazy" src="../assets/img/mega/mega_menu_2.png" alt="Mega Menu"></a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>



                                <li class="menu-item-has-children "><a href="../course.html">Courses</a>

                                    <ul class="dropdown">
                                        <li class="menu-item-has-children">
                                            <a href="#">Get Started 1</a>

                                            <ul class="dropdown">
                                                <li><a href="../course.html">Grid <span class="mega__menu__label">All
                                                            Courses</span></a></li>
                                                <li><a href="../course-dark.html">Course Grid (Dark)</a></li>
                                                <li><a href="../course-grid.html">Course Grid</a></li>
                                                <li><a href="../course-grid-dark.html">Course Grid (Dark)</a></li>
                                                <li><a href="../course-list.html">Course List</a></li>
                                                <li><a href="../course-list-dark.html">Course List (Dark)</a></li>
                                            </ul>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <a href="#">Get Started 2</a>
                                            <ul class="dropdown">
                                                <li><a href="../course-details.html">Course Details</a></li>
                                                <li><a href="../course-details-dark.html">Course Details (Dark)</a></li>
                                                <li><a href="../course-details-2.html">Course Details 2</a></li>
                                                <li><a href="../course-details-2-dark.html">Details 2 (Dark)</a></li>
                                                <li><a href="../course-details-3.html">Course Details 3</a></li>
                                                <li><a href="../course-details-3.html">Details 3 (Dark)</a></li>
                                            </ul>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <a href="#">Get Started 3</a>
                                            <ul class="dropdown">
                                                <li><a href="become-an-instructor.html">Become An
                                                        Instructor</a>
                                                <li><a href="create-course.html">Create Course <span class="mega__menu__label">Career</span></a></li>
                                                <li><a href="../instructor.html">Instructor</a></li>
                                                <li><a href="../instructor-dark.html">Instructor (Dark)</a></li>
                                                <li><a href="../instructor-details.html">Instructor Details</a></li>
                                                <li><a href="../lesson.html">Course Lesson<span class="mega__menu__label new">New</span></a></li>
                                            </ul>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <div class="mega__menu__img">
                                                <a href="#"><img loading="lazy" src="../assets/img/mega/mega_menu_1.png" alt="Mega Menu"></a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>


                                <li class="menu-item-has-children "><a href="admin-dashboard.html">Dashboard</a>

                                    <ul class="dropdown">
                                        <li class="menu-item-has-children">
                                            <a href="#">Admin</a>

                                            <ul class="dropdown">
                                                <li><a href="admin-dashboard.html">Admin Dashboard</a></li>
                                                <li><a href="admin-profile.html">Admin Profile</a></li>
                                                <li><a href="admin-message.html">Recent
                                                        Courses</a></li>
                                                <li><a href="admin-course.html">Courses</a></li>
                                                <li><a href="admin-reviews.html">Review</a></li>
                                                <li><a href="admin-quiz-attempts.html">Admin Quiz</a>
                                                </li>

                                                <li><a href="admin-settings.html">Settings</a></li>
                                            </ul>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <a href="#">Instructor</a>
                                            <ul class="dropdown">
                                                <li><a href="instructor-dashboard.html">Inst. Dashboard</a>
                                                </li>
                                                <li><a href="instructor-profile.html">Inst. Profile</a>
                                                </li>
                                                <li><a href="instructor-enrolled-courses.html">Enrolled
                                                        Courses</a></li>
                                                <li><a href="instructor-wishlist.html">Wishlist</a></li>
                                                <li><a href="instructor-reviews.html">Review</a></li>
                                                <li><a href="instructor-my-quiz-attempts.html">My Quiz</a>
                                                </li>
                                                <li><a href="instructor-order-history.html">Order
                                                        History</a></li>
                                                <li><a href="instructor-course.html">My Courses</a></li>
                                                <li><a href="instructor-announcments.html">Announcements</a>
                                                </li>
                                                <li><a href="instructor-quiz-attempts.html">Quiz
                                                        Attempts</a></li>
                                                <li><a href="instructor-assignments.html">Assignment</a>
                                                </li>
                                                <li><a href="instructor-settings.html">Settings</a></li>
                                            </ul>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <a href="#">Student</a>
                                            <ul class="dropdown">
                                                <li><a href="student-dashboard.html">Dashboard</a></li>
                                                <li><a href="student-profile.html">Profile</a></li>
                                                <li><a href="student-message.html">Message</a></li>
                                                <li><a href="student-enrolled-courses.html">Enrolled
                                                        Courses</a></li>
                                                <li><a href="student-wishlist.html">Wishlist</a></li>
                                                <li><a href="student-reviews.html">Review</a></li>
                                                <li><a href="student-my-quiz-attempts.html">My Quiz</a>
                                                </li>
                                                <li><a href="student-assignments.html">Assignment</a></li>
                                                <li><a href="student-settings.html">Settings</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="menu-item-has-children"><a href="ecommerce/shop.html">eCommerce</a>
                                    <ul class="dropdown">
                                        <li><a href="../ecommerce/shop.html">Shop<span class="mega__menu__label">Online
                                                    Store</span></a></li>
                                        <li><a href="../ecommerce/product-details.html">Product Details</a></li>
                                        <li><a href="../ecommerce/cart.html">Cart</a></li>
                                        <li><a href="../ecommerce/checkout.html">Checkout</a></li>
                                        <li><a href="../ecommerce/wishlist.html">Wishlist</a></li>

                                    </ul>
                                </li>

                            </ul>
                        </nav>

                    </div>

                </div>
                <div class="mobile-curr-lang-wrap">
                    <div class="single-mobile-curr-lang">
                        <a class="mobile-language-active" href="#">Language <i class="icofont-thin-down"></i></a>
                        <div class="lang-curr-dropdown lang-dropdown-active">
                            <ul>
                                <li><a href="#">English (US)</a></li>
                                <li><a href="#">English (UK)</a></li>
                                <li><a href="#">Spanish</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- <div class="single-mobile-curr-lang">
                                <a class="mobile-currency-active" href="#">Currency <i class="icofont-thin-down"></i></a>
                                <div class="lang-curr-dropdown curr-dropdown-active">
                                    <ul>
                                        <li><a href="#">USD</a></li>
                                        <li><a href="#">EUR</a></li>
                                        <li><a href="#">Real</a></li>
                                        <li><a href="#">BDT</a></li>
                                    </ul>
                                </div>
                            </div> -->

                    <div class="single-mobile-curr-lang">
                        <a class="mobile-account-active" href="#">My Account <i class="icofont-thin-down"></i></a>
                        <div class="lang-curr-dropdown account-dropdown-active">
                            <ul>
                                <li><a href="../login.html">Login</a></li>
                                <li><a href="../login.html">/ Create Account</a></li>
                                <li><a href="../login.html">My Account</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mobile-social-wrap">
                    <a class="facebook" href="#"><i class="icofont icofont-facebook"></i></a>
                    <a class="twitter" href="#"><i class="icofont icofont-twitter"></i></a>
                    <a class="pinterest" href="#"><i class="icofont icofont-pinterest"></i></a>
                    <a class="instagram" href="#"><i class="icofont icofont-instagram"></i></a>
                    <a class="google" href="#"><i class="icofont icofont-youtube-play"></i></a>
                </div>
            </div>
        </div>
        <!-- Mobile Menu end Here -->


        <!-- theme fixed shadow -->
        <div>
            <div class="theme__shadow__circle"></div>
            <div class="theme__shadow__circle shadow__right"></div>
        </div>

        <!-- dashboardarea__area__start  -->
        <div class="dashboardarea sp_bottom_100">
            <div class="container-fluid full__width__padding">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="dashboardarea__wraper">
                            <div class="dashboardarea__img">
                                <div class="dashboardarea__inner admin__dashboard__inner">
                                    <div class="dashboardarea__left">
                                        <div class="dashboardarea__left__img">
                                            <img loading="lazy" src="{{asset('assets/img/dashbord/dashbord__2.jpg')}}" alt="vvvvvvv">
                                        </div>
                                        <div class="dashboardarea__left__content">
                                            <h5>Hello</h5>
                                            <h4>Admin</h4>
                                        </div>
                                    </div>
                                    <!-- <div class="dashboardarea__star">
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                    </polygon>
                                </svg>
                                <span>4.0 (120 Reviews)</span>
                            </div> -->
                                    <div class="dashboardarea__right">
                                        <div class="dashboardarea__right__button">
                                            <a class="default__button" href="create-course.html">Create a New Course
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                                    <polyline points="12 5 19 12 12 19"></polyline>
                                                </svg></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dashboard">
                <div class="container-fluid full__width__padding">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-12">
                            <div class="dashboard__inner sticky-top">
                                <div class="dashboard__nav__title">
                                    <h6>Welcome, Admin</h6>
                                </div>
                                <div class="dashboard__nav">
                                    <ul>
                                        <li>
                                            <a class="active" href="admin-dashboard.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                                </svg>
                                                Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="admin-profile.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                    <circle cx="12" cy="7" r="4"></circle>
                                                </svg>
                                                My Profile</a>
                                        </li>
                                        <li>
                                            <a href="admin-message.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book-open">
                                                    <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                                                    <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                                                </svg>
                                                Message</a><span class="dashboard__label">12</span>
                                        </li>
                                        <li>
                                            <a href="admin-message.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark">
                                                    <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                                </svg>
                                                Courses</a>
                                        </li>
                                        <li>
                                            <a href="admin-reviews.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                    </polygon>
                                                </svg>
                                                Reviews</a>
                                        </li>
                                        <li>
                                            <a href="admin-quiz-attempts.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                                    <line x1="12" y1="17" x2="12.01" y2="17"></line>
                                                </svg>
                                                Quiz Attempts</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dashboard__nav__title mt-40">
                                    <h6>user</h6>
                                </div>

                                <div class="dashboard__nav">
                                    <ul>
                                        <li>
                                            <a href="admin-settings.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                    <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                                    </path>
                                                </svg>
                                                Settings</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-volume-1">
                                                    <polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon>
                                                    <path d="M15.54 8.46a5 5 0 0 1 0 7.07"></path>
                                                </svg>
                                                Logout</a>
                                        </li>



                                    </ul>
                                </div>


                            </div>
                        </div>

                        @yield('appContent')

                    </div>
                </div>
            </div>

        </div>
        <!-- dashboardarea__area__end   -->


        <!-- footer__section__start -->
        <div class="footerarea">
            <div class="container">
                <div class="footerarea__newsletter__wraper">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" data-aos="fade-up">
                            <div class="footerarea__logo">
                                <a href="#"><img loading="lazy" src="../assets/img/logo/logo_2.png" alt="logophoto"></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" data-aos="fade-up">
                            <div class="footerarea__newsletter">
                                <div class="footerarea__newsletter__input">
                                    <form action="#">
                                        <input type="text" placeholder="Enter your email here">
                                        <div class="footerarea__newsletter__button">
                                            <button type="submit" class="subscribe__btn">Subscribe Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footerarea__wrapper">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 " data-aos="fade-up">
                            <div class="footerarea__inner footerarea__about__us">
                                <div class="footerarea__heading">
                                    <h3>About us</h3>
                                </div>
                                <div class="footerarea__content">
                                    <p>orporate clients and leisure travelers has been relying on Groundlink for
                                        dependable safe, and professional chauffeured car end service in major cities
                                        across World.</p>
                                </div>
                                <div class="footerarea__icon">
                                    <ul>
                                        <li><a href="http://facebook.com/"><i class="icofont-facebook"></i></a></li>
                                        <li><a href="http://twitter.com/"><i class="icofont-twitter"></i></a></li>
                                        <li><a href="http://vimeo.com/"><i class="icofont-vimeo"></i></a></li>
                                        <li><a href="http://linkedin.com/"><i class="icofont-linkedin"></i></a></li>
                                        <li><a href="http://skype.com/"><i class="icofont-skype"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 " data-aos="fade-up">
                            <div class="footerarea__inner">
                                <div class="footerarea__heading">
                                    <h3>Usefull Links</h3>
                                </div>
                                <div class="footerarea__list">
                                    <ul>
                                        <li>
                                            <a href="#">About Us</a>
                                        </li>
                                        <li>
                                            <a href="#">Teachers</a>
                                        </li>
                                        <li>
                                            <a href="#">Partner</a>
                                        </li>
                                        <li>
                                            <a href="#">Room-Details</a>
                                        </li>
                                        <li>
                                            <a href="#">Gallery</a>
                                        </li>
                                    </ul>
                                </div>


                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 " data-aos="fade-up">
                            <div class="footerarea__inner footerarea__padding__left">
                                <div class="footerarea__heading">
                                    <h3>Course</h3>
                                </div>
                                <div class="footerarea__list">
                                    <ul>
                                        <li>
                                            <a href="#">Ui Ux Design</a>
                                        </li>
                                        <li>
                                            <a href="#">Web Development</a>
                                        </li>
                                        <li>
                                            <a href="#">Business Strategy</a>
                                        </li>
                                        <li>
                                            <a href="#">Softwere Development</a>
                                        </li>
                                        <li>
                                            <a href="#">Business English</a>
                                        </li>
                                    </ul>
                                </div>


                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12" data-aos="fade-up">
                            <div class="footerarea__right__wraper footerarea__inner">
                                <div class="footerarea__heading">
                                    <h3>Recent Post</h3>
                                </div>
                                <div class="footerarea__right__list">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <div class="footerarea__right__img">
                                                    <img loading="lazy" src="../assets/img/footer/footer__1.png" alt="footerphoto">
                                                </div>
                                                <div class="footerarea__right__content">
                                                    <span>02 Apr 2024 </span>
                                                    <h6>Best Your Business</h6>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <div class="footerarea__right__img">
                                                    <img loading="lazy" src="../assets/img/footer/footer__2.png" alt="footerphoto">
                                                </div>
                                                <div class="footerarea__right__content">
                                                    <span>02 Apr 2024 </span>
                                                    <h6>Keep Your Business</h6>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <div class="footerarea__right__img">
                                                    <img loading="lazy" src="../assets/img/footer/footer__3.png" alt="footerphoto">
                                                </div>
                                                <div class="footerarea__right__content">
                                                    <span>02 Apr 2024 </span>
                                                    <h6>Nice Your Business</h6>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footerarea__copyright__wrapper">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                            <div class="footerarea__copyright__content">
                                <p>© 2024 Powered by <a href="#">Edurock</a>. All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                            <div class="footerarea__copyright__list">
                                <ul>
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- footer__section__end -->



    </main>



    <!-- JS here -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <script src="{{asset('assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/slick.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.meanmenu.min.js')}}"></script>
    <script src="{{asset('assets/js/ajax-form.js')}}"></script>
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins.js')}}"></script>
    <script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>


</body>

</html>