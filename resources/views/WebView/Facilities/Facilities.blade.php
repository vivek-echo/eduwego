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
                        <h2 class="heading text-white">Our Facilities</h2>
                    </div>
                    <div class="breadcrumb__inner">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>Facilities</li>
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

<!-- .contact__section__start -->
<div class="gridarea">
    <div class="container">

        <div class="row" data-aos="fade-up">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="gridarea__wraper">
                    <div class="gridarea__img">
                        <img loading="lazy" src="{{asset('assets/img/service/facility-1.webp')}}" alt="image-facility">
                        <div class="gridarea__small__button">
                            <div class="grid__badge green__color">Facilities</div>
                        </div>

                    </div>
                    <div class="gridarea__content">
                        <div class="gridarea__heading">
                            <h3>Food Available With Good<br> Hygiene </h3>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="gridarea__wraper">
                    <div class="gridarea__img">
                        <img loading="lazy"  src="{{asset('assets/img/service/facility-2.jpg')}}"   alt="image-facility">
                        <div class="gridarea__small__button">
                            <div class="grid__badge green__color">Facilities</div>
                        </div>

                    </div>
                    <div class="gridarea__content">
                        <div class="gridarea__heading">
                            <h3>Complete Loan Facility <br>Available </h3>
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
                            <h3>Library and Information <br>Center</h3>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="gridarea__wraper">
                    <div class="gridarea__img">
                        <img loading="lazy" src="{{asset('assets/img/service/facility-6.jpg')}}" alt="image-facility">
                        <div class="gridarea__small__button">
                            <div class="grid__badge green__color">Facilities</div>
                        </div>

                    </div>
                    <div class="gridarea__content">
                        <div class="gridarea__heading">
                            <h3>Well Equipped Laboratory (Anatomy & Physiology Lab) </h3>
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
                            <h3>Well Equipped Laboratory (Nursing Foundation Lab) </h3>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="gridarea__wraper">
                    <div class="gridarea__img">
                        <img loading="lazy" src="{{asset('assets/img/service/facility-9.jpg')}}" alt="image-facility">
                        <div class="gridarea__small__button">
                            <div class="grid__badge green__color">Facilities</div>
                        </div>

                    </div>
                    <div class="gridarea__content">
                        <div class="gridarea__heading">
                            <h3>Well Equipped Laboratory <br>(MCH Lab) </h3>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="gridarea__wraper">
                    <div class="gridarea__img">
                        <img loading="lazy" src="{{asset('assets/img/service/facility-10.jpg')}}" alt="image-facility">
                        <div class="gridarea__small__button">
                            <div class="grid__badge green__color">Facilities</div>
                        </div>

                    </div>
                    <div class="gridarea__content">
                        <div class="gridarea__heading">
                            <h3>Well Equipped Laboratory (Nutrition Lab) </h3>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="gridarea__wraper">
                    <div class="gridarea__img">
                        <img loading="lazy" src="{{asset('assets/img/service/facility-11.jpg')}}" alt="image-facility">
                        <div class="gridarea__small__button">
                            <div class="grid__badge green__color">Facilities</div>
                        </div>

                    </div>
                    <div class="gridarea__content">
                        <div class="gridarea__heading">
                            <h3>Well Equipped Laboratory (Community Health Nursing Lab) </h3>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="gridarea__wraper">
                    <div class="gridarea__img">
                        <img loading="lazy" src="{{asset('assets/img/service/facility-12.jpg')}}" alt="image-facility">
                        <div class="gridarea__small__button">
                            <div class="grid__badge green__color">Facilities</div>
                        </div>

                    </div>
                    <div class="gridarea__content">
                        <div class="gridarea__heading">
                            <h3>Well Equipped Laboratory (Pharma Analysis Lab) </h3>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="gridarea__wraper">
                    <div class="gridarea__img">
                        <img loading="lazy" src="{{asset('assets/img/service/facility-13.jpg')}}" alt="image-facility">
                        <div class="gridarea__small__button">
                            <div class="grid__badge green__color">Facilities</div>
                        </div>

                    </div>
                    <div class="gridarea__content">
                        <div class="gridarea__heading">
                            <h3>Well Equipped Laboratory (Pharma Chemistry Lab) </h3>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="gridarea__wraper">
                    <div class="gridarea__img">
                        <img loading="lazy" src="{{asset('assets/img/service/facility-14.jpg')}}" alt="image-facility">
                        <div class="gridarea__small__button">
                            <div class="grid__badge green__color">Facilities</div>
                        </div>

                    </div>
                    <div class="gridarea__content">
                        <div class="gridarea__heading">
                            <h3>Well Equipped Laboratory (Pharma Ceutics Lab) </h3>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="gridarea__wraper">
                    <div class="gridarea__img">
                        <img loading="lazy" src="{{asset('assets/img/service/facility-15.jpg')}}" alt="image-facility">
                        <div class="gridarea__small__button">
                            <div class="grid__badge green__color">Facilities</div>
                        </div>

                    </div>
                    <div class="gridarea__content">
                        <div class="gridarea__heading">
                            <h3>Well Equipped Laboratory (Pharmacology Lab) </h3>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="gridarea__wraper">
                    <div class="gridarea__img">
                        <img loading="lazy" src="{{asset('assets/img/service/facility-16.jpg')}}" alt="image-facility">
                        <div class="gridarea__small__button">
                            <div class="grid__badge green__color">Facilities</div>
                        </div>

                    </div>
                    <div class="gridarea__content">
                        <div class="gridarea__heading">
                            <h3>Well Equipped Laboratory (Basic Engineering Lab) </h3>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="gridarea__wraper">
                    <div class="gridarea__img">
                        <img loading="lazy" src="{{asset('assets/img/service/facility-17.jpg')}}" alt="image-facility">
                        <div class="gridarea__small__button">
                            <div class="grid__badge green__color">Facilities</div>
                        </div>

                    </div>
                    <div class="gridarea__content">
                        <div class="gridarea__heading">
                            <h3>Well Equipped Laboratory (Herbal Drug Technology Lab) </h3>
                        </div>
                        
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- .contact__section__end -->


@endsection