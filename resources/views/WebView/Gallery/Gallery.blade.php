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
                        <h2 class="heading text-white">Gallery</h2>
                    </div>
                    <div class="breadcrumb__inner">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>Gallery</li>
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

<div class="gallery">
    <div class="container-fluid full__width__padding sp_top_100 sp_bottom_100">

        <div class="blogsidebar__content__wraper__2">

            <div class="photo__gallery__img">

                <div class="single__gallery__img">
                    <img loading="lazy" src="{{asset('assets/img/gallery/gallery-1.jpg')}}" alt="photo">
                    <div class="gallery__icon">
                        <a class="popup__img" href="{{asset('assets/img/gallery/gallery-1.jpg')}}"> <i class="icofont-eye-alt"></i></a>
                    </div>
                </div>
                <div class="single__gallery__img">
                    <img loading="lazy" src="{{asset('assets/img/gallery/gallery-2.jpg')}}" alt="photo">
                    <div class="gallery__icon">
                        <a class="popup__img" href="{{asset('assets/img/gallery/gallery-2.jpg')}}"> <i class="icofont-eye-alt"></i></a>
                    </div>
                </div>
                <div class="single__gallery__img">
                    <img loading="lazy" src="{{asset('assets/img/gallery/gallery-3.jpg')}}" alt="photo">
                    <div class="gallery__icon">
                        <a class="popup__img" href="{{asset('assets/img/gallery/gallery-3.jpg')}}"> <i class="icofont-eye-alt"></i></a>
                    </div>
                </div>
                <div class="single__gallery__img">
                    <img loading="lazy" src="{{asset('assets/img/gallery/gallery-4.jpg')}}" alt="photo">
                    <div class="gallery__icon">
                        <a class="popup__img" href="{{asset('assets/img/gallery/gallery-4.jpg')}}"> <i class="icofont-eye-alt"></i></a>
                    </div>
                </div>
                <div class="single__gallery__img">
                    <img loading="lazy" src="{{asset('assets/img/gallery/gallery-5.jpg')}}" alt="photo">
                    <div class="gallery__icon">
                        <a class="popup__img" href="{{asset('assets/img/gallery/gallery-5.jpg')}}"> <i class="icofont-eye-alt"></i></a>
                    </div>
                </div>
                <div class="single__gallery__img">
                    <img loading="lazy" src="{{asset('assets/img/gallery/gallery-6.jpg')}}" alt="photo">
                    <div class="gallery__icon">
                        <a class="popup__img" href="{{asset('assets/img/gallery/gallery-6.jpg')}}"> <i class="icofont-eye-alt"></i></a>
                    </div>
                </div>

                <div class="single__gallery__img">
                    <img loading="lazy" src="{{asset('assets/img/gallery/gallery-7.jpg')}}" alt="photo">
                    <div class="gallery__icon">
                        <a class="popup__img" href="{{asset('assets/img/gallery/gallery-7.jpg')}}"> <i class="icofont-eye-alt"></i></a>
                    </div>
                </div>
                <div class="single__gallery__img">
                    <img loading="lazy" src="{{asset('assets/img/gallery/gallery-8.jpg')}}" alt="photo">
                    <div class="gallery__icon">
                        <a class="popup__img" href="{{asset('assets/img/gallery/gallery-8.jpg')}}"> <i class="icofont-eye-alt"></i></a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection