@extends('layouts.footer')

@extends('layouts.nav')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }} "dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> سؤال </title>
    @include('cdn')
    <link href="{{ url('/css/elementQuestion.css') }}" rel="stylesheet">

</head>

@section('content')

    <body>
        @if (auth()->user()->role == 1)
       
        <div class=" backgroundElementquestion">

            <div class="layer">

                <div class="container ">
                    <div class="row pt-5 mb-5 px-5  question">


                        <div class=" shadow-lg question col-12">
                            <span class="image">
                                <img src="{{ asset('images/imagequestion/' . $question->imageBLOB) }}" alt="person"
                                    class="shadow-lg">
                            </span>
                            <div class="info">
                                <h4>اسم السؤال: {{ $question->questionName }} </h4>
                                <h5>مستوي السؤال :{{ $question->questionLevel }} </ا>
                            </div>
                        </div>
                        <a href="{{ url('question/list') }}" class="col-lg-11 col-11 btn py-3 btn-dark m-3 mb-2"
                            style="background-color: #157a99;color:aliceblue;border:none;"" type="submit">قائمة الاسئلة
                            <i class="fa fa-file"></i></a>
                        </a>
                        <a href="{{ url('video/list') }}" class="col-lg-11 col-11 btn py-3 btn-dark m-3 mb-2"
                            style="background-color: #30134f;color:aliceblue;border:none" type="submit">
                            قائمة
                            الفيديوهات <i class="fa fa-video"></i></a>
                        </a>
                        <a href="{{ url('article/list') }}" class="col-lg-11 col-11 btn py-3 btn-dark m-3 mb-2"type="submit">
                            قائمة المقالات <i class="fa fa-copy"></i></a>
                        </a>

                        @if (auth()->user()->role == 1 || auth()->user()->role == 2)
                            <a href='{{ url("question/edit/$question->id") }}'
                                class="col-lg-11 col-11 btn py-3 btn-warning m-3 mb-2"type="submit">تعديل السؤال <i
                                    class="fa fa-edit"></i></a>
                            </a>

                            <a href='{{ url("question/delete/$question->id") }}'
                                class="col-lg-11 col-11 btn py-3 btn-danger m-3 mb-2"type="submit">حذف السؤال <i
                                    class="fa fa-trash"></i></a>
                            </a>
                        @endif
                    </div>

                </div>
            </div></a>
        </div>



        </div>

        </div>
        </div></a>
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
