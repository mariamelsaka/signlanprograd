@extends('layouts.footer')

@extends('layouts.nav')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }} "dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>فيديوهات لغة الاشارة</title>
    @include('cdn')
    <link href="{{ url('/css/listVideo.css') }}" rel="stylesheet">
</head>

@section('content')

    <body>


        <div class="container ">

            <div class="row">

                @foreach ($video as $c)
                    <div class="layer"></div>
                    <div class="  backgroundListVideo">
                        <iframe src="https://www.youtube.com/embed/{{ $c->link }}" title="YouTube video player"
                            frameborder="0"preload="auto" disablepictureinpicture allowfullscreen>
                        </iframe>
                        <a href='{{ url("video/element/$c->id") }}'>
                            <div class="paragraph shadow-lg">
                                <h5>عنوان الفيديو: {{ $c->title }} </h5>
                                <p>المستوي: {{ $c->level_num }} </p>
                            </div>
                        </a>

                    </div>
                @endforeach


            </div>
        </div>

        <div class="spaceEnd"></div>


    </body>
@endsection
