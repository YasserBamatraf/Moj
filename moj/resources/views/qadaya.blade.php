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
        
    </section>
    <section class="services-section py-5 bg-white">
        <div class="container">
            <img src="images/qadaya-icon.png" alt="شعار البحث عن القضايا" class="d-block mx-auto mb-3" style="max-width: 120px;">
            <h2 class="text-center mb-4">البحث عن القضايا</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form id="searchForm" class="mb-4">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <select class="form-select" id="court" required>
                                    <option value="">اختر المحكمة</option>
                                    <option value="1">المحكمة العليا</option>
                                    <option value="2">محكمة الاستئناف</option>
                                    <option value="3">المحكمة الابتدائية</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" id="caseNumber" placeholder="رقم القضية" required>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">بحث</button>
                        </div>
                    </form>

                    <div id="searchResults" class="mt-4">
                        <!-- نتائج البحث ستظهر هنا -->
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.getElementById('searchForm').addEventListener('submit', function(e) {
                e.preventDefault();
                
                const court = document.getElementById('court').value;
                const caseNumber = document.getElementById('caseNumber').value;
                const resultsDiv = document.getElementById('searchResults');

                // محاكاة البحث في قاعدة البيانات
                setTimeout(() => {
                    // هذا مجرد مثال - في التطبيق الحقيقي سيتم البحث في قاعدة البيانات
                    if (court === '1' && caseNumber === '123') {
                        resultsDiv.innerHTML = `
                            <div class="alert alert-success">
                                <h5>تفاصيل القضية:</h5>
                                <p>رقم القضية: 123</p>
                                <p>المحكمة: المحكمة العليا</p>
                                <p>نوع القضية: مدني</p>
                                <p>الحالة: قيد النظر</p>
                            </div>
                        `;
                    } else {
                        resultsDiv.innerHTML = `
                            <div class="alert alert-warning">
                                لا توجد قضايا مطابقة للبحث
                            </div>
                        `;
                    }
                }, 1000);
            });
        </script>
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
