@extends('layouts.dashboard')
@section('meta')
    <title>:: لیست مشتریان ::</title>
@endsection
@section('content')
    <section class="content home">

        <div class="block-header">
            @include('fragments.alerts')
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2> لیست مشتریان
                        <small class="text-muted">به مرکز کاشت فاطیما خوش آمدید</small>
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
                    <div class="p-3">
		<table class=" table table-hover table-sm ">
			<thead>
				<tr>
                    <th>شناسه</th>
                    <th>نام</th>
                    <th>نام خانوادگی</th>
                    <th>شماره همراه</th>
                    <th>کد معرف</th>
                    <th>شهر</th>
                    <th>کارت</th>
                    <th>دفعات خرید</th>
                    <th>میزان اعتبار</th>
                    <th>امتیاز</th>
                    <th>گروه</th>
                    <th>جنسیت</th>
                    <th>عملیات</th>
				</tr>
			</thead>
			<tbody>
                @foreach ($customers as $i => $customer)

                @endforeach
                <tr>
                    <th scope="row">{{$i+1}}</th>
                    <td>{{$customer->user->name}}</td>
                    <td>محمدی</td>
                    <td>{{$customer->user->mobile}}</td>
                    <td>{{$customer->code_num}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{$customer->gender()}}</td>
                    <td align="center">
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle mth"  id="link1" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                 <i class="zmdi zmdi-more"></i> </a>

                            <div class="dropdown-menu text-right" aria-labelledby="link1">
                                <a class="dropdown-item" href="#">
                                    <i class="material-icons position">mode_edit</i>
                                ویرایش
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="material-icons position">attach_money</i>
                                افزودن اعتبار
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="material-icons position">star_half</i>
                                    تبدیل امتیاز
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="material-icons position">image</i>
                                    آپلود عکس
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="material-icons position">vpn_key</i>
                                    فعال
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="material-icons position">close</i>
                                    حذف
                                </a>
                            </div>
                        </div>
                    </td>

				</tr>

			</tbody>
		</table>
        <div class="mt-4">
            {{$customers->links()}}
        </div>

	</div>

                </div>
            </div>
        </div>
                </section>

@endsection
