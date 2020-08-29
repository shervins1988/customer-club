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
                        <div class="text-center">
                            <button type="button"  class="btn btn-outline-success mb-3" id="add-row">
                                <i class="zmdi zmdi-plus ml-1">

                                </i>مورد جدید</button>
                        </div>
                        <form  action="{{"transactions"}}" method="post" data-gift-percent="10" data-discount-percent="5" id="new-transaction">
                            @csrf
                            {{-- <div class="row">
                              <div class="form-group col-md-3 mr-3 mx-auto">
                                  <label for="customer">انتخاب مشتری</label>
                                  <select class="form-control show-tick z-index selectpicker" title="جستجوی مشتری" name="customers_id" id="customer" data-live-search="true">
                                      @foreach ($customers as $customer)
                                          <option value="{{$customer->id}}" @if(old('customer_id') == $customer->id)
                                          selected @endif {{$customer->code_num}} | {{$customer->name()}} | {{$customer->mobile()}}</option>
                                      @endforeach
                                  </select>
                              </div>
                            </div> --}}
                            <div id="transaction-rows">
                              <div class="row transaction-row">

                                  <div class="col-md-9">
                                    <div class="row">
                                      <div class="form-group col-md-6">
                                          <label for="service">کالا و خدمات</label>
                                              <input type="text" name="service" value="{{old('service')}}" id="service" class="form-control">
                                      </div>

                                       <div class="form-group col-md-6">
                                          <label for="amount">مبلغ خرید</label>
                                              <input type="number" name="amount" value="{{old('amount')}}" id="amount" class="form-control first-amount">
                                      </div>

                                      <div class="form-group col-md-6">
                                          <label for="cash-discount">تحفیف نقدی</label>
                                              <input type="number"  name="cash_discount" value="{{old('cash_discount') ?? 0}}" id="cash-discount" class="form-control cash-discount">
                                      </div>

                                      <div class="form-group col-md-6">
                                          <label for="count">تعداد</label>
                                              <input type="number" name="count" value="{{old('count') ?? 1}}" id="count" class="form-control count">
                                      </div>

                                    </div>
                                  </div>
                                <div class="col-md-3">
                                    <ul class="list-group p0">
                                        <li class="list-group-item list-group-item-info">
                                            تخفیف :
                                            <span class="final-club-discount" title="تخفیف باشگاه مشتریان" data-toggle="tooltip">
                                               0
                                            </span>
                                          <span> + </span>
                                            <span class="final-cash-discount" title="تخفیف نقدی" data-toggle="tooltip">
                                               0
                                            </span>
                                            تومان
                                        </li>
                                        <li class="list-group-item list-group-item-info">
                                            قابل پرداخت : <span class="final-payable">0</span> تومان
                                        </li>
                                        <li class="list-group-item list-group-item-info">
                                            اعتبار هدیه : <span class="final-gift">0</span> تومان
                                        </li>
                                        <li class="list-group-item list-group-item-info">
                                          تعداد : <span class="final-count">1</span>عدد
                                        </li>
                                    </ul>
                                </div>

                              </div>
                            </div>

                            <hr class="w-100 m-4">
                            <div class="row">
                              <button type="submit" name="button"
                              class="btn btn-raised btn-primary btn-round waves-effect mx-auto">ثبت</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

@endsection
