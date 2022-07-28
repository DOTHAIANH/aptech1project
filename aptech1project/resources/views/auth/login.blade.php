@extends('layouts.master')
@section('css')
<link href="{{ asset('css/user.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="col-xs-12 container">
            <div class="row col-xl-12">
                <ul class="breadcrump text-uppercase">
                    <li class="home">
                        <a href="">Trang chủ</a>
                        <span>
                            <i class="fa fa-angle-right"> </i>
                        </span>
                    </li>
                    <li>
                        Đăng nhập tài khoản
                    </li>
                </ul>
            </div>
        </div>
        <hr style="margin-bottom: 80px;">
        <div class="row">
            <div class="page text-center ">
                <div class="title-head">
                    <span>Đăng nhập tài khoản</span>
                </div>
                <form action="" method="post">
                    <div class="form-group">
                        <input required type="text" name="email" placeholder="Email*" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input required type="password" name="password" placeholder="Paswword*" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-style btn-primary btn-full" type="submit" value="ĐĂNG NHẬP">
                    </div>
                </form>
                <div class="col-xs-12">
                    <p>
                        Bạn chưa có tài khoản đăng ký
                        <a href="register.html" class="btn-link-style btn-register">Tại đây</a>
                    </p>
                    <p>
                        Bạn quên mật khẩu lấy lại
                        <a href="forget.html" class="btn-link-style btn-register">Tại đây</a>
                    </p>
                </div>
            </div>
        </div>

@endsection
