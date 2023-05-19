@extends('layouts.footer')

@extends('layouts.nav')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }} "dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> مقال </title>
    @include('cdn')
    <link href="{{ url('/css/elementArticle.css') }}" rel="stylesheet">


    @section('content')

    <body>

        <div class=" backgroundElementArticle">
            <img src="{{ asset('images/imageArticle/' . $article->image) }}" alt="person" class="shadow-lg">
            <div class="layer">

                <div class="container ">
                    <div class="row pt-5 mb-5 px-5 article">
                        <div class=" shadow-lg displayInfo">
                            <h4>العنوان: {{ $article->title }} </h4>
                            <p>{{ $article->paragraph }} </p>
                            <p>المؤلف: {{ $article->author }} </p>

                        </div>
                        <a href="{{ url('article/list') }}" class="col-lg-5 col-sm-5 col-md-5 col-5 btn btn-dark m-1 p-lg-3 p-md-1 p-sm-1 m-lg-3 m-md-2 m-sm-2 mb-3"
                            style="background-color: #30134f;color:aliceblue;border:none" type="submit">الرجوع لصفحة
                            المقالات <i class="fa fa-copy"></i>
                        </a>

                        <a href="{{ url('video/list') }}" class="col-lg-5 col-sm-5 col-5 btn btn-dark p-lg-3 p-md-1 m-1 p-sm-1 m-lg-3 m-md-2 m-sm-2 mb-3" type="submit">الذهاب
                            لصفحة تعليم لغة الإشارة <i class="fa fa-video"></i>
                        </a>


                        @if (auth()->user()->role == 1 || auth()->user()->role == 2)
                            <a href='{{ url("article/edit/$article->id") }}' class="col-lg-5 col-sm-5 col-5 p-lg-3 m-1 p-md-1 p-sm-1 btn btn-warning m-lg-3 m-md-2 m-sm-2 mb-3"
                                type="submit">تعديل المقال <i class="fa fa-edit"></i>
                            </a>
                            </a>
                            <a href='{{ url("article/delete/$article->id") }}' class="col-lg-5 col-sm-5 col-5 p-lg-3 m-1 p-md-1 p-sm-1 btn btn-danger m-lg-3 m-md-2 m-sm-2 mb-3"
                                type="submit">حذف المقال <i class="fa fa-trash"></i></a>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </a>
        </div>





    </body>
@endsection
