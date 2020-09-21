<?php

namespace App\Http\Controllers\Role;

use App\Http\Controllers\Controller;
use App\Models\Role\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //

    public function index()
    {
        return view('role.register');
    }

    public function store(Request $request)
    {
        $role_post = $request->validate([
            'username' => 'required|alpha_num|min:6|max:16',
            'password' => 'required|alpha_num|min:6|max:16|confirmed',
            'email' => 'required|email|min:6|max:128',
            'telephone' => 'required|alpha_num|size:11',
            'captcha' => 'required|captcha',
        ], [
            'username.required' => '用户名必须填写',
            'username.alpha_num' => '用户名只能为字母、数字',
            'username.min' => '用户名长度为 6 ~ 16 位',
            'username.max' => '用户名长度为 6 ~ 16 位',
            'password.required' => '密码必须填写',
            'password.alpha_num' => '密码只能为字母、数字',
            'password.min' => '密码长度为 6 ~ 16 位',
            'password.max' => '密码长度为 6 ~ 16 位',
            'password.confirmed' => '两次密码不相同',
            'email.required' => '邮箱必须填写',
            'email.email' => '邮箱格式错误',
            'email.min' => '邮箱长度为 6 ~ 128 位',
            'email.max' => '邮箱长度为 6 ~ 128 位',
            'telephone.required' => '手机号码必须填写',
            'telephone.numeric' => '手机号码格式错误',
            'telephone.size' => '手机号码格式错误',
            'captcha.required' => '验证码必须填写',
            'captcha.captcha' => '验证码错误',
        ]);
        $role = new Role();
        $role->username = $role_post['username'];
        $role->password_hash = Hash::make($role_post['password']);
        $role->email = $role_post['email'];
        $role->telephone = $role_post['telephone'];
        $result = $role->save();
        if ($result) {
            return view('role.register', ['message' => '注册成功']);
        } else {
            return view('role.register', ['message' => '注册失败']);
        }
    }
}
