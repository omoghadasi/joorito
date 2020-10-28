@extends('adminpanel.master')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card text-right">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">پروفایل کاربری شما</h4>
                            <p class="card-category">از این بخش اطلاعات حساب کاربری خود را تغییر دهید.</p>
                        </div>
                        <div class="card-body">
                            <form method="post"
                                  action="{{route('profile_update')}}">
                                @method('put')
                                @csrf
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">نام کاربری</label>
                                            <input type="text" class="form-control"
                                                   value="{{\Illuminate\Support\Facades\Auth::user()->username}}"
                                                   disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">ایمیل الکترونیک</label>
                                            <input type="email" class="form-control"
                                                   value="{{\Illuminate\Support\Facades\Auth::user()->email}}" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">نام</label>
                                            <input type="text" class="form-control" placeholder="{{$fname ?? ''}}"
                                                   name="fname">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">نام خانوادگی</label>
                                            <input type="text" class="form-control" placeholder="{{$lname ?? ''}}"
                                                   name="lname">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">آدرس</label>
                                            <input type="text" class="form-control" placeholder="{{$address ?? ''}}"
                                                   name="address">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">استان</label>
                                            <input type="text" class="form-control" placeholder="{{$ostan ?? ''}}"
                                                   name="ostan">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">شهر</label>
                                            <input type="text" class="form-control" placeholder="{{$shahr ?? ''}}"
                                                   name="shahr">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">تلفن تماس</label>
                                            <input type="text" class="form-control" placeholder="{{$phone ?? ''}}"
                                                   name="phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>درباره من</label>
                                            <div class="form-group">
                                                <label class="bmd-label-floating">در چند خط شخصیت خود را معرفی
                                                    کنید.</label>
                                                <textarea class="form-control" rows="5"
                                                          placeholder="{{$about_me ?? ''}}" name="about_me"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">بروزرسانی پروفایل</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-profile">
                        <div class="card-avatar">
                            <a href="#">
                                <img class="img" src="{{$img ?? ''}}"/>
                            </a>
                        </div>
                        <div class="card-body">
                            <h6 class="card-category text-gray">{{\Illuminate\Support\Facades\Auth::user()->email}}</h6>
                            <h4 class="card-title">{{\Illuminate\Support\Facades\Auth::user()->username}}</h4>
                            <p class="card-description">
                                {{$about_me ?? ''}}
                            </p>
                            <a href="javascript:;" class="btn btn-primary btn-round">دنبال کردن</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
