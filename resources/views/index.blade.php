@extends('layouts.master')
@section('css')
<!--  Owl-carousel css-->
<link href="{{asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />
<!-- Maps css -->
<link href="{{asset('assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="left-content">
        <div>
            <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">مرحبًا، أهلاً بعودتك!</h2>
            <p class="mg-b-0">قالب لوحة متابعة المبيعات.</p>
        </div>
    </div>
    <div class="main-dashboard-header-right">
        <div>
            <label class="tx-13">تقييمات العملاء</label>
            <div class="main-star">
                <i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i
                    class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i
                    class="typcn typcn-star"></i> <span>(14,873)</span>
            </div>
        </div>
        <div>
            <label class="tx-13">المبيعات عبر الإنترنت</label>
            <h5>563,275</h5>
        </div>
        <div>
            <label class="tx-13">المبيعات خارج الإنترنت</label>
            <h5>783,675</h5>
        </div>
    </div>
</div>
<!-- /breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row row-sm">
    <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
        <div class="card overflow-hidden sales-card bg-primary-gradient">
            <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                <div class="">
                    <h6 class="mb-3 tx-12 text-white">طلبات اليوم</h6>
                </div>
                <div class="pb-0 mt-0">
                    <div class="d-flex">
                        <div class="">
                            <h4 class="tx-20 font-weight-bold mb-1 text-white">$5,74.12</h4>
                            <p class="mb-0 tx-12 text-white op-7">مقارنة بالأسبوع الماضي</p>
                        </div>
                        <span class="float-right my-auto mr-auto">
                            <i class="fas fa-arrow-circle-up text-white"></i>
                            <span class="text-white op-7"> +427</span>
                        </span>
                    </div>
                </div>
            </div>
            <span id="compositeline" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
        <div class="card overflow-hidden sales-card bg-danger-gradient">
            <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                <div class="">
                    <h6 class="mb-3 tx-12 text-white">أرباح اليوم</h6>
                </div>
                <div class="pb-0 mt-0">
                    <div class="d-flex">
                        <div class="">
                            <h4 class="tx-20 font-weight-bold mb-1 text-white">$1,230.17</h4>
                            <p class="mb-0 tx-12 text-white op-7">مقارنة بالأسبوع الماضي</p>
                        </div>
                        <span class="float-right my-auto mr-auto">
                            <i class="fas fa-arrow-circle-down text-white"></i>
                            <span class="text-white op-7"> -23.09%</span>
                        </span>
                    </div>
                </div>
            </div>
            <span id="compositeline2" class="pt-1">3,2,4,6,12,14,8,7,14,16,12,7,8,4,3,2,2,5,6,7</span>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
        <div class="card overflow-hidden sales-card bg-success-gradient">
            <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                <div class="">
                    <h6 class="mb-3 tx-12 text-white">إجمالي الأرباح</h6>
                </div>
                <div class="pb-0 mt-0">
                    <div class="d-flex">
                        <div class="">
                            <h4 class="tx-20 font-weight-bold mb-1 text-white">$7,125.70</h4>
                            <p class="mb-0 tx-12 text-white op-7">مقارنة بالأسبوع الماضي</p>
                        </div>
                        <span class="float-right my-auto mr-auto">
                            <i class="fas fa-arrow-circle-up text-white"></i>
                            <span class="text-white op-7"> 52.09%</span>
                        </span>
                    </div>
                </div>
            </div>
            <span id="compositeline3" class="pt-1">5,10,5,20,22,12,15,18,20,15,8,12,22,5,10,12,22,15,16,10</span>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
        <div class="card overflow-hidden sales-card bg-warning-gradient">
            <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                <div class="">
                    <h6 class="mb-3 tx-12 text-white">المنتجات المباعة</h6>
                </div>
                <div class="pb-0 mt-0">
                    <div class="d-flex">
                        <div class="">
                            <h4 class="tx-20 font-weight-bold mb-1 text-white">$4,820.50</h4>
                            <p class="mb-0 tx-12 text-white op-7">مقارنة بالأسبوع الماضي</p>
                        </div>
                        <span class="float-right my-auto mr-auto">
                            <i class="fas fa-arrow-circle-down text-white"></i>
                            <span class="text-white op-7"> -152.3</span>
                        </span>
                    </div>
                </div>
            </div>
            <span id="compositeline4" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
        </div>
    </div>
