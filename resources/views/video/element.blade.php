@extends('layouts.footer')

@extends('layouts.nav')
<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> فيديو </title>
    @include('cdn')
    <link href="{{ url('/css/elementVideo.css') }}" rel="stylesheet">

</head>

@section('content')

    <body>
        <div class=" backgroundElementVideo">
            <iframe src="https://www.youtube.com/embed/{{ $video->link }}" title="YouTube video player"
                frameborder="0"preload="auto" disablepictureinpicture allowfullscreen>
                
            </iframe>
            <div class="layer mt-sm-1 mt-md-1  ">

                <div class="container ">
                    <div class="row pt-5 mb-5 px-5 video">
                        <div class=" shadow-lg displayInfo">

                            <iframe src="https://www.youtube.com/embed/{{ $video->link }}" title="YouTube video player"
                                frameborder="0"preload="auto" disablepictureinpicture allowfullscreen></iframe>
                            <p>{{ $video->description }} </p>
                            
                        </div>
                        <a href="{{ url('') }}" class="col-lg-11 col-md-12 col-sm-12 m-lg-3 mt-md-2 mt-sm-2 mt-2 col-sm-11 btn py-lg-3 py-md-1  btn-dark  mb-1 mb-sm-1"
                            style="background-color: #157a99;color:aliceblue;border:none;"" type="submit">امتحان قياس
                            مستوي <i class="fa fa-file"></i></a>
                        </a>
                        <a href="{{ url('video/list') }}" class="col-lg-5 col-sm-12 m-lg-3 col-md-12 mt-md-2 mt-sm-2 mt-2 col-sm-11 btn py-lg-3 py-md-1 mb-1 mb-sm-1 btn-dark "
                            style="background-color: #30134f;color:aliceblue;border:none" 
                            type="submit">الرجوع
                            لصفحة
                            الفيديوهات <i class="fa fa-video"></i></a>
                        </a>
                        <a href="{{ url('article/list') }}"
                            class="col-lg-5 col-md-12 col-sm-12 btn py-lg-3 py-md-1 m-lg-3 mt-md-2 mt-sm-2 mt-2 btn-dark mb-1 mb-sm-1"type="submit">الذهاب
                        تعليم الجسد <i class="fa fa-copy"></i></a>
                        </a>
                        @if (auth()->user()->role == 1 || auth()->user()->role == 2)
                            <a href='{{ url("video/edit/$video->id") }}'
                                class="col-lg-5 col-md-12 col-sm-12 btn py-lg-3 py-md-1 m-lg-3 mt-md-2 mt-sm-2 mt-2 btn-warning mb-1 mb-sm-1"type="submit">تعديل الفيديو <i
                                    class="fa fa-edit"></i></a>
                            </a>

                            <a href='{{ url("video/delete/$video->id") }}'
                                class="col-lg-5 col-md-12 col-sm-12 btn py-lg-3 py-md-1 m-lg-3 mt-md-2 mt-sm-2 mt-2 btn-danger mb-2"type="submit">حذف الفيديو <i
                                    class="fa fa-trash"></i></a>
                            </a>
                        @endif
                        
                    </div>
                </div>
            </div></a>
        </div>
        </div>
        </div>
    </body>
@endsection
