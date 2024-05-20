@extends('WebView.WebViewLayouts.WebViewLayout')

@section('webContent')

<!-- breadcrumbarea__section__start -->

<div class="breadcrumbarea">

    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb__content__wraper" data-aos="fade-up">
                    <div class="breadcrumb__title">
                        <h2 class="heading text-white">Enlight School of Nursing</h2>
                    </div>
                    <div class="breadcrumb__inner">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Enlight School of Nursing</li>
                        </ul>
                    </div>
                </div>



            </div>
        </div>
    </div>

    {{-- <div class="shape__icon__2">
        <img loading="lazy" class=" shape__icon__img shape__icon__img__1" src="{{asset('assets/img/herobanner/herobanner__1.png')}}" alt="photo">
        <img loading="lazy" class=" shape__icon__img shape__icon__img__3" src="{{asset('assets/img/herobanner/herobanner__3.png')}}" alt="photo">
    </div> --}}

</div>
<!-- breadcrumbarea__section__end-->

<!-- bsc-nursing__start -->
<div class="blogarea__2 sp_top_100 sp_bottom_100">
    <div class="container">
        <div class="row">

            <div class="col-xl-8 col-lg-8">

                <div class="blogarae__img__2 course__details__img__2" data-aos="fade-up">
                    <img loading="lazy" src="{{asset('assets/img/courses/bsc-nursing.jpg')}}" alt="blog">
                </div>

                <div class="blog__details__content__wraper">
                    <div class="course__button__wraper" data-aos="fade-up">
                        <div class="course__button">
                            <a target="_blank" href="Sowrabha-Prospectus.pdf"><i class="icofont-file-document"></i> View
                                Prospectus</a>
                        </div>
                        <div class="course__date">
                            <p>Last Update:<span> May 19, 2024</span></p>
                        </div>
                    </div>
                    <div class="course__details__heading" data-aos="fade-up">
                        <h3>About this course</h3>
                    </div>
                    <div class="course__details__paragraph" data-aos="fade-up">
                        <p>The course of study shall extend over 4 academic years from the date of commencement
                            of his/ her study of the subjects comprising the nursing curriculum to the date of
                            completion of the examination. Terms and vacations shall be as notified by the
                            university from time to time.
                        </p>
                    </div>

                    <!-- <h4 class="sidebar__title" data-aos="fade-up">Eligibility</h4>
                    <p>The Minimum education requirement shall be the passing of a B.Sc. Nursing/Post Basic
                        B.Sc. Nursing with a minimum of 55% aggregate marks.
                        <br>
                        Minimum one year of work experience after Basic B.Sc. Nursing. Minimum one year of work
                        experience before or after Post Basic B.Sc. Nursing
                    </p> -->
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="course__details__wraper" data-aos="fade-up">

                                <div class="d-flex align-items-center gap-3">
                                    <div class="icon-badge">
                                        <i class="icofont-check-circled"></i>
                                    </div>
                                    <div>
                                        <h5 class="text-primary mb-0">Approvals</h5>
                                        <p class="mb-0">Indian Nursing Council ( INC ), Karnataka Nursing Council ( KNC )</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- <div class="col-sm-12 col-md-3">
                            <div class="course__details__wraper" data-aos="fade-up">

                                <div class="d-flex align-items-center gap-3">
                                    <div class="icon-badge">
                                        <i class="icofont-clock-time"></i>
                                    </div>
                                    <div>
                                        <h5 class="text-primary mb-0">Duration</h5>
                                        <p class="mb-0">4 Years</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3"> -->
                        <!-- <div class="course__details__wraper" data-aos="fade-up">

                                <div class="d-flex align-items-center gap-3">
                                    <div class="icon-badge">
                                        <i class="icofont-chair"></i>
                                    </div>
                                    <div>
                                        <h5 class="text-primary mb-0">Seats</h5>
                                        <p class="mb-0">20</p>
                                    </div>
                                </div>

                            </div> 
                        </div>-->
                    </div>

                    <!-- <div class="course__list__wraper" data-aos="fade-up">
                        <div class="blog__details__heading__2">
                            <h5>Documents Required For Admission</h5>
                        </div>
                        <div class="aboutarea__list__2 blog__details__list__2" data-aos="fade-up">
                            <ul>
                                <li>
                                    <i class="icofont-check"></i>
                                    <p>10th / 12th Marksheet</p>
                                </li>
                                <li>
                                    <i class="icofont-check"></i>
                                    <p>10th / 12th Admit Card</p>
                                </li>
                                <li>
                                    <i class="icofont-check"></i>
                                    <p>Aadhhar Copy</p>
                                </li>
                                <li>
                                    <i class="icofont-check"></i>
                                    <p>Migration</p>
                                </li>

                            </ul>
                        </div>
                    </div> -->


                </div>
            </div>


            <div class="col-xl-4 col-lg-4">

                <div class="course__details__sidebar">

                    <div class="blogsidebar__content__wraper__2" data-aos="fade-up">

                        <h4 class="sidebar__title">popular Course</h4>
                        <ul class="course__details__populer__list">
                            <li>

                                <div class="course__details__populer__img">
                                    <img loading="lazy" src="{{asset('assets/img/courses/msc-nursing.jpg')}}" alt="courses" width="90" height="70">
                                </div>
                                <div class="course__details__populer__content">
                                    <h6>
                                        <a href="bsc-nursing.html">B.Sc. Nursing</a>
                                    </h6>
                                </div>
                            </li>
                            <li>

                                <div class="course__details__populer__img">
                                    <img loading="lazy" src="{{asset('assets/img/courses/msc-nursing.jpg')}}" alt="courses" width="90" height="70">
                                </div>
                                <div class="course__details__populer__content">
                                    <h6>
                                        <a href="msc-nursing.html">M.Sc. Nursing</a>
                                    </h6>
                                </div>
                            </li>
                            <li>

                                <div class="course__details__populer__img">
                                    <img loading="lazy" src="{{asset('assets/img/courses/msc-nursing.jpg')}}" alt="courses" width="90" height="70">
                                </div>
                                <div class="course__details__populer__content">
                                    <h6>
                                        <a href="pbbsc-nursing.html">PBBSc Nursing</a>
                                    </h6>
                                </div>
                            </li>
                            <li>

                                <div class="course__details__populer__img">
                                    <img loading="lazy" src="{{asset('assets/img/courses/msc-nursing.jpg')}}" alt="courses" width="90" height="70">
                                </div>
                                <div class="course__details__populer__content">
                                    <h6>
                                        <a href="gnm-nursing.html">GNM Nursing</a>
                                    </h6>
                                </div>
                            </li>
                        </ul>

                        <div class="course__summery__button">
                            <p>Need any help in Admission ?</p>
                            <a class="default__button default__button--3" href="tel:+91 80955 55703"><i class="icofont-phone"></i> +91 80955 55703</a>
                        </div>

                    </div>
                    <div class="blogsidebar__content__wraper__2" data-aos="fade-up">

                        <h4 class="sidebar__title">Get in Touch</h4>
                        <div class="get__touch__input">
                            <input type="text" placeholder="Enter name*">
                            <input type="text" placeholder="Enter your mail*">
                            <input type="text" placeholder="Massage*">
                            <a class="default__button" href="blog-details.html">Send Message</a>
                        </div>

                    </div>


                </div>

            </div>
        </div>
    </div>
</div>
<!-- bsc-nursing__end -->


@endsection