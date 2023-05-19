@extends('layouts.footer')

@extends('layouts.nav')
<!DOCTYPE php>
<html lang="en"dir="rtl">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>تعديل السؤال</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    @include('cdn')
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

</head>

@section('content')

    <body>
        @if (auth()->user()->role == 1)

        <div class="container mt-5">
            <form action={{ url('question/update') }} method="post" enctype="multipart/form-data">
                @csrf
                <input name="id"value="{{ $question->id }}"hidden>

                <div class="row mb-3 ">
                    <h4 class="mt-5 mb-3">تعديل السؤال</h4>
                    <div class="row mb-3">
                        <label for="title" class="col-md-4 col-lg-3 col-form-label">اسم السؤال</label>
                        <div class=" col-lg-8">
                            <input name="questionName" type="text" value="{{ $question->questionName }}"
                                class="form-control" id="title">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="paragraph" class="col-md-4 col-lg-3 col-form-label"> مستوي السؤال</label>
                        <div class="col-lg-8">
                            <input name="questionLevel" value="{{ $question->questionLevel }}" type="text"
                                class="form-control" id="	paragraph" />
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-lg-3 col-form-label">صورة</label>
                        <div class=" col-lg-8">
                            <input name="avatar" type="file" value="{{ $question->imageBLOB }}" class="form-control"
                                id="password">
                        </div>
                    </div>
                    <div class="text-center mb-4">
                        <button class="btn btn-dark mb-5 p-3"type="submit">تعديل السؤال <i class="fa fa-edit"></i></button>
                        <a class="btn btn-danger mx-5 mb-5 p-3" href="{{ url('question/list') }}">الرجوع لصفحة الاسئلة <i
                                class="fa fa-list"></i></a>
                    </div>
            </form>
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

    </html>
@endsection
