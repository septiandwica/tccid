@extends('frontend.layout') 
@section('content')
<section class="jumbotron">
    <div class="wrapper">
        <div class="slide-hero">
            <img
                src="{{ asset('frontend/images/team/banner.heic') }}"
                alt=""
                class="image"/>
            <div class="image-data"> 
                <h2 data-aos="fade-up" >
                    {{__('pg-contact-title')}}
                </h2>
                <div class="nav" data-aos="fade-right" >
                    <a href="{{ route('index') }}" class="button">{{__('fot-home')}}</a>
                    <span>
                        /
                    </span>
                    <a href="{{ route('contact') }}" class="button">{{__('fot-contact')}}</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-default">
    <div class="wrapper">
        <div class="container-contact" data-aos="fade-down" data-aos-duration="700" >
            <div class="content">
                <div class="right-side">
                    <div class="topic-text">{{__('pg-contact-right1')}}</div>
                    <p>{{__('pg-contact-right2')}}
                    </p>
                    <form action="{{ route('send.email')}}" method="POST">
                    @csrf
                    @if (Session::has('error'))
                    <script src="{{ asset('frontend/vendor/sweetalert/sweetalert.all.min.js') }}"></script>
                    <script>
                        Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: '{{ Session::get("error") }}',
                        });
                    </script>
                    @endif

                    @if (Session::has('success'))
                    <script src="{{ asset('frontend/vendor/sweetalert/sweetalert.all.min.js') }}"></script>
                    <script>
                        Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: '{{ Session::get("success") }}',
                        });
                    </script>
                    @endif
                    <div class="input-box">
                            <input
                                class="form-control"
                                name="name"
                                type="text"
                                placeholder="Enter your name"
                                value="{{ old('name')}}">
                            @error('name')
                            <span class="error" style="color: red;  padding:10px 0px 10px 0px;">{{__('message')}}</span>
                            @enderror
                        </div>
                        <div class="input-box">
                            <input
                                class="form-control"
                                name="email"
                                type="email"
                                placeholder="Enter your email"
                                value="{{ old('email')}}">
                            @error('email')
                            <span class="error" style="color: red;  padding:10px 0px 10px 0px; ">{{__('message')}}</span>@enderror

                        </div>
                        <div class="input-box">
                            <input
                                class="form-control"
                                name="subject"
                                type="text"
                                placeholder="Enter the subject"
                                value="{{ old('subject')}}">
                            @error('subject')
                            <span class="error" style="color: red;  padding:10px 0px 10px 0px; ">{{__('message')}}</span>@enderror

                        </div>
                        <div class="input-box message-box">
                            <textarea
                                class="form-control"
                                name="message"
                                id="message-box"
                                cols="30"
                                rows="10"
                                value="{{ old('message')}}"></textarea>
                            @error('message')
                            <span class="error" style="color: red;  padding:10px 0px 10px 0px;">{{__('message')}}</span>@enderror

                        </div>
                        <button>Send</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="contact-content">
            <div class="contact-box">
                <div class="address details contact-card"data-aos="fade-up" data-aos-duration="500" >
                    <i class="fas fa-location"></i>
                    <div class="topic">{{__('pg-contact-left1')}}</div>
                    <div class="text-one">Klapagading, Wangon, Banyumas</div>
                    <div class="text-two">Jawa Tengah, ID</div>
                </div>
                <div class="phone details  contact-card" data-aos="fade-down" data-aos-duration="700"  >
                    <i class="fas fa-phone-alt"></i>
                    <div class="topic">{{__('pg-contact-left2')}}</div>
                    <div class="text-one">+62 8953 3323 0545</div>
                </div>
                <div class="email details  contact-card" data-aos="fade-up" data-aos-duration="900" >
                    <i class="fas fa-envelope"></i>
                    <div class="topic">{{__('pg-contact-left3')}}</div>
                    <div class="text-one">pttococoindonesiaberkah@gmail.com</div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection