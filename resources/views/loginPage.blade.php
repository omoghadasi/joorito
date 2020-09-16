@extends('layouts.masterPage')
@section('content')
    <div class="col-12 d-flex justify-content-center align-items-center align-content-stretch main-register">
        <div class="col-8 d-flex register-card p-0">
            <div class="col-lg-6 p-5 text-right"><h3 class="mb-3">ورود</h3>
                <form action="#" method="post">
                    <div class="form-group">
                        <input type="email" class="form-control pt-4 pb-4" id="exampleInputEmail1" aria-describedby="emailHelp"
                               placeholder="نام کاربری ....">
                    </div>
                    <div class="form-group mb-2">
                        <input type="password" class="form-control pt-4 pb-4" id="exampleInputPassword1"
                               placeholder="رمزعبور ....">
                    </div>
                    <label for="rememberme">
                        <input type="checkbox" name="remembered" id="remembered" value="forever">
                        <small>مرا به خاطر بسپار </small>
                    </label>
                    <button type="submit" class="btn btn-outline-danger btn-block pt-2 pb-2">ورود به حساب کاربری</button>
                </form>
                <br>
                <p>کاربر جدید هستید؟ <a href="/register">ثبت نام</a></p>
                <small class="text-center d-block"><a href="/register">بازیابی رمز عبور</a></small>
            </div>
            <div class="col-lg-6 pt-5 pb-4 d-flex justify-content-center align-items-center">
                <img src="/images/man-with-laptop.jpg" alt="">
            </div>
        </div>

    </div>
@endsection