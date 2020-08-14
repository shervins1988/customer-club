@extends('layouts.dashboard')

@section('meta')
    <title>::ثبت مشتری جدید ::</title>
@endsection

@section('content')
    <section class="content home">

        <div class="block-header">
            @include('fragments.alerts')
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
                        <form class="row mx-auto" action="{{url('customers')}}" method="post">
                            @csrf
                            <div class="col-md-4  form-group">
                                <label for="name">نام</label>
                                <input type="text" name="name" value="{{old('name')}}" id="name" class="form-control">
                            </div>

                            <div class="col-md-4 form-group">
                                <label for="last_name">نام خانوادگی</label>
                                <input type="text" name="last_name" value="{{old('last_name')}}" id="last_name" class="form-control">
                            </div>

                            <div class="col-md-4 form-group">

                                <label class="d-block"> جنسیت </label>
                                <div class=" form-control text-center">
                                    <div class="radio inlineblock m-l-20">
                                        <input type="radio" name="male" id="male" class="with-gap" value="0" @if (old('male')&& old('male') === "0") checked @endif>
                                            <label for="male">آقا</label>
                                        </div>
                                        <div class="radio inlineblock">
                                            <input type="radio" name="male" id="Female" class="with-gap" value="1" @if (old('male')&& old('male') === "1") checked @endif>
                                                <label for="Female">خانم</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4  form-group">
                                        <label for="birthday">تاریخ تولد</label>
                                        <input type="text" name="birthday" value="{{old('birthday')}}"  id="birthday" class="form-control  pdp" autocomplete="off"  placeholder="لطفا تاریخ تولد را وارد نمایید...">
                                    </div>

                                    <div class="col-md-4  form-group">
                                        <label for="mobile">تلفن همراه</label>
                                        <input type="text" name="mobile" value="{{old('mobile')}}" id="mobile" class="form-control mobile-phone-number"  placeholder="مثال : +00 (000) 000-00-00">
                                    </div>

                                    <div class="col-md-4  form-group">
                                        <label for="mobile">شماره کارت عضویت</label>
                                        <input type="text" class="form-control credit-card" placeholder="مثال : 0000 0000 0000 0000">
                                    </div>

                                    <div class="col-md-4  form-group">
                                        <label for="mobile">کاربر معرف</label>
                                        <div class="input-group spinner" data-trigger="spinner">
                                            <input type="text" class="form-control text-center" value="1" data-rule="quantity">
                                            <span class="input-group-addon"> <a href="javascript:void(0);" class="spin-up" data-spin="up"><i class="zmdi zmdi-caret-up"></i></a> <a href="javascript:void(0);" class="spin-down" data-spin="down"><i class="zmdi zmdi-caret-down"></i></a> </span>
                                        </div>
                                    </div>

                                    <div class="col-md-4  form-group">
                                        <label for="mobile">شماره اختصاصی</label>
                                        <div class="input-group spinner" data-trigger="spinner">
                                            <input type="text" class="form-control text-center" value="1" data-rule="quantity">
                                            <span class="input-group-addon"> <a href="javascript:void(0);" class="spin-up" data-spin="up"><i class="zmdi zmdi-caret-up"></i></a> <a href="javascript:void(0);" class="spin-down" data-spin="down"><i class="zmdi zmdi-caret-down"></i></a> </span>
                                        </div>
                                    </div>

                                    <div class="col-md-4  form-group">
                                        <label for="mobile">جستجوی کارت</label>
                                        <div class="input-group">

                                            <input type="text" class="form-control" placeholder="جستجوی کارت">
                                            <span class="input-group-addon">
                                                <i class="zmdi zmdi-search"></i>
                                            </span>
                                        </div>

                                    </div>

                                    <div class="col-md-12  form-group">
                                        <label for="address">آدرس</label>
                                        <input type="text" class="form-control" placeholder="آدرس">
                                    </div>

                                    <div class="col-md-6  form-group">
                                        <label for="address">رمز</label>
                                        <input type="text" class="form-control" placeholder="رمز">
                                    </div>

                                    <div class="col-md-6  form-group">
                                        <label for="address">تایید رمز</label>
                                        <input type="text" class="form-control" placeholder="تایید رمز">
                                    </div>

                                    <div class="col-md-12  form-group">
                                        <label for="address">یادداشت</label>
                                        <textarea rows="4" class="form-control no-resize" placeholder="یادداشت یا توضیح برای این کاربر ..."></textarea>
                                    </div>

                                    <div class="col-md-4  form-group">
                                        <label for="address">گروه</label>
                                        <select class="form-control show-tick">
                                            <option value="">-- لطفا انتخاب کنید --</option>
                                            <option value="10">مشتریان برنزی</option>
                                            <option value="20">مشتریان نقره ای</option>
                                            <option value="30">مشتریان طلایی</option>
                                            <option value="40">مشتریان طلایی اختصاصی</option>
                                            <option value="50">مشتریان قدیمی</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4  form-group">
                                        <label for="creadit-card">شماره کارت</label>
                                        <input type="text" class="form-control credit-card" placeholder="مثال : 0000 0000 0000 0000">
                                    </div>

                                    <div class="col-md-4  form-group">
                                        <label for="creadit-card">اپلود عکس کاربر</label>
                                        <input id="file_name" class="form-control" name="file_name" type="file">
                                    </div>

                                    <button type="submit" name="button" class="btn btn-raised btn-primary btn-round waves-effect mx-auto">ورود</button>
                                </form>

                            </div>
                        </section>

                    @endsection
