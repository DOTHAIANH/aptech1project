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
                        Đăng ký tài khoản
                    </li>
                </ul>
            </div>
        </div>
        <hr style="margin-bottom: 80px;">
        <div class="row">
            <div class="page text-center ">
                <div class="title-head">
                    <span>Đăng ký tài khoản</span>
                </div>
                <form action="" method="post">
                    <div class="form-group">
                        <input required type="text" name="fullname" placeholder="Họ tên*" id="fullname" class="form-control">
                    </div>
                    <div class="form-group">
                        <input required type="text" name="phone_number" placeholder="Số điện thoại*" id="phone_number" class="form-control">
                    </div>
                    <div class="form-group">
                        <input required type="email" name="email" placeholder="Email*" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input required type="password" name="password" placeholder="Mật khẩu*" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-style btn-primary btn-full" type="submit" value="ĐĂNG KÝ">
                    </div>
                </form>
                <div class="col-xs-12">
                    <p>
                        Bạn đã có tài khoản hãy đăng nhập
                        <a href="login.php" class="btn-link-style btn-register">Tại đây</a>
                    </p>
                </div>
            </div>
        </div>
@endsection
