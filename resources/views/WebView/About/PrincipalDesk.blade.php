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
                        <h2 class="heading text-white">Principal Desk</h2>
                    </div>
                    <div class="breadcrumb__inner">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>Principal Desk</li>
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
                    <img loading="lazy" src="{{asset('assets/img/about/principal.jpg')}}" alt="about">
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
                        <p>Excellence is an art mastered by training and habituation. And today’s global economy. It is important to raise the bar of excellence even higher since today’s students must be prepared to complete effectively on an international level.</p>

                        <p>“It takes a whole village to raise a child” so goes an African proverb. Imparting education to the young minds is an enterprise that demands a web of human efforts and system.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bsc-nursing__end -->


@endsection