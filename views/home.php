<!DOCTYPE html>
<html lang="fa-IR" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>رزومه من</title>
    <link rel="icon" type="image/x-icon" href="./static/favicon.ico">
    <link href="./static/css/font-awesome/css/all.min.css?ver=1.2.1" rel="stylesheet">
    <link href="./static/css/mdb.min.css?ver=1.2.1'" rel="stylesheet">
    <link href="./static/css/aos.css?ver=1.2.1'" rel="stylesheet">
    <link href="./static/css/main.css?ver=1.2.1'" rel="stylesheet">
    <link href="./static/css/custom-styles.css?ver=1.0.0'" rel="stylesheet">
    <noscript>
        <style type="text/css">
            [data-aos] {
                opacity: 1 !important;
                transform: translate(0) scale(1) !important;
            }
        </style>
    </noscript>
</head>
<body class="bg-light" id="top">
<header class="d-print-none">

    <!--  show notifs   -->
    <?php if (isset($_SESSION['mail']) && $_SESSION['mail'] === 'Done'): ?>
        <script type="text/javascript">alert('پیام ارسال شد. :)');</script>
    <?php elseif (isset($_SESSION['mail']) && $_SESSION['mail'] === 'Error'): ?>
        <script type="text/javascript">alert('پیام ارسال نشد! :(');</script>
    <?php endif; ?>
    <?php unset($_SESSION['mail']) ?>

    <div class="container text-center text-lg-left">
        <div class="pt-4 clearfix">
            <div class="site-nav">
                <nav role="navigation">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" href="#about" title="About">
                                <span class="menu-title">درباره من</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#skills" title="Skills">
                                <span class="menu-title">مهارت ها</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#experience" title="Experience">
                                <span class="menu-title">سوابق کاری</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#education" title="Education">
                                <span class="menu-title">سوابق آموزشی</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio" title="Portfolio">
                                <span class="menu-title">نمونه کارها</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact" title="Contact">
                                <span class="menu-title">تماس با من</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<div class="page-content">
    <div class="container">
        <div class="resume-container">
            <div class="shadow-1-strong bg-white my-5" id="intro">
                <div class="bg-info text-white">
                    <div class="cover bg-image">
                        <img src="./static/images/bg1.jpg"/>
                        <div class="mask" style="background-color: rgba(0, 0, 0, 0.7);backdrop-filter: blur(2px);">
                            <div class="text-center p-5">
                                <div class="avatar p-1">
                                    <img class="img-thumbnail shadow-2-strong"
                                         src="./static/images/avatar.jpg" width="160" height="160"/>
                                </div>
                                <div class="header-bio mt-3">
                                    <div data-aos="zoom-in" data-aos-delay="0">
                                        <h2 class="h1">علیرضا شریفیان</h2>
                                        <p>توسعه دهنده وب (فول استک)</p>
                                    </div>
                                    <div class="header-social mb-3 d-print-none" data-aos="zoom-in" data-aos-delay="200">
                                        <nav role="navigation">
                                            <ul class="nav justify-content-center">
                                                <li class="nav-item">
                                                    <a class="nav-link" target="_blank"
                                                       href="https://linkedin.com/in/ali-sharifian-io-560639100" title="Linkedin">
                                                        <i class="fab fa-linkedin"></i><span class="menu-title sr-only">لیکدین</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" target="_blank"
                                                       href="https://github.com/tuderiewsc" title="Github">
                                                        <i class="fab fa-github"></i><span class="menu-title sr-only">گیت هاب</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>

                                    <div class="d-print-none">
                                        <a class="btn btn-outline-light btn-lg shadow-sm m-1 me-3" href="./static/MyResume.pdf"
                                           data-aos="fade-right" data-aos-delay="700">Download CV</a>
                                        <a class="btn btn-info btn-lg shadow-sm mt-1" href="#contact" data-aos="fade-left" data-aos-delay="700">Hire Me</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shadow-1-strong bg-white my-5 p-5" id="about">
                <div class="about-section">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="h2 fw-light mb-4">درباره من</h2>
                            <p>سلام. علیرضا شریفیان هستم <strong>توسعه دهنده فول استک وب</strong></p>
                            <p>علاقه مند به یادگیری هوش مصنوعی</p>
                        </div>
                        <div class="col-md-5 offset-lg-1">
                            <div class="row mt-2">
                                <h2 class="h2 fw-light mb-4">بیوگرافی</h2>
                                <div class="col-sm-5">
                                    <div class="pb-2 fw-bolder"><i class="far fa-calendar-alt pe-2 text-muted" style="width:24px;opacity:0.85;"></i> سن</div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="pb-2">36</div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="pb-2 fw-bolder"><i class="far fa-envelope pe-2 text-muted" style="width:24px;opacity:0.85;"></i> ایمیل</div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="pb-2">wizard2070@gmail.com</div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="pb-2 fw-bolder"><i class="fas fa-phone pe-2 text-muted" style="width:24px;opacity:0.85;"></i> شماره تماس</div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="pb-2">+98-9370781575</div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="pb-2 fw-bolder"><i class="fas fa-map-marker-alt pe-2 text-muted" style="width:24px;opacity:0.85;"></i> آدرس</div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="pb-2">اصفهان - سپاهانشهر - بلوار شاهد - خ تعاون 5 - بن بست نسیم - پلاک 45</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shadow-1-strong bg-white my-5 p-5" id="skills">
                <div class="skills-section">
                    <h2 class="h2 fw-light mb-4">مهارت های حرفه ای</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3"><span class="fw-bolder">Laravel</span>
                                <div class="progress my-2 rounded" style="height: 20px">
                                    <div class="progress-bar bg-info" role="progressbar" data-aos="zoom-in-right" data-aos-delay="100" data-aos-anchor=".skills-section" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">Master</div>
                                </div>
                            </div>
                            <div class="mb-3"><span class="fw-bolder">Nodejs</span>
                                <div class="progress my-2 rounded" style="height: 20px">
                                    <div class="progress-bar bg-info" role="progressbar" data-aos="zoom-in-right"
                                         data-aos-delay="200" data-aos-anchor=".skills-section"
                                         style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        Expert
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3"><span class="fw-bolder">Wordpress</span>
                                <div class="progress my-2 rounded" style="height: 20px">
                                    <div class="progress-bar bg-info" role="progressbar" data-aos="zoom-in-right"
                                         data-aos-delay="300" data-aos-anchor=".skills-section"
                                         style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                        Master
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3"><span class="fw-bolder">Vue</span>
                                <div class="progress my-2 rounded" style="height: 20px">
                                    <div class="progress-bar bg-info" role="progressbar" data-aos="zoom-in-right"
                                         data-aos-delay="300" data-aos-anchor=".skills-section"
                                         style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        Expert
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3"><span class="fw-bolder">Nuxt.js</span>
                                <div class="progress my-2 rounded" style="height: 20px">
                                    <div class="progress-bar bg-info" role="progressbar" data-aos="zoom-in-right"
                                         data-aos-delay="300" data-aos-anchor=".skills-section"
                                         style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        Expert
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3"><span class="fw-bolder">Data Science(Python)</span>
                                <div class="progress my-2 rounded" style="height: 20px">
                                    <div class="progress-bar bg-info" role="progressbar" data-aos="zoom-in-right"
                                         data-aos-delay="300" data-aos-anchor=".skills-section"
                                         style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                        BEGINNER
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3"><span class="fw-bolder">Javascript & Jquery</span>
                                <div class="progress my-2 rounded" style="height: 20px">
                                    <div class="progress-bar bg-secondary" role="progressbar" data-aos="zoom-in-right"
                                         data-aos-delay="400" data-aos-anchor=".skills-section"
                                         style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                        Master
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3"><span class="fw-bolder">Restful & Graphql</span>
                                <div class="progress my-2 rounded" style="height: 20px">
                                    <div class="progress-bar bg-secondary" role="progressbar" data-aos="zoom-in-right"
                                         data-aos-delay="400" data-aos-anchor=".skills-section"
                                         style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        Expert
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3"><span class="fw-bolder">Redis</span>
                                <div class="progress my-2 rounded" style="height: 20px">
                                    <div class="progress-bar bg-secondary" role="progressbar" data-aos="zoom-in-right"
                                         data-aos-delay="400" data-aos-anchor=".skills-section"
                                         style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        Expert
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3"><span class="fw-bolder">Socket.io</span>
                                <div class="progress my-2 rounded" style="height: 20px">
                                    <div class="progress-bar bg-secondary" role="progressbar" data-aos="zoom-in-right"
                                         data-aos-delay="400" data-aos-anchor=".skills-section"
                                         style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        Expert
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3"><span class="fw-bolder">Elasticsearch</span>
                                <div class="progress my-2 rounded" style="height: 20px">
                                    <div class="progress-bar bg-secondary" role="progressbar" data-aos="zoom-in-right"
                                         data-aos-delay="400" data-aos-anchor=".skills-section"
                                         style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                        Mid Level
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3"><span class="fw-bolder">Unit Test, PHPUnit</span>
                                <div class="progress my-2 rounded" style="height: 20px">
                                    <div class="progress-bar bg-secondary" role="progressbar" data-aos="zoom-in-right"
                                         data-aos-delay="400" data-aos-anchor=".skills-section"
                                         style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                        Mid Level
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3"><span class="fw-bolder">Docker</span>
                                <div class="progress my-2 rounded" style="height: 20px">
                                    <div class="progress-bar bg-secondary" role="progressbar" data-aos="zoom-in-right"
                                         data-aos-delay="400" data-aos-anchor=".skills-section"
                                         style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                        BEGINNER
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shadow-1-strong bg-white my-5 p-5" id="experience">
                <div class="work-experience-section">
                    <h2 class="h2 fw-light mb-4">تجربیات کاری مرتبط با برنامه نویسی</h2>
                    <div class="timeline">
                        <div class="timeline-card timeline-card-info" data-aos="fade-in" data-aos-delay="0">
                            <div class="timeline-head px-4 pt-3">
                                <div class="h5">توسعه دهنده فول استک<span class="text-muted h6"> در شرکت رادشید </span></div>
                            </div>
                            <div class="timeline-body px-4 pb-4">
                                <div class="text-muted text-small mb-3">بهمن 98 تاکنون</div>
                                <div>مدیریت و سفارشی سازی سایت های وردپرسی شرکت و کدنویسی فرانت و پنل مدیریتی استارتاپ آیسی</div>
                            </div>
                        </div>
                        <div class="timeline-card timeline-card-info" data-aos="fade-in" data-aos-delay="0">
                            <div class="timeline-head px-4 pt-3">
                                <div class="h5">توسعه دهنده اندروید</div>
                            </div>
                            <div class="timeline-body px-4 pb-4">
                                <div class="text-muted text-small mb-3">سال 95 تا 98</div>
                                <div>برنامه نویسی اندروید با نرم افزار B4A بصورت خودآموز</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shadow-1-strong bg-white my-5 p-5" id="education">
                <div class="education-section">
                    <h2 class="h2 fw-light mb-4">سوابق آموزشی</h2>
                    <div class="timeline">
                        <div class="timeline-card timeline-card-success" data-aos="fade-in" data-aos-delay="0">
                            <div class="timeline-head px-4 pt-3">
                                <div class="h5">بوت کمپ هوش مصنوعی فیلاگر
                                    <span class="text-muted h6"> وب سایت فیلاگر </span>
                                </div>
                            </div>
                            <div class="timeline-body px-4 pb-4">
                                <div class="text-muted text-small mb-3">1400</div>
                            </div>
                        </div>
                        <div class="timeline-card timeline-card-success" data-aos="fade-in" data-aos-delay="0">
                            <div class="timeline-head px-4 pt-3">
                                <div class="h5">لیسانس مکانیک<span class="text-muted h6"> دانشگاه نجف آباد </span>          </div>
                            </div>
                            <div class="timeline-body px-4 pb-4">
                                <div class="text-muted text-small mb-3">1384 - 1388</div>
                            </div>
                        </div>
                        <div class="timeline-card timeline-card-success" data-aos="fade-in" data-aos-delay="0">
                            <div class="timeline-head px-4 pt-3">
                                <div class="h5">دیپلم ریاضی<span class="text-muted h6"> دبیرستان پویا </span>          </div>
                            </div>
                            <div class="timeline-body px-4 pb-4">
                                <div class="text-muted text-small mb-3">1380 - 1384</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shadow-1-strong bg-white my-5 p-5 d-print-none" id="portfolio">
                <div class="portfolio-section">
                    <h2 class="h2 fw-light mb-4">سوابق کاری</h2>
                    <div class="row g-0">
                        <div class="col-md-6">
                            <a href="https://dgmarketz.com/" target="_blank">
                                <img class="img-fluid" src="./static/images/portfolio/dgm.jpg" width="800" height="500"/>
                            </a>
                        </div>
                        <div class="col-md-6 d-flex align-items-center" data-aos="fade-left" data-aos-delay="100">
                            <div class="m-4 mt-md-2">
                                <p class="text-teal text-small">BackEnd / Frontend / JavaScript / Jquery / Express / Cheerio</p>
                                <h3>وبسایت همکاری در فروش دیجی کالا</h3>
                                <p class="text-muted">خزش محصولات دیجی کالا جهت همکاری در فروش</p>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0 portfolio-reverse">
                        <div class="col-md-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                            <div class="m-4 mt-md-2 text-end">
                                <p class="text-teal text-small">Express / Socket.io / Redis/ Google Oauth</p>
                                <h3>چت روم</h3>
                                <p class="text-muted">چت رمزگذاری شده</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a href="https://mysecret-chat.herokuapp.com" target="_blank">
                                <img class="img-fluid" src="./static/images/portfolio/chatroom.jpg" width="800" height="500"/>
                            </a>
                        </div>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-6">
                            <a href="https://isee.sisoog.com/cpanel/" target="_blank">
                                <img class="img-fluid" src="./static/images/portfolio/ic-panel.jpg" width="800" height="500"/>
                            </a>
                        </div>
                        <div class="col-md-6 d-flex align-items-center" data-aos="fade-left" data-aos-delay="100">
                            <div class="m-4 mt-md-2">
                                <p class="text-teal text-small">Vue</p>
                                <h3>پنل مدیریتی وبسایت آیسی</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0 portfolio-reverse">
                        <div class="col-md-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                            <div class="m-4 mt-md-2 text-end">
                                <p class="text-teal text-small">Wordpress / Create Plugins </p>
                                <h3>توسعه وبسایت سیسوگ</h3>
                                <p class="text-muted">مدیریت و پلاگین نویسی</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a href="https://sisoog.com/" target="_blank">
                                <img class="img-fluid" src="./static/images/portfolio/sisoog.jpg" width="800" height="500"/>
                            </a>
                        </div>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-6">
                            <a href="https://radshid.com/" target="_blank">
                                <img class="img-fluid" src="./static/images/portfolio/radshid.jpg" width="800" height="500"/>
                            </a>
                        </div>
                        <div class="col-md-6 d-flex align-items-center" data-aos="fade-left" data-aos-delay="100">
                            <div class="m-4 mt-md-2">
                                <p class="text-teal text-small">Wordpress / Create Plugins</p>
                                <h3>توسعه وبسایت رادشید</h3>
                                <p class="text-muted">مدیریت و پلاگین نویسی</p>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                            <div class="m-4 mt-md-2 text-end">
                                <p class="text-teal text-small">Express / Cheerio</p>
                                <h3>اینستا دانلودر بدون API</h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a href="https://instaa-downloader.herokuapp.com/" target="_blank">
                                <img class="img-fluid" src="./static/images/portfolio/insta-downloader.jpg" width="800" height="500"/>
                            </a>
                        </div>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-6">
                            <a href="https://cafebazaar.ir/app/ir.EngDic.android" target="_blank">
                                <img class="img-fluid" src="./static/images/portfolio/dict.jpg" width="800" height="500"/>
                            </a>
                        </div>
                        <div class="col-md-6 d-flex align-items-center" data-aos="fade-left" data-aos-delay="100">
                            <div class="m-4 mt-md-2">
                                <p class="text-teal text-small">B4A / Visual Basic</p>
                                <h3>اپلیکیشن اندروید</h3>
                                <p class="text-muted">دیکشنری مهندسی + عمومی</p>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                            <div class="m-4 mt-md-2 text-end">
                                <p class="text-teal text-small">Wordpress, PHP</p>
                                <h3>افزونه حمایت مالی (زرین پال، پی پینگ)</h3>
                                <p class="text-muted">حمایت مالی از نویسندگان سایت به صورت تفکیکی</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a href="https://sisoog.com/" target="_blank">
                                <img class="img-fluid" src="./static/images/portfolio/donate.jpg" width="800" height="500"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shadow-1-strong bg-white my-5 p-5" id="contact">
                <div class="contant-section">
                    <h2 class="h2 fw-light text mb-4">تماس با من</h2>
                    <div class="row mb-4">
                        <div class="col-md-7" data-aos="fade-left" data-aos-delay="200">
                            <div class="mt-1">
                                <div class="h6"><i class="fas fa-phone pe-2 text-muted" style="width:24px;opacity:0.85;"></i> +98-9370781575</div>
                                <div class="h6"><i class="far fa-envelope pe-2 text-muted" style="width:24px;opacity:0.85;"></i> wizard2070@gmail.com</div>
                            </div>
                            <div class="mt-5 d-print-none">
                                <form action="./controllers/contactController.php" method="POST" style="direction: ltr">
                                    <div class="form-outline mb-4">
                                        <input type="text" id="name" name="name" class="form-control"/>
                                        <label class="form-label" for="name">نام</label>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="email" id="email" name="email" class="form-control" required/>
                                        <label class="form-label" for="email">آدرس ایمیل</label>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="text" id="phone" name="phone" class="form-control"
                                               onkeyup="this.value = this.value.replace(/[^\d]+/g, '');" maxlength="11" required/>
                                        <label class="form-label" for="phone"> شماره تماس</label>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <textarea class="form-control" name="message" style="resize: none;" id="message" rows="4" required></textarea>
                                        <label class="form-label" for="message">پیام</label>
                                    </div>
                                    <button type="submit" name="contact-form" class="btn btn-info btn-block mb-4" >ارسال</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-5 d-print-none" data-aos="zoom-in" data-aos-delay="100">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1681.4350706980451!2d51.677646388775564!3d32.55631082199214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1657037373760!5m2!1sfa!2s" width="500" height="400" style="border:0;width:100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div></div>
</div>
<footer class="pt-4 pb-4 text-muted text-center d-print-none">
    <div class="container">
        <div class="text-small">
            <div class="mb-1">&copy; Material Resume. All rights reserved.</div>
        </div>
    </div>
</footer>
<script src="./static/scripts/jQuery.js"></script>
<script src="./static/scripts/mdb.min.js?ver=1.2.1"></script>
<script src="./static/scripts/aos.js?ver=1.2.1"></script>
<script src="./static/scripts/main.js?ver=1.2.1"></script>
<script src="./static/scripts/custom-scripts.js"></script>
</body>
</html>