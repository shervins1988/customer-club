@extends('layouts.dashboard')

@section('meta')
<title>::ثبت مشتری جدید ::</title>
@endsection

@section('content')
<section class="content home">
    <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2> عناصر فرم پیشرفته
                    <small class="text-muted">به قطب نما خوش آمدید</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-left">
                        <li class="breadcrumb-item float-right"><a href="index.html"><i class="zmdi zmdi-home"></i> قطب نما</a></li>
                        <li class="breadcrumb-item float-right"><a href="javascript:void(0);">فرم ها</a></li>
                        <li class="breadcrumb-item active float-right"> عناصر فرم پیشرفته </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">

                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Masked</strong> Input <small>گرفته شده از :<a href="https://github.com/RobinHerbots/jquery.inputmask" target="_blank">github.com/RobinHerbots/jquery.inputmask</a></small> </h2>
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
                                <div class="demo-masked-input">
                                    <div class="row clearfix">
                                        <div class="col-lg-3 col-md-6"> <b>تاریخ</b>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i> </span>
                                                <input type="text" class="form-control date" placeholder="مثال : 03/04/1397">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6"> <b>زمان (24 ساعته )</b>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="zmdi zmdi-time"></i></span>
                                                <input type="text" class="form-control time24" placeholder="مثال : 23:56">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6"> <b>زمان (12 ساعته )</b>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="zmdi zmdi-time"></i></span>
                                                <input type="text" class="form-control time12" placeholder="مثال : 11:54 ب.ظ">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6"> <b>تاریخ و زمان</b>
                                            <div class="input-group">
                                                <span class="input-group-addon"> <i class="zmdi zmdi-calendar-note"></i></span>
                                                <input type="text" class="form-control datetime" placeholder="مثال : 09/05/1398 20:09">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6"> <b>شماره موبایل</b>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="zmdi zmdi-smartphone"></i></span>
                                                <input type="text" class="form-control mobile-phone-number" placeholder="مثال : +00 (000) 000-00-00">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6"> <b>شماره تلفن</b>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="zmdi zmdi-phone"></i></span>
                                                <input type="text" class="form-control mobile-phone-number" placeholder="مثال : +00 (000) 000-00-00">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6"> <b>پول (دلار) </b>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="zmdi zmdi-money"></i></span>
                                                <input type="text" class="form-control money-dollar" placeholder="مثال : 7770 دلار">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6"> <b>IP آدرس</b>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="zmdi zmdi-laptop"></i></span>
                                                <input type="text" class="form-control ip" placeholder="مثال : 255.255.255.255">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6"> <b>کارت اعتباری</b>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="zmdi zmdi-card"></i></span>
                                                <input type="text" class="form-control credit-card" placeholder="مثال : 0000 0000 0000 0000">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6"> <b>آدرس ایمیل</b>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                                                <input type="text" class="form-control email" placeholder="مثال : example@example.com">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6"> <b>شماره سریال</b>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="zmdi zmdi-key"></i></span>
                                                <input type="text" class="form-control key" placeholder="مثال : XXX0-XXXX-XX00-0XXX">
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
    <!-- Masked Input -->




    <!-- #END# Masked Input -->
@endsection
