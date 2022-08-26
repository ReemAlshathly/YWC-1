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
    @else
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
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
            <div id="topbar" class="d-flex justify-content-between align-items-center fixed-top">
                <div class="container d-flex justify-content-between">
                    <div class="d-flex align-items-center contact-info">
                        <i class="fa-solid fa-envelope"></i>
                        <a href="mailto:contact@example.com">contact@example.com</a>
                        <i class="fa-solid fa-mobile-screen"></i>
                        +1 5589 55488 55
                    </div>
                    <div class="d-none d-lg-flex align-items-center social-links">
                        <a href="#" class="twitter">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a href="#" class="facebook">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <a href="#" class="linkedin">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>
            <header id="header" class="fixed-top shadow">
                <div class="container">
                    <nav id="navbar" class="navbar navbar-expand-lg">
                        <a class="navbar-brand logo me-5 h1" href="index.html">
                            <img src="imgs/logo.jpeg" width="50" alt="logo">
                        </a>
                        <div class="dropdown order-lg-1">
                            <a class="dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                اللغات
                            </a>
                            <ul class="dropdown-menu">
                                @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <li>
                                        <a rel="alternate" hreflang="{{ $localeCode }}"
                                            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                            class="dropdown-item">
                                            {{ $properties['native'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto">
                                <li>
                                    <a class="nav-link active" href="#hero">{{ __('front_static.home') }}</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="#about">{{ __('front_static.about') }}</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="#services">{{ __('front_static.projects') }}</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="#services">{{ __('front_static.reports') }}</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="#services">{{ __('front_static.events') }}</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="#contact">{{ __('front_static.contactus') }}</a>
                                </li>
                            </ul>
                            <a href="#donor" class="donor-btn me-3">
                                تطوع
                            </a>
                        </div>
                    </nav>
                </div>
            </header>
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
    <section id="about-section" class="section-pt" style="background-color: #f3f3f3;">
        <div class="position-relative" style="min-height: 80vh;">
            <div class="section-divider">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                    preserveAspectRatio="none">
                    <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
                </svg>
            </div>
            <div class="section-title py-2 mb-4 text-center position-relative py-4">
                <span>من نحن</span>
                <h2>من نحن</h2>
            </div>
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column border-0" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1"
                                    aria-selected="false" role="tab">من نحن</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-2" aria-selected="false"
                                    role="tab">رسالتنا</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-3" aria-selected="false"
                                    role="tab">رؤيتنا</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-4" aria-selected="false"
                                    role="tab">أهدافنا</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9">
                        <div class="tab-info">
                            <div class="tab-content">
                                <div class="tab-pane active show" id="tab-1" role="tabpanel">
                                    <div class="row gy-4">
                                        <div class="card flex-md-row border-0">
                                            <div class="tab-info__img d-none d-md-block order-2 order-lg-1">
                                                <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1535759872/kuldar-kalvik-799168-unsplash.webp"
                                                    alt="">
                                            </div>
                                            <div class="card-body">
                                                <!-- <h3 class="card-title fw-bold mb-4">Lorem Ipsum Dolor</h3> -->
                                                <div class="card-text">
                                                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا
                                                    النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد
                                                    من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                                                    إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة
                                                    عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد
                                                    النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى
                                                    كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-2" role="tabpanel">
                                    <div class="row gy-4">
                                        <div class="card flex-md-row border-0">
                                            <div class="tab-info__img d-none d-md-block order-2 order-lg-1">
                                                <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1535759872/kuldar-kalvik-799168-unsplash.webp"
                                                    alt="">
                                            </div>
                                            <div class="card-body">
                                                <!-- <h3 class="card-title fw-bold mb-4">Lorem Ipsum Dolor</h3> -->
                                                <div class="card-text">
                                                    ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل
                                                    الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن
                                                    نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا
                                                    يليق.
                                                    هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص
                                                    منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً
                                                    ومؤقتاً.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-3" role="tabpanel">
                                    <div class="row gy-4">
                                        <div class="tab-info__item">
                                            <div class="tab-info__img order-2 order-lg-1">
                                                <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1535759872/kuldar-kalvik-799168-unsplash.webp"
                                                    alt="">
                                            </div>
                                            <div class="tab-info__content">
                                                <!-- <div class="tab-info__title">Lorem Ipsum Dolor</div> -->
                                                <div class="tab-info__text">Lorem ipsum dolor sit amet consectetur,
                                                    adipisicing elit. Recusandae voluptate repellendus magni illo ea
                                                    animi?</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-4" role="tabpanel">
                                    <div class="row gy-4">
                                        <div class="card flex-md-row border-0">
                                            <div class="tab-info__img d-none d-md-block order-2 order-lg-1">
                                                <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1535759872/kuldar-kalvik-799168-unsplash.webp"
                                                    alt="">
                                            </div>
                                            <div class="card-body">
                                                <!-- <h3 class="card-title fw-bold mb-4">Lorem Ipsum Dolor</h3> -->
                                                <div class="card-text">
                                                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا
                                                    النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد
                                                    من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                                                    إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة
                                                    عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد
                                                    النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى
                                                    كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="projects-section" class="section-pt section-pb" style="background-color: #ffffff;">
        <div class="position-relative" style="min-height: 80vh;">
            <div class="section-divider">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                    preserveAspectRatio="none">
                    <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
                </svg>
            </div>
            <div class="section-title py-2 mb-2 text-center position-relative py-4">
                <span>مشاريعنا</span>
                <h2>مشاريعنا</h2>
            </div>
            <div class="cards-2 section-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 mt-5">
                            <div class="card p-2">
                                <div class="card-image">
                                    <a href="#">
                                        <img class="img-raised h-100 w-100"
                                            src="https://placehold.jp/3d4070/ffffff/1000x200.png">
                                    </a>
                                </div>
                                <div class="p-4">
                                    <h6 class="category">مجال المشروع</h6>
                                    <h4 class="card-caption fw-bold">
                                        <a href="#">هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة</a>
                                    </h4>
                                    <p class="card-description">
                                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من
                                        مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى
                                        إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                                        إذا كنت تحتاج إلى عدد أكبر من الفقرات
                                    </p>
                                    <div class="">
                                        <div class="d-flex justify-content-between border-3 p-2">
                                            <div class="d-flex flex-column align-items-center">
                                                <span class="font-weight-bold percentage text-danger">50%</span>
                                                <span>Services</span>
                                            </div>
                                            <div class="d-flex flex-column align-items-center">
                                                <span class="font-weight-bold percentage text-success">1800+</span>
                                                <span>Stores</span>
                                            </div>
                                            <div class="d-flex flex-column align-items-center">
                                                <span class="font-weight-bold percentage text-">200+</span>
                                                <span>Cities</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-5">
                            <div class="card p-2">
                                <div class="card-image">
                                    <a href="#">
                                        <img class="img-raised h-100 w-100"
                                            src="https://placehold.jp/3d4070/ffffff/1000x200.png">
                                    </a>
                                </div>
                                <div class="p-4">
                                    <h6 class="category">مجال المشروع</h6>
                                    <h4 class="card-caption fw-bold">
                                        <a href="#">هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة</a>
                                    </h4>
                                    <p class="card-description">
                                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من
                                        مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى
                                        إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                                        إذا كنت تحتاج إلى عدد أكبر من الفقرات
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-5">
                            <div class="card p-2">
                                <div class="card-image">
                                    <a href="#">
                                        <img class="img-raised h-100 w-100"
                                            src="https://placehold.jp/3d4070/ffffff/1000x200.png">
                                    </a>
                                </div>
                                <div class="p-4">
                                    <h6 class="category">مجال المشروع</h6>
                                    <h4 class="card-caption fw-bold">
                                        <a href="#">هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة</a>
                                    </h4>
                                    <p class="card-description">
                                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من
                                        مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى
                                        إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                                        إذا كنت تحتاج إلى عدد أكبر من الفقرات
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-5">
                            <div class="card p-2">
                                <div class="card-image">
                                    <a href="#">
                                        <img class="img-raised h-100 w-100"
                                            src="https://placehold.jp/3d4070/ffffff/1000x200.png">
                                    </a>
                                </div>
                                <div class="p-4">
                                    <h6 class="category text-success">مجال المشروع</h6>
                                    <h4 class="card-caption fw-bold">
                                        <a href="#">هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة</a>
                                    </h4>
                                    <p class="card-description">
                                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من
                                        مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى
                                        إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                                        إذا كنت تحتاج إلى عدد أكبر من الفقرات
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="projects-section" class="section-pt section-pb">
        <div class="section-title py-2 mb-4 text-center position-relative py-4">
            <span>شركاءنا</span>
            <h2>شركاءنا</h2>
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
    <!-- Footer -->
    <footer class="text-center text-lg-start text-white">
        <div class="container p-4 pb-0">
            <div class="row">
                <div class="col-md-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 fw-bold">
                        عننا
                    </h6>
                    <p>
                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                        حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى
                    </p>
                </div>
                <hr class="w-100 clearfix d-md-none">
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
                    <p>
                        <a class="text-white">MDBootstrap</a>
                    </p>
                    <p>
                        <a class="text-white">MDWordPress</a>
                    </p>
                    <p>
                        <a class="text-white">BrandFlow</a>
                    </p>
                    <p>
                        <a class="text-white">Bootstrap Angular</a>
                    </p>
                </div>
                <hr class="w-100 clearfix d-md-none">
                <!-- Grid column -->
                <hr class="w-100 clearfix d-md-none">
                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                    <p>
                        <i class="fas fa-home mr-3"></i>
                        New York, NY 10012, US
                    </p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i>
                        info@gmail.com
                    </p>
                    <p>
                        <i class="fas fa-phone mr-3"></i>
                        + 01 234 567 88
                    </p>
                    <p>
                        <i class="fas fa-print mr-3"></i>
                        + 01 234 567 89
                    </p>
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>
                    <!-- Facebook -->
                    <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="#!"
                        role="button">
                        <i class="fab fa-facebook-f">
                        </i>
                    </a>
                    <!-- Twitter -->
                    <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee" href="#!"
                        role="button">
                        <i class="fab fa-twitter">
                        </i>
                    </a>
                    <!-- Google -->
                    <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="#!"
                        role="button">
                        <i class="fab fa-google">
                        </i>
                    </a>
                    <!-- Instagram -->
                    <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="#!"
                        role="button">
                        <i class="fab fa-instagram">
                        </i>
                    </a>
                    <!-- Linkedin -->
                    <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca" href="#!"
                        role="button">
                        <i class="fab fa-linkedin-in">
                        </i>
                    </a>
                    <!-- Github -->
                    <a class="btn btn-primary btn-floating m-1" style="background-color: #333333" href="#!"
                        role="button">
                        <i class="fab fa-github">
                        </i>
                    </a>
                </div>
            </div>
        </div>
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2020 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">
                MDBootstrap.com
            </a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <!-- End of .container -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="/front/js/main.js"></script>
    <script src="/front/js/jquery-3.6.0.min.js"></script>
    <script src="/front/js/slick.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.partner').slick({
                rtl: true,
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


        });
    </script>
</body>

</html>
