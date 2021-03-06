<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AuthenticateController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginProcess(Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');

        // Ngoại lệ => bắt các lỗi của chương trình 
        try {
            $admin = Admin::where('email', $email)->where('password', $password)->firstOrFail();
            $request->session()->put('id', $admin->idAdmin);
            return Redirect::route('dashboard');
        } catch (Exception $e) {
            return Redirect::route('login')->with('error', 'Bạn nhập sai thông tin rồii');
        }
    }

        //khi logout session sẽ bị xóa và đưa cta trở lại login
    public function logout(Request $request)
    {
        $request->session()->flush();
        return Redirect::route('login');
    }
}
