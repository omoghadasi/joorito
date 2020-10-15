<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
          پنل مدیریت سایت
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item active  ">
                <a class="nav-link" href="{{route('home')}}">
                    <i class="material-icons">dashboard</i>
                    <p>داشبورد</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('profile')}}">
                    <i class="material-icons">person</i>
                    <p>پروفایل کاربری</p>
                </a>
            </li>
            @if(\Illuminate\Support\Facades\Auth::user()->role_id==2)
                <li class="nav-item ">
                    <a class="nav-link" href="{{route('sites')}}">
                        <i class="material-icons">content_paste</i>
                        <p>سایت ها</p>
                    </a>
                </li>
            @endif

            <li class="nav-item ">
                <a class="nav-link" href="./typography.html">
                    <i class="material-icons">library_books</i>
                    <p>دسته بندی ها</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./icons.html">
                    <i class="material-icons">bubble_chart</i>
                    <p>کاربران</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./map.html">
                    <i class="material-icons">location_ons</i>
                    <p>پرداخت ها</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./notifications.html">
                    <i class="material-icons">notifications</i>
                    <p>تنظیمات</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./rtl.html">
                    <i class="material-icons">language</i>
                    <p>پشتیبانی</p>
                </a>
            </li>
            <li class="nav-item active-pro ">

                <form action="{{route('logout')}}" method="post" class="d-flex justify-content-center pl-3 pr-3">
                    @csrf
                    <button class="nav-link border-0 pointer-event btn btn-danger w-100 " type="submit">
                        خروج از حساب کاربری
                    </button>
                </form>

            </li>
        </ul>
    </div>
</div>
