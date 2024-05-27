@extends('WebView.WebViewLayouts.WebViewLayout')

@section('webContent')

<!-- breadcrumbarea__section__start -->

<div class="breadcrumbarea" style="background-image: url('{{asset('assets/img/infobanner/infobanner-2.jpg')}}')">
    <div class="dark-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb__content__wraper" data-aos="fade-up">
                    <div class="breadcrumb__title">
                        <h2 class="heading text-white">Sowrabha Institute of Nursing Sciences</h2>
                    </div>
                    <div class="breadcrumb__inner">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>Sowrabha Institute of Nursing Sciences</li>
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
                        <a href="/download-pdf" title="Download Prospectus"><i class="icofont-file-document"></i> Download
                                Prospectus</a>
                        </div>
                        <div class="course__date">
                            <p>Last Update:<span> May 19, 2024</span></p>
                        </div>
                    </div>
                    <div class="course__details__heading" data-aos="fade-up">
                        <h3>About Sowrabha Institute of Nursing Sciences</h3>
                    </div>
                    <div class="course__details__paragraph text-justify" data-aos="fade-up">
                        <p>Sowrabha Institute of Nursing Sciences was established in the year 2019. The College is Affiliated to RGUHS, Recognized by Govt of Karnataka and approved by Karnataka Nursing Council and Indian Nursing Council.The Institution has set new standards of excellence in Nursing Education and practice by offering GNM Course under School of Nursing & by offering B.Sc, P.B.B.Sc under College of Nursing
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
                                    <img loading="lazy" src="{{asset('assets/img/courses/course-1.jpg')}}" alt="courses"
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