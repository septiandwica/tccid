@extends('frontend.layout')
@section('content')


<section class="main swiper mySwiper">
            <div class="wrapper swiper-wrapper">
            <div class="slide swiper-slide">
                <img src="{{ asset('frontend/images/team/banner.heic') }}" alt="" class="image" />
                <div class="image-data" >
                    <span class="text" data-aos="fade-right" data-aos-duration="500">{{ __('swiper-text2') }}</span>
                    <h2 data-aos="fade-left" data-aos-duration="700" >
                    {{ __('swiper-tl2.1') }}<br />
                    {{ __('swiper-tl2.2') }}
                    </h2>
                    <a data-aos="fade-right" data-aos-duration="800" href="{{ route('product') }}" class="button">{{ __('swiper-btn2') }}</a>
                </div>
              </div>
              <div class="slide swiper-slide">
                <img src="{{ asset('frontend/images/slider/img1.png') }}" alt="" class="image" />
                <div class="image-data">
                  <span data-aos="fade-right" data-aos-duration="500" class="text">{{ __('swiper-text1') }}</span>
                  <h2 data-aos="fade-left" data-aos-duration="700">
                  {{ __('swiper-tl1.1') }} <br />
                  {{ __('swiper-tl1.2') }}
                  </h2>
                  <a data-aos="fade-right" data-aos-duration="800" href="{{ route('product') }}" class="button">{{ __('swiper-btn') }}</a>
                </div>
              </div>
              <div class="slide swiper-slide">
                <img src="{{ asset('frontend/images/products/alcoco(1).webp') }}" alt="" class="image" />
                <div class="image-data">
                    <span data-aos="fade-right" data-aos-duration="500"class="text" >{{ __('swiper-text3') }}</span>
                    <h2 data-aos="fade-left" data-aos-duration="700" >
                    {{ __('swiper-tl3.1') }}<br />
                    {{ __('swiper-tl3.2') }}
                    </h2>
                    <a data-aos="faderight" data-aos-duration="800" href="{{ route('product') }}" class="button">{{ __('swiper-btn3') }}</a>
                </div>
              </div>
            </div>
      
            <div class="swiper-button-next nav-btn"></div>
            <div class="swiper-button-prev nav-btn"></div>
            <div class="swiper-pagination"></div>
          </section>

