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

<!-- breadcrumbarea__section__start -->

<div class="breadcrumbarea">

    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb__content__wraper" data-aos="fade-up">
                    <div class="breadcrumb__title">
                        <h2 class="heading text-white">Nursing</h2>
                    </div>
                    <div class="breadcrumb__inner">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Nursing</li>
                        </ul>
                    </div>
                </div>



            </div>
        </div>
    </div>

    <div class="shape__icon__2">
        <img loading="lazy"  class=" shape__icon__img shape__icon__img__1" src="{{asset('assets/img/herobanner/herobanner__1.png')}}" alt="photo">
        <img loading="lazy"  class=" shape__icon__img shape__icon__img__3" src="{{asset('assets/img/herobanner/herobanner__3.png')}}" alt="photo">
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
                        <a href="bsc-nursing.html"><img loading="lazy" src="{{asset('assets/img/courses/course-1.jpg')}}" alt="image-courses"></a>
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
                                    <div class="text-end"><i class="icofont-clock-time"></i> 4 Years
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="gridarea__heading">
                            <h3><a href="bsc-nursing.html">B.SC Nursing</a></h3>
                        </div>
                        <div>
                            <p>The course of study shall extend over 4 academic years from the date of
                                commencement of his/ her study of ....</p>
                        </div>
                        <div class="gridarea__bottom">

                            <a href="bsc-nursing.html">
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

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="gridarea__wraper">
                    <div class="gridarea__img">
                        <a href="msc-nursing.html"><img loading="lazy" src="{{asset('assets/img/courses/course-2.jpg')}}" alt="image-courses"></a>
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
                            <h3><a href="msc-nursing.html">M.SC Nursing</a></h3>
                        </div>
                        <div>
                            <p>MSc Nursing will prepare Nurses, to improve the quality of nursing
                                education and practice, in India. It will build upon....</p>
                        </div>
                        <div class="gridarea__bottom">

                            <a href="msc-nursing.html">
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

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="gridarea__wraper">
                    <div class="gridarea__img">
                        <a href="pbbsc-nursing.html"><img loading="lazy" src="{{asset('assets/img/courses/course-5.jpg')}}" alt="image-courses"></a>
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
                            <h3><a href="pbbsc-nursing.html">PBBSc Nursing</a></h3>
                        </div>
                        <div>
                            <p>The B.Sc Nursing (Post certificate) course of study shall extend over a
                                period of 2 academic years from the date....</p>
                        </div>
                        <div class="gridarea__bottom">

                            <a href="pbbsc-nursing.html">
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

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 ">
                <div class="gridarea__wraper">
                    <div class="gridarea__img">
                        <a href="gnm-nursing.html"><img loading="lazy" src="{{asset('assets/img/courses/course-6.jpg')}}" alt="image-courses"></a>
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
                                    <div class="text-end"><i class="icofont-clock-time"></i> 3 Years
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="gridarea__heading">
                            <h3><a href="gnm-nursing.html">GNM Nursing</a></h3>
                        </div>
                        <div>
                            <p>GNM referred to as General Nursing and Midwifery deals with the education
                                of nurses in general health care, nursing, and....</p>
                        </div>
                        <div class="gridarea__bottom">

                            <a href="gnm-nursing.html">
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

        </div>
    </div>
</div>
<!-- .contact__section__end -->


@endsection