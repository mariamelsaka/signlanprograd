@extends('layouts.footer')

@extends('layouts.nav')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }} "dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    @include('cdn')

    <link href="{{ url('/css/home.css') }}" rel="stylesheet">
</head>

@section('content')

    <body>
        <section>
            <div class="backgroundHome">
                <div class="container">
                    <div class="sectionOne">
                        <div class="paragrapgh col-md-5 col-sm-12 mb-5">
                            <h2>تعليم لغة الإشارة العربية </h2>
                            <h5>
                                رؤيتنا من هذا الموقع هي زيادة المعرفة بلغة الإشارة
                                <br>العربية وكذلك لغة الجسد بين جميع الناس في<br> جميع أنحاء العالم.
                            </h5>
                            <div class="bottons">
                                <div class="btn btn-primary px-4">لغة الإشارة</div>
                                <div class="btn btn-primary px-4">لغة الجسد</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sectionTwo">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="paragraph">
                            <div class="img"></div>
                            <h3>من نحن ؟</h3>
                            <p>تعليم لغة الاشارة العربيه هو موقع لتعلم لغة الإشارة لجميع أفراد المجتمع.
                                يتكون الموقع من 3 اجزاء الجزء الاول لتعليم لغة الاشارة من خلال عرض فيديوهات تعليمية. الجزء
                                الثاني هو مقالات لتعليم لغة الجسد ، وهي جزء من لغة الإشارة. الجزء
                                الثالث اختبار لقياس فهم المستخدم للفيديوهات من خلال تشغيل الكاميرا.</p>
                        </div>
                        <div class="gif">
                            <div src=""></div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="sectionThree">
                <div class="row">
                    <div class="image">
                        <div class="container">
                            <h3>لغة الجسد</h3>
                            <p class="col-lg-6 col-md-7 col-sm-12">يجب أن تعرف وتقرأ المزيد عن لغة الجسد وعلم النفس ، لغة
                                الجسد هي الأكثر
                                الشيء المهم الذي يمكنك من خلال فهمه هو التواصل بشكل أكبر مع الصم
                                الناس ، تؤثر لغة الجسد بشكل كبير على عواطف الناس ، لذا هنا في هذا المقال ، نحن
                                سوف يشرح بعض النصائح التي ستساعدك على كيفية فهم الصم من خلال قراءة المزيد
                                عن لغة الجسد.</p>
                            <div class="btn btn-dark mb-5">مقالات لغة الجسد</div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- only bootstrap -->
            <section class="sectionFour mt-5">
                <div id="carouselMultiItemExample" class="carousel slide carousel-dark mb-5 pt-5 container"
                    data-mdb-ride="carousel">
                    <h3>تعلم سريعا</h3>
                    <p>تختلف لغة الإشارة من بلد إلى آخر وفقًا لثقافة
                        البلد ، هناك بعض العلامات التي لا يمكن استخدامها في بعض البلدان ويمكن استخدام نفس العلامات في بلدان
                        أخرى
                        ، لذلك سنشرح الفرق بين لغات الإشارة
                        بين الدول من خلال شرح بعض العلامات لكل دولة.</p>
                    <!-- Inner -->
                    <div class="carousel-inner py-4">
                        <!-- Single item -->
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card">
                                            <img src="https://images.pexels.com/photos/4629633/pexels-photo-4629633.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                                class="card-img-top card-img-top1" alt="Waterfall" />
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">
                                                    Some quick example text to build on the card title and make up the bulk
                                                    of the card's content.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 d-none d-lg-block">
                                        <div class="card">
                                            <img src="https://images.pexels.com/photos/4629624/pexels-photo-4629624.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                                class="card-img-top card-img-top2" alt="Sunset Over the Sea" />
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">
                                                    Some quick example text to build on the card title and make up the bulk
                                                    of the card's content.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 d-none d-lg-block">
                                        <div class="card">
                                            <img src="https://images.pexels.com/photos/4629622/pexels-photo-4629622.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                                class="card-img-top card-img-top3" alt="Sunset over the Sea" />
                                            <div class="card-body ">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">
                                                    Some quick example text to build on the card title and make up the bulk
                                                    of the card's content.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div>
                <div class="sectionFive">
                    <div class="image">
                        <div class="container paragraph ">
                            <div class="row">

                                <h3> تواصل معنا</h3>

                                <form>
                                    <div class="mb-3 col-lg-6 col-md-8 col-sm-12">
                                        <label for="exampleInputEmail1" class="form-label ">الاسم كامل </label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3 col-lg-6 col-md-8 col-sm-12">
                                        <label for="exampleInputEmail1" 
                                        class="form-label">البريد الالكتروني </label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3 col-lg-6 col-md-8 col-sm-12">
                                        <label for="exampleInputEmail1" class="form-label"> الرسالة </label>
                                        <textarea type="password" class="form-control" id="exampleInputPassword1"></textarea>
                                    </div>
                                    <p>تواصلك معنا يجعلنا سعدا كثير ويساعدنا علي التطور والتميز</p>
                                    <button type="submit" class="btn btn-primary mb-5">إرسال الرسالة </button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel wrapper -->
    </body>


    </html>
@endsection