<section class="highlight">
    <div class="wrapper">
        <div data-aos="fade-down" data-aos-duration="500" class="box"data-tilt data-tilt-glare data-tilt-max-glare="0.8">
            <img src="{{ asset('frontend/images/icon/quality.png') }}" alt="">
            <div class="text">
                <h3>{{ __('high-tit1') }}</h3>
                <p>{{ __('high-desc1') }}</p>
            </div>
        </div>
        <div data-aos="fade-up" data-aos-duration="700" class="box" data-tilt data-tilt-glare data-tilt-max-glare="0.8">
            <img src="{{ asset('frontend/images/icon/grade.png') }}" alt="">
            <div class="text">
                <h3>{{ __('high-tit2') }}</h3>
                <p>{{ __('high-desc2') }}</p>
            </div>
       </div>
       <div data-aos="fade-down" data-aos-duration="00" class="box" data-tilt data-tilt-glare data-tilt-max-glare="0.8">
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
                    <h2 data-aos="fade-down">{{ __('pg-product-tit') }}</h2>
                    <div class="hline" data-aos="fade-left" data-aos-anchor-placement="top"  ></div>
                    
                    <p data-aos="fade-up">
                        {{ __('pg-product-tit-desc') }}
                    </p>
                </div>
                <div class="container">
                    <div class="left">
                        <div data-aos="fade-left" class="card"   id="productCard" >
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
                                data-tilt data-tilt-glare data-tilt-max-glare="0.8"
                                    src="{{ asset('frontend/images/products/tococo.png') }}"
                                    alt=""
                                    >
                            </div>
                        </div>
                        <div class="hline2"></div>
                        <div data-aos="fade-left" class="card" id="productCard" >
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
                                data-tilt data-tilt-glare data-tilt-max-glare="0.8"
                                    src="{{ asset('frontend/images/products/pepper.png') }}"
                                    alt=""
                                   >
                            </div>
                        </div>
                    </div>
                    <div class="vline"></div>
                    <div class="right">
                        <div data-aos="fade-right"class="card"  id="productCard">
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
                                data-tilt data-tilt-glare data-tilt-max-glare="0.8"
                                    src="{{ asset('frontend/images/products/nutmeg.png') }}"
                                    alt=""
                                 >
                            </div>
                        </div>
                        <div class="hline2"></div>

                        <div data-aos="fade-right"  class="card" id="productCard" >
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
                                data-tilt data-tilt-glare data-tilt-max-glare="0.8"
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
                    <div class="title">
                        <p  data-aos="fade-down" >{{ __('pg-about-tag') }}</p>
                        <h2  data-aos="fade-right" >{{ __('pg-about-tit') }}</h2>
                        <div data-aos="fade-left" data-aos-anchor-placement="top" class="hline"></div>
                        <p  data-aos="fade-down" >{{ __('pg-about-tit-desc') }}</p>
                    </div>
                    <div class="container">
                        <div  data-aos="fade-down" class="img-container">
                            <img  data-aos="fade-left" data-aos-anchor-placement="top"
                            data-tilt data-tilt-glare data-tilt-max-glare="0.8"
                                src="{{ asset('frontend/images/company/tococoindonesiaberkah.jpg') }}"
                                alt="">
                        </div>
                        <div  data-aos="fade-up" class="text-container">
                            <p>{{ __('pg-about-text-desc') }}</p>
                            <a href="{{ route('about') }}">{{ __('read-btn') }}
                                <i class="fa fa-chevron-right"></i>
                            </a>
                            <button id="videoPopupBtn"><i class="fa fa-play"></i> {{ __('vid-btn') }}</button>
                        </div>
                    </div>
                </div>
                <div id="videoModal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <video id="video" width="100%" controls>
                            <source src="{{ asset('frontend/images/company/video.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                     </div>
                </div>
                <div class="bottom">
                    <div class="title">
                        <p data-aos="fade-down">{{ __('pg-about-tag2') }}</p>
                        <h2 data-aos="fade-up">{{ __('pg-about-tit2') }}</h2>
                        <div  data-aos="fade-right" class="hline"></div>
                    </div>
                    <div  class="container">
                      <nav class="nav">
                        <ul class="nav__list">
                            <li  data-aos="fade-down" class="nav__item">
                              <button onclick="showImage('nibImage')">NIB</button>
                            </li>
                            <li  data-aos="fade-down" class="nav__item">
                              <button onclick="showImage('npwpImage')">NPWP</button>
                            </li>
                        </ul>
                      </nav>
                      <div class="document">
                          <div class="img-container"  data-aos="fade-down">
                            <img  
                                id="npwpImage"
                                data-tilt data-tilt-glare data-tilt-max-glare="0.8"
                                src="{{ asset('frontend/images/legality/npwp.png') }}"
                                alt=""
                                width="400px">
                            <img
                            
                                id="nibImage"
                                data-tilt data-tilt-glare data-tilt-max-glare="0.8"
                                src="{{ asset('frontend/images/legality/NIB.png') }}"
                                alt=""
                                width="400px">
                        </div>
                      </div> 
                    </div>
                </div>
            </div>
        </section>
        <section class="appreciation">
            <div class="wrapper">
                <div class="top">
                    <div class="title">
                        <h2  data-aos="fade-right" >{{ __('pg-ach-tit') }}</h2>
                        <div data-aos="fade-left" data-aos-anchor-placement="top" class="hline"></div>
                        <p  data-aos="fade-down" >{{ __('pg-ach-tit-desc') }}</p>
                    </div>
                </div>
                <div  class="container">
                          <div class="img-container"  data-aos="fade-down">
                            <div class="sertif-box">
                            <img  
                                
                                src="{{ asset('frontend/images/achievement/umkmterbaik.jpg') }}"
                                alt=""
                               >
                                <h4>UMKM terbaik oleh ASPIKMAS AKADEMI</h4>
                            </div>
                            <div class="sertif-box">
                            <img  
                                src="{{ asset('frontend/images/achievement/timfieldterbaik.jpg') }}"
                                alt=""
                                >
                                <h4>Team Field Terbaik oleh ASPIKMAS AKADEMI</h4>
                            </div>
                            <div class="sertif-box hidden">
                            <img  
                                src="{{ asset('frontend/images/achievement/top5.jpg') }}"
                                alt=""
                                >
                                <h4>Top 5 UMKM FnB Track oleh Digital Creative Entrepreneurs</h4>
                            </div>
                            <div class="sertif-box hidden">
                            <img  
                                src="{{ asset('frontend/images/achievement/top20.jpg') }}"
                                alt=""
                                >
                                <h4>Top 20 UMKM DCE oleh Digital Creative Entrepreneurs</h4>
                            </div>
                            <div class="sertif-box hidden">
                            <img  
                                src="{{ asset('frontend/images/achievement/juara3.jpg') }}"
                                alt=""
                                >
                                <h4>Juara 3 Krenova Kabupaten Banyumas</h4>
                            </div>
                    </div>
                    <button id="loadMore" 
        data-loadmore="{{ __('btn-loadmore') }}" 
        data-less="{{ __('btn-less') }}">
    {{ __('btn-loadmore') }}
</button>
                    
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
  document.getElementById('loadMore').addEventListener('click', function() {
    var hiddenBoxes = document.querySelectorAll('.img-container .sertif-box.hidden');
    var textLoadMore = this.getAttribute('data-loadmore');
    var textLess = this.getAttribute('data-less');

    if (hiddenBoxes.length > 0) {
        for (var i = 0; i < hiddenBoxes.length; i++) {
            hiddenBoxes[i].classList.remove('hidden');
        }
        this.textContent = textLess; 
    } else {
       
        var allBoxes = document.querySelectorAll('.img-container .sertif-box');
        for (var i = 2; i < allBoxes.length; i++) { 
            allBoxes[i].classList.add('hidden');
        }
        this.textContent = textLoadMore;
    }
});

var modal = document.getElementById("videoModal");
var btn = document.getElementById("videoPopupBtn");
var span = document.getElementsByClassName("close")[0];
var video = document.getElementById("video");

function stopAndResetVideo() {
    video.pause();
    video.currentTime = 0;
}

btn.onclick = function() {
    modal.style.display = "flex"; 
    document.body.style.overflow = 'hidden'; 
}

span.onclick = function() {
    modal.style.display = "none";
    document.body.style.overflow = 'auto'; 
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
        document.body.style.overflow = 'auto'; 
        stopAndResetVideo();
    }
}
        </script>


@endsection