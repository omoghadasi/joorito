@extends('layouts.masterPage')

@section('content')
    <div class="col-12 p-1">
        <div class="col-lg-12 d-flex mt-3">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6"></div>
            <div class="col-lg-3 d-flex flex-row-reverse">
                <a class="btn btn-outline-primary btn-sm pr-3 pl-3" href="#" role="button">ثبت نام</a>
                <p class="pl-2 pr-2 mb-0 pt-1">\</p>
                <a class="btn btn-outline-danger btn-sm pr-3 pl-3" href="#" role="button">ورود</a>
            </div>
        </div>
        <div class="col-lg-12 pt-5">
            <div class="container mb-5 mt-5 pt-5 pb-5 d-flex flex-column justify-content-center align-items-center">
                <div class="text-group d-flex flex-column justify-content-center">
                    <h1 class="text-center">جــــوریتو جستوجویی برای تو</h1>
                    <h5 class="text-center">اولین جستجوگر کالای دیجیتال پارســی</h5>
                </div>
                <div class="input-group col-8 d-flex justify-content-center">

                    <form action="#" method="get" class="col-12">
                        <div class="form-group">
                            <label for="search-input-label"></label>
                            <input type="search" class="form-control pt-4 pb-4 pr-3 search-input" id="search-input-label" placeholder="دنبال چی میگردی؟ فقط کافیه تایپش کنی...">
                        </div>
                    </form>

                    <div class="col-12 d-flex justify-content-center">
                        <a class="btn btn-primary mt-3 mr-2 ml-2 pb-2 pt-2 pl-3 pr-3" href="#" role="button">همه دسته
                            بندی ها</a>
                        <a class="btn btn-secondary mt-3 mr-2 ml-2 pb-2 pt-2 pl-3 pr-3" href="#" role="button">آمار
                            جــــوریتو</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 d-flex" style="margin-top: 9rem;">
                <div class="col-6 text-right">طراحی شده با ❤ توسط <a href="http://omoghadasi.ir">امید مقدسی</a>
                </div>
                <div class="col-6 p-0">
                    <a class="btn btn-outline-primary pl-3 pr-3 btn-help btn-sm" href="#" role="button">درباره جـــــوریتو</a>
                </div>
            </div>
        </div>
@endsection
