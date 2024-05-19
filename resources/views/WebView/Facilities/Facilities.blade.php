@extends('WebView.WebViewLayouts.WebViewLayout')

@section('webContent')

<!-- Mobile Menu Start Here -->
<div class="mobile-off-canvas-active">
    <a class="mobile-aside-close"><i class="icofont  icofont-close-line"></i></a>
    <div class="header-mobile-aside-wrap">
        <div class="mobile-menu-wrap headerarea">

            <div class="mobile-navigation">

                <nav>
                    <ul class="mobile-menu">

                        <li>
                            <a href="/">Home</a>
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
                                <li><a href="javascript:void(0);">Sowrabha Institute of Nursing Sciences</a>
                                </li>
                                <li><a href="javascript:void(0);">Enlight Institute of Para Medical Sciences</a>
                                </li>
                                <li><a href="javascript:void(0);">Enlight School of Nursing</a></li>
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
                <a class="mobile-account-active" href="#">Logins <i class="icofont-thin-down"></i></a>
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
            <a class="facebook" target="_blank" href="https://www.facebook.com/enlightgroup2020"><i class="icofont icofont-facebook"></i></a>
            <a class="twitter" target="_blank" href="https://x.com/of_enlight?t=IIT52UV_BZ1hzOkmeuhHGQ&s=08"><i class="icofont icofont-twitter"></i></a>
            <a class="instagram" target="_blank" href="https://www.instagram.com/enlight_group?igsh=Z2Foc3c4b2hhOTkz"><i class="icofont icofont-instagram"></i></a>
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

<!-- breadcrumbarea__section__start -->

<div class="breadcrumbarea">

    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb__content__wraper" data-aos="fade-up">
                    <div class="breadcrumb__title">
                        <h2 class="heading text-white">Our Facilities</h2>
                    </div>
                    <div class="breadcrumb__inner">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Facilities</li>
                        </ul>
                    </div>
                </div>



            </div>
        </div>
    </div>

    <div class="shape__icon__2">
        <img loading="lazy" class=" shape__icon__img shape__icon__img__1" src="{{asset('assets/img/herobanner/herobanner__1.png')}}" alt="photo">
        <img loading="lazy" class=" shape__icon__img shape__icon__img__3" src="{{asset('assets/img/herobanner/herobanner__3.png')}}" alt="photo">
    </div>

</div>
<!-- breadcrumbarea__section__end-->

<!-- .contact__section__start -->
<div class="gridarea">
    <div class="container">

        <div class="row" data-aos="fade-up">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="gridarea__wraper">
                    <div class="gridarea__img">
                        <img loading="lazy" src="{{asset('assets/img/service/facility-1.webp" alt="image-facility">
                        <div class="gridarea__small__button">
                            <div class="grid__badge green__color">Facilities</div>
                        </div>

                    </div>
                    <div class="gridarea__content">
                        <div class="gridarea__heading">
                            <h3>Bengali Food Available </h3>
                        </div>
                        <div>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima velit consequuntur architecto accusamus provident.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="gridarea__wraper">
                    <div class="gridarea__img">
                        <img loading="lazy"  src="{{asset('assets/img//service/facility_2.jpg')}}"   alt="image-facility">
                        <div class="gridarea__small__button">
                            <div class="grid__badge green__color">Facilities</div>
                        </div>

                    </div>
                    <div class="gridarea__content">
                        <div class="gridarea__heading">
                            <h3>Complete Loan Facility available </h3>
                        </div>
                        <div>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima velit consequuntur architecto accusamus provident.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="gridarea__wraper">
                    <div class="gridarea__img">
                        <img loading="lazy" src="{{asset('assets/img/service/facility-3.jpg')}}" alt="image-facility">
                        <div class="gridarea__small__button">
                            <div class="grid__badge green__color">Facilities</div>
                        </div>

                    </div>
                    <div class="gridarea__content">
                        <div class="gridarea__heading">
                            <h3>High Qualified & Experienced Teaching Staff </h3>
                        </div>
                        <div>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima velit consequuntur.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 ">
                <div class="gridarea__wraper">
                    <div class="gridarea__img">
                        <img loading="lazy" src="{{asset('assets/img/service/facility-4.jpg')}}" alt="image-facility">
                        <div class="gridarea__small__button">
                            <div class="grid__badge green__color">Facilities</div>
                        </div>

                    </div>
                    <div class="gridarea__content">
                        <div class="gridarea__heading">
                            <h3>College Bus and Convenient Transport Facility </h3>
                        </div>
                        <div>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima velit consequuntur architecto accusamus provident.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="gridarea__wraper">
                    <div class="gridarea__img">
                        <img loading="lazy" src="{{asset('assets/img/service/facility-5.png')}}" alt="image-facility">
                        <div class="gridarea__small__button">
                            <div class="grid__badge green__color">Facilities</div>
                        </div>

                    </div>
                    <div class="gridarea__content">
                        <div class="gridarea__heading">
                            <h3>Separate and Pollution Free <br>Campus </h3>
                        </div>
                        <div>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima velit consequuntur architecto accusamus provident.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="gridarea__wraper">
                    <div class="gridarea__img">
                        <img loading="lazy" src="{{asset('assets/img/service/facility-6.webp" alt="image-facility">
                        <div class="gridarea__small__button">
                            <div class="grid__badge green__color">Facilities</div>
                        </div>

                    </div>
                    <div class="gridarea__content">
                        <div class="gridarea__heading">
                            <h3>Well Equipped Laboratory & Enriched Library </h3>
                        </div>
                        <div>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima velit consequuntur architecto accusamus provident.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="gridarea__wraper">
                    <div class="gridarea__img">
                        <img loading="lazy" src="{{asset('assets/img/service/facility-7.jpg')}}" alt="image-facility">
                        <div class="gridarea__small__button">
                            <div class="grid__badge green__color">Facilities</div>
                        </div>

                    </div>
                    <div class="gridarea__content">
                        <div class="gridarea__heading">
                            <h3>100% Placement Assistance</h3>
                        </div>
                        <div>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima velit consequuntur architecto accusamus provident.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="gridarea__wraper">
                    <div class="gridarea__img">
                        <img loading="lazy" src="{{asset('assets/img/service/facility-8.jpg')}}" alt="image-facility">
                        <div class="gridarea__small__button">
                            <div class="grid__badge green__color">Facilities</div>
                        </div>

                    </div>
                    <div class="gridarea__content">
                        <div class="gridarea__heading">
                            <h3>Schlorship for Meritorious Students.</h3>
                        </div>
                        <div>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima velit consequuntur architecto accusamus provident.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- .contact__section__end -->


@endsection