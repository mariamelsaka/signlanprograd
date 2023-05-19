@extends('layouts.footer')

@extends('layouts.nav')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }} "dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>مقالات لغة الجسد</title>
        @include('cdn')
        <link href="{{ url('/css/listArticle.css') }}" rel="stylesheet">
    </head>

        @section('content')

<body>
    <section class="backgroundListArticle">
    <div class="container">
      <div class="paragraphSetion">
      <h3>لغة الجسد وايماءات الوجه </h3>
<p> لغة الجسد هي الأكثر
        الشيء المهم الذي يمكنك من خلال فهمه هو التواصل بشكل أكبر مع الصم
        الناس ، تؤثر لغة الجسد بشكل كبير على عواطف الناس .</p> 
            </div>
    </div>
    </section>

  <div class="container mt-5 ">
<div class="row">

@foreach ($article as $c)

                  <div class=" mt-5 px-5  articles">
                    <a href='{{ url("article/element/$c->id") }}'>
                      <div class="image">
                      <img src="{{ asset("images/imageArticle/$c->image") }}"
                      alt="" class="shadow-lg">
                      </div>
                      <div class="paragraph shadow-lg">
                        <h5>عنوان المقال: {{ $c->title }} </h5>
                        <p>الكاتب:  {{ $c->author }} </p>
                      </div>
                    </a>
                    </div>
                    @endforeach

                  </div>
                  </div></a>


</body>

@endsection