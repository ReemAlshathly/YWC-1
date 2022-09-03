<!DOCTYPE html>
@if (App::getLocale() == 'ar')
    <html lang="ar" dir="rtl">
@else
    <html lang="en" dir="ltr">
@endif

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @if (App::getLocale() == 'ar')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css"
            integrity="sha384-+4j30LffJ4tgIMrq9CwHvn0NjEvmuDCOfk6Rpg2xg7zgOxWWtLtozDEEVvBPgHqE" crossorigin="anonymous">
        <link rel="stylesheet" href="/front/css/bootstrap.rtl.css">
    @else
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="/front/css/bootstrap.css">
    @endif
    <script src="https://kit.fontawesome.com/f9231e39bb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/front/css/style.css">
    <link rel="stylesheet" type="text/css" href="/front/css/slick.css">
    <link rel="stylesheet" type="text/css" href="/front/css/slick-theme.css">
    <base href="/front/">
</head>

<body>
    <section class="intro-section overflow-hidden" id="intro-section">
        <div class="position-relative" style="min-height: 80vh;">
            @include('Front.partials.topbar')
            @include('Front.partials.header')
            <div class="section-divider">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                    preserveAspectRatio="none">
                    <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
                </svg>
            </div>
            <div class="container hero">
                <div class="row justify-content-between align-items-center">
                    <div id="intro-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item d-md-flex justify-content-between active">
                                <div class="col-sm-6 text-center text-md-start m-auto">
                                    <h1>هذا النص هو مثال 1.</h1>
                                    <p class="mb-5">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد
                                        هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص
                                        الأخرى.</p>
                                    <a href="#"
                                        class="btn btn-outline-light py-2 px-4 rounded-0 text-white">التفاصيل</a>
                                </div>
                                <div class="col-sm-5 d-none d-sm-block m-auto mt-5">
                                    <img src="imgs/project_1.jpg" alt="Image" class="img-fluid">
                                </div>
                            </div>
                            <div class="carousel-item d-md-flex justify-content-between">
                                <div class="col-sm-6 text-center text-md-start m-auto">
                                    <h1>هذا النص هو مثال 2.</h1>
                                    <p class="mb-5">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد
                                        هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص
                                        الأخرى.</p>
                                    <a href="#"
                                        class="btn btn-outline-light py-2 px-4 rounded-0 text-white">التفاصيل</a>
                                </div>
                                <div class="col-sm-5 d-none d-sm-block m-auto  mt-5">
                                    <img src="imgs/project_1.jpg" alt="Image" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-nav">
                <button class="d-flex justify-content-center align-items-center owl-prev" type="button"
                    data-bs-target="#intro-carousel" data-bs-slide="prev">
                    <span class="fa-solid fa-arrow-right" aria-hidden="true"></span>
                    <span class="visually-hidden">السابق</span>
                </button>
                <button class="d-flex justify-content-center align-items-center owl-next" type="button"
                    data-bs-target="#intro-carousel" data-bs-slide="next">
                    <span class="fa-solid fa-arrow-left" aria-hidden="true"></span>
                    <span class="visually-hidden">التالي</span>
                </button>
            </div>
        </div>
    </section>
    <section id="about-section" class="section-pt section-pb" style="background-color: #f3f3f3;">
        <div class="section-title py-2 mb-3 text-center position-relative py-4">
            <span class="text-wrap">{{ __('front_static.about') }}</span>
            <h2 class="text-wrap">{{ __('front_static.about') }}</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <ul class="nav nav-tabs flex-column border-0" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1" aria-selected="false"
                                role="tab">{{ __('front_static.who_we_are') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-2" aria-selected="false"
                                role="tab">{{ __('front_static.mission') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-3" aria-selected="false"
                                role="tab">{{ __('front_static.vission') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-4" aria-selected="false"
                                role="tab">{{ __('front_static.goals') }}</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-9">
                    <div class="tab-info">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1" role="tabpanel">
                                <div class="row">
                                    <div class="card flex-md-row align-items-center border-0 py-3 px-5">
                                        <div class="card-image tab-info__img d-none d-md-block order-2 order-lg-1">
                                            <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1535759872/kuldar-kalvik-799168-unsplash.webp"
                                                class="img-fluid" alt="">
                                        </div>
                                        <p class="mb-0">
                                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا
                                            النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد
                                            من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                                            إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة
                                            عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد
                                            النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى
                                            كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-2" role="tabpanel">
                                <div class="row">
                                    <div class="card flex-md-row align-items-center border-0 py-3 px-5">
                                        <div class="card-image tab-info__img d-none d-md-block order-2 order-lg-1">
                                            <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1535759872/kuldar-kalvik-799168-unsplash.webp"
                                                alt="">
                                        </div>
                                        <p class="mb-0">
                                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا
                                            النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد
                                            من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                                            إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة
                                            عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد
                                            النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى
                                            كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-3" role="tabpanel">
                                <div class="row">
                                    <div class="card flex-md-row align-items-center border-0 py-3 px-5">
                                        <div class="card-image tab-info__img d-none d-md-block order-2 order-lg-1">
                                            <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1535759872/kuldar-kalvik-799168-unsplash.webp"
                                                alt="">
                                        </div>
                                        <p class="mb-0">
                                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا
                                            النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد
                                            من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                                            إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة
                                            عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد
                                            النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى
                                            كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-4" role="tabpanel">
                                <div class="row">
                                    <div class="card flex-md-row align-items-center border-0 py-3 px-5">
                                        <div class="card-image tab-info__img d-none d-md-block order-2 order-lg-1">
                                            <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1535759872/kuldar-kalvik-799168-unsplash.webp"
                                                alt="">
                                        </div>
                                        <p class="mb-0">
                                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا
                                            النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد
                                            من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                                            إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة
                                            عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد
                                            النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى
                                            كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
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
    <section id="categories-section" class="section-pt section-pb categories-section"
        style="background-color: #ffffff;">
        <div class="section-title py-2 mb-3 text-center position-relative py-4">
            <span>{{ __('front_static.our_categories') }}</span>
            <h2>{{ __('front_static.our_categories') }}</h2>
        </div>
        <div class="container">
            <div class="row justify-content-center category-list">
                <div class="slide mb-5">
                    <div class="single-category text-center">
                        <h3 class="counter">
                            <svg class="shape" width="48" height="48" viewBox="0 0 48 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M47.1868 15.7745C42.7476 11.5909 36.9073 9.25816 30.9507 9.28958C24.9941 9.32099 19.4092 11.714 15.4245 15.942C11.4399 20.1701 9.38191 25.887 9.70335 31.835C10.0248 37.783 12.6993 43.4748 17.1386 47.6585L32.1627 31.7165L47.1868 15.7745Z"
                                    fill="#FF4E79"></path>
                            </svg>
                            <span>100</span>
                        </h3>
                        <p class="text-capitalize"><a href="#" title="التعليم">التعليم</a></p>
                    </div>
                </div>
                <div class="slide mb-5">
                    <div class="single-category text-center">
                        <h3 class="counter">
                            <svg class="shape" width="48" height="48" viewBox="0 0 48 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M47.1868 15.7745C42.7476 11.5909 36.9073 9.25816 30.9507 9.28958C24.9941 9.32099 19.4092 11.714 15.4245 15.942C11.4399 20.1701 9.38191 25.887 9.70335 31.835C10.0248 37.783 12.6993 43.4748 17.1386 47.6585L32.1627 31.7165L47.1868 15.7745Z"
                                    fill="#9A1E79"></path>
                            </svg>
                            <span>29</span>
                        </h3>
                        <p class="text-capitalize"><a href="#" title="حقوق الانسان">حقوق الانسان</a>
                        </p>
                    </div>
                </div>
                <div class="slide mb-5">
                    <div class="single-category text-center">
                        <h3 class="counter">
                            <svg class="shape" width="48" height="48" viewBox="0 0 48 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M47.1868 15.7745C42.7476 11.5909 36.9073 9.25816 30.9507 9.28958C24.9941 9.32099 19.4092 11.714 15.4245 15.942C11.4399 20.1701 9.38191 25.887 9.70335 31.835C10.0248 37.783 12.6993 43.4748 17.1386 47.6585L32.1627 31.7165L47.1868 15.7745Z"
                                    fill="#FE8432"></path>
                            </svg>
                            <span>30</span>
                        </h3>
                        <p class="text-capitalize"><a href="#" title="دراسة أحوال طبيعة البش">دراسة
                                أحوال طبيعة البشر</a>
                        </p>
                    </div>
                </div>
                <div class="slide mb-5">
                    <div class="single-category text-center">
                        <h3 class="counter">
                            <svg class="shape" width="48" height="48" viewBox="0 0 48 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M47.1868 15.7745C42.7476 11.5909 36.9073 9.25816 30.9507 9.28958C24.9941 9.32099 19.4092 11.714 15.4245 15.942C11.4399 20.1701 9.38191 25.887 9.70335 31.835C10.0248 37.783 12.6993 43.4748 17.1386 47.6585L32.1627 31.7165L47.1868 15.7745Z"
                                    fill="#B998FF"></path>
                            </svg>
                            <span>7</span>
                        </h3>
                        <p class="text-capitalize"><a href="#" title="تعليم الانسان وتشغيله مقابل العمل">تعليم
                                الانسان وتشغيله مقابل العمل</a>
                        </p>
                    </div>
                </div>
                <div class="slide mb-5">
                    <div class="single-category text-center">
                        <h3 class="counter">
                            <svg class="shape" width="48" height="48" viewBox="0 0 48 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M47.1868 15.7745C42.7476 11.5909 36.9073 9.25816 30.9507 9.28958C24.9941 9.32099 19.4092 11.714 15.4245 15.942C11.4399 20.1701 9.38191 25.887 9.70335 31.835C10.0248 37.783 12.6993 43.4748 17.1386 47.6585L32.1627 31.7165L47.1868 15.7745Z"
                                    fill="#B998FF"></path>
                            </svg>
                            <span>7</span>
                        </h3>
                        <p class="text-capitalize"><a href="#" title="تعليم الانسان وتشغيله مقابل العمل">تعليم
                                الانسان وتشغيله مقابل العمل</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="achievements-section" class="section-pt section-pb categories-section"
        style="background-color: #f3f3f3;">
        <div class="section-title py-2 mb-3 text-center position-relative py-4">
            <span>{{ __('front_static.our_achievements') }}</span>
            <h2>{{ __('front_static.our_achievements') }}</h2>
        </div>
        <div class="container">
            <div class="row mt-4">
                <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
                    <div class="single-achievement w-100 text-center"><i class="fa-solid fa-briefcase"></i><span
                            data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="0"
                            class="purecounter d-block mt-2">200</span>
                        <p class="text-capitalize">{{ __('front_static.project_stat') }}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
                    <div class="single-achievement w-100 text-center"><i class="fa-solid fa-certificate"></i><span
                            data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="0"
                            class="purecounter d-block mt-2">201</span>
                        <p class="text-capitalize">{{ __('front_static.program_stat') }}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
                    <div class="single-achievement w-100 text-center"><i class="fa-solid fa-handshake-angle"></i><span
                            data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="0"
                            class="purecounter d-block mt-2">202</span>
                        <p class="text-capitalize">{{ __('front_static.volunteer_stat') }}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
                    <div class="single-achievement w-100 text-center"><i
                            class="fa-sharp fa-solid fa-people-group"></i><span data-purecounter-start="0"
                            data-purecounter-end="15" data-purecounter-duration="0"
                            class="purecounter d-block mt-2">203</span>
                        <p class="text-capitalize">{{ __('front_static.beneficiary_stat') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="projects-section" class="section-pt section-pb" style="background-color: #ffffff;">
        <div class="section-title py-2 mb-3 text-center position-relative py-4">
            <span>{{ __('front_static.our_projects') }}</span>
            <h2>{{ __('front_static.our_projects') }}</h2>
        </div>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 col-lg-4 mt-5">
                    <div class="card p-2">
                        <div class="project-image">
                            <a href="#">
                                <img class="img-raised h-100 w-100"
                                    src="https://placehold.jp/3d4070/ffffff/1000x200.png">
                            </a>
                        </div>
                        <div class="card-body p-4">
                            <h6 class="category mb-3 text-secondary">مجال المشروع</h6>
                            <h4 class="project-title fw-bold">
                                <a href="#">هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة</a>
                            </h4>
                            <p class="project-description mb-4">
                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من
                                مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى
                                إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                                إذا كنت تحتاج إلى عدد أكبر من الفقرات

                            </p>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <i class="fa-solid fa-people-group text-primary"></i>
                                    <span class="fw-bold text-muted">50</span>
                                </div>
                                <div>
                                    <i class="fa-solid fa-calendar-days text-primary"></i>
                                    <time datetime="2022-08-17 09:54:52" class="text-muted">2022-08-17</time>
                                </div>
                                <div>
                                    <a href="#" class="fw-bold text-primary"
                                        title="__">{{ __('front_static.read_more') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-5">
                    <div class="card p-2">
                        <div class="project-image">
                            <a href="#">
                                <img class="img-raised h-100 w-100"
                                    src="https://placehold.jp/3d4070/ffffff/1000x200.png">
                            </a>
                        </div>
                        <div class="card-body p-4">
                            <h6 class="category mb-3 text-secondary">مجال المشروع</h6>
                            <h4 class="project-title fw-bold">
                                <a href="#">هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة</a>
                            </h4>
                            <p class="project-description mb-4">
                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من
                                مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى
                                إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                                إذا كنت تحتاج إلى عدد أكبر من الفقرات
                            </p>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <i class="fa-solid fa-people-group text-primary"></i>
                                    <span class="fw-bold text-muted">50</span>
                                </div>
                                <div>
                                    <i class="fa-solid fa-calendar-days text-primary"></i>
                                    <time datetime="2022-08-17 09:54:52" class="text-muted">2022-08-17</time>
                                </div>
                                <div>
                                    <a href="#" class="fw-bold text-primary"
                                        title="__">{{ __('front_static.read_more') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-5">
                    <div class="card p-2">
                        <div class="project-image">
                            <a href="#">
                                <img class="img-raised h-100 w-100"
                                    src="https://placehold.jp/3d4070/ffffff/1000x200.png">
                            </a>
                        </div>
                        <div class="card-body p-4">
                            <h6 class="category mb-3 text-secondary">مجال المشروع</h6>
                            <h4 class="project-title fw-bold">
                                <a href="#">هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة</a>
                            </h4>
                            <p class="project-description mb-4">
                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من
                                مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى
                                إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                                إذا كنت تحتاج إلى عدد أكبر من الفقرات
                            </p>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <i class="fa-solid fa-people-group text-primary"></i>
                                    <span class="fw-bold text-muted">50</span>
                                </div>
                                <div>
                                    <i class="fa-solid fa-calendar-days text-primary"></i>
                                    <time datetime="2022-08-17 09:54:52" class="text-muted">2022-08-17</time>
                                </div>
                                <div>
                                    <a href="#" class="fw-bold text-primary"
                                        title="__">{{ __('front_static.read_more') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="btn btn-lg">{{ __('front_static.show_more') }}</a>
        </div>
    </section>
    <section id="testimonials-section" class="testimonials-section section-pt section-pb"
        style="background-color: #f3f3f3;">
        <div class="section-title py-2 mb-3 text-center position-relative py-4">
            <span class="text-wrap h1">{{ __('front_static.testimonials') }}</span>
            <h2 class="text-wrap">{{ __('front_static.testimonials') }}</h2>
        </div>
        <div class="container px-md-4 mx-auto">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9 col-xl-8 text-center">
                    <div id="testimonial-list" class="carousel carousel-fade slide" data-bs-ride="carousel">
                        <ol class="carousel-indicators">
                            <li type="button" data-bs-target="#testimonial-list" data-bs-slide-to="0"
                                class="bg-primary"></li>
                            <li type="button" data-bs-target="#testimonial-list" data-bs-slide-to="1"
                                class="bg-primary active">
                            </li>
                            <li type="button" data-bs-target="#testimonial-list" data-bs-slide-to="2"
                                class="bg-primary"></li>
                        </ol>
                        <div class="carousel-inner overflow-visible">
                            <div class="carousel-item active">
                                <blockquote class="blockquote blockquote-custom">
                                    <div class="blockquote-custom-icon shadow-sm">
                                        <i class="fa-sharp fa-solid fa-quote-right text-white"></i>
                                    </div>
                                    <div class="card flex-md-row align-items-center border-0 py-4 px-5">
                                        <div class="card-image d-none d-md-block order-2 order-lg-1">
                                            <img src="imgs/logo.jpeg" alt="character picture or logo"
                                                class="img-fluid p-2">
                                        </div>
                                        <div class="mb-0 font-italic">
                                            1- Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque
                                            exercitationem, consequatur quasi iusto quos nam at sapiente consequuntur
                                            dolore voluptas.
                                            <footer class="blockquote-footer pt-4 mt-4 mb-0 border-top d-block">Someone
                                                famous
                                                in
                                                <cite title="Source Title">Source Title</cite>
                                            </footer>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <div class="carousel-item">
                                <blockquote class="blockquote blockquote-custom">
                                    <div class="blockquote-custom-icon shadow-sm">
                                        <i class="fa-sharp fa-solid fa-quote-right text-white"></i>
                                    </div>
                                    <div class="card flex-md-row align-items-center border-0 py-4 px-5">
                                        <div class="card-image d-none d-md-block order-2 order-lg-1">
                                            <img src="imgs/logo.jpeg" alt="character picture or logo"
                                                class="img-fluid p-2">
                                        </div>
                                        <div class="mb-0 font-italic">
                                            2- Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque
                                            exercitationem, consequatur quasi iusto quos nam at sapiente consequuntur
                                            dolore voluptas.
                                            <footer class="blockquote-footer pt-4 mt-4 mb-0 border-top d-block">Someone
                                                famous
                                                in
                                                <cite title="Source Title">Source Title</cite>
                                            </footer>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <div class="carousel-item">
                                <blockquote class="blockquote blockquote-custom">
                                    <div class="blockquote-custom-icon shadow-sm">
                                        <i class="fa-sharp fa-solid fa-quote-right text-white"></i>
                                    </div>
                                    <div class="card flex-md-row align-items-center border-0 py-4 px-5">
                                        <div class="card-image d-none d-md-block order-2 order-lg-1">
                                            <img src="imgs/logo.jpeg" alt="character picture or logo"
                                                class="img-fluid p-2">
                                        </div>
                                        <div class="mb-0 font-italic">
                                            3- Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque
                                            exercitationem, consequatur quasi iusto quos nam at sapiente consequuntur
                                            dolore voluptas.
                                            <footer class="blockquote-footer pt-4 mt-4 mb-0 border-top d-block">Someone
                                                famous
                                                in
                                                <cite title="Source Title">Source Title</cite>
                                            </footer>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="partners-section" class="section-pt section-pb" style="background-color: #ffffff;">
        <div class="section-title py-2 mb-3 text-center position-relative py-4">
            <span>{{ __('front_static.contributors') }}</span>
            <h2>{{ __('front_static.contributors') }}</h2>
        </div>
        <div class="container">
            <div class="partner">
                <div class="slide">
                    <img src="imgs/client-1.png" class="img-fluid" alt="">
                </div>
                <div class="slide">
                    <img src="imgs/client-2.png" class="img-fluid" alt="">
                </div>
                <div class="slide">
                    <img src="imgs/client-3.png" class="img-fluid" alt="">
                </div>
                <div class="slide">
                    <img src="imgs/client-4.png" class="img-fluid" alt="">
                </div>
                <div class="slide">
                    <img src="imgs/client-5.png" class="img-fluid" alt="">
                </div>
                <div class="slide">
                    <img src="imgs/client-6.png" class="img-fluid" alt="">
                </div>
                <div class="slide">
                    <img src="imgs/client-7.png" class="img-fluid" alt="">
                </div>
                <div class="slide">
                    <img src="imgs/client-8.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    @include('Front.partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="/front/js/main.js"></script>
    <script src="/front/js/jquery-3.6.0.min.js"></script>
    <script src="/front/js/slick.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.partner').slick({
                @if (App::getLocale() == 'ar')
                    rtl: true,
                @endif
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: false,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2,
                        }
                    }
                ]
            });
            $('.category-list').slick({
                @if (App::getLocale() == 'ar')
                    rtl: true,
                @endif
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: false,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2,
                        }
                    }
                ]
            });


        });
    </script>
</body>

</html>
