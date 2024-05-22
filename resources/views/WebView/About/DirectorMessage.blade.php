@extends('WebView.WebViewLayouts.WebViewLayout')

@section('webContent')

<!-- breadcrumbarea__section__start -->

<div class="breadcrumbarea" style="background-image: url('{{asset('assets/img/infobanner/infobanner-6.jpg')}}')">
    <div class="dark-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb__content__wraper" data-aos="fade-up">
                    <div class="breadcrumb__title">
                        <h2 class="heading text-white">Director's Message</h2>
                    </div>
                    <div class="breadcrumb__inner">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>Director's Message</li>
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
                    <img loading="lazy" src="{{asset('assets/img/about/director.jpg')}}" alt="about">
                </div>
            </div>

            <div class="col-xl-6 col-lg-6" data-aos="fade-up">
                <div class="aboutarea__content__wraper__5">
                    {{-- <div class="section__title">
                        <div class="section__title__heading ">
                            <h2>About Hostel</h2>
                        </div>
                    </div> --}}

                    <div class="aboutarea__para__5">
                        <p>Greeting from ENLIGHT GROUP OF INSTITUTIONS. The Courses offered at EGI not only enable the students to gain knowledge but also develop their overall skills and personal attitude that shall empower them to achiever glob recognition their respective professional specialization. In keeping with our mission centered on academic excellence our programs are designed with a good blend of class room and Clinical learning, through our comprehensive suite professional resources and wide range of clinical exposure.</p>

                        <p>It is a challenge to the society to provide a sound foundation to student’s community by comprehensive technical education in our Modern society.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bsc-nursing__end -->


@endsection