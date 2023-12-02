<!doctype html>
<html lang="fa-IR" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>{{ $title ?? config('app.name') }}</title>

   <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/bootstrap/bootstrap-rtl.css') }}">

   <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/daterangepicker.css') }}">

   <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/fontawesome.css') }}">

   <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/footable.standalone.min.css') }}">

   <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/fullcalendar@5.2.0.css') }}">

   <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/jquery-jvectormap-2.0.5.css') }}">

   <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/jquery.mCustomScrollbar.min.css') }}">

   <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/line-awesome.min.css') }}">

   <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/magnific-popup.css') }}">

   <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/MarkerCluster.css') }}">

   <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/MarkerCluster.Default.css') }}">

   <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/select2.min.css') }}">

   <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/slick.css') }}">

   <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/star-rating-svg.css') }}">

   <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/trumbowyg.min.css') }}">

   <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/wickedpicker.min.css') }}">

   <link rel="stylesheet" href="{{ asset('assets/css/style-rtl.css') }}">

   <link rel="stylesheet" href="{{ asset('assets/summernote/summernote-lite.min.css') }}">

   <!-- endinject -->

   <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon.png') }}">

   <!-- Fonts -->
   <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
   <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css" rel="stylesheet" type="text/css" />
   <style>
      html,body {
            font-family: Vazirmatn, sans-serif !important;
      }
   </style>

</head>

