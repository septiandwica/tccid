@extends('frontend.layout')
@section('content')


<section class="main swiper mySwiper">
            <div class="wrapper swiper-wrapper">
            <div class="slide swiper-slide">
                <img src="{{ asset('frontend/images/team/banner.heic') }}" alt="" class="image" />
                <div class="image-data" >
                    <span class="text" data-aos="fade-right" data-aos-duration="700">{{ __('swiper-text2') }}</span>
                    <h2 data-aos="fade-left" data-aos-duration="700">
                    {{ __('swiper-tl2.1') }}<br />
                    {{ __('swiper-tl2.2') }}
                    </h2>
                    <a data-aos="fade-right" data-aos-duration="700"href="{{ route('product') }}" class="button">{{ __('swiper-btn2') }}</a>
                </div>
              </div>
              <div class="slide swiper-slide">
                <img src="{{ asset('frontend/images/img1.jpg') }}" alt="" class="image" />
                <div class="image-data">
                  <span class="text"data-aos="fade-right" data-aos-duration="700">{{ __('swiper-text1') }}</span>
                  <h2 data-aos="fade-left" data-aos-duration="700"">
                  {{ __('swiper-tl1.1') }} <br />
                  {{ __('swiper-tl1.2') }}
                  </h2>
                  <a data-aos="fade-right" data-aos-duration="700" href="{{ route('product') }}" class="button">{{ __('swiper-btn') }}</a>
                </div>
              </div>
              <div class="slide swiper-slide">
                <img src="{{ asset('frontend/images/products/alcoco(1).webp') }}" alt="" class="image" />
                <div class="image-data">
                    <span class="text" data-aos="fade-right" data-aos-duration="700">{{ __('swiper-text3') }}</span>
                    <h2 data-aos="fade-left" data-aos-duration="700">
                    {{ __('swiper-tl3.1') }}<br />
                    {{ __('swiper-tl3.2') }}
                    </h2>
                    <a data-aos="fade-right" data-aos-duration="700" href="{{ route('product') }}" class="button">{{ __('swiper-btn3') }}</a>
                </div>
              </div>
            </div>
      
            <div class="swiper-button-next nav-btn"></div>
            <div class="swiper-button-prev nav-btn"></div>
            <div class="swiper-pagination"></div>
          </section>

<section class="highlight">
    <div class="wrapper">
        <div data-aos="fade-up"
        data-aos-duration="700"
            class="box"
            data-tilt="data-tilt"
            data-tilt-glare="data-tilt-glare"
            data-tilt-max-glare="0.8">
            <img src="{{ asset('frontend/images/icon/quality.png') }}" alt="">
            <div class="text">
                <h3>{{ __('high-tit1') }}</h3>
                <p>{{ __('high-desc1') }}</p>
            </div>
        </div>
        <div
        data-aos="fade-down"
        data-aos-duration="700"
            class="box"
            data-tilt="data-tilt"
            data-tilt-glare="data-tilt-glare"
            data-tilt-max-glare="0.8">
            <img src="{{ asset('frontend/images/icon/grade.png') }}" alt="">
            <div class="text">
                <h3>{{ __('high-tit2') }}</h3>
                <p>{{ __('high-desc2') }}</p>
            </div>
       </div>
       <div
       data-aos="fade-up"
       data-aos-duration="700"
            class="box"
            data-tilt="data-tilt"
            data-tilt-glare="data-tilt-glare"
            data-tilt-max-glare="0.8">
            <img src="{{ asset('frontend/images/icon/flavor.png') }}" alt="">
            <div class="text">
                <h3>{{ __('high-tit3') }}</h3>
                <p>{{ __('high-desc3') }}</p>
            </div>
        </div>
    </div>
</section>

