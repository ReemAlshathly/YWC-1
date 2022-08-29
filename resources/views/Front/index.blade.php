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
            <span>من نحن</span>
            <h2>من نحن</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <ul class="nav nav-tabs flex-column border-0" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1" aria-selected="false"
                                role="tab">من نحن</a>
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
    </section>
    <section id="categories-section" class="section-pt section-pb categories-section"
        style="background-color: #ffffff;">
        <div class="section-title py-2 mb-3 text-center position-relative py-4">
            <span>مجالاتنا</span>
            <h2>مجالاتنا</h2>
        </div>
        <div class="container">
            <div class="row gy-5 justify-content-between">
                <div class="card px-4 py-5 position-relative text-center">
                    <div class="icon mb-2">
                        <i class="fas fa-dna"></i>
                        <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="0"
                            class="mt-5">85</span>
                    </div>
                    <h4 class="category-title fw-bold mb-3 text-center"><a href="#">Category</a></h4>
                    <p class="category-description mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit.
                        Quia.</p>
                </div>
                <div class="card px-4 py-5 position-relative text-center">
                    <div class="icon mb-2">
                        <i class="fas fa-dna"></i>
                        <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="0"
                            class="mt-5">85</span>
                    </div>
                    <h4 class="category-title fw-bold mb-3 text-center"><a href="#">Category</a></h4>
                    <p class="category-description mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit.
                        Quia.</p>
                </div>
                <div class="card px-4 py-5 position-relative text-center">
                    <div class="icon mb-2">
                        <i class="fas fa-dna"></i>
                        <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="0"
                            class="mt-5">85</span>
                    </div>
                    <h4 class="category-title fw-bold mb-3 text-center"><a href="#">Category</a></h4>
                    <p class="category-description mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit.
                        Quia.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="projects-section" class="section-pt section-pb" style="background-color: #f3f3f3;">
        <div class="section-title py-2 mb-3 text-center position-relative py-4">
            <span>مشاريعنا</span>
            <h2>مشاريعنا</h2>
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
                        <div class="p-4">
                            <h6 class="category mb-3">مجال المشروع</h6>
                            <h4 class="project-title fw-bold">
                                <a href="#">هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة</a>
                            </h4>
                            <p class="project-description">
                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من
                                مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى
                                إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                                إذا كنت تحتاج إلى عدد أكبر من الفقرات
                            </p>
                            <div class="d-flex justify-content-between stats py-2 px-4">
                                <div class="d-flex flex-column align-items-center">
                                    <span class="fw-bold text-danger">50%</span>
                                    <span><i class="fa-solid fa-people-group text-muted"></i></span>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <span class="fw-bold text-success">1800+</span>
                                    <span><i class="fa-solid fa-hands-holding-child text-muted"></i></span>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <span class="fw-bold text-info">200+</span>
                                    <span><i class="fa-solid fa-hand-holding-hand text-muted"></i></span>
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
                        <div class="p-4">
                            <h6 class="category mb-3">مجال المشروع</h6>
                            <h4 class="project-title fw-bold">
                                <a href="#">هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة</a>
                            </h4>
                            <p class="project-description">
                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من
                                مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى
                                إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                                إذا كنت تحتاج إلى عدد أكبر من الفقرات
                            </p>
                            <div class="d-flex justify-content-between stats py-2 px-4">
                                <div class="d-flex flex-column align-items-center">
                                    <span class="fw-bold text-danger">50%</span>
                                    <span><i class="fa-solid fa-people-group text-muted"></i></span>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <span class="fw-bold text-success">1800+</span>
                                    <span><i class="fa-solid fa-hands-holding-child text-muted"></i></span>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <span class="fw-bold text-info">200+</span>
                                    <span><i class="fa-solid fa-hand-holding-hand text-muted"></i></span>
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
                        <div class="p-4">
                            <h6 class="category mb-3">مجال المشروع</h6>
                            <h4 class="project-title fw-bold">
                                <a href="#">هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة</a>
                            </h4>
                            <p class="project-description">
                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من
                                مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى
                                إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                                إذا كنت تحتاج إلى عدد أكبر من الفقرات
                            </p>
                            <div class="d-flex justify-content-between stats py-2 px-4">
                                <div class="d-flex flex-column align-items-center">
                                    <span class="fw-bold text-danger">50%</span>
                                    <span><i class="fa-solid fa-people-group text-muted"></i></span>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <span class="fw-bold text-success">1800+</span>
                                    <span><i class="fa-solid fa-hands-holding-child text-muted"></i></span>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <span class="fw-bold text-info">200+</span>
                                    <span><i class="fa-solid fa-hand-holding-hand text-muted"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="partners-section" class="section-pt section-pb" style="background-color: #ffffff;">
        <div class="section-title py-2 mb-3 text-center position-relative py-4">
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
