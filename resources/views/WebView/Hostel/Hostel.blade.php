@extends('WebView.WebViewLayouts.WebViewLayout')

@section('webContent')

<!-- breadcrumbarea__section__start -->

<div class="breadcrumbarea" style="background-image: url('{{asset('assets/img/infobanner/infobanner-4.jpg')}}')">
    <div class="dark-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb__content__wraper" data-aos="fade-up">
                    <div class="breadcrumb__title">
                        <h2 class="heading text-white">Hostel</h2>
                    </div>
                    <div class="breadcrumb__inner">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>Hostel</li>
                        </ul>
                    </div>
                </div>



            </div>
        </div>
    </div>

</div>
<!-- breadcrumbarea__section__end-->

<!-- bsc-nursing__start -->
<div class="aboutarea__5 sp_bottom_100 sp_top_100">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6" data-aos="fade-up">
                <div class="aboutarea__5__img" data-tilt="" style="will-change: transform; transform: perspective(2000px) rotateX(0deg) rotateY(0deg);">
                    <img loading="lazy" src="{{asset('assets/img/about/about-4.jpg')}}" alt="about">
                </div>
            </div>

            <div class="col-xl-6 col-lg-6" data-aos="fade-up">
                <div class="aboutarea__content__wraper__5">
                    <div class="section__title">
                        <div class="section__title__heading ">
                            <h2>About Hostel</h2>
                        </div>
                    </div>

                    <div class="aboutarea__para__5">
                        <p>The institution provides residential hostel to the boy and girl students separately. The residential hostel is managed by a teacher- warden appointed by the Principal. Right of admission and right of expulsion rest with the authorities.</p>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-sm-12 col-md-12">
                            <div class="course__details__wraper aos-init aos-animate" data-aos="fade-up">

                                <div class="d-flex align-items-center gap-3">
                                    <div class="icon-badge">
                                        <i class="icofont-safety"></i>
                                    </div>
                                    <div>
                                        <h5 class="text-primary mb-0">24 x 7 Security</h5>
                                        <p class="lh-1-5 mb-0">All time security guard, CCTV surveillance & emergency services available.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12">
                            <div class="course__details__wraper aos-init aos-animate" data-aos="fade-up">

                                <div class="d-flex align-items-center gap-3">
                                    <div class="icon-badge">
                                        <i class="icofont-wallet"></i>
                                    </div>
                                    <div>
                                        <h5 class="text-primary mb-0">Low Price</h5>
                                        <p class="lh-1-5 mb-0">In this era of inflation we are offering an affordable price for student's accommodation.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12">
                            <div class="course__details__wraper aos-init aos-animate" data-aos="fade-up">

                                <div class="d-flex align-items-center gap-3">
                                    <div class="icon-badge">
                                        <i class="icofont-wifi"></i>
                                    </div>
                                    <div>
                                        <h5 class="text-primary mb-0">24x7 Wifi Available</h5>
                                        <p class="lh-1-5 mb-0">Free Wifi available</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12" data-aos="fade-up">
                <div class="aboutarea__content__wraper__5 ms-0 sp_top_70">
                    <div class="section__title">
                        <div class="section__title__heading ">
                            <h2>Hostel Regulations</h2>
                        </div>
                    </div>

                    <div class="aboutarea__para__5">
                        <p>Students are allowed to go out once a month for shopping and back by 6-00 pm visitors are allowed only on Sundays between 2pm to 5pm. Once in a month only. No student will be permitted to stay outside the hostel with relatives or friends When a student is ill he/she should inform the Tutor/ warden.Relatives and friend, are not permitted to visit the students during duty hours. Arrival from a distance place will not entitle a visiting relative to see the student during her duty hours nor she will be called from sleep if she is on night duty unless it is very urgent. Ragging in all its forms are banned and treated as a congnizable offence. Any student found guilty of ragging will be suspended and / or dismissed at the discretion of the management. Taking or administering any harmful drug/ liquor/ smoking is strictly prohibited. In order to curb any such tendency amongst students, it has been decided that any student found in possession of any un-authorised drug/ liquor/smoking, will be summarily DISMISSED. Students will not be allowed to interrupt their studies to send time preparing for Final vows or to attend congregation meetings or praying together etc. inside the hostel premises. The students should not venture out the premises without prior written permission of warden in leisure time or on off duty days. The warden has the authority to check the rooms and cupboards of the residents at any time without any prior notice. All the students should be present in person at 7-00pm for the Roll call.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bsc-nursing__end -->


@endsection