@extends('adminpanel.master')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card text-right">
                        <div class="card-header card-header-success">
                            <h4 class="card-title ">اطلاعات سایت خود را تغییر دهید.</h4>
                            <p class="card-category">با ثبت سایت خود در جوریتو به دوستان خود کمک کنید که راحت تر شما را
                                پیدا کنند.</p>
                        </div>
                        <div class="card-body">
                            @if($errors->any())
                                <div class="alert alert-danger" role="alert">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{route('sites.update',$site->id)}}" method="post">
                                @csrf
                                @method('put')
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="title">عنوان سایت</label>
                                        <input type="text" class="form-control" id="title"
                                               placeholder="عنوان سایت شما..." name="title" value="{{$site->title}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="url">آدرس اینترنتی سایت</label>
                                        <input type="text" class="form-control" id="url" name="url"
                                               placeholder="آدرس اینترنتی سایت شما..." value="{{$site->url}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="desc">توضیحات سایت</label>
                                    <input type="text" class="form-control" id="desc" name="desc"
                                           placeholder="در چند خط سایت خود را توضیح دهید." value="{{$site->desc}}">
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="connection_type">نوع اتصال</label>
                                        <input type="text" class="form-control" id="connection_type"
                                               name="connection_type" placeholder="نوع اتصال شما..." value="{{$site->connection_type}}">
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="public_key">کلید عمومی سایت</label>
                                        <input type="text" class="form-control" id="public_key" name="public_key"
                                               placeholder="کد کلید عمومی سایت شما..." value="{{$site->public_key}}">
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="private_key">کلید خصوصی سایت</label>
                                        <input type="text" class="form-control" id="private_key" name="private_key"
                                               placeholder="کد کلید خصوصی سایت شما..." value="{{$site->private_key}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value="">
                                            آیا اطلاعات فوق صحیح هستند؟
                                            <span class="form-check-sign">
            <span class="check"></span>
          </span>
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">ویرایش سایت</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
