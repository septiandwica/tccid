<!DOCTYPE html>
<html lang="{{__('language')}}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link
            rel="preconnect"
            href="https://fonts.gstatic.com"
            crossorigin="crossorigin">
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('frontend/src/css/style.css') }}">
        <link rel="icon" href="{{ asset('frontend/images/favicon.ico') }}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{ asset('frontend/images/favicon.ico') }}" type="image/x-icon"/>
        <link rel="stylesheet" href="{{ asset('frontend/vendor/swiper/css/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/vendor/font-awesome/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/vendor/aos/aos.css') }}">

        <title>PT Tococo Indonesia Berkah</title>
    </head>
    <body>
    <div class="loader-container" id="loaderContainer">
    <div class="loader"></div>
</div>
        <header class="header">
            <div class="top-bar">
                <div class="top-bar__content">
                    <a href="https://wa.me/62895333230545" target="_blank" class="phone">
                        <i class="fa-solid fa-phone icon"></i>
                        <span>+62 8953 3323 0545</span>
                    </a>
                    <a
                        href="mailto:pttococoindonesiaberkah@gmail.com"
                        target="_blank"
                        class="email">
                        <i class="fa-solid fa-envelope icon"></i>
                        <span>pttococoindonesiaberkah@gmail.com</span>
                    </a>
                </div>
            </div>

            <div class="bottom-bar">
                <div class="bottom-bar__content">
                    <a href="{{ route('index') }}" class="logo">
                        <img class="logo__img" id="logoImg" src="{{ asset('frontend/images/icon/whitelogo.svg') }}" alt="logo">
                        <!-- <span class="logo__text">Tococo</span> -->
                    </a>

                    <nav class="nav">
                        <ul class="nav__list ">
                            <li class="nav__item " >
                                <a class="nav__link {{ request()->routeIs('index') ? 'active-menu' : '' }}" href="{{ route('index') }}">{{__('nav-home')}}</a>
                            </li>
                            <li class="nav__item ">
                                <a class="nav__link {{ request()->routeIs('product') ? 'active-menu' : '' }}" href="{{ route('product') }}">{{__('nav-product')}}</a>
                            </li>
                            <li class="nav__item ">
                                <a class="nav__link {{ request()->routeIs('about') ? 'active-menu' : '' }}" href="{{ route('about') }}">{{__('nav-about')}}</a>
                            </li>
                            <li class="nav__item ">
                                <a class="nav__link {{ request()->routeIs('contact') ? 'active-menu' : '' }}" href="{{ route('contact') }}">{{__('nav-contact')}}</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="responsive-lang">
                    <div class="hamburger">
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                    </div>
                    <div class="language-dropdown">
                        <input type="checkbox" id="toggle">
                        <label for="toggle" class="dropbtn">
                        <span id="selected-language" class="language-label">
            <img src="{{ asset('frontend/images/lang/' . app()->getLocale() . '.png') }}" alt="">
            {{ __('language') }}
        </span>
                        </label>
                        <div id="languageDropdown" class="dropdown-content">
                        @if(app()->getLocale() == 'id')
                        <a href="{{ url('locale/en') }}">
                            <img src="{{ asset('frontend/images/lang/en.png') }}"  alt="">{{__('nav-en')}}</a>

                        @endif
                        @if(app()->getLocale() == 'en')
                        <a href="{{ url('locale/id') }}" ><img src="{{ asset('frontend/images/lang/id.png') }}"  alt="">{{__('nav-id')}}</a>
                        @endif
                            
                        </div>
                    </div>
                    </div>
                   
                </div>
            </div>
        </header>
        <section class="content">
        @yield('content')
        </section>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col" id="company">
                        <img src="{{ asset('frontend/images/icon/whitelogo.svg') }}" alt="logo" class="logo">
                        <p>
                        {{ __('fot-tagline') }}
                        </p>
                        <div class="social">
                            <a href="#">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-linkedin"></i>
                            </a>

                        </div>
                    </div>

                    <div class="col" id="products">
                        <h3>{{ __('products') }}</h3>
                        <div class="links">
                            <a href="{{ route('product') }}">TococoChips</a>
                            <a href="{{ route('product') }}">Nutmeg</a>
                            <a href="{{ route('product') }}">Pepper</a>
                            <a href="{{ route('product') }}">Alcoco</a>
                        </div>
                    </div>

                    <div class="col" id="useful-links">
                        <h3>{{ __('links') }}</h3>
                        <div class="links">
                            <a href="{{ route('product') }}">{{ __('fot-product') }}</a>
                            <a href="{{ route('about') }}">{{ __('fot-about') }}</a>
                            <a href="{{ route('about') }}">{{ __('fot-about') }}</a>
                            <a href="{{ route('contact') }}">{{ __('fot-contact') }}</a>
                        </div>
                    </div>

                    <div class="col" id="contact">
                        <h3>{{ __('fot-contact') }}</h3>
                        <div class="contact-details">
                            <i class="fa fa-location"></i>
                            <p>Klapagading Rt 004/009, Wangon, Banyumas, Jawa Tengah</p>
                        </div>
                        <div class="contact-details">
                            <i class="fa fa-phone"></i>
                            <p>+62 895333230545</p>
                        </div>
                    </div>
                </div>
                <div class="copy">
                    <p class="copyright text-secondary text-center">
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        All rights reserved | Develop with ❤️
                        <a class="text-primary" href="https://septiandwica.site">Septiandwica</a>
                    </p>
                </div>
            </div>

        </footer>
        <button id="scrollToTopBtn"><i class="fa fa-angle-up"></i></button>
