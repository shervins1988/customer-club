@extends('layouts.dashboard')
@section('meta')
<title>.:: ثبت خرید جدید ::.</title>
@endsection
@section('content')
    <section class="content home">

        <div class="block-header">
            @include('fragments.alerts')
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>ثبت خرید جدید
                        <small class="text-muted">به مرکز کاشت فاطیما خوش آمدید</small>
                    </h2>

                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-left">
                        <li class="breadcrumb-item float-right"><a href="index.html"><i class="zmdi zmdi-home"></i>باشگاه مشتریان</a></li>
                        <li class="breadcrumb-item float-right"><a href="javascript:void(0);">ثبت خرید جدید</a></li>
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
                        <form class="row" action="{{"transactions"}}" method="post">
                            @csrf

                            <div class="form-group col-md-4 mr-3">
                                <label for="customer">انتخاب مشتری</label>
                                <select class="form-control show-tick z-index" title="جستجوی مشتری" name="customers_id" id="customer" data-live-search="true">
                                    @foreach ($customers as $customer)
                                        <option value="{{$customer->id}}" @if(old('customer_id') == $customer->id) selected @endif {{$customer->code_num}} | {{$customer->name()}} | {{$customer->mobile()}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4 mr-3">
                                <label for="service">کالا و خدمات</label>
                                    <input type="text" name="service" value="{{old('service')}}" id="service" class="form-control">
                            </div>
                            <div class="form-group col-md-4 mr-3">
                                <label for="amount">مبلغ خرید</label>
                                    <input type="number" name="amount" value="{{old('amount')}}" id="amount" class="form-control">
                            </div>
                            <hr class="w-100 m-4 ">
                        <button type="submit" name="button" class="btn btn-raised btn-primary btn-round waves-effect mx-auto">ثبت</button>
                        </form>
                    </div>
                </div>
            </div>

@endsection