</div>
<!-- row closed -->

<!-- row opened -->
<div class="row row-sm">
    <div class="col-md-12 col-lg-12 col-xl-7">
        <div class="card">
            <div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mb-0">حالة الطلب</h4>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
                <p class="tx-12 text-muted mb-0">حالة الطلب والتتبع. تتبع طلبك من تاريخ الشحن حتى الوصول. للبدء، أدخل
                    رقم طلبك.</p>
            </div>
            <div class="card-body">
                <div class="total-revenue">
                    <div>
                        <h4>120,750</h4>
                        <label><span class="bg-primary"></span>نجاح</label>
                    </div>
                    <div>
                        <h4>56,108</h4>
                        <label><span class="bg-danger"></span>قيد الانتظار</label>
                    </div>
                    <div>
                        <h4>32,895</h4>
                        <label><span class="bg-warning"></span>فشل</label>
                    </div>
                </div>
                <div id="bar" class="sales-bar mt-4"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-xl-5">
        <div class="card card-dashboard-map-one">
            <label class="main-content-label">إيرادات المبيعات حسب العملاء في الولايات المتحدة</label>
            <span class="d-block mg-b-20 text-muted tx-12">أداء المبيعات لجميع الولايات في الولايات المتحدة</span>
            <div class="">
                <div class="vmap-wrapper ht-180" id="vmap2"></div>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->

