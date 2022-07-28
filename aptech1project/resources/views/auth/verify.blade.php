@extends('layouts.master')
@section('css')
<link href="{{ asset('css/user.css') }}" rel="stylesheet">
@endsection
@section('content')
    <!-- Content  -->
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
                        Quên tài khoản
                    </li>
                </ul>
            </div>
        </div>
        <hr style="margin-bottom: 80px;">
        <div class="row">
            <div class="page">
                <div class="title-head">
                    Điền email của bạn:
                </div>
                <form action="" method="post">
                    <div class="form-group">
                        <input required type="email" name="email" placeholder="Email*" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-style btn-primary btn-full" type="submit" value="LẤY LẠI MẬT KHẨU">
                    </div>
                </form>
                <div class="col-xs-12 text-center">
                    <p>
                        Quay lại
                        <a href="login.html" class="btn-link-style btn-forgeter">Tại đây</a>
                    </p>
                </div>
            </div>
        </div>

@endsection
