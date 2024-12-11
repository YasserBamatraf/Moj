<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>وزارة العدل -  العاصمة عدن</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Cairo', sans-serif;
            background-image: url('https://i.pinimg.com/736x/b8/20/bc/b820bc8be818627ae802ef4edb91a4ec.jpg');
            background-repeat: repeat;
            background-size: 200px;
        }
        .top-header {
            background: #fff;
            padding: 10px 0;
        }
        h2{
            background: linear-gradient(45deg, #01315d, #0066cc); -webkit-background-clip: text; -webkit-text-fill-color: transparent; animation: gradient 3s ease infinite;
        }
        .h22{
            background: linear-gradient(45deg, #a8a8a8, #ffffff); -webkit-background-clip: text; -webkit-text-fill-color: transparent; animation: gradient 3s ease infinite;
        }
        .logo img {
            max-height: 80px;
        }
        .main-menu {
            background: #01315d;
            padding: 15px 0;
        }
        .main-menu .nav-link {
            color: #fff;
            padding: 8px 15px;
        }
        .main-menu .nav-link.active {
            color: #ffc300;
        }
        .hero-section {
            padding: 50px 0;
        }
        .content-box {
            background: #f8f9fa;
            border-radius: 25px;
            padding: 30px;
            margin-top: 20px;
        }
        .carousel-item img {
            border-radius: 15px;
            height: 250px;
            object-fit: cover;
        }
        .btn-custom {
            background: #01315d;
            color: #fff;
            margin: 10px;
            padding: 10px 20px;
            border-radius: 5px;
        }
        .btn-custom:hover {
            background: #ffc300;
            color: #01315d;
        }

        .lineH2 {
            border-top: 3px solid #ffc300;
            padding-top: 30px;
            padding-bottom: 0;
            width: 30%;   
        }
    </style>
</head>
<body>
    <!-- الهيدر العلوي -->
    <header class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-12 text-end">
                    <div class="logo">
                        <img src="https://a.top4top.io/p_322613iaf1.png" alt="شعار وزارة العدل">
                    </div>
                </div>
            </div>
        </div>
    </header>

    
    <!-- القائمة الرئيسية -->
    <nav class="navbar navbar-expand-lg main-menu">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="filter: brightness(0) invert(1);"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.html"><i class="fas fa-home ml-2"></i> الرئيسية</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-info-circle ml-2"></i> عن الوزارة
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="AboutMinistry.html"><i class="fas fa-file-alt ml-2"></i> نبذة عن الوزارة</a></li>
                            <li><a class="dropdown-item" href="AboutMinister.html"><i class="fas fa-user-tie ml-2"></i> عن الوزير</a></li>
                            <li><a class="dropdown-item" href="structure.html"><i class="fas fa-sitemap ml-2"></i> الهيكل التنظيمي</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-gavel ml-2"></i> المحاكم 
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="courts1.html"><i class="fas fa-balance-scale ml-2"></i> محاكم الإبتدائية</a></li>
                            <li><a class="dropdown-item" href="courts2.html"><i class="fas fa-balance-scale ml-2"></i> محاكم الإستئناف</a></li>
                            <li><a class="dropdown-item" href="courts3.html"><i class="fas fa-balance-scale ml-2"></i> محاكم التجارية</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"></li>
                        <a class="nav-link" href="laws.html"><i class="fas fa-book-open ml-2"></i> القوانين والتشريعات </a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="allservice.html"><i class="fas fa-book ml-2"></i> دليل المواطنين</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-laptop ml-2"></i> الخدمات الإلكترونية 
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="qadaya.html"><i class="fas fa-search ml-2"></i> البحث عن قضية</a></li>
                            <li><a class="dropdown-item" href="omna.html"><i class="fas fa-user-shield ml-2"></i> البحث عن أمين شرعي</a></li>
                            <li><a class="dropdown-item" href="laws.html"><i class="fas fa-scroll ml-2"></i> البحث عن قانون</a></li>
                        </ul>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="Complaints.html"><i class="fas fa-exclamation-circle ml-2"></i> الشكاوى الإلكترونية</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <style>
    .dropdown:hover .dropdown-menu {
        display: block;
    }
    .navbar-nav {
        flex-direction: row-reverse;
    }
    .dropdown-menu {
        text-align: right;
    }
    @media (max-width: 991px) {
        .navbar-nav {
            flex-direction: column;
        }
    }
    </style>

    <!-- القسم الرئيسي -->
    <section class="hero-section">
        <div class="container">
            <div class="content-box">
                <div class="row">
                    <div class="col-lg-5">
                        <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="gradient-overlay">
                                        <img src="https://scontent.fsah2-1.fna.fbcdn.net/v/t39.30808-6/436297494_896677035806846_413889007181434619_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=833d8c&_nc_ohc=4s2pLG46JgoQ7kNvgFgPfEQ&_nc_zt=23&_nc_ht=scontent.fsah2-1.fna&_nc_gid=AH-uCqj4NRLOSG5oODVqW4t&oh=00_AYAfGKOuQQuvfG_annZthjrScdLwy3fNtfh7jQ8d73gKXg&oe=67297EC8" class="d-block w-100" alt="صورة 1">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="gradient-overlay">
                                        <img src="https://scontent.fsah2-1.fna.fbcdn.net/v/t39.30808-6/436299161_896677089140174_933207944393728926_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=833d8c&_nc_ohc=H6IIggEkXukQ7kNvgE8LwTr&_nc_zt=23&_nc_ht=scontent.fsah2-1.fna&_nc_gid=A3DxrYCWnPd6eOXeZisE3eC&oh=00_AYBcPUUft3UU5ShzkavYF3xQ3KqzG-noKA2KItkpFKn4xQ&oe=67297C5D" class="d-block w-100" alt="صورة 2">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="gradient-overlay">
                                        <img src="https://scontent.fsah2-1.fna.fbcdn.net/v/t39.30808-6/436354785_896677229140160_546252971286545510_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=833d8c&_nc_ohc=u6VDQMsCmEsQ7kNvgEfO6-H&_nc_zt=23&_nc_ht=scontent.fsah2-1.fna&_nc_gid=AQaxcoCKR-WZVV3Wyw9xD1M&oh=00_AYASj9cqml5RN4GN8AJMsgn-vGRQCc2ICfOgkK9PO2sWAA&oe=6729845A" class="d-block w-100" alt="صورة 3">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <style>
                            .gradient-overlay {
                                position: relative;
                            }
                            .gradient-overlay::after {
                                content: '';
                                position: absolute;
                                bottom: 0;
                                left: 0;
                                width: 100%;
                                height: 50%;
                                background: linear-gradient(to top, rgba(0,0,51,0.8), transparent);
                                pointer-events: none;
                            }
                        </style>
                    </div>
                    <div class="col-lg-7">
                        <h2 class="mb-4">وزارة العدل - العاصمة عدن</h2>
                        <div class="lineH2"></div>
                        <p class="mb-4">تسعى وزارة العدل إلى تحقيق العدالة وضمان حقوق المواطنين وتطوير المنظومة القضائية في اليمن ، نحن ملتزمون بتقديم خدمات قضائية عالية الجودة وتعزيز سيادة القانون ،  نحن ملتزمون بتقديم خدمات قضائية عالية الجودة وتعزيز سيادة القانون،  نحن ملتزمون بتقديم خدمات قضائية عالية الجودة وتعزيز سيادة القانون.</p>
                        <div class="text-center">
                            <a href="AboutMinister.html" class="btn btn-custom">كلمة وزير العدل <i class="fas fa-arrow-left"></i></a>
                            <a href="AboutMinistry.html" class="btn btn-custom">عن الوزارة <i class="fas fa-arrow-left"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services-section py-5 bg-white">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-3 order-lg-1">
                    <img src="images/logogate.png" class="img-fluid" alt="الخدمات الإلكترونية" style="width: 250px;">
                </div>
                <div class="col-lg-9 order-lg-2">
                    <h2 class="mb-4">الخدمات الإلكترونية</h2>
                    <div class="lineH2"></div>
                    <p class="text-muted">نقدم مجموعة متكاملة من الخدمات الإلكترونية لتسهيل وصول المواطنين إلى الخدمات القضائية</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 shadow-sm transition-card">
                        <div class="card-body text-center p-4">
                            <img src="images/omna-icon.png" class="mb-3" alt="خدمة الأمناء الشرعيين" style="width: 100px;">
                            <h5 class="card-title">خدمة أُمنـاء</h5>
                            <p class="card-text text-muted">تتيح لك هذه الخدمة البحث عن الأمناء الشرعيين</p>
                            <a href="omna.html" class="btn service-btn mt-3">تفاصيل الخدمة <i class="fas fa-chevron-double-left"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 shadow-sm transition-card">
                        <div class="card-body text-center p-4">
                            <img src="images/nsoos-icon.png" class="mb-3" alt="خدمة نصوص" style="width: 110px;">
                            <h5 class="card-title">خدمة نصوص</h5>
                            <p class="card-text text-muted">تتيح لك هذه الخدمة البحث في النصوص والقوانين والتشريعات</p>
                            <a href="laws.html" class="btn service-btn mt-3">تفاصيل الخدمة <i class="fas fa-chevron-double-left"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 shadow-sm transition-card">
                        <div class="card-body text-center p-4">
                            <img src="images/case-icon.png" class="mb-3" alt="خدمة قضايا" style="width: 110px;">
                            <h5 class="card-title">خدمة قضايا</h5>
                            <p class="card-text text-muted">تتيح لك هذه الخدمة البحث عن القضايا</p>
                            <a href="qadaya.html" class="btn service-btn mt-3">تفاصيل الخدمة <i class="fas fa-chevron-double-left"></i></a>
                        </div>
                    </div>
                </div>
               
                <style>
                    .transition-card {
                        transition: all 0.3s ease;
                    }
                    .transition-card:hover {
                        background-image: linear-gradient(to top, #021e38 0%, #01315d 100%);
                    }
                    .transition-card:hover .card-title,
                    .transition-card:hover .card-text {
                        color: #ffc300 !important;
                    }
                    .service-btn {
                        background-color: #f0f0f0;
                        color: #666;
                        transition: all 0.3s ease;
                    }
                    .service-btn:hover {
                        background-color: #01315d;
                        color: white;
                    }
                    .transition-card:hover .service-btn {
                        background-color: #ffc300;
                        color: #01315d;
                    }
                </style>
            </div>
        </div>
    </section>
    <section class="py-5" style="background-color: #01315d;">
        <div class="container">
            <h2 class="text-center mb-5 text-white h22">دليل المواطنين</h2>
            <div class="text-center mb-5">
                <div style="width: 100px; height: 3px; background-color: #ffc300; margin: 0 auto;"></div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow">
                        <div class="card-body text-center p-4">
                            <h5 class="card-title mb-4">عقد إيجـار </h5>
                            <a href="#" class="btn w-100 mb-3" style="background-color: #ffc300; color: #01315d;">
                                <i class="fas fa-download ml-2"></i> تحميل الدليل
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow">
                        <div class="card-body text-center p-4">
                            <h5 class="card-title mb-4"> عقد زواج</h5>
                            <a href="#" class="btn w-100 mb-3" style="background-color: #ffc300; color: #01315d;">
                                <i class="fas fa-download ml-2"></i> تحميل الدليل
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow">
                        <div class="card-body text-center p-4">
                            <h5 class="card-title mb-4"> إشهار الطلاق</h5>
                            <a href="#" class="btn w-100 mb-3" style="background-color: #ffc300; color: #01315d;">
                                <i class="fas fa-download ml-2"></i> تحميل الدليل
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="allservice.html" class="btn btn-light">
                    المزيد حول دليل المواطنين <i class="fas fa-chevron-double-left"></i>
                </a>
            </div>
        </div>
    </section>
    <section class="py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <h2 class="text-center mb-3">مواقع قضائية أخرى</h2>
            <div class="text-center mb-5">
                <div style="width: 100px; height: 3px; background-color: #ffc300; margin: 0 auto;"></div>
            </div>
            
            <!-- عرض الشعارات على الكمبيوتر -->
            <div class="row justify-content-center d-none d-md-flex">
                <div class="col-md-3">
                    <img src="images/logomoj1.png" class="img-fluid" alt="شعار 1">
                </div>
                <div class="col-md-3">
                    <img src="images/logomoj2.png" class="img-fluid" alt="شعار 2">
                </div>
                <div class="col-md-3">
                    <img src="images/logomoj3.png" class="img-fluid" alt="شعار 3">
                </div>
                <div class="col-md-3">
                    <img src="images/logomoj4.png" class="img-fluid" alt="شعار 4">
                </div>
            </div>
            <!-- عرض الشعارات على الجوال -->
            <div id="partnersCarousel" class="carousel slide d-md-none mx-auto" style="max-width: 80%;" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/logomoj1.png" class="d-block w-100" alt="شعار 1">
                    </div>
                    <div class="carousel-item">
                        <img src="images/logomoj2.png" class="d-block w-100" alt="شعار 2">
                    </div>
                    <div class="carousel-item">
                        <img src="images/logomoj3.png" class="d-block w-100" alt="شعار 3">
                    </div>
                    <div class="carousel-item">
                        <img src="images/logomoj4.png" class="d-block w-100" alt="شعار 4">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#partnersCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" style="filter: invert(11%) sepia(64%) saturate(2197%) hue-rotate(194deg) brightness(96%) contrast(98%);" aria-hidden="true"></span>
                    <span class="visually-hidden">السابق</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#partnersCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" style="filter: invert(11%) sepia(64%) saturate(2197%) hue-rotate(194deg) brightness(96%) contrast(98%);" aria-hidden="true"></span>
                    <span class="visually-hidden">التالي</span>
                </button>
            </div>
        </div>
    </section>
    <footer class="py-5" style="background-color: #0a4275;">
        <div class="container">
            <div class="row">
                <!-- العمود الأول - الشعار والوصف -->
                <div class="col-md-4 mb-4">
                    <img src="https://a.top4top.io/p_322613iaf1.png" alt="شعار وزارة العدل" class="mb-3" style="width: 200px;">
                    <p class="text-white">وزارة العدل في الجمهورية اليمنية هي الجهة المسؤولة عن إدارة وتنظيم شؤون القضاء والعدل في البلاد، وتعمل على ضمان تحقيق العدالة وسيادة القانون.</p>
                </div>

                <!-- العمود الثاني - الخدمات الإلكترونية -->
                <div class="col-md-4 mb-4">
                    <h5 class="mb-3 text-white">الخدمات الإلكترونية</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="omna.html" class="text-white text-decoration-none" style="transition: color 0.3s;" onmouseover="this.style.color='#FFA500'" onmouseout="this.style.color='#fff'"><i class="fas fa-angle-left ml-2"></i> البحث عن أمين شرعي </a></li>
                        <li class="mb-2"><a href="qadaya.html" class="text-white text-decoration-none" style="transition: color 0.3s;" onmouseover="this.style.color='#FFA500'" onmouseout="this.style.color='#fff'"><i class="fas fa-angle-left ml-2"></i> الإستعلام عن القضايا</a></li>
                        <li class="mb-2"><a href="qanon.html" class="text-white text-decoration-none" style="transition: color 0.3s;" onmouseover="this.style.color='#FFA500'" onmouseout="this.style.color='#fff'"><i class="fas fa-angle-left ml-2"></i> القوانين والتشريعات </a></li>
                        <li class="mb-2"><a href="Complaints.html" class="text-white text-decoration-none" style="transition: color 0.3s;" onmouseover="this.style.color='#FFA500'" onmouseout="this.style.color='#fff'"><i class="fas fa-angle-left ml-2"></i> تقديم شكوى</a></li>
                    </ul>
                </div>

                <!-- العمود الثالث - التواصل الاجتماعي -->
                <div class="col-md-4 mb-4">
                    <h5 class="mb-3 text-white">تابعنا على</h5>
                    <div class="social-links">
                        <a href="https://www.facebook.com/moj.yem/" class="text-white me-3 text-decoration-none">
                            <i class="fab fa-facebook-f fa-2x"></i>
                        </a>
                        <a href="https://twitter.com/moj_yem?lang=ar" class="text-white me-3 text-decoration-none">
                            <i class="fab fa-twitter fa-2x"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <!-- الصف الثاني - حقوق النشر -->
        <div class="text-center pt-4 mt-4" style="border-top: 1px solid rgba(255,255,255,0.2);">
            <p class="mb-0 text-white">جميع الحقوق محفوظة لوزارة العدل اليمن - العاصمة عدن 2024 &copy;</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.carousel').carousel({
                interval: 3000
            });
        });
    </script>
</body>
</html>
