@extends('layouts.dashboard')

@section('meta')
<title>مدیریت حساب کاربری</title>
@endsection

@section('content')
    <section class="content home">
        <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2> ویرایش حساب کاربری</h2>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <ul class="breadcrumb float-md-left">
                            <li class="breadcrumb-item float-right"><a href="index.html"><i class="zmdi zmdi-home"></i>باشگاه مشتریان</a></li>
                            <li class="breadcrumb-item float-right"><a href="javascript:void(0);">ویرایش حساب کاربری</a></li>
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
                                <div class="body">
                                    <div class="demo-masked-input">
                                        <div class="row clearfix">
                                            <div class="alert alert-info">
                                                <b>نام فعلی شما : {{$user->name}}</b>
                                                <br>
                                                <b>موبایل فعلی شما :{{$user->mobile}}</b>
                                            </div>
                                            <hr>
                                        <form class="row" action="{{url('acc')}}" method="post">
                                            @csrf
                                            <div class="form-group col-md-3">
                                                <label for="name">نام</label>
                                                <input type="text" class="form-control" name="name"  id="name" value="{{old('name')}}">
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label for="mobile">موبایل</label>
                                                <input type="text" class="form-control" name="mobile"  id="mobile" value="{{old('mobile')}}">
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label for="new-password">رمز عبور جدید</label>
                                                <input type="password" class="form-control" name="new_password"  id="new-password">
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label for="current-password">رمز عبور فعلی</label>
                                                <input type="password" class="form-control" name="current_password"  id="current-password">
                                            </div>

                                            <div class="col-md-2 mx-auto">
                                                <button type="submit" class="btn btn-primary btn-block">تایید</button>
                                            </div>

                                        </form>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
    </section>

@endsection