<!-- row opened -->
<div class="row row-sm">
    <div class="col-xl-4 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header pb-1">
                <h3 class="card-title mb-2">العملاء الأخيرون</h3>
                <p class="tx-12 mb-0 text-muted">العميل هو فرد أو شركة تشتري السلع أو الخدمات وقد تطور ليشمل الوقت
                    الحقيقي</p>
            </div>
            <div class="card-body p-0 customers mt-1">
                <div class="list-group list-lg-group list-group-flush">
                    <div class="list-group-item list-group-item-action" href="#">
                        <div class="media mt-0">
                            <img class="avatar-lg rounded-circle ml-3 my-auto" src="{{asset('assets/img/faces/3.jpg')}}"
                                alt="Image description">
                            <div class="media-body">
                                <div class="d-flex align-items-center">
                                    <div class="mt-0">
                                        <h5 class="mb-1 tx-15">سامانثا ميلون</h5>
                                        <p class="mb-0 tx-13 text-muted">معرف المستخدم: #1234 <span
                                                class="text-success ml-2">مدفوع</span></p>
                                    </div>
                                    <span class="mr-auto wd-45p fs-16 mt-2">
                                        <div id="spark1" class="wd-100p"></div>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item list-group-item-action" href="#">
                        <div class="media mt-0">
                            <img class="avatar-lg rounded-circle ml-3 my-auto"
                                src="{{asset('assets/img/faces/11.jpg')}}" alt="Image description">
                            <div class="media-body">
                                <div class="d-flex align-items-center">
                                    <div class="mt-1">
                                        <h5 class="mb-1 tx-15">جيمي تشانغا</h5>
                                        <p class="mb-0 tx-13 text-muted">معرف المستخدم: #1234 <span
                                                class="text-danger ml-2">قيد الانتظار</span></p>
                                    </div>
                                    <span class="mr-auto wd-45p fs-16 mt-2">
                                        <div id="spark2" class="wd-100p"></div>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item list-group-item-action" href="#">
                        <div class="media mt-0">
                            <img class="avatar-lg rounded-circle ml-3 my-auto"
                                src="{{asset('assets/img/faces/17.jpg')}}" alt="Image description">
                            <div class="media-body">
                                <div class="d-flex align-items-center">
                                    <div class="mt-1">
                                        <h5 class="mb-1 tx-15">غابي لاكمان</h5>
                                        <p class="mb-0 tx-13 text-muted">معرف المستخدم: #1234<span
                                                class="text-danger ml-2">قيد الانتظار</span></p>
                                    </div>
                                    <span class="mr-auto wd-45p fs-16 mt-2">
                                        <div id="spark3" class="wd-100p"></div>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item list-group-item-action" href="#">
                        <div class="media mt-0">
                            <img class="avatar-lg rounded-circle ml-3 my-auto"
                                src="{{asset('assets/img/faces/15.jpg')}}" alt="Image description">
                            <div class="media-body">
                                <div class="d-flex align-items-center">
                                    <div class="mt-1">
                                        <h5 class="mb-1 tx-15">مانويل لابور</h5>
                                        <p class="mb-0 tx-13 text-muted">معرف المستخدم: #1234<span
                                                class="text-success ml-2">مدفوع</span></p>
                                    </div>
                                    <span class="mr-auto wd-45p fs-16 mt-2">
                                        <div id="spark4" class="wd-100p"></div>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item list-group-item-action br-br-7 br-bl-7" href="#">
                        <div class="media mt-0">
                            <img class="avatar-lg rounded-circle ml-3 my-auto" src="{{asset('assets/img/faces/6.jpg')}}"
                                alt="Image description">
                            <div class="media-body">
                                <div class="d-flex align-items-center">
                                    <div class="mt-1">
                                        <h5 class="mb-1 tx-15">شارون نيدلز</h5>
                                        <p class="b-0 tx-13 text-muted mb-0">معرف المستخدم: #1234<span
                                                class="text-success ml-2">مدفوع</span></p>
                                    </div>
                                    <span class="mr-auto wd-45p fs-16 mt-2">
                                        <div id="spark5" class="wd-100p"></div>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-12 col-lg-6">
        <div class="card">
            <div class="card-header pb-1">
                <h3 class="card-title mb-2">نشاط المبيعات</h3>
                <p class="tx-12 mb-0 text-muted">أنشطة المبيعات هي التكتيكات التي يستخدمها مندوبو المبيعات لتحقيق
                    أهدافهم</p>
            </div>
            <div class="product-timeline card-body pt-2 mt-1">
                <ul class="timeline-1 mb-0">
                    <li class="mt-0"> <i class="ti-pie-chart bg-primary-gradient text-white product-icon"></i> <span
                            class="font-weight-semibold mb-4 tx-14 ">إجمالي المنتجات</span> <a href="#"
                            class="float-left tx-11 text-muted">منذ 3 أيام</a>
                        <p class="mb-0 text-muted tx-12">1.3k منتج جديد</p>
                    </li>
                    <li class="mt-0"> <i class="mdi mdi-cart-outline bg-danger-gradient text-white product-icon"></i>
                        <span class="font-weight-semibold mb-4 tx-14 ">إجمالي المبيعات</span> <a href="#"
                            class="float-left tx-11 text-muted">منذ 35 دقيقة</a>
                        <p class="mb-0 text-muted tx-12">1k مبيعات جديدة</p>
                    </li>
                    <li class="mt-0"> <i class="ti-bar-chart-alt bg-success-gradient text-white product-icon"></i> <span
                            class="font-weight-semibold mb-4 tx-14 ">إجمالي الإيرادات</span> <a href="#"
                            class="float-left tx-11 text-muted">منذ 50 دقيقة</a>
                        <p class="mb-0 text-muted tx-12">23.5K إيرادات جديدة</p>
                    </li>
                    <li class="mt-0"> <i class="ti-wallet bg-warning-gradient text-white product-icon"></i> <span
                            class="font-weight-semibold mb-4 tx-14 ">إجمالي الربح</span> <a href="#"
                            class="float-left tx-11 text-muted">منذ ساعة واحدة</a>
                        <p class="mb-0 text-muted tx-12">3k ربح جديد</p>
                    </li>
                    <li class="mt-0"> <i class="si si-eye bg-purple-gradient text-white product-icon"></i> <span
                            class="font-weight-semibold mb-4 tx-14 ">زيارات العملاء</span> <a href="#"
                            class="float-left tx-11 text-muted">منذ يوم واحد</a>
                        <p class="mb-0 text-muted tx-12">15% زيادة</p>
                    </li>
                    <li class="mt-0 mb-0"> <i class="icon-note icons bg-primary-gradient text-white product-icon"></i>
                        <span class="font-weight-semibold mb-4 tx-14 ">تقييمات العملاء</span> <a href="#"
                            class="float-left tx-11 text-muted">منذ يوم واحد</a>
                        <p class="mb-0 text-muted tx-12">1.5k تقييم</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-12 col-lg-6">
        <div class="card">
            <div class="card-header pb-0">
                <h3 class="card-title mb-2">الطلبات الأخيرة</h3>
                <p class="tx-12 mb-0 text-muted">الطلب هو تعليمات المستثمر إلى الوسيط أو شركة الوساطة لشراء أو بيع</p>
            </div>
            <div class="card-body sales-info ot-0 pt-0 pb-0">
                <div id="chart" class="ht-150"></div>
                <div class="row sales-infomation pb-0 mb-0 mx-auto wd-100p">
                    <div class="col-md-6 col">
                        <p class="mb-0 d-flex"><span class="legend bg-primary brround"></span>تم التسليم</p>
                        <h3 class="mb-1">5238</h3>
                        <div class="d-flex">
                            <p class="text-muted ">آخر 6 أشهر</p>
                        </div>
                    </div>
                    <div class="col-md-6 col">
                        <p class="mb-0 d-flex"><span class="legend bg-info brround"></span>تم الإلغاء</p>
                        <h3 class="mb-1">3467</h3>
                        <div class="d-flex">
                            <p class="text-muted">آخر 6 أشهر</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card ">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center pb-2">
                            <p class="mb-0">إجمالي المبيعات</p>
                        </div>
                        <h4 class="font-weight-bold mb-2">$7,590</h4>
                        <div class="progress progress-style progress-sm">
                            <div class="progress-bar bg-primary-gradient wd-80p" role="progressbar" aria-valuenow="78"
                                aria-valuemin="0" aria-valuemax="78"></div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="d-flex align-items-center pb-2">
                            <p class="mb-0">المستخدمون النشطون</p>
                        </div>
                        <h4 class="font-weight-bold mb-2">$5,460</h4>
                        <div class="progress progress-style progress-sm">
                            <div class="progress-bar bg-danger-gradient wd-75" role="progressbar" aria-valuenow="45"
                                aria-valuemin="0" aria-valuemax="45"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- row close -->

