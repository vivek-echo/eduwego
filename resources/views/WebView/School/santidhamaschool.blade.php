@extends('WebView.WebViewLayouts.WebViewLayout')

@section('webContent')

<!-- breadcrumbarea__section__start -->

<div class="breadcrumbarea" style="background-image: url('{{asset('assets/img/infobanner/infobanner-3.jpg')}}')">
    <div class="dark-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb__content__wraper" data-aos="fade-up">
                    <div class="breadcrumb__title">
                        <h2 class="heading text-white">Sri Shantidhama School Of Nursing</h2>
                    </div>
                    <div class="breadcrumb__inner">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>Sri Shantidhama School Of Nursing</li>
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
                        <h3>About Sri Shantidhama School Of Nursing</h3>
                    </div>
                    <div class="course__details__paragraph text-justify" data-aos="fade-up">
                        <p>Welcome to Shantidhama College of Nursing In an era of stiff competition, success can only be achieved if one makes the right kind of endeavor at the right time and in the right direction. Shantidhama College of Nursing have been established with a view to produce qualified, and efficient nurses for a new tomorrow in the ever changing competitive world of today. Given the paradigm shift which the health care sector is experiencing, nursing science probably represents the most ideal field for heath care to innovate for it is a domain where there is a constant need to change with the times and continuously review, analyze and upgrade competencies in the profession. Our primary goal is to offer the best EDUCATION AND CLINICAL TRAINING possible in Nursing. We are offering professional diploma, bachelor’s degree, and post graduate degree in Nursing. Affiliated to RGUHS and approved by KNC, INC New Delhi & Govt.of Karnataka.
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
                                    <img loading="lazy" src="{{asset('assets/img/courses/bsc-nursing.jpg')}}" alt="courses"
                                        width="90" height="70">
                                </div>
                                <div class="course__details__populer__content">
                                    <h6>
                                        <a href="/bScNursing">B.Sc. Nursing</a>
                                    </h6>
                                </div>
                            </li>
                            <li>

                                <div class="course__details__populer__img">
                                    <img loading="lazy" src="{{asset('assets/img/courses/msc-nursing.jpg')}}" alt="courses"
                                        width="90" height="70">
                                </div>
                                <div class="course__details__populer__content">
                                    <h6>
                                        <a href="msc-nursing.html">M.Sc. Nursing</a>
                                    </h6>
                                </div>
                            </li>
                            <li>

                                <div class="course__details__populer__img">
                                    <img loading="lazy" src="{{asset('assets/img/courses/course-7.jpg')}}" alt="courses"
                                        width="90" height="70">
                                </div>
                                <div class="course__details__populer__content">
                                    <h6>
                                        <a href="pbbsc-nursing.html">PBBSc Nursing</a>
                                    </h6>
                                </div>
                            </li>
                            <li>

                                <div class="course__details__populer__img">
                                    <img loading="lazy" src="{{asset('assets/img/courses/course-8.jpg')}}" alt="courses"
                                        width="90" height="70">
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
<!-- <script>
   document.getElementById('downloadBtn').addEventListener('click', function() {
            window.location.href = "{{ route('download.pdf') }}";
        });
</script> -->
<!-- bsc-nursing__end -->


@endsection