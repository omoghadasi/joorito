@extends('adminpanel.master')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <a href="{{route('new_site')}}" role="button" class="btn btn-primary">ثبت سایت جدید</a>
                <div class="col-md-12">
                    <div class="card text-right">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">سایت های شما</h4>
                            <p class="card-category">تمامی سایت های شما در جوریتو</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <tr>
                                        <th>
                                            شناسه
                                        </th>
                                        <th>
                                            عنوان
                                        </th>
                                        <th>
                                            توضیحات
                                        </th>
                                        <th>
                                            آدرس
                                        </th>
                                        <th>
                                            تعداد لینک ثبت شده
                                        </th>
                                        <th>
                                            صورت حساب
                                        </th>
                                        <th>
                                            عملیات
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($sites as $site)
                                        <tr>
                                            <td>
                                                {{$site->id}}
                                            </td>
                                            <td>
                                                {{$site->title}}
                                            </td>
                                            <td>
                                                {{$site->desc}}
                                            </td>
                                            <td>
                                                {{$site->url}}
                                            </td>
                                            <td>
                                                34 لینک
                                            </td>
                                            <td class="text-primary">
                                                16500 ریال
                                            </td>
                                            <td class="text-primary">
                                                <button type="button" rel="tooltip" class="btn btn-info p-2">
                                                    <i class="material-icons">shopping_cart</i>
                                                </button>
                                                <a href="{{route('edit_site',$site->id)}}" type="button" rel="tooltip" class="btn btn-success p-2">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                                <form action="{{route('delete_site',$site->id)}}" method="post" class="d-inline-block">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger p-2" type="submit"><i class="material-icons">close</i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
