<?php
/**
 *
 * @file register.blade.php
 * @author Jyunwaa<jyunwaa@163.com>
 * @date 2020/09/21
 * @time 16:26:09
 */
?>
    <!doctype html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
    <title>注册 - {{ config('myth.name', '神话online') }}</title>
</head>
<body>
<form method="post" action="{{ url('role/register/store') }}">
    @csrf
    用户名：
    <br/>
    <label>
        <input type="text" name="username">
        @error('username')<span style="color: #e70000; font-size: small;">{{ $message }}</span>@enderror
    </label>
    <br/>
    密码：
    <br/>
    <label>
        <input type="password" name="password">
        @error('password')<span style="color: #e70000; font-size: small;">{{ $message }}</span>@enderror
    </label>
    <br/>
    再次输入密码：
    <br/>
    <label>
        <input type="password" name="password_confirmation">
    </label>
    <br/>
    邮箱：
    <br/>
    <label>
        <input type="email" name="email">
        @error('email')<span style="color: #e70000; font-size: small;">{{ $message }}</span>@enderror
    </label>
    <br/>
    手机号码：
    <br/>
    <label>
        <input type="tel" name="telephone">
        @error('telephone')<span style="color: #e70000; font-size: small;">{{ $message }}</span>@enderror
    </label>
    <br/>
    验证码：<img src="{!! captcha_src('flat') !!}" onclick="this.src='/captcha/flat?'+Math.random()" alt="验证码">
    <br/>
    <label>
        <input type="text" name="captcha">
        @error('captcha')<span style="color: #e70000; font-size: small;">{{ $message }}</span>@enderror
    </label>
    <br/>
    <input type="submit" value="注册">
</form>
<a href="{{ url('/role/login') }}">登录</a>
</body>
</html>
