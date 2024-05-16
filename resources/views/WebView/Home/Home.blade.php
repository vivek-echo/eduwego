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

                                <a href="index.html"><img loading="lazy" src="{{asset('assets/img/logo/enlight-group-logo.png')}}" alt="logo" height="60"></a>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 main_menu_wrap">
                        <div class="headerarea__main__menu">
                            <nav>
                                <ul>

                                    <li>
                                        <a href="home.html">Home</a>
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
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="facilities.html">Facilities</a>
                                    </li>

                                    <li>
                                        <a href="gallery.html">Gallery</a>
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
                            <a class="logo__dark" href="#"><img loading="lazy" src="{{asset('assets/img/logo/logo_1.png')}}" alt="logo"></a>
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
                                                        <img loading="lazy" src="{{asset('assets/img/grid/cart1.jpg')}}" alt="photo">
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
                                                        <img loading="lazy" src="{{asset('assets/img/grid/cart2.jpg')}}" alt="photo">
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
                                                        <img loading="lazy" src="{{asset('assets/img/grid/cart3.jpg')}}" alt="photo">
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
                            <li class="menu-item-has-children"><a href="index.html">Home</a>
                                <ul class="dropdown">
                                    <li class="menu-item-has-children"><a href="index.html">Homes Light</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Home (Default)</a></li>
                                            <li><a href="home-2.html">Elegant</a></li>
                                            <li><a href="home-3.html">Classic</a></li>
                                            <li><a href="home-4.html">Classic LMS</a></li>
                                            <li><a href="home-5.html">Online Course </a></li>
                                            <li><a href="home-6.html">Marketplace </a></li>
                                            <li><a href="home-7.html">University</a></li>
                                            <li><a href="home-8.html">eCommerce</a></li>
                                            <li><a href="home-9.html">Kindergarten</a></li>
                                            <li><a href="home-10.html">Machine Learning</a></li>
                                            <li><a href="home-11.html">Single Course</a></li>
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a href="index.html">Homes Dark</a>
                                        <ul class="dropdown">
                                            <li><a href="index-dark.html">Home Default (Dark)</a></li>
                                            <li><a href="home-2-dark.html">Elegant (Dark)</a></li>
                                            <li><a href="home-3-dark.html">Classic (Dark)</a></li>
                                            <li><a href="home-4-dark.html">Classic LMS (Dark)</a></li>
                                            <li><a href="home-5-dark.html">Online Course (Dark)</a></li>
                                            <li><a href="home-6-dark.html">Marketplace (Dark)</a></li>
                                            <li><a href="home-7-dark.html">University (Dark)</a></li>
                                            <li><a href="home-8-dark.html">eCommerce (Dark)</a></li>
                                            <li><a href="home-9-dark.html">Kindergarten (Dark)</a></li>
                                            <li><a href="home-10-dark.html">Kindergarten (Dark)</a></li>
                                            <li><a href="home-11-dark.html">Single Course (Dark)</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>


                            <li class="menu-item-has-children "><a href="#">Pages</a>

                                <ul class="dropdown">
                                    <li class="menu-item-has-children">
                                        <a href="#">Get Started 1</a>

                                        <ul class="dropdown">
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="about-dark.html">About (Dark)<span class="mega__menu__label new">New</span></a></li>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-dark.html">Blog (Dark)</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                            <li><a href="blog-details-dark.html">Blog Details (Dark)</a></li>
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a href="#">Get Started 2</a>
                                        <ul class="dropdown">
                                            <li><a href="error.html">Error 404</a></li>
                                            <li><a href="error-dark.html">Error (Dark)</a></li>
                                            <li><a href="event-details.html">Event Details</a></li>
                                            <li><a href="zoom/zoom-meetings.html">Zoom<span class="mega__menu__label">Online Call</span></a></li>
                                            <li><a href="zoom/zoom-meetings-dark.html">Zoom Meeting (Dark)</a></li>
                                            <li><a href="zoom/zoom-meeting-details.html">Zoom Meeting Details</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a href="#">Get Started 3</a>
                                        <ul class="dropdown">
                                            <li><a href="zoom/zoom-meeting-details-dark.html">Meeting Details
                                                    (Dark)</a>
                                            </li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="login-dark.html">Login (Dark)</a></li>
                                            <li><a href="maintenance.html">Maintenance</a></li>
                                            <li><a href="maintenance-dark.html">Maintenance Dark</a></li>
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
                                            <a href="#"><img loading="lazy" src="{{asset('assets/img/mega/mega_menu_2.png')}}" alt="Mega Menu"></a>
                                        </div>
                                    </li>
                                </ul>
                            </li>



                            <li class="menu-item-has-children "><a href="course.html">Courses</a>

                                <ul class="dropdown">
                                    <li class="menu-item-has-children">
                                        <a href="#">Get Started 1</a>

                                        <ul class="dropdown">
                                            <li><a href="course.html">Grid <span class="mega__menu__label">All
                                                        Courses</span></a></li>
                                            <li><a href="course-dark.html">Course Grid (Dark)</a></li>
                                            <li><a href="course-grid.html">Course Grid</a></li>
                                            <li><a href="course-grid-dark.html">Course Grid (Dark)</a></li>
                                            <li><a href="course-list.html">Course List</a></li>
                                            <li><a href="course-list-dark.html">Course List (Dark)</a></li>
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a href="#">Get Started 2</a>
                                        <ul class="dropdown">
                                            <li><a href="course-details.html">Course Details</a></li>
                                            <li><a href="course-details-dark.html">Course Details (Dark)</a></li>
                                            <li><a href="course-details-2.html">Course Details 2</a></li>
                                            <li><a href="course-details-2-dark.html">Details 2 (Dark)</a></li>
                                            <li><a href="course-details-3.html">Course Details 3</a></li>
                                            <li><a href="course-details-3.html">Details 3 (Dark)</a></li>
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a href="#">Get Started 3</a>
                                        <ul class="dropdown">
                                            <li><a href="dashboard/become-an-instructor.html">Become An
                                                    Instructor</a>
                                            <li><a href="dashboard/create-course.html">Create Course <span class="mega__menu__label">Career</span></a></li>
                                            <li><a href="instructor.html">Instructor</a></li>
                                            <li><a href="instructor-dark.html">Instructor (Dark)</a></li>
                                            <li><a href="instructor-details.html">Instructor Details</a></li>
                                            <li><a href="lesson.html">Course Lesson<span class="mega__menu__label new">New</span></a></li>
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <div class="mega__menu__img">
                                            <a href="#"><img loading="lazy" src="{{asset('assets/img/mega/mega_menu_1.png')}}" alt="Mega Menu"></a>
                                        </div>
                                    </li>
                                </ul>
                            </li>


                            <li class="menu-item-has-children "><a href="dashboard/admin-dashboard.html">Dashboard</a>

                                <ul class="dropdown">
                                    <li class="menu-item-has-children">
                                        <a href="#">Admin</a>

                                        <ul class="dropdown">
                                            <li><a href="dashboard/admin-dashboard.html">Admin Dashboard</a></li>
                                            <li><a href="dashboard/admin-profile.html">Admin Profile</a></li>
                                            <li><a href="dashboard/admin-message.html">Message</a></li>
                                            <li><a href="dashboard/admin-course.html">Courses</a></li>
                                            <li><a href="dashboard/admin-reviews.html">Review</a></li>
                                            <li><a href="dashboard/admin-quiz-attempts.html">Admin Quiz</a></li>

                                            <li><a href="dashboard/admin-settings.html">Settings</a></li>
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a href="#">Instructor</a>
                                        <ul class="dropdown">
                                            <li><a href="dashboard/instructor-dashboard.html">Inst. Dashboard</a>
                                            </li>
                                            <li><a href="dashboard/instructor-profile.html">Inst. Profile</a></li>
                                            <li><a href="dashboard/instructor-message.html">Message</a></li>
                                            <li><a href="dashboard/instructor-wishlist.html">Wishlist</a></li>
                                            <li><a href="dashboard/instructor-reviews.html">Review</a></li>
                                            <li><a href="dashboard/instructor-my-quiz-attempts.html">My Quiz</a>
                                            </li>
                                            <li><a href="dashboard/instructor-order-history.html">Order History</a>
                                            </li>
                                            <li><a href="dashboard/instructor-course.html">My Courses</a></li>
                                            <li><a href="dashboard/instructor-announcments.html">Announcements</a>
                                            </li>
                                            <li><a href="dashboard/instructor-quiz-attempts.html">Quiz Attempts</a>
                                            </li>
                                            <li><a href="dashboard/instructor-assignments.html">Assignment</a></li>
                                            <li><a href="dashboard/instructor-settings.html">Settings</a></li>
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a href="#">Student</a>
                                        <ul class="dropdown">
                                            <li><a href="dashboard/student-dashboard.html">Dashboard</a></li>
                                            <li><a href="dashboard/student-profile.html">Profile</a></li>
                                            <li><a href="dashboard/student-message.html">Message</a></li>
                                            <li><a href="dashboard/student-enrolled-courses.html">Enrolled
                                                    Courses</a></li>
                                            <li><a href="dashboard/student-wishlist.html">Wishlist</a></li>
                                            <li><a href="dashboard/student-reviews.html">Review</a></li>
                                            <li><a href="dashboard/student-my-quiz-attempts.html">My Quiz</a></li>
                                            <li><a href="dashboard/student-assignments.html">Assignment</a></li>
                                            <li><a href="dashboard/student-settings.html">Settings</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="menu-item-has-children"><a href="ecommerce/shop.html">eCommerce</a>
                                <ul class="dropdown">
                                    <li><a href="ecommerce/shop.html">Shop<span class="mega__menu__label">Online
                                                Store</span></a></li>
                                    <li><a href="ecommerce/product-details.html">Product Details</a></li>
                                    <li><a href="ecommerce/cart.html">Cart</a></li>
                                    <li><a href="ecommerce/checkout.html">Checkout</a></li>
                                    <li><a href="ecommerce/wishlist.html">Wishlist</a></li>

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
                            <li><a href="login.html">Login</a></li>
                            <li><a href="login.html">/ Create Account</a></li>
                            <li><a href="login.html">My Account</a></li>
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
    <!-- theme fixed shadow -->

    <!-- herobannerarea__section__start -->
    <div class="herobannerarea herobannerarea__2 herobannerarea__university">

        <div class="swiper university__slider">

            <div class="herobannerarea__slider__wrap swiper-wrapper">

                <div class="swiper-slide herobannerarea__single__slider" style="background: url('assets/img/herobanner/university_1.jpg');">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 col-12" data-aos="fade-up">
                                <div class="herobannerarea__content__wraper text-center">


                                    <div class="herobannerarea__title">
                                        <div class="herobannerarea__small__title">
                                            <span>Education Solution</span>
                                        </div>
                                        <div class="herobannerarea__title__heading__2 herobannerarea__title__heading__3">
                                            <h2>World <span>Ranking</span> best University place.</h2>
                                        </div>
                                    </div>


                                    <!-- <div class="herobannerarea__text herobannerarea__text__2">
                                        <p>Lorem Ipsum is simply dummy text of the printing typesetting.</p>
                                    </div> -->
                                    <div class="hreobannerarea__button__2">
                                        <a class="default__button" href="#">More about university</a>
                                    </div>

                                    <div class="footerarea__icon footerarea__icon__2">
                                        <p>Followed by :</p>
                                        <ul>
                                            <li><a href="http://facebook.com/"><i class="icofont-facebook"></i></a>
                                            </li>
                                            <li><a href="http://twitter.com/"><i class="icofont-twitter"></i></a>
                                            </li>
                                            <li><a href="http://vimeo.com/"><i class="icofont-vimeo"></i></a></li>
                                            <li><a href="http://linkedin.com/"><i class="icofont-linkedin"></i></a>
                                            </li>
                                            <li><a href="http://skype.com/"><i class="icofont-skype"></i></a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide herobannerarea__single__slider" style="background: url(assets/img/herobanner/university_2.jpg);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 col-12" data-aos="fade-up">
                                <div class="herobannerarea__content__wraper text-center">


                                    <div class="herobannerarea__title">
                                        <div class="herobannerarea__small__title">
                                            <span>Career Solution</span>
                                        </div>
                                        <div class="herobannerarea__title__heading__2 herobannerarea__title__heading__3">
                                            <!-- <h2>World <span>Ranking</span> best University place.</h2> -->
                                            <h2>Degree that’s right for your Bright future</h2>
                                        </div>
                                    </div>


                                    <!-- <div class="herobannerarea__text herobannerarea__text__2">
                                        <p>Lorem Ipsum is simply dummy text of the printing typesetting.</p>
                                    </div> -->
                                    <div class="hreobannerarea__button__2">
                                        <a class="default__button" href="#">More about university</a>
                                    </div>

                                    <div class="footerarea__icon footerarea__icon__2">
                                        <p>Followed by :</p>
                                        <ul>
                                            <li><a href="http://facebook.com/"><i class="icofont-facebook"></i></a>
                                            </li>
                                            <li><a href="http://twitter.com/"><i class="icofont-twitter"></i></a>
                                            </li>
                                            <li><a href="http://vimeo.com/"><i class="icofont-vimeo"></i></a></li>
                                            <li><a href="http://linkedin.com/"><i class="icofont-linkedin"></i></a>
                                            </li>
                                            <li><a href="http://skype.com/"><i class="icofont-skype"></i></a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide herobannerarea__single__slider" style="background: url(assets/img/herobanner/university_3.jpg);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 col-12" data-aos="fade-up">
                                <div class="herobannerarea__content__wraper text-center">


                                    <div class="herobannerarea__title">
                                        <div class="herobannerarea__small__title">
                                            <span>Certificate Solution</span>
                                        </div>
                                        <div class="herobannerarea__title__heading__2 herobannerarea__title__heading__3">
                                            <h2>Let’s build your awesome Degree with Edurock</h2>
                                        </div>
                                    </div>


                                    <!-- <div class="herobannerarea__text herobannerarea__text__2">
                                        <p>Lorem Ipsum is simply dummy text of the printing typesetting.</p>
                                    </div> -->
                                    <div class="hreobannerarea__button__2">
                                        <a class="default__button" href="#">More about university</a>
                                    </div>

                                    <div class="footerarea__icon footerarea__icon__2">
                                        <p>Followed by :</p>
                                        <ul>
                                            <li><a href="http://facebook.com/"><i class="icofont-facebook"></i></a>
                                            </li>
                                            <li><a href="http://twitter.com/"><i class="icofont-twitter"></i></a>
                                            </li>
                                            <li><a href="http://vimeo.com/"><i class="icofont-vimeo"></i></a></li>
                                            <li><a href="http://linkedin.com/"><i class="icofont-linkedin"></i></a>
                                            </li>
                                            <li><a href="http://skype.com/"><i class="icofont-skype"></i></a></li>
                                        </ul>
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
                    <img loading="lazy" src="{{asset('assets/img/herobanner/university_1.jpg')}}" />
                </div>
                <div class="swiper-slide">
                    <img loading="lazy" src="{{asset('assets/img/herobanner/university_2.jpg')}}" />
                </div>
                <div class="swiper-slide">
                    <img loading="lazy" src="{{asset('assets/img/herobanner/university_3.jpg')}}" />
                </div>
            </div>
        </div>


        <div class="slider__controls__wrap slider__controls__pagination slider__controls__arrows">
            <div class="swiper-button-next arrow-btn"></div>
            <div class="swiper-button-prev arrow-btn"></div>
            <div class="swiper-pagination"></div>
        </div>

        <div class="herobannerarea__icon__2">
            <img loading="lazy" class="herobanner__common__img herobanner__img__1" src="{{asset('assets/img/herobanner/herobanner__1.png')}}" alt="photo">
            <img loading="lazy" class="herobanner__common__img herobanner__img__2" src="{{asset('assets/img/herobanner/herobanner__2.png')}}" alt="photo">
            <img loading="lazy" class="herobanner__common__img herobanner__img__3" src="{{asset('assets/img/herobanner/herobanner__3.png')}}" alt="photo">
            <!--<img loading="lazy"  class="herobanner__common__img herobanner__img__4" src="{{asset('assets/img/herobanner/herobanner__4.png')}}" alt="photo">-->
            <img loading="lazy" class="herobanner__common__img herobanner__img__5" src="{{asset('assets/img/herobanner/herobanner__5.png')}}" alt="photo">
        </div>

    </div>
    <!-- herobannerarea__section__end-->

    <!-- animate condtent start-->
    <div class="animate__content sp_bottom_40 sp_top_40">
        <div class="container-fluid full__width__padding">
            <div class="animate__content__wrap">
                <div class="animate__content__single">
                    <span><a href="#">Education Center</a></span>
                </div>
                <div class="animate__content__single animate__content__single--2">
                    <span> <a href="#">Best Collection</a></span>
                </div>
                <div class="animate__content__single">
                    <span><a href="#">Online Course</a></span>
                </div>
                <div class="animate__content__single animate__content__single--2">
                    <span> <a href="#">Offline Course</a></span>
                </div>
                <div class="animate__content__single">
                    <span> Online Course</span>
                </div>
                <div class="animate__content__single animate__content__single--2">
                    <span> Hot Deal</span>
                </div>
                <div class="animate__content__single">
                    <span>Book Libary</span>
                </div>
                <div class="animate__content__single animate__content__single--2">
                    <span>Hot Deal</span>
                </div>
                <div class="animate__content__single">
                    <span> University Area</span>
                </div>
                <div class="animate__content__single animate__content__single--2">
                    <span> Teacher Development</span>
                </div>
                <div class="animate__content__single">
                    <span> Student</span>
                </div>
                <div class="animate__content__single animate__content__single--2">
                    <span> New Arrival</span>
                </div>
                <div class="animate__content__single">
                    <span>Best Collection</span>
                </div>
                <div class="animate__content__single animate__content__single--2">
                    <span>Hot Deal</span>
                </div>

                <div class="animate__content__single">
                    <span>Book Libary</span>
                </div>
                <div class="animate__content__single animate__content__single--2">
                    <span>Hot Deal</span>
                </div>
            </div>
        </div>
    </div>
    <!-- animate condtent end-->

    <!-- aboutarea__2__section__start -->
    <div class="aboutarea__2 sp_top_100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12" data-aos="fade-up">
                    <div class="about__right__wraper__2">
                        <div class="educationarea__img" data-tilt>
                            <img loading="lazy" class="aboutarea__2__img__1" src="{{asset('assets/img/about/about_17.png')}}" alt="education">
                            <img loading="lazy" class="aboutarea__2__img__2" src="{{asset('assets/img/about/about_3.png')}}" alt="education">
                            <img loading="lazy" class="aboutarea__2__img__3" src="{{asset('assets/img/about/about_4.png')}}" alt="education">
                            <img loading="lazy" class="aboutarea__2__img__4" src="{{asset('assets/img/about/about_11.png')}}" alt="education">
                        </div>
                        <div class="aboutarea__2__text">
                            <div class="aboutarea__counter">
                                <span class="counter">25</span> +
                            </div>

                            <p>YEARS EXPERIENCE JUST ACHIVED</p>


                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12" data-aos="fade-up">

                    <div class="aboutarea__content__wraper">
                        <div class="aboutarea__button">
                            <div class="default__small__button">About Us</div>
                        </div>
                        <div class="aboutarea__headding heading__underline">
                            <h2>Welcome to another best <span>University</span> in the world.</h2>
                        </div>
                        <div class="aboutarea__para aboutarea__para__2">
                            <p>25+Contrary to popular belief, Lorem Ipsum is not simply random text roots in a piece
                                of classical Latin literature from 45 BC</p>
                        </div>
                        <div class="aboutarea__list__2">
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
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- aboutarea__2__section__end -->



    <div class="best__categories sp_top_100 sp_bottom_70">
        <div class="container-fluid full__width__padding">
            <div class="row">

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <!-- categories Item Start -->
                    <div class="best__categories__item aos-init" data-aos="fade-up">
                        <a class="best__categories__link" href="course.html">
                            <div class="best__categories__info">
                                <h3 class="best__categories__name">Art &amp; Design</h3>
                                <span class="best__categories__more">10 Courses</span>
                            </div>
                        </a>
                    </div>
                    <!-- categories Item End -->
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <!-- categories Item Start -->
                    <div class="best__categories__item aos-init" data-aos="fade-up">
                        <a class="best__categories__link" href="course.html">
                            <div class="best__categories__info">
                                <h3 class="best__categories__name">Development</h3>
                                <span class="best__categories__more">15 Courses</span>
                            </div>
                        </a>
                    </div>
                    <!-- categories Item End -->
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <!-- categories Item Start -->
                    <div class="best__categories__item aos-init" data-aos="fade-up">
                        <a class="best__categories__link" href="course.html">
                            <div class="best__categories__info">
                                <h3 class="best__categories__name">Lifestyle</h3>
                                <span class="best__categories__more">12 Courses</span>
                            </div>
                        </a>
                    </div>
                    <!-- categories Item End -->
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <!-- categories Item Start -->
                    <div class="best__categories__item aos-init" data-aos="fade-up">
                        <a class="best__categories__link" href="course.html">
                            <div class="best__categories__info">
                                <h3 class="best__categories__name">Personal Development</h3>
                                <span class="best__categories__more">8 Courses</span>
                            </div>
                        </a>
                    </div>
                    <!-- categories Item End -->
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <!-- categories Item Start -->
                    <div class="best__categories__item aos-init" data-aos="fade-up">
                        <a class="best__categories__link" href="course.html">
                            <div class="best__categories__info">
                                <h3 class="best__categories__name">Business</h3>
                                <span class="best__categories__more">9 Courses</span>
                            </div>
                        </a>
                    </div>
                    <!-- categories Item End -->
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <!-- categories Item Start -->
                    <div class="best__categories__item aos-init" data-aos="fade-up">
                        <a class="best__categories__link" href="course.html">
                            <div class="best__categories__info">
                                <h3 class="best__categories__name">Finance</h3>
                                <span class="best__categories__more">10 Courses</span>
                            </div>
                        </a>
                    </div>
                    <!-- categories Item End -->
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <!-- categories Item Start -->
                    <div class="best__categories__item aos-init" data-aos="fade-up">
                        <a class="best__categories__link" href="course.html">
                            <div class="best__categories__info">
                                <h3 class="best__categories__name">Marketing</h3>
                                <span class="best__categories__more">21 Courses</span>
                            </div>
                        </a>
                    </div>
                    <!-- categories Item End -->
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <!-- categories Item Start -->
                    <div class="best__categories__item aos-init" data-aos="fade-up">
                        <a class="best__categories__link" href="course.html">
                            <div class="best__categories__info">
                                <h3 class="best__categories__name">Photography</h3>
                                <span class="best__categories__more">10 Courses</span>
                            </div>
                        </a>
                    </div>
                    <!-- categories Item End -->
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <!-- categories Item Start -->
                    <div class="best__categories__item aos-init" data-aos="fade-up">
                        <a class="best__categories__link" href="course.html">
                            <div class="best__categories__info">
                                <h3 class="best__categories__name">Data Science</h3>
                                <span class="best__categories__more">16 Courses</span>
                            </div>
                        </a>
                    </div>
                    <!-- categories Item End -->
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <!-- categories Item Start -->
                    <div class="best__categories__item aos-init" data-aos="fade-up">
                        <a class="best__categories__link" href="course.html">
                            <div class="best__categories__info">
                                <h3 class="best__categories__name">Health & Fitness</h3>
                                <span class="best__categories__more">10 Courses</span>
                            </div>
                        </a>
                    </div>
                    <!-- categories Item End -->
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <!-- categories Item Start -->
                    <div class="best__categories__item aos-init" data-aos="fade-up">
                        <a class="best__categories__link" href="course.html">
                            <div class="best__categories__info">
                                <h3 class="best__categories__name">Web Design</h3>
                                <span class="best__categories__more">12 Courses</span>
                            </div>
                        </a>
                    </div>
                    <!-- categories Item End -->
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <!-- categories Item Start -->
                    <div class="best__categories__item aos-init" data-aos="fade-up">
                        <a class="best__categories__link" href="course.html">
                            <div class="best__categories__info">
                                <h3 class="best__categories__name">Mobile Application</h3>
                                <span class="best__categories__more">10 Courses</span>
                            </div>
                        </a>
                    </div>
                    <!-- categories Item End -->
                </div>

            </div>
        </div>
    </div>



    <!-- about__tap__section__start -->
    <div class="abouttabarea sp_bottom_70">
        <div class="container">
            <div class="row">
                <div class="section__title text-center" data-aos="fade-up">
                    <div class="section__title__button">
                        <div class="default__small__button">Overview</div>
                    </div>
                    <div class="section__title__heading heading__underline">
                        <h2>Perfect University <span>Overview</span>
                            <br> For Your Carrer
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12" data-aos="fade-up">
                    <ul class="nav  about__button__wrap justify-content-center" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="single__tab__link active" data-bs-toggle="tab" data-bs-target="#projects__one" type="button">About</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="single__tab__link" data-bs-toggle="tab" data-bs-target="#projects__two" type="button">Our Mission</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="single__tab__link" data-bs-toggle="tab" data-bs-target="#projects__three" type="button">Our Vision</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="single__tab__link" data-bs-toggle="tab" data-bs-target="#projects__four" type="button">Award</button>
                        </li>


                    </ul>
                </div>



                <div class="tab-content tab__content__wrapper" id="myTabContent" data-aos="fade-up">

                    <div class="tab-pane fade active show" id="projects__one" role="tabpanel" aria-labelledby="projects__one">
                        <div class="col-xl-12">
                            <div class="aboutarea__content__tap__wraper">
                                <p class="paragraph__1">There are many variations of passages of Lorem Ipsum
                                    available, but the majority have suffered alteration in some form, by injected
                                    humour, or randomised words look even slightly believable. If you are going to
                                    use
                                    a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                    hidden in the middle of text. Ipsum generators on the Internet tend to repeat
                                    predefined chunks as necessary, making this the first
                                    true generator on the Internet. It uses a dictionary of over 200 combined with a
                                    handful of model sentence structures, to generate Lorem Ipsum which looks
                                    reasonable. The generated Lorem Ipsum is therefore always
                                    free from characteristic words etc.</p>
                                <img loading="lazy" src="{{asset('assets/img/about/overview.jpg')}}" alt="">
                            </div>

                        </div>
                    </div>

                    <div class="tab-pane fade" id="projects__two" role="tabpanel" aria-labelledby="projects__two">

                        <div class="col-xl-12">
                            <div class="aboutarea__content__tap__wraper">
                                <p class="paragraph__1">There are many variations of passages of Lorem Ipsum
                                    available, but the majority have suffered alteration in some form, by injected
                                    humour, or randomised words look even slightly believable. If you are going to
                                    use
                                    a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                    hidden in the middle of text. Ipsum generators on the Internet tend to repeat
                                    predefined chunks as necessary.</p>
                                <div class="aboutarea__tap__heading">
                                    <h5>World best education site</h5>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the
                                        majority have suffered alteration in some form, by injected humour, or
                                        randomised words which dont look even slightly believable. If you are
                                        going to useery</p>
                                </div>

                                <div class="aboutarea__tap__heading">
                                    <h5>Web and user interface design</h5>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the
                                        majority have suffered alteration in some form, by injected humour, or
                                        randomised words which dont look even slightly believable. If you are
                                        going to useery</p>
                                </div>
                                <img loading="lazy" src="{{asset('assets/img/about/mission.jpg')}}" alt="Mission">
                            </div>

                        </div>

                    </div>

                    <div class="tab-pane fade" id="projects__three" role="tabpanel" aria-labelledby="projects__three">
                        <div class="col-xl-12">
                            <div class="aboutarea__content__tap__wraper">
                                <p class="paragraph__1">There are many variations of passages of Lorem Ipsum
                                    available, but the majority have suffered alteration in some form, by injected
                                    humour, or randomised words look even slightly believable. If you are going to
                                    use a passage of Lorem Ipsum, you need to be sure there isn't anything
                                    embarrassing hidden in the middle of text. Ipsum generators on the Internet tend
                                    to repeat predefined chunks as necessary. Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Possimus quae rerum dolore itaque tenetur. Natus illum
                                    nostrum, deleniti ipsa animi accusantium quos placeat eaque. </p>
                                <div class="aboutarea__list__2">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <ul>
                                                <li>
                                                    <i class="icofont-check"></i> Lorem Ipsum is simply dummy
                                                </li>

                                                <li>
                                                    <i class="icofont-check"></i> Explore a variety of fresh
                                                    educational teach
                                                </li>

                                                <li>
                                                    <i class="icofont-check"></i> Lorem Ipsum is simply dummy text
                                                    of
                                                </li>

                                                <li>
                                                    <i class="icofont-check"></i> Lorem Ipsum is simply dummy text
                                                    of
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6">
                                            <ul>
                                                <li>
                                                    <i class="icofont-check"></i> Lorem Ipsum is simply dummy
                                                </li>

                                                <li>
                                                    <i class="icofont-check"></i> Explore a variety of fresh
                                                    educational teach
                                                </li>

                                                <li>
                                                    <i class="icofont-check"></i> Lorem Ipsum is simply dummy text
                                                    of
                                                </li>

                                                <li>
                                                    <i class="icofont-check"></i> Lorem Ipsum is simply dummy text
                                                    of
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <img loading="lazy" src="{{asset('assets/img/about/vision.jpg')}}" alt="Mission">
                            </div>

                        </div>
                    </div>

                    <div class="tab-pane fade" id="projects__four" role="tabpanel" aria-labelledby="projects__four">
                        <div class="col-xl-12">
                            <div class="aboutarea__content__tap__wraper">

                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="single__event__wraper single__award" data-aos="fade-up">
                                            <div class="eventarea__img">
                                                <img loading="lazy" src="{{asset('assets/img/about/award-1.jpg')}}" alt="event">
                                            </div>
                                            <div class="eventarea__content__wraper">
                                                <div class="single__event__heading">
                                                    <h4><a href="event-details.html">Forging relationships between
                                                            national</a></h4>
                                                </div>
                                                <div class="single__event__button">
                                                    <a href="event-details.html">Read More <i class="icofont-simple-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="single__event__wraper single__award" data-aos="fade-up">
                                            <div class="eventarea__img">
                                                <img loading="lazy" src="{{asset('assets/img/about/award-2.jpg')}}" alt="event">
                                            </div>
                                            <div class="eventarea__content__wraper">
                                                <div class="single__event__heading">
                                                    <h4><a href="event-details.html">Lorem ipsum dolor sit amet
                                                            conse ctetur.</a></h4>
                                                </div>
                                                <div class="single__event__button">
                                                    <a href="event-details.html">Read More <i class="icofont-simple-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="single__event__wraper single__award" data-aos="fade-up">
                                            <div class="eventarea__img">
                                                <img loading="lazy" src="{{asset('assets/img/about/award-3.jpg')}}" alt="event">
                                            </div>
                                            <div class="eventarea__content__wraper">
                                                <div class="single__event__heading">
                                                    <h4><a href="event-details.html">Forging relationships between
                                                            national</a></h4>
                                                </div>
                                                <div class="single__event__button">
                                                    <a href="event-details.html">Read More <i class="icofont-simple-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="single__event__wraper single__award" data-aos="fade-up">
                                            <div class="eventarea__img">
                                                <img loading="lazy" src="{{asset('assets/img/about/award-4.jpg')}}" alt="event">
                                            </div>
                                            <div class="eventarea__content__wraper">
                                                <div class="single__event__heading">
                                                    <h4><a href="event-details.html">Lorem ipsum dolor sit amet
                                                            conse ctetur.</a></h4>
                                                </div>
                                                <div class="single__event__button">
                                                    <a href="event-details.html">Read More <i class="icofont-simple-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="single__event__wraper single__award" data-aos="fade-up">
                                            <div class="eventarea__img">
                                                <img loading="lazy" src="{{asset('assets/img/about/award-2.jpg')}}" alt="event">
                                            </div>
                                            <div class="eventarea__content__wraper">
                                                <div class="single__event__heading">
                                                    <h4><a href="event-details.html">Lorem ipsum dolor sit amet
                                                            conse ctetur.</a></h4>
                                                </div>
                                                <div class="single__event__button">
                                                    <a href="event-details.html">Read More <i class="icofont-simple-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="single__event__wraper single__award" data-aos="fade-up">
                                            <div class="eventarea__img">
                                                <img loading="lazy" src="{{asset('assets/img/about/award-3.jpg')}}" alt="event">
                                            </div>
                                            <div class="eventarea__content__wraper">
                                                <div class="single__event__heading">
                                                    <h4><a href="event-details.html">Forging relationships between
                                                            national</a></h4>
                                                </div>
                                                <div class="single__event__button">
                                                    <a href="event-details.html">Read More <i class="icofont-simple-right"></i></a>
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
        </div>
    </div>
    <!-- .about__tap__section__end -->

    <!-- counter__section__start -->
    <div class="counterarea sp_bottom_100">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                    <div class="counterarea__text__wraper">
                        <div class="counter__img">
                            <img loading="lazy" src="{{asset('assets/img/counter/counter__1.png')}}" alt="counter">
                        </div>
                        <div class="counter__content__wraper">
                            <div class="counter__number">
                                <span class="counter">27</span>+

                            </div>
                            <p>Total Acheivment</p>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                    <div class="counterarea__text__wraper">
                        <div class="counter__img">
                            <img loading="lazy" src="{{asset('assets/img/counter/counter__2.png')}}" alt="counter">
                        </div>
                        <div class="counter__content__wraper">
                            <div class="counter__number">
                                <span class="counter">145</span>+

                            </div>
                            <p>TOTAL STUDENTS</p>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                    <div class="counterarea__text__wraper">
                        <div class="counter__img">
                            <img loading="lazy" src="{{asset('assets/img/counter/counter__3.png')}}" alt="counter">
                        </div>
                        <div class="counter__content__wraper">
                            <div class="counter__number">
                                <span class="counter">10</span>k

                            </div>
                            <p>tOTAL INSTRUCTOR</p>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                    <div class="counterarea__text__wraper">
                        <div class="counter__img">
                            <img loading="lazy" src="{{asset('assets/img/counter/counter__4.png')}}" alt="counter">
                        </div>
                        <div class="counter__content__wraper">
                            <div class="counter__number">
                                <span class="counter">214</span>+

                            </div>
                            <p>OVER THE WORLD</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter__section__end-->


    <!-- .about__tap__section__end -->
    <div class="gridarea__2 sp_bottom_100" data-aos="fade-up">
        <div class="container-fluid full__width__padding">

            <div class="section__title">

                <div class="section__title__heading">
                    <h2>Our online courses</h2>
                </div>
            </div>

            <div class="row row__custom__class">

                <div class="swiper featured__course">
                    <div class="swiper-wrapper">

                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 grid-item column__custom__class swiper-slide">
                            <div class="gridarea__wraper">
                                <div class="gridarea__img">
                                    <a href="course-details.html"><img loading="lazy" src="{{asset('assets/img/grid/grid_7.png')}}" alt="grid"></a>
                                    <div class="gridarea__small__button gridarea__small__button__1">
                                        <div class="grid__badge">Data & Tech</div>
                                    </div>
                                    <div class="gridarea__small__icon">
                                        <a href="#"><i class="icofont-heart-alt"></i></a>
                                    </div>

                                </div>
                                <div class="gridarea__content">
                                    <div class="gridarea__list">
                                        <ul>
                                            <li>
                                                <i class="icofont-book-alt"></i> 23 Lesson
                                            </li>
                                            <li>
                                                <i class="icofont-clock-time"></i> 1 hr 30 min
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="gridarea__heading">
                                        <h3><a href="course-details.html">Foundation course to under stand
                                                about softwere</a></h3>
                                    </div>
                                    <div class="gridarea__price">
                                        $32.00 <del>/ $67.00</del>
                                        <span> <del class="del__2">Free</del></span>

                                    </div>
                                    <div class="gridarea__bottom">

                                        <a href="instructor-details.html">
                                            <div class="gridarea__small__img">
                                                <img loading="lazy" src="{{asset('assets/img/grid/grid_small_1.jpg')}}" alt="grid">
                                                <div class="gridarea__small__content">
                                                    <h6>Micle Jhon</h6>
                                                </div>
                                            </div>
                                        </a>

                                        <div class="gridarea__star">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <span>(44)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 grid-item column__custom__class swiper-slide">
                            <div class="gridarea__wraper">
                                <div class="gridarea__img">
                                    <a href="course-details.html"><img loading="lazy" src="{{asset('assets/img/grid/grid_8.png')}}" alt="grid"></a>
                                    <div class="gridarea__small__button">
                                        <div class="grid__badge">Data & Tech</div>
                                    </div>
                                    <div class="gridarea__small__icon">
                                        <a href="#"><i class="icofont-heart-alt"></i></a>
                                    </div>

                                </div>
                                <div class="gridarea__content">
                                    <div class="gridarea__list">
                                        <ul>
                                            <li>
                                                <i class="icofont-book-alt"></i> 23 Lesson
                                            </li>
                                            <li>
                                                <i class="icofont-clock-time"></i> 1 hr 30 min
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="gridarea__heading">
                                        <h3><a href="course-details.html">Foundation course to under stand
                                                about softwere</a></h3>
                                    </div>
                                    <div class="gridarea__price">
                                        $32.00 <del>/ $67.00</del>
                                        <span> <del class="del__2">Free</del></span>

                                    </div>
                                    <div class="gridarea__bottom">

                                        <a href="instructor-details.html">
                                            <div class="gridarea__small__img">
                                                <img loading="lazy" src="{{asset('assets/img/grid/grid_small_1.jpg')}}" alt="grid">
                                                <div class="gridarea__small__content">
                                                    <h6>Micle Jhon</h6>
                                                </div>
                                            </div>
                                        </a>

                                        <div class="gridarea__star">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <span>(44)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 grid-item column__custom__class swiper-slide">
                            <div class="gridarea__wraper">
                                <div class="gridarea__img">
                                    <a href="course-details.html"><img loading="lazy" src="{{asset('assets/img/grid/grid_9.png')}}" alt="grid"></a>
                                    <div class="gridarea__small__button">
                                        <div class="grid__badge">Data & Tech</div>
                                    </div>
                                    <div class="gridarea__small__icon">
                                        <a href="#"><i class="icofont-heart-alt"></i></a>
                                    </div>

                                </div>
                                <div class="gridarea__content">
                                    <div class="gridarea__list">
                                        <ul>
                                            <li>
                                                <i class="icofont-book-alt"></i> 23 Lesson
                                            </li>
                                            <li>
                                                <i class="icofont-clock-time"></i> 1 hr 30 min
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="gridarea__heading">
                                        <h3><a href="course-details.html">Foundation course to under stand
                                                about softwere</a></h3>
                                    </div>
                                    <div class="gridarea__price">
                                        $32.00 <del>/ $67.00</del>
                                        <span> <del class="del__2">Free</del></span>

                                    </div>
                                    <div class="gridarea__bottom">

                                        <a href="instructor-details.html">
                                            <div class="gridarea__small__img">
                                                <img loading="lazy" src="{{asset('assets/img/grid/grid_small_1.jpg')}}" alt="grid">
                                                <div class="gridarea__small__content">
                                                    <h6>Micle Jhon</h6>
                                                </div>
                                            </div>
                                        </a>

                                        <div class="gridarea__star">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <span>(44)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 grid-item column__custom__class swiper-slide">
                            <div class="gridarea__wraper">
                                <div class="gridarea__img">
                                    <a href="course-details.html"><img loading="lazy" src="{{asset('assets/img/grid/grid_7.png')}}" alt="grid"></a>
                                    <div class="gridarea__small__button gridarea__small__button__1">
                                        <div class="grid__badge">Data & Tech</div>
                                    </div>
                                    <div class="gridarea__small__icon">
                                        <a href="#"><i class="icofont-heart-alt"></i></a>
                                    </div>

                                </div>
                                <div class="gridarea__content">
                                    <div class="gridarea__list">
                                        <ul>
                                            <li>
                                                <i class="icofont-book-alt"></i> 23 Lesson
                                            </li>
                                            <li>
                                                <i class="icofont-clock-time"></i> 1 hr 30 min
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="gridarea__heading">
                                        <h3><a href="course-details.html">Foundation course to under stand
                                                about softwere</a></h3>
                                    </div>
                                    <div class="gridarea__price">
                                        $32.00 <del>/ $67.00</del>
                                        <span> <del class="del__2">Free</del></span>

                                    </div>
                                    <div class="gridarea__bottom">

                                        <a href="instructor-details.html">
                                            <div class="gridarea__small__img">
                                                <img loading="lazy" src="{{asset('assets/img/grid/grid_small_1.jpg')}}" alt="grid">
                                                <div class="gridarea__small__content">
                                                    <h6>Micle Jhon</h6>
                                                </div>
                                            </div>
                                        </a>

                                        <div class="gridarea__star">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <span>(44)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 grid-item column__custom__class swiper-slide">
                            <div class="gridarea__wraper">
                                <div class="gridarea__img">
                                    <a href="course-details.html"><img loading="lazy" src="{{asset('assets/img/grid/grid_8.png')}}" alt="grid"></a>
                                    <div class="gridarea__small__button gridarea__small__button__1">
                                        <div class="grid__badge">Data & Tech</div>
                                    </div>
                                    <div class="gridarea__small__icon">
                                        <a href="#"><i class="icofont-heart-alt"></i></a>
                                    </div>

                                </div>
                                <div class="gridarea__content">
                                    <div class="gridarea__list">
                                        <ul>
                                            <li>
                                                <i class="icofont-book-alt"></i> 23 Lesson
                                            </li>
                                            <li>
                                                <i class="icofont-clock-time"></i> 1 hr 30 min
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="gridarea__heading">
                                        <h3><a href="course-details.html">Foundation course to under stand
                                                about softwere</a></h3>
                                    </div>
                                    <div class="gridarea__price">
                                        $32.00 <del>/ $67.00</del>
                                        <span> <del class="del__2">Free</del></span>

                                    </div>
                                    <div class="gridarea__bottom">

                                        <a href="instructor-details.html">
                                            <div class="gridarea__small__img">
                                                <img loading="lazy" src="{{asset('assets/img/grid/grid_small_1.jpg')}}" alt="grid">
                                                <div class="gridarea__small__content">
                                                    <h6>Micle Jhon</h6>
                                                </div>
                                            </div>
                                        </a>

                                        <div class="gridarea__star">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <span>(44)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 grid-item column__custom__class swiper-slide">
                            <div class="gridarea__wraper">
                                <div class="gridarea__img">
                                    <a href="course-details.html"><img loading="lazy" src="{{asset('assets/img/grid/grid_9.png')}}" alt="grid"></a>
                                    <div class="gridarea__small__button gridarea__small__button__1">
                                        <div class="grid__badge">Data & Tech</div>
                                    </div>
                                    <div class="gridarea__small__icon">
                                        <a href="#"><i class="icofont-heart-alt"></i></a>
                                    </div>

                                </div>
                                <div class="gridarea__content">
                                    <div class="gridarea__list">
                                        <ul>
                                            <li>
                                                <i class="icofont-book-alt"></i> 23 Lesson
                                            </li>
                                            <li>
                                                <i class="icofont-clock-time"></i> 1 hr 30 min
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="gridarea__heading">
                                        <h3><a href="course-details.html">Foundation course to under stand
                                                about softwere</a></h3>
                                    </div>
                                    <div class="gridarea__price">
                                        $32.00 <del>/ $67.00</del>
                                        <span> <del class="del__2">Free</del></span>

                                    </div>
                                    <div class="gridarea__bottom">

                                        <a href="instructor-details.html">
                                            <div class="gridarea__small__img">
                                                <img loading="lazy" src="{{asset('assets/img/grid/grid_small_1.jpg')}}" alt="grid">
                                                <div class="gridarea__small__content">
                                                    <h6>Micle Jhon</h6>
                                                </div>
                                            </div>
                                        </a>

                                        <div class="gridarea__star">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <span>(44)</span>
                                        </div>
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
    <div class="registerarea sp_top_90">
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
                                    <a class="video-btn" href="https://www.youtube.com/watch?v=vHdclsdkp28"> <img loading="lazy" src="{{asset('assets/img/icon/video.png')}}" alt=""></a>
                                </div>
                                <div class="registerarea__para">
                                    <p>Learn Something new & Build Your Career From Anywhere In The World</p>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12" data-aos="fade-up">
                    <div class="registerarea__form">
                        <div class="registerarea__form__heading">
                            <h4>Fill Your Registration</h4>
                        </div>
                        <form action="#">
                            <input class="register__input" type="text" placeholder="Your Name">
                            <div class="row">
                                <div class="col-xl-6">
                                    <input class="register__input" type="text" placeholder="Email Address">
                                </div>
                                <div class="col-xl-6">
                                    <input class="register__input" type="text" placeholder="Phone">
                                </div>
                            </div>
                            <input class="register__input" type="text" placeholder="Address">
                            <textarea class="register__input textarea" name="#" id="#" cols="30" rows="10">Comment</textarea>
                            <div class="registerarea__button">
                                <a class="default__button" href="#">Sign Up
                                    <i class="icofont-long-arrow-right"></i>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <div class="registerarea__img">
            <img loading="lazy" class="register__1" src="{{asset('assets/img/register/register__1.png')}}" alt="register">
            <img loading="lazy" class="register__2" src="{{asset('assets/img/register/register__2.png')}}" alt="register">
            <img loading="lazy" class="register__3" src="{{asset('assets/img/register/register__3.png')}}" alt="register">
        </div>
    </div>
    <!-- register__section__end-->




    <!-- tution__section__start -->
    <div class="tution sp_bottom_70 sp_top_100">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-xl-12">
                    <div class="section__title text-center">
                        <div class="section__title__button">
                            <div class="default__small__button">Updated</div>
                        </div>
                        <div class="section__title__heading">
                            <h2>University Tuition & Fees</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-12" data-aos="fade-up">
                    <div class="tution__img">
                        <img loading="lazy" src="{{asset('assets/img/about/tution.jpg')}}" alt="tution">
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7 col-12" data-aos="fade-up">

                    <div class="accordion content__cirriculum__wrap" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Bachelor of Business Administration (BBA)
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-read-book"></i>
                                            <h5> <span>Semister 1 :</span> This is the second item's</h5>
                                        </div>
                                        <div class="scc__meta">
                                            <span class="time"><i class="icofont-dollar"></i> 350.00</span>
                                        </div>
                                    </div>
                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-video-alt"></i>
                                            <h5> <span>Semister 2 :</span> Lorem ipsum dolor sit amet.</h5>
                                        </div>
                                        <div class="scc__meta">
                                            <span class="time"> <i class="icofont-dollar"></i> 280.00</span>
                                        </div>
                                    </div>
                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-audio"></i>
                                            <h5> <span>Semister 3 :</span> Lorem ipsum dolor sit amet.</h5>
                                        </div>
                                        <div class="scc__meta">
                                            <span class="time"> <i class="icofont-dollar"></i> 300.00</span>
                                        </div>
                                    </div>
                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-certificate"></i>
                                            <h5> <span>Semister 4 :</span> This is most Important</h5>
                                        </div>
                                        <div class="scc__meta">
                                            <span class="time"> <i class="icofont-dollar"></i> 350.00</span>
                                        </div>
                                    </div>
                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-file-text"></i>
                                            <h5> <span>Total Fees :</span></h5>
                                        </div>
                                        <div class="scc__meta">
                                            <span class="question"><i class="icofont-dollar"></i> 1,280.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Masters of Business Administration (MBA)
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-read-book"></i>
                                            <h5> <span>Semister 1 :</span> This is the second item's</h5>
                                        </div>
                                        <div class="scc__meta">
                                            <span class="time"><i class="icofont-dollar"></i> 350.00</span>
                                        </div>
                                    </div>
                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-video-alt"></i>
                                            <h5> <span>Semister 2 :</span> Lorem ipsum dolor sit amet.</h5>
                                        </div>
                                        <div class="scc__meta">
                                            <span class="time"> <i class="icofont-dollar"></i> 280.00</span>
                                        </div>
                                    </div>
                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-audio"></i>
                                            <h5> <span>Semister 3 :</span> Lorem ipsum dolor sit amet.</h5>
                                        </div>
                                        <div class="scc__meta">
                                            <span class="time"> <i class="icofont-dollar"></i> 300.00</span>
                                        </div>
                                    </div>
                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-certificate"></i>
                                            <h5> <span>Semister 4 :</span> This is most Important</h5>
                                        </div>
                                        <div class="scc__meta">
                                            <span class="time"> <i class="icofont-dollar"></i> 350.00</span>
                                        </div>
                                    </div>
                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-file-text"></i>
                                            <h5> <span>Total Fees :</span></h5>
                                        </div>
                                        <div class="scc__meta">
                                            <span class="question"><i class="icofont-dollar"></i> 1,280.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Computer Science & Engineering (CSE)
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-read-book"></i>
                                            <h5> <span>Semister 1 :</span> This is the second item's</h5>
                                        </div>
                                        <div class="scc__meta">
                                            <span class="time"><i class="icofont-dollar"></i> 350.00</span>
                                        </div>
                                    </div>
                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-video-alt"></i>
                                            <h5> <span>Semister 2 :</span> Lorem ipsum dolor sit amet.</h5>
                                        </div>
                                        <div class="scc__meta">
                                            <span class="time"> <i class="icofont-dollar"></i> 280.00</span>
                                        </div>
                                    </div>
                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-audio"></i>
                                            <h5> <span>Semister 3 :</span> Lorem ipsum dolor sit amet.</h5>
                                        </div>
                                        <div class="scc__meta">
                                            <span class="time"> <i class="icofont-dollar"></i> 300.00</span>
                                        </div>
                                    </div>
                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-certificate"></i>
                                            <h5> <span>Semister 4 :</span> This is most Important</h5>
                                        </div>
                                        <div class="scc__meta">
                                            <span class="time"> <i class="icofont-dollar"></i> 350.00</span>
                                        </div>
                                    </div>
                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-file-text"></i>
                                            <h5> <span>Total Fees :</span></h5>
                                        </div>
                                        <div class="scc__meta">
                                            <span class="question"><i class="icofont-dollar"></i> 1,280.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Bachelor of Legislative Law (LLB)
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-read-book"></i>
                                            <h5> <span>Semister 1 :</span> This is the second item's</h5>
                                        </div>
                                        <div class="scc__meta">
                                            <span class="time"><i class="icofont-dollar"></i> 550.00</span>
                                        </div>
                                    </div>
                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-video-alt"></i>
                                            <h5> <span>Semister 2 :</span> Lorem ipsum dolor sit amet.</h5>
                                        </div>
                                        <div class="scc__meta">
                                            <span class="time"> <i class="icofont-dollar"></i> 280.00</span>
                                        </div>
                                    </div>
                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-audio"></i>
                                            <h5> <span>Semister 3 :</span> Lorem ipsum dolor sit amet.</h5>
                                        </div>
                                        <div class="scc__meta">
                                            <span class="time"> <i class="icofont-dollar"></i> 400.00</span>
                                        </div>
                                    </div>
                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-certificate"></i>
                                            <h5> <span>Semister 4 :</span> This is most Important</h5>
                                        </div>
                                        <div class="scc__meta">
                                            <span class="time"> <i class="icofont-dollar"></i> 350.00</span>
                                        </div>
                                    </div>
                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-file-text"></i>
                                            <h5> <span>Total Fees :</span></h5>
                                        </div>
                                        <div class="scc__meta">
                                            <span class="question"><i class="icofont-dollar"></i> 1,580.00</span>
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
    <!-- tution__section__end -->



    <!-- eventlistarea__section__start  -->
    <div class="eventlistarea sp_top_50 sp_bottom_100">

        <div class="container">
            <div class="eventlistarea__bg">
                <svg width="938" height="919" viewBox="0 0 938 919" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M926.588 668.954C845.79 881.299 578.082 976.498 328.645 881.587C79.2083 786.675 -57.5003 537.594 23.2975 325.25C104.095 112.905 842.659 -201.917 722.687 181.03C612.239 533.576 1007.39 456.609 926.588 668.954Z" fill="url(#paint0_linear_141_3)" />
                    <defs>
                        <linearGradient id="paint0_linear_141_3" x1="621.24" y1="112.617" x2="328.645" y2="881.586" gradientUnits="userSpaceOnUse">
                            <stop offset="0.9999" stop-color="#FBAED8" stop-opacity="0.08" />
                            <stop offset="1" stop-color="#B64AA4" stop-opacity="0" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>
            <div class="row eventarea__wraper" data-aos="fade-up">
                <div class="col-xl-7 col-lg-7 col-md-7">
                    <div class="section__title eventarea__section__title">
                        <div class="section__title__button">
                            <div class="default__small__button">Event List</div>
                        </div>
                        <div class="section__title__heading heading__underline">
                            <h2>We Arrange <span>learning</span> Event for student</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-5">
                    <div class="eventarea__content">
                        <p>Forging relationships between multi to national governments and global NGOs begins.</p>
                    </div>
                </div>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-xl-12">
                    <ul class="nav  tab__button__wrap" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="single__tab__link active" data-bs-toggle="tab" data-bs-target="#projects__one" type="button">Monday</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="single__tab__link" data-bs-toggle="tab" data-bs-target="#projects__two" type="button">Tuesday</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="single__tab__link" data-bs-toggle="tab" data-bs-target="#projects__three" type="button">Wednesday</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="single__tab__link" data-bs-toggle="tab" data-bs-target="#projects__four" type="button">Thursday</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="single__tab__link" data-bs-toggle="tab" data-bs-target="#projects__five" type="button">Friday</button>
                        </li>

                    </ul>

                </div>
            </div>

            <div class="tab-content tab__content__wrapper" id="myTabContent">
                <div class="tab-pane fade active show" id="projects__one" role="tabpanel" aria-labelledby="projects__one">
                    <div class="social__wrapper">
                        <div class="single__event__wraper" data-aos="fade-up">
                            <div class="eventarea__img">
                                <img loading="lazy" src="{{asset('assets/img/event/event__1.png')}}" alt="event">
                            </div>
                            <div class="eventarea__content__wraper">
                                <div class="eventarea__list">
                                    <ul>
                                        <li>
                                            <i class="icofont-clock-time"></i> 10.00Am - 11.00 am
                                        </li>
                                        <li>
                                            <a href="instructor-details.html">Mirnsdo .H</a> - Event Speaker
                                        </li>
                                    </ul>
                                </div>
                                <div class="single__event__heading">
                                    <h4><a href="event-details.html">Forging relationships between multi to national
                                            governments and global.</a></h4>
                                </div>
                                <div class="single__event__button">
                                    <a href="event-details.html">Read More <i class="icofont-simple-right"></i></a>
                                </div>
                            </div>
                        </div>


                        <div class="single__event__wraper single__event__wraper__2" data-aos="fade-up">

                            <div class="eventarea__content__wraper">
                                <div class="eventarea__list">
                                    <ul>
                                        <li>
                                            <i class="icofont-clock-time"></i> 10.00Am - 11.00 am
                                        </li>
                                        <li>
                                            <a href="instructor-details.html">Mirnsdo .H</a> - Event Speaker
                                        </li>
                                    </ul>
                                </div>
                                <div class="single__event__heading">
                                    <h4><a href="event-details.html">Forging relationships between multi to national
                                            governments and global.</a></h4>
                                </div>
                                <div class="single__event__button">
                                    <a href="event-details.html">Read More <i class="icofont-simple-right"></i></a>
                                </div>
                            </div>
                            <div class="eventarea__img">
                                <img loading="lazy" src="{{asset('assets/img/event/event__2.png')}}" alt="event">
                            </div>
                        </div>


                        <div class="single__event__wraper" data-aos="fade-up">
                            <div class="eventarea__img">
                                <img loading="lazy" src="{{asset('assets/img/event/event__3.png')}}" alt="event">
                            </div>
                            <div class="eventarea__content__wraper">
                                <div class="eventarea__list">
                                    <ul>
                                        <li>
                                            <i class="icofont-clock-time"></i> 10.00Am - 11.00 am
                                        </li>
                                        <li>
                                            <a href="instructor-details.html">Mirnsdo .H</a> - Event Speaker
                                        </li>
                                    </ul>
                                </div>
                                <div class="single__event__heading">
                                    <h4><a href="event-details.html">Forging relationships between multi to national
                                            governments and global.</a></h4>
                                </div>
                                <div class="single__event__button">
                                    <a href="event-details.html">Read More <i class="icofont-simple-right"></i></a>
                                </div>
                            </div>
                        </div>


                        <div class="single__event__wraper single__event__wraper__2" data-aos="fade-up">

                            <div class="eventarea__content__wraper">
                                <div class="eventarea__list">
                                    <ul>
                                        <li>
                                            <i class="icofont-clock-time"></i> 10.00Am - 11.00 am
                                        </li>
                                        <li>
                                            <a href="instructor-details.html">Mirnsdo .H</a> - Event Speaker
                                        </li>
                                    </ul>
                                </div>
                                <div class="single__event__heading">
                                    <h4><a href="event-details.html">Forging relationships between multi to national
                                            governments and global.</a></h4>
                                </div>
                                <div class="single__event__button">
                                    <a href="event-details.html">Read More <i class="icofont-simple-right"></i></a>
                                </div>
                            </div>
                            <div class="eventarea__img">
                                <img loading="lazy" src="{{asset('assets/img/event/event__4.png')}}" alt="event">
                            </div>
                        </div>


                    </div>
                </div>

                <div class="tab-pane fade" id="projects__two" role="tabpanel" aria-labelledby="projects__two">
                    <div class="social__wrapper">


                        <div class="single__event__wraper" data-aos="fade-up">
                            <div class="eventarea__img">
                                <img loading="lazy" src="{{asset('assets/img/event/event__4.png')}}" alt="event">
                            </div>
                            <div class="eventarea__content__wraper">
                                <div class="eventarea__list">
                                    <ul>
                                        <li>
                                            <i class="icofont-clock-time"></i> 10.00Am - 11.00 am
                                        </li>
                                        <li>
                                            <a href="instructor-details.html">Mirnsdo .H</a> - Event Speaker
                                        </li>
                                    </ul>
                                </div>
                                <div class="single__event__heading">
                                    <h4><a href="event-details.html">Forging relationships between multi to national
                                            governments and global.</a></h4>
                                </div>
                                <div class="single__event__button">
                                    <a href="event-details.html">Read More <i class="icofont-simple-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="single__event__wraper single__event__wraper__2" data-aos="fade-up">

                            <div class="eventarea__content__wraper">
                                <div class="eventarea__list">
                                    <ul>
                                        <li>
                                            <i class="icofont-clock-time"></i> 10.00Am - 11.00 am
                                        </li>
                                        <li>
                                            <a href="instructor-details.html">Mirnsdo .H</a> - Event Speaker
                                        </li>
                                    </ul>
                                </div>
                                <div class="single__event__heading">
                                    <h4><a href="event-details.html">Forging relationships between multi to national
                                            governments and global.</a></h4>
                                </div>
                                <div class="single__event__button">
                                    <a href="event-details.html">Read More <i class="icofont-simple-right"></i></a>
                                </div>
                            </div>
                            <div class="eventarea__img">
                                <img loading="lazy" src="{{asset('assets/img/event/event__2.png')}}" alt="event">
                            </div>
                        </div>

                        <div class="single__event__wraper" data-aos="fade-up">
                            <div class="eventarea__img">
                                <img loading="lazy" src="{{asset('assets/img/event/event__3.png')}}" alt="event">
                            </div>
                            <div class="eventarea__content__wraper">
                                <div class="eventarea__list">
                                    <ul>
                                        <li>
                                            <i class="icofont-clock-time"></i> 10.00Am - 11.00 am
                                        </li>
                                        <li>
                                            <a href="instructor-details.html">Mirnsdo .H</a> - Event Speaker
                                        </li>
                                    </ul>
                                </div>
                                <div class="single__event__heading">
                                    <h4><a href="event-details.html">Forging relationships between multi to national
                                            governments and global.</a></h4>
                                </div>
                                <div class="single__event__button">
                                    <a href="event-details.html">Read More <i class="icofont-simple-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="single__event__wraper single__event__wraper__2" data-aos="fade-up">

                            <div class="eventarea__content__wraper">
                                <div class="eventarea__list">
                                    <ul>
                                        <li>
                                            <i class="icofont-clock-time"></i> 10.00Am - 11.00 am
                                        </li>
                                        <li>
                                            <a href="instructor-details.html">Mirnsdo .H</a> - Event Speaker
                                        </li>
                                    </ul>
                                </div>
                                <div class="single__event__heading">
                                    <h4><a href="event-details.html">Forging relationships between multi to national
                                            governments and global.</a></h4>
                                </div>
                                <div class="single__event__button">
                                    <a href="event-details.html">Read More <i class="icofont-simple-right"></i></a>
                                </div>
                            </div>
                            <div class="eventarea__img">
                                <img loading="lazy" src="{{asset('assets/img/event/event__1.png')}}" alt="event">
                            </div>
                        </div>


                    </div>

                </div>

                <div class="tab-pane fade" id="projects__three" role="tabpanel" aria-labelledby="projects__three">
                    <div class="social__wrapper">


                        <div class="single__event__wraper" data-aos="fade-up">
                            <div class="eventarea__img">
                                <img loading="lazy" src="{{asset('assets/img/event/event__4.png')}}" alt="event">
                            </div>
                            <div class="eventarea__content__wraper">
                                <div class="eventarea__list">
                                    <ul>
                                        <li>
                                            <i class="icofont-clock-time"></i> 10.00Am - 11.00 am
                                        </li>
                                        <li>
                                            <a href="instructor-details.html">Mirnsdo .H</a> - Event Speaker
                                        </li>
                                    </ul>
                                </div>
                                <div class="single__event__heading">
                                    <h4><a href="event-details.html">Forging relationships between multi to national
                                            governments and global.</a></h4>
                                </div>
                                <div class="single__event__button">
                                    <a href="event-details.html">Read More <i class="icofont-simple-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="single__event__wraper single__event__wraper__2" data-aos="fade-up">

                            <div class="eventarea__content__wraper">
                                <div class="eventarea__list">
                                    <ul>
                                        <li>
                                            <i class="icofont-clock-time"></i> 10.00Am - 11.00 am
                                        </li>
                                        <li>
                                            <a href="instructor-details.html">Mirnsdo .H</a> - Event Speaker
                                        </li>
                                    </ul>
                                </div>
                                <div class="single__event__heading">
                                    <h4><a href="event-details.html">Forging relationships between multi to national
                                            governments and global.</a></h4>
                                </div>
                                <div class="single__event__button">
                                    <a href="event-details.html">Read More <i class="icofont-simple-right"></i></a>
                                </div>
                            </div>
                            <div class="eventarea__img">
                                <img loading="lazy" src="{{asset('assets/img/event/event__2.png')}}" alt="event">
                            </div>
                        </div>

                        <div class="single__event__wraper" data-aos="fade-up">
                            <div class="eventarea__img">
                                <img loading="lazy" src="{{asset('assets/img/event/event__3.png')}}" alt="event">
                            </div>
                            <div class="eventarea__content__wraper">
                                <div class="eventarea__list">
                                    <ul>
                                        <li>
                                            <i class="icofont-clock-time"></i> 10.00Am - 11.00 am
                                        </li>
                                        <li>
                                            <a href="instructor-details.html">Mirnsdo .H</a> - Event Speaker
                                        </li>
                                    </ul>
                                </div>
                                <div class="single__event__heading">
                                    <h4><a href="event-details.html">Forging relationships between multi to national
                                            governments and global.</a></h4>
                                </div>
                                <div class="single__event__button">
                                    <a href="event-details.html">Read More <i class="icofont-simple-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="single__event__wraper single__event__wraper__2" data-aos="fade-up">

                            <div class="eventarea__content__wraper">
                                <div class="eventarea__list">
                                    <ul>
                                        <li>
                                            <i class="icofont-clock-time"></i> 10.00Am - 11.00 am
                                        </li>
                                        <li>
                                            <a href="instructor-details.html">Mirnsdo .H</a> - Event Speaker
                                        </li>
                                    </ul>
                                </div>
                                <div class="single__event__heading">
                                    <h4><a href="event-details.html">Forging relationships between multi to national
                                            governments and global.</a></h4>
                                </div>
                                <div class="single__event__button">
                                    <a href="event-details.html">Read More <i class="icofont-simple-right"></i></a>
                                </div>
                            </div>
                            <div class="eventarea__img">
                                <img loading="lazy" src="{{asset('assets/img/event/event__1.png')}}" alt="event">
                            </div>
                        </div>


                    </div>
                </div>

                <div class="tab-pane fade" id="projects__four" role="tabpanel" aria-labelledby="projects__four">
                    <div class="social__wrapper">


                        <div class="single__event__wraper" data-aos="fade-up">
                            <div class="eventarea__img">
                                <img loading="lazy" src="{{asset('assets/img/event/event__4.png')}}" alt="event">
                            </div>
                            <div class="eventarea__content__wraper">
                                <div class="eventarea__list">
                                    <ul>
                                        <li>
                                            <i class="icofont-clock-time"></i> 10.00Am - 11.00 am
                                        </li>
                                        <li>
                                            <a href="instructor-details.html">Mirnsdo .H</a> - Event Speaker
                                        </li>
                                    </ul>
                                </div>
                                <div class="single__event__heading">
                                    <h4><a href="event-details.html">Forging relationships between multi to national
                                            governments and global.</a></h4>
                                </div>
                                <div class="single__event__button">
                                    <a href="event-details.html">Read More <i class="icofont-simple-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="single__event__wraper single__event__wraper__2" data-aos="fade-up">

                            <div class="eventarea__content__wraper">
                                <div class="eventarea__list">
                                    <ul>
                                        <li>
                                            <i class="icofont-clock-time"></i> 10.00Am - 11.00 am
                                        </li>
                                        <li>
                                            <a href="instructor-details.html">Mirnsdo .H</a> - Event Speaker
                                        </li>
                                    </ul>
                                </div>
                                <div class="single__event__heading">
                                    <h4><a href="event-details.html">Forging relationships between multi to national
                                            governments and global.</a></h4>
                                </div>
                                <div class="single__event__button">
                                    <a href="event-details.html">Read More <i class="icofont-simple-right"></i></a>
                                </div>
                            </div>
                            <div class="eventarea__img">
                                <img loading="lazy" src="{{asset('assets/img/event/event__2.png')}}" alt="event">
                            </div>
                        </div>

                        <div class="single__event__wraper" data-aos="fade-up">
                            <div class="eventarea__img">
                                <img loading="lazy" src="{{asset('assets/img/event/event__3.png')}}" alt="event">
                            </div>
                            <div class="eventarea__content__wraper">
                                <div class="eventarea__list">
                                    <ul>
                                        <li>
                                            <i class="icofont-clock-time"></i> 10.00Am - 11.00 am
                                        </li>
                                        <li>
                                            <a href="instructor-details.html">Mirnsdo .H</a> - Event Speaker
                                        </li>
                                    </ul>
                                </div>
                                <div class="single__event__heading">
                                    <h4><a href="event-details.html">Forging relationships between multi to national
                                            governments and global.</a></h4>
                                </div>
                                <div class="single__event__button">
                                    <a href="event-details.html">Read More <i class="icofont-simple-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="single__event__wraper single__event__wraper__2" data-aos="fade-up">

                            <div class="eventarea__content__wraper">
                                <div class="eventarea__list">
                                    <ul>
                                        <li>
                                            <i class="icofont-clock-time"></i> 10.00Am - 11.00 am
                                        </li>
                                        <li>
                                            <a href="instructor-details.html">Mirnsdo .H</a> - Event Speaker
                                        </li>
                                    </ul>
                                </div>
                                <div class="single__event__heading">
                                    <h4><a href="event-details.html">Forging relationships between multi to national
                                            governments and global.</a></h4>
                                </div>
                                <div class="single__event__button">
                                    <a href="event-details.html">Read More <i class="icofont-simple-right"></i></a>
                                </div>
                            </div>
                            <div class="eventarea__img">
                                <img loading="lazy" src="{{asset('assets/img/event/event__1.png')}}" alt="event">
                            </div>
                        </div>


                    </div>
                </div>

                <div class="tab-pane fade" id="projects__five" role="tabpanel" aria-labelledby="projects__five">
                    <div class="social__wrapper">


                        <div class="single__event__wraper" data-aos="fade-up">
                            <div class="eventarea__img">
                                <img loading="lazy" src="{{asset('assets/img/event/event__4.png')}}" alt="event">
                            </div>
                            <div class="eventarea__content__wraper">
                                <div class="eventarea__list">
                                    <ul>
                                        <li>
                                            <i class="icofont-clock-time"></i> 10.00Am - 11.00 am
                                        </li>
                                        <li>
                                            <a href="instructor-details.html">Mirnsdo .H</a> - Event Speaker
                                        </li>
                                    </ul>
                                </div>
                                <div class="single__event__heading">
                                    <h4><a href="event-details.html">Forging relationships between multi to national
                                            governments and global.</a></h4>
                                </div>
                                <div class="single__event__button">
                                    <a href="event-details.html">Read More <i class="icofont-simple-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="single__event__wraper single__event__wraper__2" data-aos="fade-up">

                            <div class="eventarea__content__wraper">
                                <div class="eventarea__list">
                                    <ul>
                                        <li>
                                            <i class="icofont-clock-time"></i> 10.00Am - 11.00 am
                                        </li>
                                        <li>
                                            <a href="instructor-details.html">Mirnsdo .H</a> - Event Speaker
                                        </li>
                                    </ul>
                                </div>
                                <div class="single__event__heading">
                                    <h4><a href="event-details.html">Forging relationships between multi to national
                                            governments and global.</a></h4>
                                </div>
                                <div class="single__event__button">
                                    <a href="event-details.html">Read More <i class="icofont-simple-right"></i></a>
                                </div>
                            </div>
                            <div class="eventarea__img">
                                <img loading="lazy" src="{{asset('assets/img/event/event__2.png')}}" alt="event">
                            </div>
                        </div>

                        <div class="single__event__wraper" data-aos="fade-up">
                            <div class="eventarea__img">
                                <img loading="lazy" src="{{asset('assets/img/event/event__3.png')}}" alt="event">
                            </div>
                            <div class="eventarea__content__wraper">
                                <div class="eventarea__list">
                                    <ul>
                                        <li>
                                            <i class="icofont-clock-time"></i> 10.00Am - 11.00 am
                                        </li>
                                        <li>
                                            <a href="instructor-details.html">Mirnsdo .H</a> - Event Speaker
                                        </li>
                                    </ul>
                                </div>
                                <div class="single__event__heading">
                                    <h4><a href="event-details.html">Forging relationships between multi to national
                                            governments and global.</a></h4>
                                </div>
                                <div class="single__event__button">
                                    <a href="event-details.html">Read More <i class="icofont-simple-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="single__event__wraper single__event__wraper__2" data-aos="fade-up">

                            <div class="eventarea__content__wraper">
                                <div class="eventarea__list">
                                    <ul>
                                        <li>
                                            <i class="icofont-clock-time"></i> 10.00Am - 11.00 am
                                        </li>
                                        <li>
                                            <a href="instructor-details.html">Mirnsdo .H</a> - Event Speaker
                                        </li>
                                    </ul>
                                </div>
                                <div class="single__event__heading">
                                    <h4><a href="event-details.html">Forging relationships between multi to national
                                            governments and global.</a></h4>
                                </div>
                                <div class="single__event__button">
                                    <a href="event-details.html">Read More <i class="icofont-simple-right"></i></a>
                                </div>
                            </div>
                            <div class="eventarea__img">
                                <img loading="lazy" src="{{asset('assets/img/event/event__1.png')}}" alt="event">
                            </div>
                        </div>


                    </div>
                </div>

            </div>


        </div>
    </div>
    <!-- eventlistarea__section__end  -->


    <!-- team__section__start
        <div class="teamarea sp_bottom_100 sp_top_50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12" data-aos="fade-up">
                        <div class="section__title__2 text-center teamarea__margin">
                            <div class="section__small__title">
                                <span>Expert teacher</span>
                            </div>
                            <div class="section__title__heading__2 section__title__heading__3 heading__fontsize__2">
                                <h2>Our Expert Teacher</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                        <div class="single__team">
                            <div class="teamarea__img">
                                <img loading="lazy"  src="{{asset('assets/img/team/team__1.png')}}" alt="team">
                                <div class="teamarea__icon">
                                    <ul>
                                        <li>
                                            <a href="#"> <i class="icofont-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="icofont-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="icofont-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="icofont-youtube-play"></i></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="teamarea__content">
                                <p>INTERIOR DESIGNER</p>
                                <h5><a href="#">Mirnsdo Jons</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                        <div class="single__team">
                            <div class="teamarea__img">
                                <img loading="lazy"  src="{{asset('assets/img/team/team__2.png')}}" alt="team">
                                <div class="teamarea__icon">
                                    <ul>
                                        <li>
                                            <a href="#"> <i class="icofont-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="icofont-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="icofont-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="icofont-youtube-play"></i></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="teamarea__content">
                                <p>INTERIOR DESIGNER</p>
                                <h5><a href="#">Daniel Rock</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                        <div class="single__team">
                            <div class="teamarea__img">
                                <img loading="lazy"  src="{{asset('assets/img/team/team__3.png')}}" alt="team">
                                <div class="teamarea__icon">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="icofont-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="icofont-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="icofont-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="icofont-instagram"></i></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="teamarea__content">
                                <p>INTERIOR DESIGNER</p>
                                <h5><a href="#">Sajid Mustahidul</a></h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        -->

    <!-- testmonialarea__section__atart -->
    <div class="testmonialarea sp_top_100 sp_bottom_110">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="section__title text-center">
                    <div class="section__title__button">
                        <div class="default__small__button">Course List</div>
                    </div>
                    <div class="section__title__heading heading__underline">
                        <h2>Client <span>Testimonial</span></h2>
                    </div>
                </div>
            </div>
            <div class="row row__custom__class testimonial__slider__active default__arrow" data-aos="fade-up">
                <div class="col-xl-6 column__custom__class">
                    <div class="single__testimonial__wraper">
                        <div class="single__testimonial__inner">
                            <div class="testimonial__img">
                                <img loading="lazy" src="{{asset('assets/img/testimonial/testi_1.png')}}" alt="testi">
                                <div class="testimonial__name">
                                    <h6>Mirnsdo Jons</h6>
                                    <span>Ui/Ux Designer</span>
                                </div>
                            </div>
                            <div class="testimonial__icon">
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star dark__color"></i>
                            </div>
                        </div>

                        <div class="testimonial__content">
                            <p>The other hand we denounce with righteou indg ation men who are so beguiled and
                                demoraliz ed by the of the mo ment.Dislike men who are so beguiled and dems ed by
                                the charms of pleas ure of the moment. Lorem </p>
                        </div>


                    </div>
                </div>
                <div class="col-xl-6 column__custom__class">
                    <div class="single__testimonial__wraper">
                        <div class="single__testimonial__inner">
                            <div class="testimonial__img">
                                <img loading="lazy" src="{{asset('assets/img/testimonial/testi_1.png')}}" alt="testi">
                                <div class="testimonial__name">
                                    <h6>Mirnsdo Jons</h6>
                                    <span>Ui/Ux Designer</span>
                                </div>
                            </div>
                            <div class="testimonial__icon">
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star dark__color"></i>
                            </div>
                        </div>

                        <div class="testimonial__content">
                            <p>The other hand we denounce with righteou indg ation men who are so beguiled and
                                demoraliz ed by the of the mo ment.Dislike men who are so beguiled and dems ed by
                                the charms of pleas ure of the moment. Lorem </p>
                        </div>


                    </div>
                </div>
                <div class="col-xl-6 column__custom__class">
                    <div class="single__testimonial__wraper">
                        <div class="single__testimonial__inner">
                            <div class="testimonial__img">
                                <img loading="lazy" src="{{asset('assets/img/testimonial/testi_1.png')}}" alt="testi">
                                <div class="testimonial__name">
                                    <h6>Mirnsdo Jons</h6>
                                    <span>Ui/Ux Designer</span>
                                </div>
                            </div>
                            <div class="testimonial__icon">
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star dark__color"></i>
                            </div>
                        </div>

                        <div class="testimonial__content">
                            <p>The other hand we denounce with righteou indg ation men who are so beguiled and
                                demoraliz ed by the of the mo ment.Dislike men who are so beguiled and dems ed by
                                the charms of pleas ure of the moment. Lorem </p>
                        </div>


                    </div>
                </div>
                <div class="col-xl-6 column__custom__class">
                    <div class="single__testimonial__wraper">
                        <div class="single__testimonial__inner">
                            <div class="testimonial__img">
                                <img loading="lazy" src="{{asset('assets/img/testimonial/testi_1.png')}}" alt="testi">
                                <div class="testimonial__name">
                                    <h6>Mirnsdo Jons</h6>
                                    <span>Ui/Ux Designer</span>
                                </div>
                            </div>
                            <div class="testimonial__icon">
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star dark__color"></i>
                            </div>
                        </div>

                        <div class="testimonial__content">
                            <p>The other hand we denounce with righteou indg ation men who are so beguiled and
                                demoraliz ed by the of the mo ment.Dislike men who are so beguiled and dems ed by
                                the charms of pleas ure of the moment. Lorem </p>
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
                            <h2>Relied on marketers trusted by engineers and
                                <br>Beloved by <span>Executives</span>
                            </h2>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="brandarea__wraper" data-aos="fade-up">
                    <div class="brandarea__img">
                        <a href="#"><img loading="lazy" src="{{asset('assets/img/brand/brand_1.png')}}" alt="brand"></a>
                    </div>
                    <div class="brandarea__img">
                        <a href="#"><img loading="lazy" src="{{asset('assets/img/brand/brand_2.png')}}" alt="brand"></a>
                    </div>
                    <div class="brandarea__img">
                        <a href="#"><img loading="lazy" src="{{asset('assets/img/brand/brand_3.png')}}" alt="brand"></a>
                    </div>
                    <div class="brandarea__img">
                        <a href="#"><img loading="lazy" src="{{asset('assets/img/brand/brand_4.png')}}" alt="brand"></a>
                    </div>
                    <div class="brandarea__img">
                        <a href="#"><img loading="lazy" src="{{asset('assets/img/brand/brand_5.png')}}" alt="brand"></a>
                    </div>
                    <div class="brandarea__img">
                        <a href="#"><img loading="lazy" src="{{asset('assets/img/brand/brand_6.png')}}" alt="brand"></a>
                    </div>
                    <div class="brandarea__img">
                        <a href="#"><img loading="lazy" src="{{asset('assets/img/brand/brand_7.png')}}" alt="brand"></a>
                    </div>
                    <div class="brandarea__img">
                        <a href="#"><img loading="lazy" src="{{asset('assets/img/brand/brand_8.png')}}" alt="brand"></a>
                    </div>
                    <div class="brandarea__img">
                        <a href="#"><img loading="lazy" src="{{asset('assets/img/brand/brand_9.png')}}" alt="brand"></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- brand__section__end -->

    <!-- blog__section__start -->
    <div class="blogarea sp_bottom_70 sp_top_100">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-xl-12">
                    <div class="section__title text-center">
                        <div class="section__title__button">
                            <div class="default__small__button">News & Blogs</div>
                        </div>
                        <div class="section__title__heading heading__underline">
                            <h2>Our Latest <span>Research</span></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8 col-lg-8" data-aos="fade-up">
                    <div class="blogarea__content__wraper">
                        <div class="blogarea__img">
                            <img loading="lazy" src="{{asset('assets/img/blog/blog_26.jpg')}}" alt="blog">
                            <div class="blogarea__date">
                                20
                                <span>Oct</span>
                            </div>
                        </div>
                        <div class="blogarea__text__wraper">
                            <h3><a href="#">It is a long established fact that a reader
                                    will be Standard Part</a></h3>
                            <div class="blogarea__para">
                                <p>A wonderful serenity has taken possssion of my entire souing like these sweet
                                    morning spring whch enjoy with my whole heart I am alone, and feel the charm of
                                    existenceths spot whch was create For the bliss of souls
                                    like mineing am so happy my dear frend so absori bed in the exquste sens of
                                    mere. A wonderful serenity has taken posseson of my entire soung like these
                                    sweet mornngs spring whch enjoy …</p>
                            </div>

                            <div class="blogarea__icon">
                                <div class="blogarea__person">
                                    <div class="blogarea__img">
                                        <img loading="lazy" src="{{asset('assets/img/blog/blog_2.png')}}" alt="">
                                    </div>
                                    <div class="blogarea__name">
                                        <span> By</span>: Mirnsdo Jons
                                    </div>
                                </div>
                                <div class="blogarea__list">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="icofont-facebook"></i></a>
                                        </li>

                                        <li>
                                            <a href="#"><i class="icofont-youtube-play"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icofont-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icofont-twitter"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-4 col-lg-4" data-aos="fade-up">
                    <div class="blogarea__content__wraper">
                        <div class="blogarea__img">
                            <img loading="lazy" src="{{asset('assets/img/blog/blog_27.jpg')}}" alt="blog">
                            <div class="blogarea__date small__date">
                                20
                                <span>Oct</span>
                            </div>
                        </div>
                        <div class="blogarea__text__wraper blogarea__text__wraper__2">
                            <h3><a href="#">It is a long established fact that a reader
                                    will be Standard Part</a></h3>
                        </div>

                    </div>

                    <div class="blogarea__content__wraper">
                        <div class="blogarea__img">
                            <img loading="lazy" src="{{asset('assets/img/blog/blog_28.jpg')}}" alt="blog">
                            <div class="blogarea__date small__date">
                                20
                                <span>Oct</span>
                            </div>
                        </div>
                        <div class="blogarea__text__wraper blogarea__text__wraper__2">
                            <h3><a href="#">It is a long established fact that a reader
                                    will be Standard Part</a></h3>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog__section__end -->

    <div class="gallery">
        <div class="container-fluid full__width__padding">
            <div class="blogsidebar__content__wraper__2">

                <div class="photo__gallery__img">

                    <div class="single__gallery__img">
                        <img loading="lazy" src="{{asset('assets/img/blog/blog_15.png')}}" alt="photo">
                        <div class="gallery__icon">
                            <a class="popup__img" href="img/blog/blog_15.png')}}"> <i class="icofont-eye-alt"></i></a>
                        </div>
                    </div>
                    <div class="single__gallery__img">
                        <img loading="lazy" src="{{asset('assets/img/blog/blog_16.png')}}" alt="photo">
                        <div class="gallery__icon">
                            <a class="popup__img" href="img/blog/blog_16.png')}}"> <i class="icofont-eye-alt"></i></a>
                        </div>
                    </div>
                    <div class="single__gallery__img">
                        <img loading="lazy" src="{{asset('assets/img/blog/blog_17.png')}}" alt="photo">
                        <div class="gallery__icon">
                            <a class="popup__img" href="img/blog/blog_17.png')}}"> <i class="icofont-eye-alt"></i></a>
                        </div>
                    </div>
                    <div class="single__gallery__img">
                        <img loading="lazy" src="{{asset('assets/img/blog/blog_18.png')}}" alt="photo">
                        <div class="gallery__icon">
                            <a class="popup__img" href="img/blog/blog_18.png')}}"> <i class="icofont-eye-alt"></i></a>
                        </div>
                    </div>
                    <div class="single__gallery__img">
                        <img loading="lazy" src="{{asset('assets/img/blog/blog_19.png')}}" alt="photo">
                        <div class="gallery__icon">
                            <a class="popup__img" href="img/blog/blog_19.png')}}"> <i class="icofont-eye-alt"></i></a>
                        </div>
                    </div>
                    <div class="single__gallery__img">
                        <img loading="lazy" src="{{asset('assets/img/blog/blog_20.png')}}" alt="photo">
                        <div class="gallery__icon">
                            <a class="popup__img" href="img/blog/blog_20.png')}}"> <i class="icofont-eye-alt"></i></a>
                        </div>
                    </div>

                    <div class="single__gallery__img">
                        <img loading="lazy" src="{{asset('assets/img/blog/blog_29.jpg')}}" alt="photo">
                        <div class="gallery__icon">
                            <a class="popup__img" href="img/blog/blog_29.jpg')}}"> <i class="icofont-eye-alt"></i></a>
                        </div>
                    </div>
                    <div class="single__gallery__img">
                        <img loading="lazy" src="{{asset('assets/img/blog/blog_30.jpg')}}" alt="photo">
                        <div class="gallery__icon">
                            <a class="popup__img" href="img/blog/blog_30.jpg')}}"> <i class="icofont-eye-alt"></i></a>
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
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" data-aos="fade-up">
                        <div class="footerarea__text">
                            <h3>Still You Need Our <span>Support</span> ?</h3>
                            <p>Don’t wait make a smart & logical quote here. Its pretty easy.</p>
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

            <div class="footerarea__wrapper footerarea__wrapper__2">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12" data-aos="fade-up">
                        <div class="footerarea__inner footerarea__about__us">
                            <div class="footerarea__heading">
                                <h3>About us</h3>
                            </div>
                            <div class="footerarea__content">
                                <p>orporate clients and leisure travelers has been relying on Groundlink for
                                    dependable safe, and professional chauffeured car end service in major cities
                                    across World.</p>
                            </div>
                            <div class="foter__bottom__text">
                                <div class="footer__bottom__icon">
                                    <i class="icofont-clock-time"></i>
                                </div>
                                <div class="footer__bottom__content">
                                    <h6>Opening Houres</h6>
                                    <span>Mon - Sat(8.00 - 6.00)</span>
                                    <span>Sunday - Closed</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2  col-md-6 col-sm-6" data-aos="fade-up">
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
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6" data-aos="fade-up">
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
                                                <img loading="lazy" src="{{asset('assets/img/footer/footer__1.png')}}" alt="footerphoto">
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
                                                <img loading="lazy" src="{{asset('assets/img/footer/footer__2.png')}}" alt="footerphoto">
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
                                                <img loading="lazy" src="{{asset('assets/img/footer/footer__3.png')}}" alt="footerphoto">
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
            <div class="footerarea__copyright__wrapper footerarea__copyright__wrapper__2">
                <div class="row">
                    <div class="col-xl-3 col-lg-3">
                        <div class="copyright__logo">
                            <a href="https://html.themewin.com/"><img loading="lazy" src="{{asset('assets/img/logo/logo_2.png')}}" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="footerarea__copyright__content footerarea__copyright__content__2">
                            <p>Copyright © <span>2024</span> by edurock. All Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <div class="footerarea__icon footerarea__icon__2">
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
            </div>

        </div>
    </div>
    <!-- footer__section__end -->




</main>





@endsection