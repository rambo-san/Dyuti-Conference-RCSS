<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\Auth\LoginRequest;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


     public function loginPost(LoginRequest $request)
    {
        $data = $request->all();

        $remember = ($request->has('remember')) ? true : false;

        if (Auth::check()) {
            Auth::logout();
        }


        if (Auth::attempt(array('email' => $data["username"], 'password' => $data["password"], 'is_active' => 1), $remember)){

        if( Auth::user()->hasAnyRole(['developer', 'super-admin','staff']))
        {

            return redirect(config("constant.backend_url_prefix") . '/dashboard');

        }
        else{

            if (Auth::check()) {
                Auth::logout();
            }
            return redirect()->back()->with('error', 'Invalid Credentials');
             // return redirect()->route('dashboard')->with('success', "Logged in successfuly");
        }
            
        } else {
            // Something went wrong.
            \Session::flash('error', 'Invalid Credentials');
            return redirect()->back()->with('error', 'Invalid Credentials');
        }
    }

    public function login()
    {
        return view('auth.login');
    }


    public function logout()
    {
        
        //Auth::guard('admin')->logout();

       // $request->session()->invalidate();
        \Session::flush();

        Auth::logout();
        
        return redirect(config("constant.backend_url_prefix"));
        
    }
}
