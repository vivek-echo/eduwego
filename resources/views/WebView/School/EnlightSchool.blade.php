@extends('WebView.WebViewLayouts.WebViewLayout')

@section('webContent')

<!-- breadcrumbarea__section__start -->

<div class="breadcrumbarea" style="background-image: url('{{asset('assets/img/infobanner/infobanner-1.jpg')}}')">
    <div class="dark-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb__content__wraper" data-aos="fade-up">
                    <div class="breadcrumb__title">
                        <h2 class="heading text-white">Enlight School of Nursing</h2>
                    </div>
                    <div class="breadcrumb__inner">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>Enlight School of Nursing</li>
                        </ul>
                    </div>
                </div>



            </div>
        </div>
    </div>

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
                            <a target="_blank" href="Sowrabha-Prospectus.pdf"><i class="icofont-file-document"></i> Download
                                Prospectus</a>
                        </div>
                        <div class="course__date">
                            <p>Last Update:<span> May 19, 2024</span></p>
                        </div>
                    </div>
                    <div class="course__details__heading" data-aos="fade-up">
                        <h3>About Enlight School of Nursing</h3>
                    </div>
                    <div class="course__details__paragraph text-justify" data-aos="fade-up">
                        <p>The Enlight Education Trust started in the year of Nov 2015 by keeping a broad objective of imparting high-quality education through improving oneself and the nation at large. Through well-organized packages, we are successful in providing standard education to the students. Providing trustworthy services with minimum expense was always our trademark … We worked to enlighten our students’ lives by making valuable contributions to their academic, and non-academic side by providing assistance in their studies, getting better placements, and allover bringing them as useful citizens to the nation. All this we made real only by the coordinated practices, having experienced faculties, and putting 100% loyalty into work.. that’s why we believe together we can succeed
                        </p>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-sm-12 col-md-6">
                            <div class="course__details__wraper" data-aos="fade-up">

                                <div class="d-flex align-items-center gap-3">
                                    <div class="icon-badge">
                                        <i class="icofont-check-circled"></i>
                                    </div>
                                    <div>
                                        <h5 class="text-primary mb-0">Approvals</h5>
                                        <p class="lh-1-5 mb-0">Indian Nursing Council ( INC ), Karnataka Nursing Council ( KNC )</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div data-aos="fade-up">
                                <a class="default__button" target="_blank" href="https://enlight.eduwego.in/student-enquiry/enlight-group-of-institutions">Enquiry Now</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>


            <div class="col-xl-4 col-lg-4">

                <div class="course__details__sidebar">

                    <div class="blogsidebar__content__wraper__2" data-aos="fade-up">

                        <h4 class="sidebar__title">Courses Offered</h4>
                        <ul class="course__details__populer__list">
                            <li>

                                <div class="course__details__populer__img">
                                    <img loading="lazy" src="{{asset('assets/img/courses/bsc-nursing.jpg')}}" alt="courses" width="90" height="70">
                                </div>
                                <div class="course__details__populer__content">
                                    <h6>
                                        <a href="/bScNursing">B.Sc. Nursing</a>
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
                                    <img loading="lazy" src="{{asset('assets/img/courses/course-7.jpg')}}" alt="courses" width="90" height="70">
                                </div>
                                <div class="course__details__populer__content">
                                    <h6>
                                        <a href="pbbsc-nursing.html">PBBSc Nursing</a>
                                    </h6>
                                </div>
                            </li>
                            <li>

                                <div class="course__details__populer__img">
                                    <img loading="lazy" src="{{asset('assets/img/courses/course-8.jpg')}}" alt="courses" width="90" height="70">
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
                            <a class="default__button default__button--3" href="tel:+91 9916073632"><i class="icofont-phone"></i> +91 9916073632</a>
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