<body class="layout-light side-menu">
   <div class="mobile-search">
      <form action="/" class="search-form">
         <img src="img/svg/search.svg" alt="search" class="svg">
         <input class="form-control me-sm-2 box-shadow-none" type="search" placeholder="جستجو..." aria-label="Search">
      </form>
   </div>
   <div class="mobile-author-actions"></div>
   <header class="header-top">
      <nav class="navbar navbar-light">
         <div class="navbar-left">
            <div class="logo-area">
               <a class="navbar-brand" href="index.html">
                  <img class="dark" src="{{ asset('img/logo-dark.png') }}" alt="logo">
                  <img class="light" src="{{ asset('img/logo-white.png') }}" alt="logo">
               </a>
               <a href="#" class="sidebar-toggle">
                  <img class="svg" src="{{ asset('img/svg/align-center-alt.svg') }}" alt="img">
                </a>
            </div>
         </div>
         <!-- ends: navbar-left -->
         <div class="navbar-right">
            <ul class="navbar-right__menu">
               @guest
                   <li><a href="{{ route('login') }}">ورود</a></li>
                   <li><a href="{{ route('register') }}">ثبت نام</a></li>
               @endguest
               @auth
                <li class="nav-author">
                    <div class="dropdown-custom">
                        <a href="javascript:;" class="nav-item-toggle"><img src="{{ asset('img/author-nav.jpg') }}" alt="" class="rounded-circle">
                            <span class="nav-item__title">{{ auth()->user()->name }}<i class="las la-angle-down nav-item__arrow"></i></span>
                        </a>
                        <div class="dropdown-parent-wrapper">
                            <div class="dropdown-wrapper">
                                <div class="nav-author__options">
                                    <ul>
                                    <li>
                                        <a href="">
                                            <i class="uil uil-user"></i> پروفایل</a>
                                    </li>
                                    <li>
                                        <a href=""><i class="uil uil-setting"></i>تغییر رمز عبور</a>
                                    </li>
                                    </ul>
                                    <a class="nav-author__signout" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="uil uil-sign-out-alt"></i>
                                                     خروج
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                            <!-- ends: .dropdown-wrapper -->
                        </div>
                    </div>
                </li>
                <!-- ends: .nav-author -->
               @endauth
            </ul>
            <!-- ends: .navbar-right__menu -->
            <div class="navbar-right__mobileAction d-md-none">
               <a href="#" class="btn-search">
                  <img src="{{ asset('img/svg/search.svg') }}" alt="search" class="svg feather-search">
                  <img src="img/svg/x.svg" alt="x" class="svg feather-x"></a>
               <a href="#" class="btn-author-action">
                  <img class="svg" src="img/svg/more-vertical.svg" alt="more-vertical"></a>
            </div>
         </div>
         <!-- ends: .navbar-right -->
      </nav>
   </header>
   <main class="main-content">
      <div class="sidebar-wrapper">
         <div class="sidebar sidebar-collapse" id="sidebar">
            <div class="sidebar__menu-group">
               <ul class="sidebar_nav">
                  <li>
                     <a href="{{ route('home') }}" class="">
                        <span class="nav-icon uil uil-home"></span>
                        <span class="menu-text">خانه</span>
                     </a>
                  </li>
                  <li>
                     <a href="{{ route('store') }}" class="">
                        <span class="nav-icon uil uil-bag"></span>
                        <span class="menu-text">فروشگاه</span>
                     </a>
                  </li>
                  <li>
                     <a href="{{ route('cart') }}" class="">
                        <span class="nav-icon uil uil-bag"></span>
                        <span class="menu-text">سبد خرید</span>
                        @if (session()->has('cart'))
                           <span class="badge badge-success menuItem rounded-circle">{{ count(session()->get('cart')) }}</span>
                        @endif
                     </a>
                  </li>
                  @if(Auth::check() && Auth::user()->hasRole('admin'))
                     <li>
                        <a href="#" class="">
                           <span class="nav-icon uil uil-create-dashboard"></span>
                           <span class="menu-text">داشبورد مدیریت</span>
                        </a>
                     </li>
                     <li class="has-child">
                        <a href="#" class="">
                           <span class="nav-icon uil uil-bag"></span>
                           <span class="menu-text text-initial">مدیریت فروشگاه</span>
                           <span class="toggle-icon"></span>
                        </a>
                        <ul>
                           <li class="">
                              <a href="{{ route('products.index') }}">محصولات</a>
                           </li>
                           <li class="">
                              <a href="{{ route('products.create') }}">ایجاد محصول</a>
                           </li>
                           <li class="">
                              <a href="{{ route('products.import') }}">درون ریزی محصولات</a>
                           </li>
                           <li class="">
                              <a href="{{ route('categories.index') }}">دسته بندی ها</a>
                           </li>
                           <li class="">
                              <a href="{{ route('attributes') }}">ویژگی ها</a>
                           </li>
                           <li class="">
                              <a href="{{ route('tags') }}">برچسب ها</a>
                           </li>
                        </ul>
                     </li>
                     <li>
                        <a href="#" class="">
                           <span class="nav-icon uil uil-users-alt"></span>
                           <span class="menu-text">کاربران</span>
                        </a>
                     </li>
                  @endif
                  <li>
                     <a href="#" class="">
                        <span class="nav-icon uil uil-user"></span>
                        <span class="menu-text">پشتیبانی</span>
                     </a>
                  </li>
                  @guest
                      <li>
                           <a href="{{ route('login') }}" class="">
                                 <span class="nav-icon uil uil-user"></span>
                                 <span class="menu-text">ورود</span>
                           </a>
                      </li>
                        <li>
                              <a href="{{ route('register') }}" class="">
                                    <span class="nav-icon uil uil-user"></span>
                                    <span class="menu-text">ثبت نام</span>
                              </a>
                        </li>  
                  @endguest
                  @auth
                     <li class="has-child">
                        <a href="#" class="">
                           <span class="nav-icon uil uil-user"></span>
                           <span class="menu-text text-initial">مدیریت حساب</span>
                           <span class="toggle-icon"></span>
                        </a>
                        <ul>
                           <li class="">
                              <a href="#">داشبورد</a>
                           </li>
                           <li class="">
                              <a href="{{ route('profile.orders') }}">سفارشات</a>
                           </li>
                           <li class="">
                              <a href="#">آدرس ها</a>
                           </li>
                           <li class="">
                              <a href="#">پروفایل</a>
                           </li>
                           <li class="">
                              <a href="#">تغییر رمز عبور</a>
                           </li>
                        </ul>
                     </li>
                     <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                          document.getElementById('logout-form1').submit();">
                                          <i class="nav-icon uil uil-power text-danger"></i>
                                          <span class="menu-text text-danger">خروج</span>
                        </a>

                        <form id="logout-form1" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                        </form>
                     </li>
                  @endauth
               </ul>
            </div>
         </div>
      </div>
      
      <div class="contents">
         <div class="container-fluid">
            <div class="dm-page-content">
               {{ $slot }}
            </div>
         </div>
         <!-- ends: .dm-page-content -->
      </div>
      
      <footer class="footer-wrapper">
         <div class="footer-wrapper__inside">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-12">
                     <div class="footer-copyright">
                        <p><span>&copy; {{ date('Y') }}</span><a href="{{ route('home') }}">متارنگ</a>
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
   </main>
   <div id="overlayer">
      <div class="loader-overlay">
         <div class="dm-spin-dots spin-lg">
            <span class="spin-dot badge-dot dot-primary"></span>
            <span class="spin-dot badge-dot dot-primary"></span>
            <span class="spin-dot badge-dot dot-primary"></span>
            <span class="spin-dot badge-dot dot-primary"></span>
         </div>
      </div>
   </div>
   <div class="overlay-dark-sidebar"></div>
   <div class="customizer-overlay"></div>
   <!-- inject:js-->
   <script src="{{ asset('assets/vendor_assets/js/jquery/jquery-3.5.1.min.js') }}"></script>
   <script src="{{ asset('assets/vendor_assets/js/jquery/jquery-ui.js') }}"></script>
   <script src="{{ asset('assets/vendor_assets/js/bootstrap/popper.js') }}"></script>
   <script src="{{ asset('assets/vendor_assets/js/bootstrap/bootstrap.min.js') }}"></script>
   <script src="{{ asset('assets/vendor_assets/js/moment/moment.min.js') }}"></script>
   <script src="{{ asset('assets/vendor_assets/js/accordion.js') }}"></script>
   <script src="{{ asset('assets/vendor_assets/js/apexcharts.min.js') }}"></script>
   <script src="{{ asset('assets/vendor_assets/js/autoComplete.js') }}"></script>
   <script src="{{ asset('assets/vendor_assets/js/Chart.min.js') }}"></script>
   <script src="{{ asset('assets/vendor_assets/js/daterangepicker.js') }}"></script>
   <script src="{{ asset('assets/vendor_assets/js/drawer.js') }}"></script>
   <script src="{{ asset('assets/vendor_assets/js/dynamicBadge.js') }}"></script>
   <script src="{{ asset('assets/vendor_assets/js/dynamicCheckbox.js') }}"></script>
   <script src="{{ asset('assets/vendor_assets/js/footable.min.js') }}"></script>
   <script src="{{ asset('assets/vendor_assets/js/fullcalendar@5.2.0.js') }}"></script>
   <script src="{{ asset('assets/vendor_assets/js/google-chart.js') }}"></script>
   <script src="{{ asset('assets/vendor_assets/js/jquery-jvectormap-2.0.5.min.js') }}"></script>
   <script src="{{ asset('assets/vendor_assets/js/jquery-jvectormap-world-mill-en.js') }}"></script>
   <script src="{{ asset('assets/vendor_assets/js/jquery.countdown.min.js') }}"></script>
   <script src="{{ asset('assets/vendor_assets/js/jquery.filterizr.min.js') }}"></script>
   <script src="{{ asset('assets/vendor_assets/js/jquery.magnific-popup.min.js') }}"></script>
   <script src="{{ asset('assets/vendor_assets/js/jquery.peity.min.js') }}"></script>
   <script src="{{ asset('assets/vendor_assets/js/jquery.star-rating-svg.min.js') }}"></script>
   <script src="{{ asset('assets/vendor_assets/js/loader.js') }}"></script>
   <script src="{{ asset('assets/vendor_assets/js/message.js') }}"></script>
   <script src="{{ asset('assets/vendor_assets/js/moment.js') }}"></script>
   <script src="{{ asset('assets/vendor_assets/js/muuri.min.js') }}"></script>
   <script src="{{ asset('assets/vendor_assets/js/notification.js') }}"></script>
   <script src="{{ asset('assets/vendor_assets/js/popover.js') }}"></script>
   <script src="{{ asset('assets/vendor_assets/js/select2.full.min.js') }}"></script>
   <script src="{{ asset('assets/vendor_assets/js/slick.min.js') }}"></script>
   <script src="{{ asset('assets/vendor_assets/js/trumbowyg.min.js') }}"></script>
   <script src="{{ asset('assets/vendor_assets/js/wickedpicker.min.js') }}"></script>
   <script src="{{ asset('assets/theme_assets/js/apexmain.js') }}"></script>
   <script src="{{ asset('assets/theme_assets/js/charts.js') }}"></script>
   <script src="{{ asset('assets/theme_assets/js/drag-drop.js') }}"></script>
   <script src="{{ asset('assets/theme_assets/js/footable.js') }}"></script>
   <script src="{{ asset('assets/theme_assets/js/full-calendar.js') }}"></script>
   <script src="{{ asset('assets/theme_assets/js/icon-loader.js') }}"></script>
   <script src="{{ asset('assets/theme_assets/js/jvectormap-init.js') }}"></script>
   <script src="{{ asset('assets/theme_assets/js/main.js') }}"></script>
   <script src="{{ asset('assets/summernote/summernote-lite.min.js') }}"></script>
   <!-- endinject-->

   @stack('scripts')
</body>

</html>