<!-- Di dalam file Blade Laravel Anda, sebelum </body> tag -->
<script>

    let isLoading = false;

    function showLoader() {
        const loaderContainer = document.getElementById('loaderContainer');
        loaderContainer.style.opacity = '1';
        loaderContainer.style.visibility = 'visible';
    }

    function hideLoader() {
        const loaderContainer = document.getElementById('loaderContainer');
        loaderContainer.style.opacity = '0';

        return new Promise(resolve => {
            setTimeout(() => {
                loaderContainer.style.visibility = 'hidden';
                resolve();
            }, 300);
        });
    }

    window.addEventListener('beforeunload', function () {
        isLoading = true;
        showLoader();
    });

    window.addEventListener('load', function () {
        if (isLoading) {
            hideLoader();
        }
    });

    window.addEventListener('popstate', function () {
        isLoading = true;
        showLoader();
    });
    document.addEventListener('DOMContentLoaded', function () {
        var logoImg = document.getElementById('logoImg');
        var bottomBar = document.querySelector('.bottom-bar');

        function updateLogoSource() {
            // Check if the bottom-bar has the class 'scroll' or if screen width is less than 650px
            if (bottomBar.classList.contains('scrolled') || window.innerWidth < 650) {
                // Change the source of the img element to a dynamically generated URL for scrolling or small screens
                logoImg.src = '{{ asset("frontend/images/icon/greenlogo.svg") }}';
            } else {
                // Reset the source to the original when the class is not present and screen width is greater than or equal to 650px
                logoImg.src = '{{ asset("frontend/images/icon/whitelogo.svg") }}';
            }
        }

        // Initial call to set the logo source based on the initial conditions
        updateLogoSource();

        // Listen for changes in scroll and window resize events
        window.addEventListener('scroll', updateLogoSource);
        window.addEventListener('resize', updateLogoSource);
    });
    
</script>

        <script src="{{ asset('frontend/vendor/swiper/js/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('frontend/vendor/vanila-tilt/vanilla-tilt.min.js') }}"></script>
        <script src="{{ asset('frontend/vendor/aos/aos.js') }}"></script>
        <script src="{{ asset('frontend/src/js/script.js') }}"></script>
    </body>
</html>