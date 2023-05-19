@extends('layouts.footer')

@extends('layouts.nav')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }} "dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>  قائمة المديرين</title>
    @include('cdn')
    <link href="{{ url('/css/listSubAdmin.css') }}" rel="stylesheet">
</head>

@section('content')

    <body>

        @if (auth()->user()->role == 1)

      <div class="container mt-5 ">
        <div class="row">

            @foreach ($subAdmin as $c)
                <div class=" my-5 px-5 card shadow question">
                    <a href='{{ url("subAdmin/element/$c->id") }}'>
                        <span class="image">
                            <img src="{{ asset("images/imageSubAdmin/$c->image") }}" alt=""
                                class="shadow-lg">
                        </span>
                        <div class="paragraph ">
                            <h5>اسم المدير: {{ $c->user_name }} </h5>
                            <p> البريد الالكتروني : {{ $c->email }} </p>
                            
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
    @endif
    @if (auth()->user()->role == 2)
    <div class="container">
        <div class="message">
            <h3>هذه الصفحه غير متوفره لك </h3>
        </div>
    </div>
@endif
    </body>

@endsection
