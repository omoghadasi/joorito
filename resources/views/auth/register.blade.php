@extends('layouts.masterPage')
@section('content')
    <div class="col-12 d-flex justify-content-center align-items-center align-content-stretch main-register">
        <div class="col-8 d-flex register-card p-0">
            <div class="col-lg-6 p-5 text-right"><h3 class="mb-3">ثبت نام</h3>
                <form action="{{route('register')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control pt-4 pb-4" id="username"
                               placeholder="نام کاربری ...." name="username" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control pt-4 pb-4" id="email"
                               placeholder="ایمیل ...." name="email" value="{{ old('email') }}" required autocomplete="email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control pt-4 pb-4" id="password" name="password" required autocomplete="new-password"
                               placeholder="رمزعبور ....">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control pt-4 pb-4" id="password-confirm" name="password_confirmation" required autocomplete="new-password"
                               placeholder="تأیید رمزعبور ....">
                    </div>
                    <button type="submit" class="btn btn-outline-primary btn-block pt-2 pb-2">ثبت نام</button>
                </form>
                <br>
                <p>قبلا ثبت نام کردید؟ <a href="{{route('login')}}">وارد شوید.</a></p>
            </div>
            <div class="col-lg-6 pt-5 d-flex justify-content-center align-items-center">
                <img src="{{url('/images/man-with-laptop.jpg')}}" alt="">
            </div>
        </div>

    </div>
@endsection