<section class="products">
            <div class="wrapper">
                <div class="title">
                    <h2 data-aos="flip-left"
       data-aos-duration="200">{{ __('pg-product-tit') }}</h2>
                    <div class="hline" data-aos="fade-up"
       data-aos-duration="200"></div>
                    
                    <p data-aos="fade-right"
       data-aos-duration="200">
                        {{ __('pg-product-tit-desc') }}
                    </p>
                </div>
                <div class="container">
                    <div class="left">
                        <div class="card" data-aos="fade-left" data-aos-duration="500" id="productCard" >
                            <div class="text">
                                <h3>{{ __('prod-tit1') }}</h3>
                                <p>{{ __('prod-desc1') }}</p>
                                <div class="btn">
                                    <a href="{{ route('product') }}">{{ __('read-btn') }}
                                        <i class="fa fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="img-container">
                                <img class="pattern" src="{{ asset('frontend/images/products/pattern.png') }}" alt="">
                                <img class="p1"
                                    data-tilt="data-tilt"
                                    data-tilt-reverse="true"
                                    src="{{ asset('frontend/images/products/tococo.png') }}"
                                    alt=""
                                    >
                            </div>
                        </div>
                        <div class="hline2"></div>
                        <div class="card" data-aos="fade-left" data-aos-duration="500" id="productCard" >
                            <div class="text">
                                <h3>{{ __('prod-tit2') }}</h3>
                                <p>{{ __('prod-desc2') }}</p>
                                <div class="btn">
                                    <a href="{{ route('product') }}">{{ __('read-btn') }}
                                        <i class="fa fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="img-container">
                                <img class="pattern" src="{{ asset('frontend/images/products/pattern.png') }}" alt="">
                                <img
                                    data-tilt="data-tilt"
                                    data-tilt-reverse="true"
                                    src="{{ asset('frontend/images/products/pepper.png') }}"
                                    alt=""
                                   >
                            </div>
                        </div>
                    </div>
                    <div class="vline"></div>
                    <div class="right">
                        <div class="card" data-aos="fade-right" data-aos-duration="500" id="productCard">
                            <div class="text">
                                <h3>{{ __('prod-tit3') }}</h3>
                                <p>{{ __('prod-desc3') }}</p>
                                <div class="btn">
                                    <a href="{{ route('product') }}">{{ __('read-btn') }}
                                        <i class="fa fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="img-container">
                                <img class="pattern" src="{{ asset('frontend/images/products/pattern.png') }}" alt="">
                                <img
                                    data-tilt="data-tilt"
                                    data-tilt-reverse="true"
                                    src="{{ asset('frontend/images/products/nutmeg.png') }}"
                                    alt=""
                                 >
                            </div>
                        </div>
                        <div class="hline2"></div>

                        <div class="card" data-aos="fade-right" data-aos-duration="500" id="productCard" >
                            <div class="text">
                                <h3>{{ __('prod-tit4') }}</h3>
                                <p>{{ __('prod-desc4') }}</p>
                                <div class="btn">
                                    <a href="{{ route('product') }}">{{ __('read-btn') }}
                                        <i class="fa fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="img-container">
                                <img class="pattern" src="{{ asset('frontend/images/products/pattern.png') }}" alt="">
                                <img
                                class="p7"
                                    data-tilt="data-tilt"
                                    data-tilt-reverse="true"
                                    src="{{ asset('frontend/images/products/alcoco.png') }}"
                                    width="100px"
                                    alt=""
                                    >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr>
        <section class="about">
            <div class="wrapper">
                <div class="top">
                    <div class="title" data-aos="fade-down" data-aos-duration="500">
                        <p>{{ __('pg-about-tag') }}</p>
                        <h2>{{ __('pg-about-tit') }}</h2>
                        <div class="hline"></div>

                        <p>{{ __('pg-about-tit-desc') }}</p>
                    </div>
                    <div class="container">
                        <div data-aos="fade-right" data-aos-duration="500" class="img-container">
                            <img
                                data-tilt="data-tilt"
                                data-tilt-reverse="true"
                                src="{{ asset('frontend/images/company/tococoindonesiaberkah.jpg') }}"
                                alt="">
                        </div>
                        <div data-aos="fade-left" data-aos-duration="500" class="text-container">
                            <p>{{ __('pg-about-text-desc') }}</p>
                            <a href="{{ route('about') }}">{{ __('read-btn') }}
                                <i class="fa fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="bottom">
                    <div data-aos="fade-up" data-aos-duration="500" class="title">
                        <p>{{ __('pg-about-tag2') }}</p>
                        <h2>{{ __('pg-about-tit2') }}</h2>
                        <div class="hline"></div>
                    </div>
                    <div data-aos="fade-down" data-aos-duration="500" class="container">
                      <nav class="nav">
                        <ul class="nav__list">
                            <li class="nav__item">
                              <button onclick="showImage('nibImage')">NIB</button>
                            </li>
                            <li class="nav__item">
                              <button onclick="showImage('npwpImage')">NPWP</button>
                            </li>
                        </ul>
                      </nav>
                      <div class="document">
                          <div class="img-container">
                            <img data-aos="fade-down" data-aos-duration="500"
                                id="npwpImage"
                                data-tilt="data-tilt"
                                data-tilt-reverse="true"
                                src="{{ asset('frontend/images/legality/npwp.png') }}"
                                alt=""
                                width="400px">
                            <img
                            data-aos="fade-down" data-aos-duration="500"
                                id="nibImage"
                                data-tilt="data-tilt"
                                data-tilt-reverse="true"
                                src="{{ asset('frontend/images/legality/NIB.png') }}"
                                alt=""
                                width="400px">
                        </div>
                      </div> 
                    </div>
                </div>
            </div>
        </section>


        <script>
document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 0,
      centeredSlides: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  });
        </script>


@endsection