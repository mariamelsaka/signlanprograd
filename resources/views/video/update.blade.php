@extends('layouts.footer')

@extends('layouts.nav')
<!DOCTYPE php>
<html lang="en"dir="rtl">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>تعديل الفيديو</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    @include('cdn')
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

</head>
@section('content')

    <body>
        <div class="container mt-5">
            <form action={{ url('video/update') }} method="post" enctype="multipart/form-data">
                @csrf
                <input name="id"value="{{ $video->id }}"hidden>

                <div class="row mb-3 ">
                    <h4 class="mt-4 mb-3">تعديل فيديو</h4>
                    <div class="row mb-3">
                        <label for="title" class="col-md-4 col-lg-3 col-form-label">العنوان</label>
                        <div class=" col-lg-8">
                            <input name="title" type="text" class="form-control" id="title"
                                value="{{ $video->title }}" placeholder="عنوان للفيديو ">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="description" class="col-md-4 col-lg-3 col-form-label"> وصف الفيديو</label>
                        <div class="  col-lg-8">
                            <input name="description" type="text" rows="7"; value="{{ $video->description }}"
                                style="height:30vh" class="form-control" id="description" placeholder="ادخل المقال" />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="link" class="col-md-4 col-lg-3 col-form-label">رابط </label>
                        <div class="col-lg-8">
                            <input name="link" type="text" class="form-control" id="link"
                                value="{{ $video->link }}" placeholder="رابط الفيديو">

                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="level_num" class="col-md-4 col-lg-3 col-form-label">مستوي الفيديو </label>
                        <div class="col-lg-8">
                            <input name="level_num" type="number" value="{{ $video->level_num }}" class="form-control"
                                id="level_num" placeholder="المستوي (رقم)">

                        </div>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-dark mb-5 p-3"type="submit">تعديل الفيديو <i
                                class="fa fa-edit"></i></button>
                        <a class="btn btn-danger mx-5 mb-5 p-3" href="{{ url('video/list') }}">الرجوع لصفحة الفيديوهات <i
                                class="fa fa-list"></i></a>
                    </div>
            </form>
        </div>
    </body>

    </html>
@endsection
