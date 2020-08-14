@extends('layouts.dashboard')
@section('meta')
    <title>:: مدیریت باشگاه مشتریان مرکز کاشت فاطیما ::</title>
@endsection
@section('content')
    <section class="content home">

        <div class="block-header">

                @include('fragments.alerts')
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>داشبورد
                        <small class="text-muted">به قطب نما خوش آمدید</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-left m-r-10" type="button">
                        <i class="zmdi zmdi-plus"></i>
                    </button>
                    <ul class="breadcrumb float-md-left">
                        <li class="breadcrumb-item float-right"><a href="index.html"><i class="zmdi zmdi-home"></i> قطب نما</a></li>
                        <li class="breadcrumb-item active float-right">داشبورد 1</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="card widget_2">
                <ul class="row clearfix list-unstyled m-b-0">
                    <li class="col-lg-3 col-md-6 col-sm-12">
                        <div class="body">
                            <div class="row">
                                <div class="col-7">
                                    <h5 class="m-t-0">ترافیک</h5>
                                    <p class="text-small">4% بیشتر از ماه گذشته </p>
                                </div>
                                <div class="col-5 text-left">
                                    <h2 class="">20</h2>
                                    <small class="info">از 1TB </small>
                                </div>
                                <div class="col-12">
                                    <div class="progress m-t-20">
                                        <div class="progress-bar l-amber" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-3 col-md-6 col-sm-12">
                        <div class="body">
                            <div class="row">
                                <div class="col-7">
                                    <h5 class="m-t-0">فروش</h5>
                                    <p class="text-small">6%  بیشتر از ماه گذشته </p>
                                </div>
                                <div class="col-5 text-left">
                                    <h2 class="">12%</h2>
                                    <small class="info">از 100</small>
                                </div>
                                <div class="col-12">
                                    <div class="progress m-t-20">
                                        <div class="progress-bar l-blue" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" style="width: 38%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-3 col-md-6 col-sm-12">
                        <div class="body">
                            <div class="row">
                                <div class="col-7">
                                    <h5 class="m-t-0">ایمیل</h5>
                                    <p class="text-small"> کل ایمیل ثبت شده </p>
                                </div>
                                <div class="col-5 text-left">
                                    <h2 class="">39</h2>
                                    <small class="info">از 100</small>
                                </div>
                                <div class="col-12">
                                    <div class="progress m-t-20">
                                        <div class="progress-bar l-parpl" role="progressbar" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100" style="width: 39%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-3 col-md-6 col-sm-12">
                        <div class="body">
                            <div class="row">
                                <div class="col-7">
                                    <h5 class="m-t-0">دامنه ها</h5>
                                    <p class="text-small">کل دامنه های ثبت شده</p>
                                </div>
                                <div class="col-5 text-left">
                                    <h2 class="">8</h2>
                                    <small class="info">از 10 </small>
                                </div>
                                <div class="col-12">
                                    <div class="progress m-t-20">
                                        <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>گزارش<strong> فروش </strong></h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right slideUp float-right">
                                        <li><a href="javascript:void(0);">ویرایش</a></li>
                                        <li><a href="javascript:void(0);">حذف</a></li>
                                        <li><a href="javascript:void(0);">گزارش</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row text-center">
                                <div class="col-sm-3 col-6">
                                    <h4 class="m-t-0">106 تومان<i class="zmdi zmdi-trending-up col-green"></i></h4>
                                    <p class="text-muted">فروش امروز</p>
                                </div>
                                <div class="col-sm-3 col-6">
                                    <h4 class="m-t-0">907 تومان<i class="zmdi zmdi-trending-down col-red"></i></h4>
                                    <p class="text-muted">فروش این هفته</p>
                                </div>
                                <div class="col-sm-3 col-6">
                                    <h4 class="m-t-0">4210 تومان<i class="zmdi zmdi-trending-up col-green"></i></h4>
                                    <p class="text-muted">فروش این ماه </p>
                                </div>
                                <div class="col-sm-3 col-6">
                                    <h4 class="m-t-0">67000 تومان<i class="zmdi zmdi-trending-up col-green"></i></h4>
                                    <p class="text-muted">فروش امسال </p>
                                </div>
                            </div>
                            <div id="area_chart" class="graph"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                    <div class="card tasks_report">
                        <div class="body">
                            <input type="text" class="knob dial1" value="66" data-width="90" data-height="90" data-thickness="0.1" data-fgColor="#666" readonly>
                            <h6 class="m-t-20">میزان رضایتمندی</h6>
                            <p class="displayblock m-b-0">میانگین  47%<i class="zmdi zmdi-trending-up"></i></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                    <div class="card tasks_report">
                        <div class="body">
                            <input type="text" class="knob dial2" value="26" data-width="90" data-height="90" data-thickness="0.1" data-fgColor="#7b69ec" readonly>
                            <h6 class="m-t-20">پروژه های در انتظار</h6>
                            <p class="displayblock m-b-0">میانگین 13% <i class="zmdi zmdi-trending-down"></i></p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                    <div class="card tasks_report">
                        <div class="body">
                            <input type="text" class="knob dial3" value="76" data-width="90" data-height="90" data-thickness="0.1" data-fgColor="#f9bd53" readonly>
                            <h6 class="m-t-20">هدف بهره وری</h6>
                            <p class="displayblock m-b-0">میانگین 75% <i class="zmdi zmdi-trending-up"></i></p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                    <div class="card tasks_report">
                        <div class="body">
                            <input type="text" class="knob dial4" value="88" data-width="90" data-height="90" data-thickness="0.1" data-fgColor="#00adef" readonly>
                            <h6 class="m-t-20">درآمد کل</h6>
                            <p class="displayblock m-b-0">میانگین 54%  <i class="zmdi zmdi-trending-up"></i></p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-12 col-lg-8">
                    <div class="card visitors-map">
                        <div class="header">
                            <h2><strong>آمار  </strong> بازدید کنندگان</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right slideUp">
                                        <li><a href="javascript:void(0);">عملیات</a></li>
                                        <li><a href="javascript:void(0);">عملیات دیگر</a></li>
                                        <li><a href="javascript:void(0);">یک چیز دیگر</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="world-map-markers" class="jvector-map m-b-5"></div>
                            <div class="row clearfix">
                                <div class="col-lg-4 col-sm-6">
                                    <div class="progress-container m-b-20">
                                        <span class="progress-badge"> بازدید کننده از آمریکا </span>
                                        <div class="progress">
                                            <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                                <span class="progress-value">86%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="progress-container m-b-20">
                                        <span class="progress-badge"> بازدید کننده از کانادا </span>
                                        <div class="progress">
                                            <div class="progress-bar l-coral" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                                <span class="progress-value">86%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="progress-container m-b-20">
                                        <span class="progress-badge"> بازدید کننده از آسیا </span>
                                        <div class="progress">
                                            <div class="progress-bar l-blue" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                                <span class="progress-value">86%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="progress-container m-b-20">
                                        <span class="progress-badge"> بازدید کننده از آمریکا </span>
                                        <div class="progress">
                                            <div class="progress-bar l-salmon" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                                <span class="progress-value">86%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="progress-container m-b-20">
                                        <span class="progress-badge"> بازدید کننده از کانادا </span>
                                        <div class="progress">
                                            <div class="progress-bar l-parpl" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                                <span class="progress-value">86%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="progress-container m-b-20">
                                        <span class="progress-badge"> بازدید کننده از آسیا </span>
                                        <div class="progress">
                                            <div class="progress-bar l-amber" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                                <span class="progress-value">86%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>استفاده از </strong> مرورگر</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">عملیات</a></li>
                                        <li><a href="javascript:void(0);">عملیات دیگر</a></li>
                                        <li><a href="javascript:void(0);">یک چیز دیگر</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="donut_chart" class="dashboard-donut-chart"></div>
                            <table class="table m-t-15 m-b-0">
                                <tbody>
                                    <tr>
                                        <td>Chrome</td>
                                        <td>6985</td>
                                        <td><i class="zmdi zmdi-caret-up text-success"></i></td>
                                    </tr>
                                    <tr>
                                        <td>سایر</td>
                                        <td>2697</td>
                                        <td><i class="zmdi zmdi-caret-up text-success"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Safari</td>
                                        <td>3597</td>
                                        <td><i class="zmdi zmdi-caret-down text-danger"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Firefox</td>
                                        <td>2145</td>
                                        <td><i class="zmdi zmdi-caret-up text-success"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Opera</td>
                                        <td>1854</td>
                                        <td><i class="zmdi zmdi-caret-down text-danger"></i></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="card project_list">
                        <div class="header">
                            <h2>لیست <strong>محصولات</strong></h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">عملیات</a></li>
                                        <li><a href="javascript:void(0);">عملیات دیگر</a></li>
                                        <li><a href="javascript:void(0);">یک چیز دیگر</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th style="width:50px;">مورد</th>
                                            <th></th>
                                            <th>نام</th>
                                            <th class="hidden-md-down">تیم</th>
                                            <th class="hidden-md-down" width="150px">وضعیت</th>
                                            <th> اولویت </th>
                                            <th>تاریخ انقضا</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img class="rounded avatar" src="assets/images/xs/avatar1.jpg" alt="">
                                            </td>
                                            <td>
                                                <a class="single-user-name" href="#">رضا شفیعی</a><br>
                                                <small>مدیر پروژه </small>
                                            </td>
                                            <td>
                                                <strong>وب سایت تجاری</strong><br>
                                                <small>قیمت : 215 هزار تومان </small>
                                            </td>
                                            <td class="hidden-md-down">
                                                <ul class="list-unstyled team-info margin-0">
                                                    <li>
                                                        <img src="assets/images/xs/avatar2.jpg" alt="آواتار">
                                                    </li>
                                                    <li>
                                                        <img src="assets/images/xs/avatar3.jpg" alt="آواتار">
                                                    </li>
                                                    <li>
                                                        <img src="assets/images/xs/avatar4.jpg" alt="آواتار">
                                                    </li>
                                                    <li>
                                                        <img src="assets/images/xs/avatar6.jpg" alt="آواتار">
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="hidden-md-down">
                                                <div class="progress">
                                                    <div class="progress-bar l-blue" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-info"> متوسط</span></td>
                                            <td>25 مهر 1398 </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="rounded avatar" src="assets/images/xs/avatar2.jpg" alt="">
                                            </td>
                                            <td>
                                                <a class="single-user-name" href="#">سارا خانعلی</a><br>
                                                <small>مدیر طراحی</small>
                                            </td>
                                            <td>
                                                <strong>قالب سایت تک صفحه ای</strong><br>
                                                <small>قیمت : 100 هزار تومان </small>
                                            </td>
                                            <td class="hidden-md-down">
                                                <ul class="list-unstyled team-info margin-0">
                                                    <li>
                                                        <img src="assets/images/xs/avatar5.jpg" alt="آواتار">
                                                    </li>
                                                    <li>
                                                        <img src="assets/images/xs/avatar6.jpg" alt="آواتار">
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="hidden-md-down">
                                                <div class="progress">
                                                    <div class="progress-bar l-green" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success">زیاد</span></td>
                                            <td>21 مهر 1398</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="rounded avatar" src="assets/images/xs/avatar10.jpg" alt="">
                                            </td>
                                            <td>
                                                <a class="single-user-name" href="#">رضا حسینی</a><br>
                                                <small>توسعه دهنده سوییفت</small>
                                            </td>
                                            <td>
                                                <strong>بازی ios</strong><br>
                                                <small>قیمت : 890 هزار تومان</small>

                                            </td>
                                            <td class="hidden-md-down">
                                                <ul class="list-unstyled team-info margin-0">
                                                    <li>
                                                        <img src="assets/images/xs/avatar7.jpg" alt="آواتار">
                                                    </li>
                                                    <li>
                                                        <img src="assets/images/xs/avatar8.jpg" alt="آواتار">
                                                    </li>
                                                    <li>
                                                        <img src="assets/images/xs/avatar9.jpg" alt="آواتار">
                                                    </li>
                                                    <li>
                                                        <img src="assets/images/xs/avatar2.jpg" alt="آواتار">
                                                    </li>
                                                    <li>
                                                        <img src="assets/images/xs/avatar3.jpg" alt="آواتار">
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="hidden-md-down">
                                                <div class="progress">
                                                    <div class="progress-bar l-blue" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-info"> متوسط</span></td>
                                            <td>26 مهر 1398</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="rounded avatar" src="assets/images/xs/avatar4.jpg" alt="">
                                            </td>
                                            <td>
                                                <a class="single-user-name" href="#">حسین حسینی</a><br>
                                                <small>متخصص UI / UX</small>
                                            </td>
                                            <td>
                                                <strong>بازاریابی اینترنتی</strong><br>
                                                <small>قیمت  : 600 هزار تومان </small>
                                            </td>
                                            <td class="hidden-md-down">
                                                <ul class="list-unstyled team-info margin-0">
                                                    <li>
                                                        <img src="assets/images/xs/avatar2.jpg" alt="آواتار">
                                                    </li>
                                                    <li>
                                                        <img src="assets/images/xs/avatar3.jpg" alt="آواتار">
                                                    </li>
                                                    <li>
                                                        <img src="assets/images/xs/avatar6.jpg" alt="آواتار">
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="hidden-md-down">
                                                <div class="progress">
                                                    <div class="progress-bar l-amber" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width: 28%;"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-warning">در انتظار</span></td>
                                            <td>12 مهر 1398</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="rounded avatar" src="assets/images/xs/avatar5.jpg" alt="">
                                            </td>
                                            <td>
                                                <a class="single-user-name" href="#">طاهره صفری</a><br>
                                                <small>توسعه دهنده آنگولار</small>
                                            </td>
                                            <td>
                                                <strong>مدیریت بیمارستان</strong><br>
                                                <small>میزان حقوق : ساعتی 30 هزار تومان</small>
                                            </td>
                                            <td class="hidden-md-down">
                                                <ul class="list-unstyled team-info  margin-0">
                                                    <li>
                                                        <img src="assets/images/xs/avatar8.jpg" alt="آواتار">
                                                    </li>
                                                    <li>
                                                        <img src="assets/images/xs/avatar3.jpg" alt="آواتار">
                                                    </li>
                                                    <li>
                                                        <img src="assets/images/xs/avatar4.jpg" alt="آواتار">
                                                    </li>
                                                    <li>
                                                        <img src="assets/images/xs/avatar6.jpg" alt="آواتار">
                                                    </li>
                                                    <li>
                                                        <img src="assets/images/xs/avatar1.jpg" alt="آواتار">
                                                    </li>
                                                    <li>
                                                        <img src="assets/images/xs/avatar2.jpg" alt="آواتار">
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="hidden-md-down">
                                                <div class="progress">
                                                    <div class="progress-bar l-coral" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-primary">کم</span></td>
                                            <td> 27 مهر 1398 </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12">
                    <div class="card weather2">
                        <div class="city-selected body l-salmon">
                            <div class="row">
                                <div class="info col-7">
                                    <div class="city"><span> شهر: </span> تهران </div>
                                    <div class="night">روز - 12:07 ب.ظ </div>
                                    <div class="temp"><h2>34°</h2></div>
                                </div>
                                <div class="icon col-5">
                                    <img src="assets/images/weather/summer.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped m-b-0">
                            <tbody>
                                <tr>
                                    <td> باد </td>
                                    <td class="font-medium">ESE 17 mph</td>
                                </tr>
                                <tr>
                                    <td> رطوبت </td>
                                    <td class="font-medium">72%</td>
                                </tr>
                                <tr>
                                    <td> فشار </td>
                                    <td class="font-medium">25.56 in</td>
                                </tr>
                                <tr>
                                    <td>پوشش ابر</td>
                                    <td class="font-medium">80%</td>
                                </tr>
                                <tr>
                                    <td> حد پرواز</td>
                                    <td class="font-medium">25280 ft</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item text-center active">
                                    <div class="col-12">
                                        <ul class="row days-list list-unstyled">
                                            <li class="day col-4">
                                                <p>شنبه</p>
                                                <img src="assets/images/weather/rain.svg" alt="">
                                            </li>
                                            <li class="day col-4">
                                                <p>یک شنبه</p>
                                                <img src="assets/images/weather/cloudy.svg" alt="">
                                            </li>
                                            <li class="day col-4">
                                                <p>دو شنبه</p>
                                                <img src="assets/images/weather/wind.svg" alt="">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="carousel-item text-center">
                                    <div class="col-12">
                                        <ul class="row days-list list-unstyled">
                                            <li class="day col-4">
                                                <p>سه شنبه</p>
                                                <img src="assets/images/weather/sky.svg" alt="">
                                            </li>
                                            <li class="day col-4">
                                                <p>چهار شنبه</p>
                                                <img src="assets/images/weather/cloudy.svg" alt="">
                                            </li>
                                            <li class="day col-4">
                                                <p>پنج شنبه</p>
                                                <img src="assets/images/weather/summer.svg" alt="">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="row clearfix">
                        <div class="col-lg-12">
                            <div class="card">
                                <ul class="row profile_state list-unstyled">
                                    <li class="col-lg-3 col-md-3 col-6">
                                        <div class="body">
                                            <i class="zmdi zmdi-eye col-amber"></i>
                                            <h4>2,365</h4>
                                            <span>نمایش پست</span>
                                        </div>
                                    </li>
                                    <li class="col-lg-3 col-md-3 col-6">
                                        <div class="body">
                                            <i class="zmdi zmdi-thumb-up col-blue"></i>
                                            <h4>365</h4>
                                            <span>لایک</span>
                                        </div>
                                    </li>
                                    <li class="col-lg-3 col-md-3 col-6">
                                        <div class="body">
                                            <i class="zmdi zmdi-comment-text col-red"></i>
                                            <h4>65</h4>
                                            <span>نظرات</span>
                                        </div>
                                    </li>
                                    <li class="col-lg-3 col-md-3 col-6">
                                        <div class="body">
                                            <i class="zmdi zmdi-account text-success"></i>
                                            <h4>2,055</h4>
                                            <span>بازدید از پروفایل</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card activities">
                                <div class="header">
                                    <h2><strong> فعالیتها </strong> <small> فعالیت های اخیر کاربر </small></h2>
                                </div>
                                <div class="body">
                                    <ul class="list-unstyled activity">
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="zmdi zmdi-cake bg-blue"></i>
                                                <div class="info">
                                                    <h4> تولد مدیر </h4>
                                                    <small>21 آبان خواهد بود </small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="zmdi zmdi-file-text bg-red"></i>
                                                <div class="info">
                                                    <h4> تغییر کد </h4>
                                                    <small>22 آبان خواهد بود </small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="zmdi zmdi-account-box-phone bg-green"></i>
                                                <div class="info">
                                                    <h4> مخاطب جدید اضافه کنید </h4>
                                                    <small>23 آذر خواهد بود </small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="zmdi zmdi-email bg-amber"></i>
                                                <div class="info">
                                                    <h4>ایمیل جدید</h4>
                                                    <small>28 دی خواهد بود </small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="zmdi zmdi-account-box-phone bg-green"></i>
                                                <div class="info">
                                                    <h4> مخاطب جدید اضافه کنید </h4>
                                                    <small>23 آذر خواهد بود </small>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card">
                                <div class="header">
                                    <h2>بررسی
                                        <strong> فروش </strong></h2>
                                        <ul class="header-dropdown">
                                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                                <ul class="dropdown-menu dropdown-menu-right slideUp float-right">
                                                    <li><a href="javascript:void(0);">ویرایش</a></li>
                                                    <li><a href="javascript:void(0);">حذف</a></li>
                                                    <li><a href="javascript:void(0);">گزارش</a></li>
                                                </ul>
                                            </li>
                                            <li class="remove">
                                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="body">
                                        <div id="m_area_chart2" style="height: 290px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
