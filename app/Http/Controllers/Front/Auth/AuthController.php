<?php

namespace App\Http\Controllers\Front\Auth;

use App\Http\Controllers\Controller;
use App\Models\Benefactor;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function loginForm()
    {
        return view('front.auth.login');
    }
    public function registerForm()
    {
        return view('front.auth.login');
    }

    public function login()
    {

        $data = $this->request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        $user = User::where('email', $data['email'])->Where('type', 'user')
        ->first();



        if ($user) {
            if (Hash::check($data['password'], $user->password)) {
                Auth::login($user);
                    return redirect()->route('home');
            }
        }

        return redirect()->back()->with('message1', __("Wrong email or password"));
    }

    public function register()
    {

        $user = User::where('email', $this->request->post('email'))->exists();
        if($user){
            return redirect()->back()->with('message', __('Email or mobile number already exists'));
        };

        $data = $this->request->validate([
            'email' => ['required','email'],
            'password' => ['required','min:6','confirmed'],
            'name' => ['required','string','min:3','max:255'],
            'country'=>['required'],
            'phone'=>['required']
        ]);
        $user = User::where('email', $data['email'])->OrWhere('name',$data['name'])->first();
        if($user){
            return redirect()->back()->with('message', __('Error email or password'));
        }
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'type' => 'user',
            'password' => Hash::make($data['password']),
        ]);
        Benefactor::create([
            'user_id'=>$user->id,
            'country'=>$data['country'],
            'phone'=>$data['phone'],
        ]);



        Auth::login($user);

        return redirect()->route('home');

    }



    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
