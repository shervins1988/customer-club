<?php

namespace App\Http\Controllers;

use App\Customer;
use App\User;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::latest()->paginate(10);
        return view('customers.index',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Form Information Validate
        $request->validate([
            'name' => 'required|string|min:3|max:200',
            'male' => 'nullable',
            'birthday' => 'nullable',
            'mobile' => 'required|string|digits:11|unique:users,mobile',
        ]);
        // Create UserAcounte for Customer
                $password = rand(10000000,99999999);
                $new_user = User::new_user($request->name,$request->mobile,$password);

       //Add Customer In DataBase
                $new_customer = Customer::make($new_user->id, $request->birthday, $request->male);


       //Send Sms In Customer
                $message_body = "
                با سلام به باشگاه مشتریان مرکز کاشت فاطیما خوش آمدیداطلاعات حساب کاربری شما:\n
                نام کاربری:$new_user->mobile\n
                رمز عبور:$password\n
                کد معرف:$new_customer->code_num\n
                لطفا پس از ورود به حساب کاربری ، رمز عبور خود را تغییر دهید.
                "; // TODO: Dynamic Text Messeage


                TextMessageController::send($new_user->mobile,$message_body);

                //Complet Operation
                return redirect('customers')->withMessage("مشتری جدید در سیستم ثبت گردید.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
