@extends('frontend.layout') @section('content')
<section
    class="erorrs"
    style="
  background: #151b1f3a;
  height: 100vh;
  width: 100vw;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction:column;
">
    <img src="{{ asset('frontend/images/404.svg') }}" alt="" width="450px">

    <form action="{{ route('index') }}">
        <button
            type="submit"
            style="
      border: none;
  padding: 10px;
  text-decoration: none;
  font-size: 16px;
  font-family:'Poppins', sans-serif;
  font-weight: 600;
  background: #559c2b;
  color: white;
  border-radius: 5px;
  cursor: pointer;
  margin-top:20px;
  transition: border-bottom 0.3s ease;">
            {{__('back-btn')}}
        </button>
    </form>

</section>
@endsection