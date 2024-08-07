<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function login(Request $request){
        $input = $request->all();

        $this->validate($request, [
            'username'=> 'required',
            'password'=>'required',
        ]);

        if(auth()->attempt(array('username'=>$input['username'], 'password'=>$input['password'])))
        {
            $user = User::where('username', $request->username)->first();
            $admin = User::where('roles_id', 1)->get();

            if(auth()->user()->roles_id == 1) {

                return redirect()->route('admin.home');
            }
            else if(auth()->user()->roles_id == 2) {

                return redirect()->route('assesor.home');
            }
            else if(auth()->user()->roles_id == 3){
                
                return redirect()->route('siswa.home');
            }   
        }
        else{
            
        $notification = array(
            'message' => 'Username atau Password salah!!',
            'alert-type' => 'error',
        );
            return redirect()->route('login')->with($notification);
        }
    }

    public function logout()
{
    Auth::logout();

    return redirect()->route('login');
}
}
