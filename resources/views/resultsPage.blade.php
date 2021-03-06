@extends('layouts.masterPage')
@section('content')
    <div class="col-12 p-1">
        <div class="col-lg-12 d-flex align-items-center">
            <div class="col-lg-2 pl-0 text-right">
                <a href="{{route('index')}}"><h3 class="mb-1">جــــوریتو</h3></a>
            </div>
            <div class="col-lg-8 p-0">
                <form action="{{route('results')}}" class="col-12">
                    <div class="form-group">
                        <label for="search-input-label"></label>
                        <input type="search" class="form-control pt-4 pb-4 pr-3 search-input" id="search-input-label"
                               name="keyword" value="{{$keyword}}"
                               placeholder="دنبال چی میگردی؟ فقط کافیه تایپش کنی...">
                    </div>
                </form>
            </div>
            <div class="col-lg-2 d-flex flex-row-reverse">
                @auth()
                    <a class="btn btn-outline-primary btn-sm pr-3 pl-3" href="{{route('home')}}" role="button">حساب کاربری</a>
                @else
                    <a class="btn btn-outline-primary btn-sm pr-3 pl-3" href="{{route('register')}}" role="button">ثبت نام</a>
                    <p class="pl-2 pr-2 mb-0 pt-1">\</p>
                    <a class="btn btn-outline-danger btn-sm pr-3 pl-3" href="{{route('login')}}" role="button">ورود</a>
                @endauth
            </div>
        </div>
    </div>

    <div class="col-12 main">
        <!-- section category -->

        <h1>دوره های آموزشی</h1>
        <div class="container">
            <div class="row slick-slider">
                <div class="col-md-4">
                    <div class="blog-card blog-card-blog text-right">
                        <div class="blog-card-image">
                            <img class="img"
                                 src="http://omoghadasi.ir/wp-content/uploads/2019/11/a-few-steps-with-Bootstrap.jpg"
                                 alt="hi">
                            <div class="ripple-cont"></div>
                        </div>
                        <div class="blog-table">
                            <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> دوره آموزشی
                            </h6>
                            <h5 class="blog-card-caption text-justify">
                                <a href="#">چند قدم با Bootstrap</a>
                            </h5>
                            <p class="blog-card-description text-justify">
                                در دوره آموزشی چند قدم با Bootstrap قصد داریم که از صفر صفر کار با این کامپوننت یا همان
                                کتابخانه را یاد بگیریم. در این دروه ما کاملا از پایه و از bootstrap3 شوع خواهیم کرد و پس
                                از بررسی کامل آن به سراغ نسخه بعدی این کتابخانه یعنی bootstrap4 که در حال حاضر
                                اخرین....</p>
                            <div class="ftr">
                                <div class="author">
                                    <a href="#"> <img
                                            src="http://omoghadasi.ir/wp-content/uploads/2019/06/omoghadasi-logo.png"
                                            alt="..."
                                            class="avatar img-raised"> <span>امید مقدسی</span> </a>
                                </div>
                                <div class="stats p-1"><i class="far fa-eye"></i> 500 بازدید</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-card blog-card-blog text-right">
                        <div class="blog-card-image">
                            <a href="#"> <img class="img" src="https://picsum.photos/id/1084/536/354?grayscale"> </a>
                            <div class="ripple-cont"></div>
                        </div>
                        <div class="blog-table">
                            <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> دوره آموزشی
                            </h6>
                            <h5 class="blog-card-caption text-justify">
                                <a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a>
                            </h5>
                            <p class="blog-card-description text-justify">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون
                                و سطرآنچنان که لازم است</p>
                            <div class="ftr">
                                <div class="author">
                                    <a href="#"> <img
                                            src="http://omoghadasi.ir/wp-content/uploads/2019/06/omoghadasi-logo.png"
                                            alt="..."
                                            class="avatar img-raised"> <span>امید مقدسی</span> </a>
                                </div>
                                <div class="stats p-1"><i class="far fa-eye"></i> 500 بازدید</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-card blog-card-blog text-right">
                        <div class="blog-card-image">
                            <a href="#"> <img class="img" src="https://picsum.photos/id/1084/536/354?grayscale"> </a>
                            <div class="ripple-cont"></div>
                        </div>
                        <div class="blog-table">
                            <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> دوره آموزشی
                            </h6>
                            <h5 class="blog-card-caption text-justify">
                                <a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a>
                            </h5>
                            <p class="blog-card-description text-justify">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون
                                و سطرآنچنان که لازم است</p>
                            <div class="ftr">
                                <div class="author">
                                    <a href="#"> <img
                                            src="http://omoghadasi.ir/wp-content/uploads/2019/06/omoghadasi-logo.png"
                                            alt="..."
                                            class="avatar img-raised"> <span>امید مقدسی</span> </a>
                                </div>
                                <div class="stats p-1"><i class="far fa-eye"></i> 500 بازدید</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-card blog-card-blog text-right">
                        <div class="blog-card-image">
                            <a href="#"> <img class="img" src="https://picsum.photos/id/1084/536/354?grayscale"> </a>
                            <div class="ripple-cont"></div>
                        </div>
                        <div class="blog-table">
                            <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> دوره آموزشی
                            </h6>
                            <h5 class="blog-card-caption text-justify">
                                <a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a>
                            </h5>
                            <p class="blog-card-description text-justify">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون
                                و سطرآنچنان که لازم است</p>
                            <div class="ftr">
                                <div class="author">
                                    <a href="#"> <img
                                            src="http://omoghadasi.ir/wp-content/uploads/2019/06/omoghadasi-logo.png"
                                            alt="..."
                                            class="avatar img-raised"> <span>امید مقدسی</span> </a>
                                </div>
                                <div class="stats p-1"><i class="far fa-eye"></i> 500 بازدید</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-card blog-card-blog text-right">
                        <div class="blog-card-image">
                            <a href="#"> <img class="img" src="https://picsum.photos/id/1084/536/354?grayscale"> </a>
                            <div class="ripple-cont"></div>
                        </div>
                        <div class="blog-table">
                            <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> دوره آموزشی
                            </h6>
                            <h5 class="blog-card-caption text-justify">
                                <a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a>
                            </h5>
                            <p class="blog-card-description text-justify">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون
                                و سطرآنچنان که لازم است</p>
                            <div class="ftr">
                                <div class="author">
                                    <a href="#"> <img
                                            src="http://omoghadasi.ir/wp-content/uploads/2019/06/omoghadasi-logo.png"
                                            alt="..."
                                            class="avatar img-raised"> <span>امید مقدسی</span> </a>
                                </div>
                                <div class="stats p-1"><i class="far fa-eye"></i> 500 بازدید</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-card blog-card-blog text-right">
                        <div class="blog-card-image">
                            <a href="#"> <img class="img" src="https://picsum.photos/id/1084/536/354?grayscale"> </a>
                            <div class="ripple-cont"></div>
                        </div>
                        <div class="blog-table">
                            <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> دوره آموزشی
                            </h6>
                            <h5 class="blog-card-caption text-justify">
                                <a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a>
                            </h5>
                            <p class="blog-card-description text-justify">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون
                                و سطرآنچنان که لازم است</p>
                            <div class="ftr">
                                <div class="author">
                                    <a href="#"> <img
                                            src="http://omoghadasi.ir/wp-content/uploads/2019/06/omoghadasi-logo.png"
                                            alt="..."
                                            class="avatar img-raised"> <span>امید مقدسی</span> </a>
                                </div>
                                <div class="stats p-1"><i class="far fa-eye"></i> 500 بازدید</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <h1>قالب های آماده</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="blog-card blog-card-blog text-right">
                        <div class="blog-card-image">
                            <a href="#"> <img class="img img-profile"
                                              src="http://omoghadasi.ir/wp-content/uploads/2019/11/a-few-steps-with-Bootstrap.jpg">
                            </a>
                            <div class="ripple-cont"></div>
                        </div>
                        <div class="blog-table">
                            <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> دوره آموزشی
                            </h6>
                            <h5 class="blog-card-caption text-justify">
                                <a href="#">چند قدم با Bootstrap</a>
                            </h5>
                            <p class="blog-card-description text-justify">
                                در دوره آموزشی چند قدم با Bootstrap قصد داریم که از صفر صفر کار با این کامپوننت یا همان
                                کتابخانه را یاد بگیریم. در این دروه ما کاملا از پایه و از bootstrap3 شوع خواهیم کرد و پس
                                از بررسی کامل آن به سراغ نسخه بعدی این کتابخانه یعنی bootstrap4 که در حال حاضر
                                اخرین....</p>
                            <div class="ftr">
                                <div class="author">
                                    <a href="#"> <img
                                            src="http://omoghadasi.ir/wp-content/uploads/2019/06/omoghadasi-logo.png"
                                            alt="..."
                                            class="avatar img-raised"> <span>امید مقدسی</span> </a>
                                </div>
                                <div class="stats p-1"><i class="far fa-eye"></i> 500 بازدید</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-card blog-card-blog text-right">
                        <div class="blog-card-image">
                            <a href="#"> <img class="img" src="https://picsum.photos/id/1084/536/354?grayscale"> </a>
                            <div class="ripple-cont"></div>
                        </div>
                        <div class="blog-table">
                            <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> دوره آموزشی
                            </h6>
                            <h5 class="blog-card-caption text-justify">
                                <a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a>
                            </h5>
                            <p class="blog-card-description text-justify">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون
                                و سطرآنچنان که لازم است</p>
                            <div class="ftr">
                                <div class="author">
                                    <a href="#"> <img
                                            src="http://omoghadasi.ir/wp-content/uploads/2019/06/omoghadasi-logo.png"
                                            alt="..."
                                            class="avatar img-raised"> <span>امید مقدسی</span> </a>
                                </div>
                                <div class="stats p-1"><i class="far fa-eye"></i> 500 بازدید</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-card blog-card-blog text-right">
                        <div class="blog-card-image">
                            <a href="#"> <img class="img" src="https://picsum.photos/id/1084/536/354?grayscale"> </a>
                            <div class="ripple-cont"></div>
                        </div>
                        <div class="blog-table">
                            <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> دوره آموزشی
                            </h6>
                            <h5 class="blog-card-caption text-justify">
                                <a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a>
                            </h5>
                            <p class="blog-card-description text-justify">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون
                                و سطرآنچنان که لازم است</p>
                            <div class="ftr">
                                <div class="author">
                                    <a href="#"> <img
                                            src="http://omoghadasi.ir/wp-content/uploads/2019/06/omoghadasi-logo.png"
                                            alt="..."
                                            class="avatar img-raised"> <span>امید مقدسی</span> </a>
                                </div>
                                <div class="stats p-1"><i class="far fa-eye"></i> 500 بازدید</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <h1>مقالات آموزشی</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="blog-card blog-card-blog text-right">
                        <div class="blog-card-image">
                            <a href="#"> <img class="img"
                                              src="http://omoghadasi.ir/wp-content/uploads/2019/11/a-few-steps-with-Bootstrap.jpg">
                            </a>
                            <div class="ripple-cont"></div>
                        </div>
                        <div class="blog-table">
                            <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> دوره آموزشی
                            </h6>
                            <h5 class="blog-card-caption text-justify">
                                <a href="#">چند قدم با Bootstrap</a>
                            </h5>
                            <p class="blog-card-description text-justify">
                                در دوره آموزشی چند قدم با Bootstrap قصد داریم که از صفر صفر کار با این کامپوننت یا همان
                                کتابخانه را یاد بگیریم. در این دروه ما کاملا از پایه و از bootstrap3 شوع خواهیم کرد و پس
                                از بررسی کامل آن به سراغ نسخه بعدی این کتابخانه یعنی bootstrap4 که در حال حاضر
                                اخرین....</p>
                            <div class="ftr">
                                <div class="author">
                                    <a href="#"> <img
                                            src="http://omoghadasi.ir/wp-content/uploads/2019/06/omoghadasi-logo.png"
                                            alt="..."
                                            class="avatar img-raised"> <span>امید مقدسی</span> </a>
                                </div>
                                <div class="stats p-1"><i class="far fa-eye"></i> 500 بازدید</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-card blog-card-blog text-right">
                        <div class="blog-card-image">
                            <a href="#"> <img class="img" src="https://picsum.photos/id/1084/536/354?grayscale"> </a>
                            <div class="ripple-cont"></div>
                        </div>
                        <div class="blog-table">
                            <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> دوره آموزشی
                            </h6>
                            <h5 class="blog-card-caption text-justify">
                                <a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a>
                            </h5>
                            <p class="blog-card-description text-justify">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون
                                و سطرآنچنان که لازم است</p>
                            <div class="ftr">
                                <div class="author">
                                    <a href="#"> <img
                                            src="http://omoghadasi.ir/wp-content/uploads/2019/06/omoghadasi-logo.png"
                                            alt="..."
                                            class="avatar img-raised"> <span>امید مقدسی</span> </a>
                                </div>
                                <div class="stats p-1"><i class="far fa-eye"></i> 500 بازدید</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-card blog-card-blog text-right">
                        <div class="blog-card-image">
                            <a href="#"> <img class="img" src="https://picsum.photos/id/1084/536/354?grayscale"> </a>
                            <div class="ripple-cont"></div>
                        </div>
                        <div class="blog-table">
                            <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> دوره آموزشی
                            </h6>
                            <h5 class="blog-card-caption text-justify">
                                <a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a>
                            </h5>
                            <p class="blog-card-description text-justify">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون
                                و سطرآنچنان که لازم است</p>
                            <div class="ftr">
                                <div class="author">
                                    <a href="#"> <img
                                            src="http://omoghadasi.ir/wp-content/uploads/2019/06/omoghadasi-logo.png"
                                            alt="..."
                                            class="avatar img-raised"> <span>امید مقدسی</span> </a>
                                </div>
                                <div class="stats p-1"><i class="far fa-eye"></i> 500 بازدید</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <div class="col-lg-12 d-flex mt-3 mb-3">
        <div class="col-6 text-right">طراحی شده با ❤ توسط <a href="http://omoghadasi.ir">امید مقدسی</a>
        </div>
        <div class="col-6 p-0">
            <a class="btn btn-outline-primary pl-3 pr-3 btn-help btn-sm" href="#" role="button">درباره جـــــوریتو</a>
        </div>
    </div>
@endsection
