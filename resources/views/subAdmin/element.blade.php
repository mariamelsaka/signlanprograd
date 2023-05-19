@extends('layouts.footer')

@extends('layouts.nav')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }} "dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> مقال </title>
    @include('cdn')
    <link href="{{ url('/css/elementSubAdmin.css') }}" rel="stylesheet">

</head>

@section('content')

    <body>
        @if (auth()->user()->role == 1)
            <div class="container ">

                <div class=" shadow-lg rounded subAdmin mt-5 bg-dark">
                    <span>
                        <img src="{{ asset('images/imageSubAdmin/' . $subAdmin->image) }}" alt="person" 
                            class="rounded">
                    </span>

                    <div class="info  text-light" style="width: 50% ">
                        <br>
                        <h5>اسم المدير: {{ $subAdmin->user_name }} </h5>
                        <h5> البريد الالكتروني :{{ $subAdmin->email }} </h5>
                        <h5> الرقم الخاص :{{ $subAdmin->phone }} </h5>
                        <h5> سنة الميلاد:{{ $subAdmin->year_of_birth }} </h5>
                        <h5> العنوان :{{ $subAdmin->address }} </h5>
                        <h5> سنة الميلاد:{{ $subAdmin->year_of_birth }} </h5>
                        <h5> النوع:{{ $subAdmin->gender }} </h5>
                    </div>

                </div>
                <a href="{{ url('dashborad') }}" class="col-lg-5 col-md-11 col-sm-11 col-11 p-3 btn btn-dark m-3 mb-2"
                style="background-color: #30134f;color:aliceblue;border:none" type="submit">لوحة التحكم
                
                 <i class="fa fa-video"></i></a>
            </a>
                <a href="{{ url('subAdmin/list') }}"
                            class="col-lg-5 col-md-11 col-sm-11 col-11 p-3 btn btn-dark m-3 mb-2"type="submit">الذهاب
                            الي قائمة المديرين  <i class="fa fa-copy"></i></a>
                        </a>

                @if (auth()->user()->role == 1 || auth()->user()->role == 2)
                <a href='{{ url("subAdmin/edit/$subAdmin->id") }}'
                  class="col-lg-5 col-md-11 col-sm-11 col-11 btn btn-warning p-3 m-3 mb-2"
                  type="submit">تعديل بيانات المدير <i
                      class="fa fa-edit"></i></a>
              </a>
              <a href='{{ url("subAdmin/delete/$subAdmin->id") }}'
                class="col-lg-5 col-md-11 col-sm-11 col-11 p-3 btn btn-danger m-3 mb-2"type="submit">حذف المدير <i
                    class="fa fa-trash"></i></a>
            </a>
                @endif
            </div>


            </div></a>
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
