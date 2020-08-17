<?php

namespace App\Http\Controllers;

use App\Customer;
use App\User;
use Illuminate\Http\Request;


class CustomerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

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
        $customer = new Customer;
        return view('customers.create',compact('customer'));
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
        self::validation();

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
        return view('customers.create',compact('customer'));
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
        $user = $customer->user;
        self::validation($user->id);
        $user->update([
            'name' => $request->name,
            'mobile' => $request->mobile,
        ]);

        if ($request->male !== null) {

            $data['male'] = $request->male;
        }
        $data['birthday'] = shamsi_to_miladi($request->birthday);

        $customer->update($data);

        return back()->withMessage("ثبت تفییرات مشتری با موفقیت انجام شد");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $user = $customer->user->id;
        $user->delete();
        $customer->delete();
        return back()->withMessage("مشتری مورد نظر از سیستم حذف گردید");
    }

    public static function validation($user_id=0)
    {
        // Form Information Validate
        return request()->validate([
            'name' => 'required|string|min:3|max:200',
            'male' => 'nullable',
            'birthday' => 'nullable',
            'mobile' => 'required|string|digits:11|unique:users,mobile,'.$user_id,
        ]);
    }
}
