@extends('frontend.layout')

@section('content')
<section class="jumbotron">
<div class="wrapper">
                <div class="slide-hero">
                    <img src="{{ asset('frontend/images/team/banner.heic') }}" alt="" class="image"/>
                    <div class="image-data">
                        <h2  data-aos="fade-down" >
                        {{ __('pg-about-title') }}
                        </h2>
                        <div class="nav"  data-aos="fade-right" >
                            <a href="{{ route('index') }}" class="button">{{ __('fot-home') }}</a>
                            <span>
                                /
                            </span>
                            <a href="{{ route('about') }}" class="button">{{ __('fot-about') }}</a>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="page-default" >
            <div class="wrapper">
                <div class="container" >
                    <nav class="sidenav" >
                        <ul class="nav__list" >
                            <li  data-aos="fade-left" data-aos-duration="500" class="nav__item">
                                <button onclick="showProduct('pc1')">{{ __('pg-about-nav1') }}</button>
                            </li>
                            <li  data-aos="fade-right" data-aos-duration="700" class="nav__item">
                                <button onclick="showProduct('pc2')">{{ __('pg-about-nav2') }}</button>
                            </li>
                            <li  data-aos="fade-left" data-aos-duration="900" class="nav__item">
                                <button onclick="showProduct('pc3')">{{ __('pg-about-nav3') }}</button>
                            </li>
                            <li  data-aos="fade-left" data-aos-duration="900" class="nav__item">
                                <button onclick="showProduct('pc4')">{{ __('pg-about-nav4') }}</button>
                            </li>
                            <li  data-aos="fade-right" data-aos-duration="1100" class="nav__item">
                                <button onclick="showProduct('pc5')">{{ __('pg-about-nav5') }}</button>
                            </li>
                        </ul>
                    </nav>
                    <div class="about-box">
                        <div class="card pc1" id="productCard">
                            <div class="text">
                                <p>{{ __('pg-about-nav1') }}</p>

                                <h3>PT TOCOCO INDONESIA BERKAH</h3>
                                <div class="paragraph-box">
                                    <div class="paragraph">
                                        <img data-tilt="data-tilt" src="{{ asset('frontend/images/company/tococoindonesiaberkah.jpg') }}" alt="comitment">
                                        <div class="desc">
                                            <span>01.</span>
                                            <span>
                                                <h3>{{ __('about-nav1-tit1') }}  </h3>
                                                <p>
                                                {{ __('about-nav1-desc1') }}  
                                                </p>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="paragraph">
                                        <img data-tilt="data-tilt" src="{{ asset('frontend/images/company/agriculture.png') }}" alt="comitment">

                                        <div class="desc">
                                            <span>02.</span>
                                            <span>
                                                <h3>{{ __('about-nav1-tit2') }}  </h3>
                                                <p>
                                                {{ __('about-nav1-desc2') }}  
                                                </p>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="paragraph">
                                        <img data-tilt="data-tilt" src="{{ asset('frontend/images/company/control.png') }}" alt="">
                                        <div class="desc">
                                            <span>03.</span>
                                            <span>
                                                <h3>{{ __('about-nav1-tit3') }}  </h3>
                                                <p>
                                                {{ __('about-nav1-desc3') }}                      
                                                </p>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card pc2" id="productCard">
                            <div class="text">
                                <p>{{__('pg-about-nav2')}}</p>

                                <h3>PT TOCOCO INDONESIA BERKAH</h3>
                                <div class="paragraph-box">
                                    <div class="paragraph">
                                        <img data-tilt="data-tilt" src="{{ asset('frontend/images/team/comitment.jpg') }}" alt="comitment">
                                        <div class="desc">
                                            <span>01.</span>
                                            <span>
                                                <h3>{{__('about-nav2-tit1')}}</h3>
                                                <p>
                                                {{__('about-nav2-desc1')}}
                                                </p>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="paragraph">
                                        <img data-tilt="data-tilt" src="{{ asset('frontend/images/team/mission.avif') }}" alt="comitment">

                                        <div class="desc">
                                            <span>02.</span>
                                            <span>
                                                <h3>{{__('about-nav2-tit2')}}</h3>
                                                <ul>
                                                    <li>{{__('about-nav2-list1')}}
                                                    </li>
                                                    <li>{{__('about-nav2-list2')}}
                                                    </li>
                                                    <li>{{__('about-nav2-list3')}}
                                                        
                                                    </li>
                                                </ul>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card pc3" id="productCard">
                            <div class="text">
                                <p>{{__('pg-about-nav3')}}</p>
                                <h3>PT TOCOCO INDONESIA BERKAH</h3>
                                <div class="team">
                                    <div class="container">
                                        <div class="row">
                                            <div class="team-item">
                                                <img src="{{ asset('frontend/images/team/male.jpg') }}" alt="team">
                                                <h3>alfito yuro
                                                    <span>Finance & Operasional</span></h3>
                                            </div>
                                            <div class="team-item">
                                                <img src="{{ asset('frontend/images/team/male.jpg') }}" alt="team">
                                                <h3>ilham satria
                                                    <span>Content Creator</span></h3>
                                            </div>
                                            <div class="team-item">
                                                <img src="{{ asset('frontend/images/team/female.jpg') }}" alt="team">
                                                <h3>katrina Joe<span>Social Media Specialist</span></h3>
                                            </div>
                                            <div class="team-item">
                                                <img src="{{ asset('frontend/images/team/female.jpg') }}" alt="team">
                                                <h3>prilician Siauw
                                                    <span>Digital Marketing</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card pc4" id="productCard">
                            <div class="text">
                                <p>{{__('pg-about-nav4')}}</p>

                                <h3>PT TOCOCO INDONESIA BERKAH</h3>
                                <div class="paragraph-box">
                                    <div class="paragraph">
                                        <img data-tilt="data-tilt" src="{{ asset('frontend/images/legality/npwp.png') }}" alt="comitment">
                                        <div class="desc">
                                            <span>01.</span>
                                            <span>
                                                <h3>NPWP</h3>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="paragraph">
                                        <img data-tilt="data-tilt" src="{{ asset('frontend/images/legality/NIB.png') }}" alt="comitment">

                                        <div class="desc">
                                            <span>02.</span>
                                            <span>
                                                <h3>NIB</h3>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card pc5" id="productCard">
                            <div class="text">
                                <p>{{__('pg-about-nav5')}}</p>

                                <h3>PT TOCOCO INDONESIA BERKAH</h3>
                                <div class="galery-box">
                                    <div class="img-container">
                                        <div class="img">
                                            <img src="{{ asset('frontend/images/team/banner.heic') }}" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="{{ asset('frontend/images/products/tcc2.jpg') }}" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="{{ asset('frontend/images/products/tcc3.webp') }}" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="{{ asset('frontend/images/products/coffekelapa.jpeg') }}" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="{{ asset('frontend/images/products/coffee.jpeg') }}" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="{{ asset('frontend/images/products/alcoco(1).webp') }}" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="{{ asset('frontend/images/products/alcoco(2).webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="img-pop">
                                        <span>&times;</span>
                                        <img src="" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            
window.onload = function () {
  showProduct('pc1');
};

function showProduct(productId) {
  const cards = document.querySelectorAll('.page-default .card');
  cards.forEach(card => {
      card.classList.remove('active');
  });
  const selectedCard = document.querySelector(`.card.${productId}`);
  selectedCard.classList.add('active');
}

document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.card.pc5 .img-container .img img').forEach(image => {
    image.onclick = () => {
      document.querySelector('.card.pc5 .img-pop').style.display = 'block';
      document.querySelector('.card.pc5 .img-pop img').src = image.getAttribute('src');
    };
  });

  document.querySelector('.card.pc5 .img-pop span').onclick = () => {
    document.querySelector('.card.pc5 .img-pop').style.display = 'none';
  };
});
        </script>
@endsection