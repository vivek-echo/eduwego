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
                        <h2 class="heading text-white">PBBSC. Nursing</h2>
                    </div>
                    <div class="breadcrumb__inner">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>PBBSC. Nursing</li>
                        </ul>
                    </div>
                </div>



            </div>
        </div>
    </div>

    {{-- <div class="shape__icon__2">
        <img loading="lazy" class=" shape__icon__img shape__icon__img__1" src="{{ asset('assets/img/herobanner/herobanner__1.png')}}"
            alt="photo">
        <img loading="lazy" class=" shape__icon__img shape__icon__img__3" src="{{ asset('assets/img/herobanner/herobanner__3.png')}}"
            alt="photo">
    </div> --}}

</div>
<!-- breadcrumbarea__section__end-->

<!-- bsc-nursing__start -->
<div class="blogarea__2 sp_top_100 sp_bottom_100">
    <div class="container">
        <div class="row">

            <div class="col-xl-8 col-lg-8">

                <div class="blogarae__img__2 course__details__img__2" data-aos="fade-up">
                    <img loading="lazy" src="{{ asset('assets/img/courses/bsc-nursing.jpg')}}" alt="blog">
                </div>

                <div class="blog__details__content__wraper">
                    <div class="course__button__wraper" data-aos="fade-up">
                        <div class="course__button">
                            <a href="javascript:void(0);"><i class="icofont-file-document"></i> Download
                                Prospectus</a>
                        </div>
                        <div class="course__date">
                            <p>Last Update:<span> May 19, 2024</span></p>
                        </div>
                    </div>
                    <div class="course__details__heading" data-aos="fade-up">
                        <h3>About this Institute</h3>
                    </div>
                    <div class="course__details__paragraph" data-aos="fade-up">
                        <p>The B.Sc Nursing (Post certificate) course of study shall extend over a period of 2 academic years from the date of commencement of his/ her study of the subjects. Terms and vacations shall be as notified by the university from time to time.
                        </p>
                    </div>

                    <h4 class="sidebar__title" data-aos="fade-up">Eligibility</h4>
                    <p>Candidate has to be 10+2 Science from a recognized board
                    </p>
                    <div class="row">
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
                            <div class="course__details__wraper" data-aos="fade-up">

                                <div class="d-flex align-items-center gap-3">
                                    <div class="icon-badge">
                                        <i class="icofont-clock-time"></i>
                                    </div>
                                    <div>
                                        <h5 class="text-primary mb-0">Duration</h5>
                                        <p class="mb-0">2 Years</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12">
                            <div class="mb-3" data-aos="fade-up">
                                <a class="default__button" target="_blank"
                                    href="https://apps.eduwego.in/student-enquiry/enlight-group-of-institutions">Apply
                                    Now</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="course__list__wraper" data-aos="fade-up">
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
                                <li>
                                    <i class="icofont-check"></i>
                                    <p>12 Pic Colour Passport size Photo</p>
                                </li>

                            </ul>
                        </div>
                    </div>


                </div>
            </div>


            <div class="col-xl-4 col-lg-4">

                <div class="course__details__sidebar">

                    <div class="blogsidebar__content__wraper__2" data-aos="fade-up">

                        <h4 class="sidebar__title">Other Courses</h4>
                        <ul class="course__details__populer__list">
                            <li>

                                <div class="course__details__populer__img">
                                    <img loading="lazy" src="{{ asset('assets/img/courses/msc-nursing.jpg')}}" alt="courses"
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
                                    <img loading="lazy" src="{{ asset('assets/img/courses/msc-nursing.jpg')}}" alt="courses"
                                        width="90" height="70">
                                </div>
                                <div class="course__details__populer__content">
                                    <h6>
                                        <a href="/MSCNursing">M.Sc Nursing</a>
                                    </h6>
                                </div>
                            </li>
                            <li>

                                <div class="course__details__populer__img">
                                    <img loading="lazy" src="{{ asset('assets/img/courses/msc-nursing.jpg')}}" alt="courses"
                                        width="90" height="70">
                                </div>
                                <div class="course__details__populer__content">
                                    <h6>
                                        <a href="/GnmNursing">GNM Nursing</a>
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