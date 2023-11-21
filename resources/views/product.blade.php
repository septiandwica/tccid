@extends('frontend.layout')

@section('content')
<section class="jumbotron">
            <div class="wrapper">
                <div class="slide-hero">
                    <img src="{{ asset('frontend/images/img1.jpg') }}" alt="" class="image"/>
                    <div class="image-data">
                        <h2>
                        {{ __('pg-product-title') }}
                        </h2>
                        <div class="nav">
                            <a href="{{ route('index') }}" class="button">{{ __('fot-home') }}</a>
                            <span>
                                /
                            </span>
                            <a href="{{ route('product') }}" class="button">{{ __('fot-product') }}</a>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="page-default">
            <div class="wrapper">
                <div class="container">
                    <nav class="sidenav">
                      <div class="title">
                        <h3>{{ __('pg-product-title') }}</h3>

                      </div>
                        <ul class="nav__list">
                            <li class="nav__item">
                                <button onclick="showProduct('pc1')">{{ __('prod-tit1') }}</button>
                            </li>
                            <li class="nav__item">
                                <button onclick="showProduct('pc2')">{{ __('prod-tit2.1') }}</button>
                            </li>
                            <li class="nav__item">
                                <button onclick="showProduct('pc3')">{{ __('prod-tit2.2') }}</button>
                            </li>
                            <li class="nav__item">
                                <button onclick="showProduct('pc4')">{{ __('prod-tit3.1') }}</button>
                            </li>
                            <li class="nav__item">
                                <button onclick="showProduct('pc5')">{{ __('prod-tit3.2') }}</button>
                            </li>
                            <li class="nav__item">
                                <button onclick="showProduct('pc6')">{{ __('prod-tit3.3') }}</button>
                            </li>
                            <li class="nav__item">
                                <button onclick="showProduct('pc7')">{{ __('prod-tit4') }}</button>
                            </li>
                        </ul>
                    </nav>
                    <div class="product-box">
                        <div class="card pc1 active" id="pc1">
                            <div class="img-container">
                                <img
                                    class="p1"
                                    data-tilt="data-tilt"
                                    data-tilt-reverse="true"
                                    src="{{ asset('frontend/images/products/tococo.png') }}"
                                    alt="">
                            </div>
                            <div class="text">
                                <h3>{{ __('prod-tit1') }}</h3>
                                <p>{{ __('prod-desc1') }}</p>
                                <div class="desc">
                                    <p>
                                    {{ __('pg-product-spec') }}
                                    </p>
                                    <ul>
                                        <li>
                                            <p>{{ __('prod-p1-sp1') }}</p>
                                        </li>
                                        <li>
                                            <p>{{ __('prod-p1-sp2') }}</p>
                                        </li>
                                        <li>
                                            <p>{{ __('prod-p1-sp3') }}</p>
                                        </li>
                                        <li>
                                            <p>{{ __('prod-p1-sp4') }}</p>
                                        </li>
                                        <li>
                                            <p>{{ __('prod-p1-sp5') }}</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="card pc2" id="pc2">
                            <div class="img-container">
                                <img
                                    class="p1"
                                    data-tilt="data-tilt"
                                    data-tilt-reverse="true"
                                    src="{{ asset('frontend/images/products/blackpepper.png') }}"
                                    alt="">
                            </div>
                            <div class="text">
                                <h3>{{ __('prod-tit2.1') }}</h3>
                                <p>{{ __('prod-desc2.1') }}</p>
                                <div class="desc">
                                    <p>
                                    {{ __('pg-product-spec') }}
                                    </p>
                                    <ul>
                                        <li>
                                            <p>{{ __('prod-p2.1-sp1') }}</p>
                                        </li>
                                        <li>
                                            <p>{{ __('prod-p2.1-sp2') }}</p>
                                        </li>
                                        <li>
                                            <p>{{ __('prod-p2.1-sp3') }}</p>
                                        </li>
                                        <li>
                                            <p>{{ __('prod-p2.1-sp4') }}</p>
                                        </li>
                                        <li>
                                            <p>{{ __('prod-p2.1-sp5') }}</p>
                                        </li>
                                        <li>
                                            <p>{{ __('prod-p2.1-sp6') }}</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="card pc3" id="pc3">
                            <div class="img-container">
                                <img
                                    class="p1"
                                    data-tilt="data-tilt"
                                    data-tilt-reverse="true"
                                    src="{{ asset('frontend/images/products/whitepepper.png') }}"
                                    alt="">
                            </div>
                            <div class="text">
                            <h3>{{ __('prod-tit2.2') }}</h3>
                                <p>{{ __('prod-desc2.2') }}</p>
                                <div class="desc">
                                    <p>
                                    {{ __('pg-product-spec') }}
                                    </p>
                                    <ul>
                                        <li>
                                            <p>{{ __('prod-p2.2-sp1') }}</p>
                                        </li>
                                        <li>
                                            <p>{{ __('prod-p2.2-sp2') }}</p>
                                        </li>
                                        <li>
                                            <p>{{ __('prod-p2.2-sp3') }}</p>
                                        </li>
                                        <li>
                                            <p>{{ __('prod-p2.2-sp4') }}</p>
                                        </li>
                                        <li>
                                            <p>{{ __('prod-p2.2-sp5') }}</p>
                                        </li>
                                        <li>
                                            <p>{{ __('prod-p2.2-sp6') }}</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="card pc4" id="pc4">
                            <div class="img-container">
                                <img
                                    class="p1"
                                    data-tilt="data-tilt"
                                    data-tilt-reverse="true"
                                    src="{{ asset('frontend/images/products/palaabcd.webp') }}"
                                    alt="">
                            </div>
                            <div class="text">
                            <h3>{{ __('prod-tit3.1') }}</h3>
                                <p>{{ __('prod-desc3') }}</p>
                                <div class="desc">
                                    <p>
                                    {{ __('pg-product-spec') }}
                                    </p>
                                    <ul>
                                        <li>
                                            <p>{{ __('prod-p3.1-sp1') }}</p>
                                        </li>
                                        <li>
                                            <p>{{ __('prod-p3.1-sp2') }}</p>
                                        </li>
                                        <li>
                                            <p>{{ __('prod-p3.1-sp3') }}</p>
                                        </li>
                                        <li>
                                            <p>{{ __('prod-p3.1-sp4') }}</p>
                                        </li>
                                        <li>
                                            <p>{{ __('prod-p3.1-sp5') }}</p>
                                        </li>
                                        <li>
                                            <p>{{ __('prod-p3.1-sp6') }}</p>
                                        </li>
                                        <li>
                                            <p>{{ __('prod-p3.1-sp7') }}</p>
                                        </li>
                                        <li>
                                            <p>{{ __('prod-p3.1-sp8') }}</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="card pc5" id="pc5">
                            <div class="img-container">
                                <img
                                    class="p1"
                                    data-tilt="data-tilt"
                                    data-tilt-reverse="true"
                                    src="{{ asset('frontend/images/products/palass.webp') }}"
                                    alt="">
                            </div>
                            <div class="text">
                            <h3>{{ __('prod-tit3.2') }}</h3>
                                <p>{{ __('prod-desc3') }}</p>
                                <div class="desc">
                                    <p>
                                    {{ __('pg-product-spec') }}
                                    </p>
                                    <ul>
                                        <li>
                                            <p>{{ __('prod-p3.2-sp1') }}</p>
                                        </li>
                                        <li>
                                            <p>{{ __('prod-p3.2-sp2') }}</p>
                                        </li>
                                        <li>
                                            <p>{{ __('prod-p3.2-sp3') }}</p>
                                        </li>
                                        <li>
                                            <p>{{ __('prod-p3.2-sp4') }}</p>
                                        </li>
                                        <li>
                                            <p>{{ __('prod-p3.2-sp5') }}</p>
                                        </li>
                                        <li>
                                            <p>{{ __('prod-p3.2-sp6') }}</p>
                                        </li>
                                        <li>
                                            <p>{{ __('prod-p3.2-sp7') }}</p>
                                        </li>
                                        <li>
                                            <p>{{ __('prod-p3.2-sp8') }}</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="card pc6" id="pc6">
                            <div class="img-container">
                                <img
                                    class="p1"
                                    data-tilt="data-tilt"
                                    data-tilt-reverse="true"
                                    src="{{ asset('frontend/images/products/palabwp.webp') }}"
                                    alt="">
                            </div>
                            <div class="text">
                            <h3>{{ __('prod-tit3.3') }}</h3>
                                <p>{{ __('prod-desc3') }}</p>
                                <div class="desc">
                                    <p>
                                    {{ __('pg-product-spec') }}
                                    </p>
                                    <ul>
                                        <li>
                                            <p>{{ __('prod-p3.3-sp1') }}</p>
                                        </li>
                                        <li>
                                            <p>{{ __('prod-p3.3-sp2') }}</p>
                                        </li>
                                        <li>
                                            <p>{{ __('prod-p3.3-sp3') }}</p>
                                        </li>
                                        <li>
                                            <p>{{ __('prod-p3.3-sp4') }}</p>
                                        </li>
                                        <li>
                                            <p>{{ __('prod-p3.3-sp5') }}</p>
                                        </li>
                                        <li>
                                            <p>{{ __('prod-p3.3-sp6') }}</p>
                                        </li>
                                        <li>
                                            <p>{{ __('prod-p3.3-sp7') }}</p>
                                        </li>
                                        <li>
                                            <p>{{ __('prod-p3.3-sp8') }}</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="card pc7" id="pc7">
                            <div class="img-container">
                                <img
                                    class="p2"
                                    data-tilt="data-tilt"
                                    data-tilt-reverse="true"
                                    src="{{ asset('frontend/images/products/alcoco.png') }}"
                                    width="150px"
                                    alt="">
                            </div>
                            <div class="text">
                            <h3>{{ __('prod-tit4') }}</h3>
                                <p>{{ __('prod-desc4') }}</p>
                                <div class="desc">
                                    <p>
                                    {{ __('pg-product-spec') }}
                                    </p>
                                    <ul>
                                        <li>
                                            <p>{{ __('prod-p4-sp1') }}</p>
                                        </li>
                                        <li>
                                            <p>{{ __('prod-p4-sp2') }}</p>
                                        </li>
                                        <li>
                                            <p>{{ __('prod-p4-sp3') }}</p>
                                        </li>
                                        <li>
                                            <p>{{ __('prod-p4-sp4') }}</p>
                                        </li>
                                        <li>
                                            <p>{{ __('prod-p1-sp5') }}</p>
                                        </li>
                                    </ul>
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
  // Hide all product cards
  const cards = document.querySelectorAll('.page-default .card');
  cards.forEach(card => {
      card.classList.remove('active');
  });

  // Show the selected product card
  const selectedCard = document.querySelector(`.card.${productId}`);
  selectedCard.classList.add('active');
}
</script>
@endsection
