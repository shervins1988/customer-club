@extends('layouts.dashboard')

@section('meta')
<title>::ثبت مشتری جدید ::</title>
@endsection

@section('content')
<section class="content home">
    <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2> افزودن مشتری جدید
                    <small class="text-muted">به قطب نما خوش آمدید</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-left">
                        <li class="breadcrumb-item float-right"><a href="index.html"><i class="zmdi zmdi-home"></i>باشگاه مشتریان</a></li>
                        <li class="breadcrumb-item float-right"><a href="javascript:void(0);">افزودن مشتری جدید</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">

                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="header">
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
                            <form class="row" action="{{url('customers')}}" method="post">
                                <div class="body">
                                <div class="demo-masked-input">
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-6"> <b>نام</b>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="نام" />
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6"> <b>نام خانوادگی</b>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="نام خانوادگی" />
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6"> <b>جنسیت</b>
                                            <select class="form-control show-tick">
                                                <option>مرد</option>
                                                <option>زن</option>
                                                </select>
                                        </div>
                                        <div class="col-lg-4 col-md-6"> <b>تاریخ تولد</b>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="zmdi zmdi-calendar"></i>
                                                </span>
                                                <input type="text" class="form-control datetimepicker" placeholder="لطفا تاریخ تولد را وارد نمایید...">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6"> <b>شماره همراه</b>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="zmdi zmdi-smartphone"></i></span>
                                                <input type="text" class="form-control mobile-phone-number" placeholder="مثال : +00 (000) 000-00-00">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6"> <b>شماره کارت</b>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="zmdi zmdi-card"></i></span>
                                                <input type="text" class="form-control credit-card" placeholder="مثال : 0000 0000 0000 0000">
                                            </div>
                                        </div>


                                        <div class="col-lg-4 col-md-6"> <b>کاربر معرف</b>
                                            <div class="input-group spinner" data-trigger="spinner">
                                        <input type="text" class="form-control text-center" value="1" data-rule="quantity">
                                        <span class="input-group-addon"> <a href="javascript:void(0);" class="spin-up" data-spin="up"><i class="zmdi zmdi-caret-up"></i></a> <a href="javascript:void(0);" class="spin-down" data-spin="down"><i class="zmdi zmdi-caret-down"></i></a> </span>
                                    </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6"> <b>شماره اختصاصی</b>
                                            <div class="input-group spinner" data-trigger="spinner">
                                            <input type="text" class="form-control text-center" value="1" data-rule="quantity">
                                            <span class="input-group-addon"> <a href="javascript:void(0);" class="spin-up" data-spin="up"><i class="zmdi zmdi-caret-up"></i></a> <a href="javascript:void(0);" class="spin-down" data-spin="down"><i class="zmdi zmdi-caret-down"></i></a> </span>
                                        </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6"> <b>جستجوی کارت</b>
                                            <div class="form-group">
                                            <input type="text" class="form-control" placeholder="جستجوی کارت">
                                        </div>
                                        </div>

                                        <div class="col-md-12"> <b>آدرس </b>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="آدرس">
                                                    </div>
                                                </div>

                                        </div>
                                        <div class="row clearfix">
                                        <div class="col-md-6"> <b>رمز</b>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="رمز">
                                                </div>
                                        </div>
                                        <div class="col-md-6"> <b>تایید رمز</b>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="تایید رمز">
                                                </div>
                                        </div>
                                        <div class="col-lg-12 col-md-6"> <b>یادداشت</b>
                                            <div class="form-group">
                                                <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" placeholder="یادداشت یا توضیح برای این کاربر ..."></textarea>
                                    </div>

                                        </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6"> <b>گروه</b>
                                            <div class="form-group">
                                                <select class="form-control show-tick">
                                                    <option value="">-- لطفا انتخاب کنید --</option>
                                                    <option value="10">مشتریان برنزی</option>
                                                    <option value="20">مشتریان نقره ای</option>
                                                    <option value="30">مشتریان طلایی</option>
                                                    <option value="40">مشتریان طلایی اختصاصی</option>
                                                    <option value="50">مشتریان قدیمی</option>
                                                </select>
                                    </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6"> <b>شماره کارت</b>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="zmdi zmdi-card"></i></span>
                                                <input type="text" class="form-control credit-card" placeholder="مثال : 0000 0000 0000 0000">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6"><b>اپلود عکس کاربر</b>
                                            <div class="form-group">
                                                <input id="file_name" class="form-control" name="file_name" type="file">
                                            </div>
                                        </div>
                                        </div>

                                    </div>


                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

        </div>
</section>
    <!-- Masked Input -->




    <!-- #END# Masked Input -->
@endsection