<!-- row opened -->
<div class="row row-sm row-deck">
    <div class="col-md-12 col-lg-4 col-xl-4">
        <div class="card card-dashboard-eight pb-2">
            <h6 class="card-title">أفضل الدول لديك</h6><span class="d-block mg-b-10 text-muted tx-12">أداء الإيرادات
                بناءً على الدولة</span>
            <div class="list-group">
                <div class="list-group-item border-top-0">
                    <i class="flag-icon flag-icon-us flag-icon-squared"></i>
                    <p>الولايات المتحدة</p><span>$1,671.10</span>
                </div>
                <div class="list-group-item">
                    <i class="flag-icon flag-icon-nl flag-icon-squared"></i>
                    <p>هولندا</p><span>$1,064.75</span>
                </div>
                <div class="list-group-item">
                    <i class="flag-icon flag-icon-gb flag-icon-squared"></i>
                    <p>المملكة المتحدة</p><span>$1,055.98</span>
                </div>
                <div class="list-group-item">
                    <i class="flag-icon flag-icon-ca flag-icon-squared"></i>
                    <p>كندا</p><span>$1,045.49</span>
                </div>
                <div class="list-group-item">
                    <i class="flag-icon flag-icon-in flag-icon-squared"></i>
                    <p>الهند</p><span>$1,930.12</span>
                </div>
                <div class="list-group-item border-bottom-0 mb-0">
                    <i class="flag-icon flag-icon-au flag-icon-squared"></i>
                    <p>أستراليا</p><span>$1,042.00</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-8 col-xl-8">
        <div class="card card-table-two">
            <div class="d-flex justify-content-between">
                <h4 class="card-title mb-1">أحدث أرباحك</h4>
                <i class="mdi mdi-dots-horizontal text-gray"></i>
            </div>
            <span class="tx-12 tx-muted mb-3 ">هذه هي أحدث أرباحك لتاريخ اليوم.</span>
            <div class="table-responsive country-table">
                <table class="table table-striped table-bordered mb-0 text-sm-nowrap text-lg-nowrap text-xl-nowrap">
                    <thead>
                        <tr>
                            <th class="wd-lg-25p">التاريخ</th>
                            <th class="wd-lg-25p tx-right">عدد المبيعات</th>
                            <th class="wd-lg-25p tx-right">الأرباح</th>
                            <th class="wd-lg-25p tx-right">الضرائب المقتطعة</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>05 ديسمبر 2019</td>
                            <td class="tx-right tx-medium tx-inverse">34</td>
                            <td class="tx-right tx-medium tx-inverse">$658.20</td>
                            <td class="tx-right tx-medium tx-danger">-$45.10</td>
                        </tr>
                        <tr>
                            <td>06 ديسمبر 2019</td>
                            <td class="tx-right tx-medium tx-inverse">26</td>
                            <td class="tx-right tx-medium tx-inverse">$453.25</td>
                            <td class="tx-right tx-medium tx-danger">-$15.02</td>
                        </tr>
                        <tr>
                            <td>07 ديسمبر 2019</td>
                            <td class="tx-right tx-medium tx-inverse">34</td>
                            <td class="tx-right tx-medium tx-inverse">$653.12</td>
                            <td class="tx-right tx-medium tx-danger">-$13.45</td>
                        </tr>
                        <tr>
                            <td>08 ديسمبر 2019</td>
                            <td class="tx-right tx-medium tx-inverse">45</td>
                            <td class="tx-right tx-medium tx-inverse">$546.47</td>
                            <td class="tx-right tx-medium tx-danger">-$24.22</td>
                        </tr>
                        <tr>
                            <td>09 ديسمبر 2019</td>
                            <td class="tx-right tx-medium tx-inverse">31</td>
                            <td class="tx-right tx-medium tx-inverse">$425.72</td>
                            <td class="tx-right tx-medium tx-danger">-$25.01</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /row -->
</div>
</div>
<!-- Container closed -->
@endsection
@section('js')
<!--Internal  Chart.bundle js -->
<script src="{{asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
<!-- Moment js -->
<script src="{{asset('assets/plugins/raphael/raphael.min.js')}}"></script>
<!--Internal  Flot js-->
<script src="{{asset('assets/plugins/jquery.flot/jquery.flot.js')}}"></script>
<script src="{{asset('assets/plugins/jquery.flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('assets/plugins/jquery.flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('assets/plugins/jquery.flot/jquery.flot.categories.js')}}"></script>
<script src="{{asset('assets/js/dashboard.sampledata.js')}}"></script>
<script src="{{asset('assets/js/chart.flot.sampledata.js')}}"></script>
<!--Internal Apexchart js-->
<script src="{{asset('assets/js/apexcharts.js')}}"></script>
<!-- Internal Map -->
<script src="{{asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<script src="{{asset('assets/js/modal-popup.js')}}"></script>
<!--Internal  index js -->
<script src="{{asset('assets/js/index.js')}}"></script>
<script src="{{asset('assets/js/jquery.vmap.sampledata.js')}}"></script>
@endsection
