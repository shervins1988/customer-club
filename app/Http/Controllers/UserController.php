<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->middleware('auth');
    }

public function __construct()
{
    // code...
}

    public function acc()
    {
        $user = auth()->user();
        return view('users.acc',compact('user'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = auth()->user();
        $request->validate([
            'name' => 'nullable|string|min:3|max:200',
            'mobile' => 'nullable|string|digits:11',
            'new_password' => 'nullable|string|min:8|max:40',
            'current_password' => 'required',
        ]);

        if (\Hash::check($request->current_password,$user->password)) {

            $logout = false;

            if ($request->name) {
                $data['name'] = $request->name;
            }

            if ($request->mobile) {
                $logout = true;
                $data['mobile'] = $request->mobile;
                $user->unverify_mobile();
            }

            if ($request->new_password) {
                $logout = true;
                $data['name'] = bcrypt($request->new_password);
            }

            $user->update($data);
            $message = 'پروفایل کاربری شما با موفقیت ویرایش شد.';
            
            if ($logout) {
                \Auth::logout();
                return redirect('login')->withMessage($message);
            }else {
                return back()->withMessage($message);
            }


        }else {
            return back()->withErrors(['رمز عبور فعلی اشتباه می باشد.'])->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
