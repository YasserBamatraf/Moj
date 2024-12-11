<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم - وزارة العدل</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Cairo', sans-serif;
            background-color: #f5f6fa;
        }
        .dashboard-nav {
            background-color: #01315d;
            min-height: 100vh;
            padding: 20px;
        }
        .dashboard-nav .nav-link {
            color: #fff;
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
        }
        .dashboard-nav .nav-link:hover {
            background-color: #ffc300;
            color: #01315d;
        }
        .stats-card {
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        .data-table {
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        .modal-header {
            background-color: #01315d;
            color: white;
        }
        .nav-tabs .nav-link.active {
            background-color: #01315d;
            color: white;
        }
        .nav-tabs .nav-link {
            color: #01315d;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- القائمة الجانبية -->
            <div class="col-md-2 dashboard-nav">
                <h4 class="text-white mb-4">لوحة التحكم</h4>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><i class="fas fa-tachometer-alt ml-2"></i> الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-gavel ml-2"></i> إدارة القضايا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-user-tie ml-2"></i> إدارة الأمناء الشرعيين</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-building ml-2"></i> إدارة المحاكم</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-exclamation-circle ml-2"></i> إدارة الشكاوي</a>
                    </li>
                </ul>
            </div>

            <!-- المحتوى الرئيسي -->
            <div class="col-md-10 p-4">
                <h2 class="mb-4">لوحة التحكم الرئيسية</h2>
                
                <!-- الإحصائيات -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="stats-card">
                            <h3>1,234</h3>
                            <p>إجمالي القضايا</p>
                            <i class="fas fa-gavel fa-2x text-primary"></i>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stats-card">
                            <h3>567</h3>
                            <p>الأمناء الشرعيين</p>
                            <i class="fas fa-user-tie fa-2x text-success"></i>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stats-card">
                            <h3>89</h3>
                            <p>المحاكم</p>
                            <i class="fas fa-building fa-2x text-warning"></i>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stats-card">
                            <h3>123</h3>
                            <p>الشكاوي</p>
                            <i class="fas fa-exclamation-circle fa-2x text-danger"></i>
                        </div>
                    </div>
                </div>

                <!-- جدول القضايا الحديثة -->
                <div class="data-table mt-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4>آخر القضايا</h4>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newCaseModal">
                            <i class="fas fa-plus ml-2"></i> إضافة قضية جديدة
                        </button>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>رقم القضية</th>
                                <th>المدعي</th>
                                <th>المدعى عليه</th>
                                <th>تاريخ القضية</th>
                                <th>الحالة</th>
                                <th>الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2023/001</td>
                                <td>أحمد محمد</td>
                                <td>علي سالم</td>
                                <td>2023/10/15</td>
                                <td><span class="badge bg-warning">قيد النظر</span></td>
                                <td>
                                    <button class="btn btn-sm btn-info"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- النافذة المنبثقة لإضافة قضية جديدة -->
    <div class="modal fade" id="newCaseModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">قضية جديدة</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <!-- خطوات العملية -->
                    <div class="process-steps mb-4">
                        <div class="d-flex justify-content-between">
                            <div class="step active text-center">
                                <div class="step-icon">1</div>
                                <div>الأطراف</div>
                            </div>
                            <div class="step text-center">
                                <div class="step-icon">2</div>
                                <div>تفاصيل القضية</div>
                            </div>
                            <div class="step text-center">
                                <div class="step-icon">3</div>
                                <div>المرفقات</div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion" id="caseAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="partiesHeading">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#partiesCollapse">
                                    <i class="fas fa-users me-2"></i>
                                    الأطراف
                                </button>
                            </h2>
                            <div id="partiesCollapse" class="accordion-collapse collapse show" data-bs-parent="#caseAccordion">
                                <div class="accordion-body">
                                    <form>
                                        <div class="mb-3">
                                            <label class="form-label">المدعي</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">المدعى عليه</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="detailsHeading">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#detailsCollapse">
                                    <i class="fas fa-file-alt me-2"></i>
                                    تفاصيل القضية
                                </button>
                            </h2>
                            <div id="detailsCollapse" class="accordion-collapse collapse" data-bs-parent="#caseAccordion">
                                <div class="accordion-body">
                                    <form>
                                        <div class="mb-3">
                                            <label class="form-label">عنوان القضية</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">رقم القضية</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">تاريخ القضية</label>
                                            <input type="date" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">السجل</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">المحكمة</label>
                                            <select class="form-select">
                                                <option>اختر المحكمة</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="attachmentsHeading">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#attachmentsCollapse">
                                    <i class="fas fa-paperclip me-2"></i>
                                    المرفقات
                                </button>
                            </h2>
                            <div id="attachmentsCollapse" class="accordion-collapse collapse" data-bs-parent="#caseAccordion">
                                <div class="accordion-body">
                                    <form>
                                        <div class="mb-3">
                                            <label class="form-label">المرفقات</label>
                                            <input type="file" class="form-control" multiple>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
                    <button type="button" class="btn btn-primary">حفظ</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>
