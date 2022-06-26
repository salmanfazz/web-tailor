<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;

class LoginController extends Controller
{
    public function logout()
    {
        Session::flush();
        return redirect('/');
    }

    public function viewLogin()
    {
    	return view('login');
    }

    public function viewRegister()
    {
    	return view('register');
    }

    public function indexPenjahit()
    {
    	return view('penjahit');
    }

    public function loginPost(Request $request)
    {
    	$email = $request->email;
        $password = $request->password;

        $data = User::where('email',$email)->first();

        if ($data) {
            if (Hash::check($password,$data->password)) {
                Session::put('login',TRUE);
                Session::put('id_users',$data->id_users);
                Session::put('email',$data->email);
                Session::put('no_hp',$data->no_hp);
                Session::put('roles',$data->roles);

                if (Session::get('roles') == 'konsumen') {
		            return redirect('konsumen/home');
		        } elseif(Session::get('roles') == 'penjahit') {
		            return redirect('penjahit/home');
		        }else{
		            return redirect('/');
		        }

            }else{
                return redirect('login')->with('error','Login Failed');
            }
        }else{
            return redirect('login')->with('error','Login Failed');
        }
    }

    public function register(Request $request) {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'roles' => 'required',
        ]);

        $user = User::create([
            'email' => request('email'),
            'password' => Hash::make(request('password')),
            'nama' => request('nama'),
            'jenis_kelamin' => request('jenis_kelamin'),
            'alamat' => request('alamat'),
            'no_hp' => request('no_hp'),
            'roles' => request('roles'),
        ]);

        if($user) {
            return redirect('/login')->with('success', 'Registration Succesfull! Please Login');
        } else {
            return redirect('/register')->with('error', 'Register Failed');
        }

    }
}
