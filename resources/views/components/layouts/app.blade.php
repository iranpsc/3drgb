<!doctype html>
<html lang="fa-IR" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>HexaDash</title>

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
                  <img class="dark" src="img/logo-dark.png" alt="logo">
                  <img class="light" src="img/logo-white.png" alt="logo">
               </a>
               <a href="#" class="sidebar-toggle">
                  <img class="svg" src="img/svg/align-center-alt.svg" alt="img">
                </a>
            </div>
         </div>
         <!-- ends: navbar-left -->
         <div class="navbar-right">
            <ul class="navbar-right__menu">
               <li class="nav-search">
                  <a href="#" class="search-toggle">
                     <i class="uil uil-search"></i>
                     <i class="uil uil-times"></i>
                  </a>
                  <form action="/" class="search-form-topMenu">
                     <span class="search-icon uil uil-search"></span>
                     <input class="form-control me-sm-2 box-shadow-none" type="search" placeholder="جستجو..." aria-label="Search">
                  </form>
               </li>
               @auth
                <li class="nav-message">
                    <div class="dropdown-custom">
                        <a href="javascript:;" class="nav-item-toggle icon-active">
                            <img class="svg" src="img/svg/message.svg" alt="img">
                        </a>
                        <div class="dropdown-parent-wrapper">
                            <div class="dropdown-wrapper">
                            <h2 class="dropdown-wrapper__title">پیام ها <span class="badge-circle badge-success ms-1">2</span></h2>
                            <ul>
                                <li class="author-online has-new-message">
                                    <div class="user-avater">
                                        <img src="img/team-1.png" alt="">
                                    </div>
                                    <div class="user-message">
                                        <p>
                                        <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">طراحی وب</a>
                                        <span class="time-posted">3 ساعت پیش</span>
                                        </p>
                                        <p>
                                        <span class="desc text-truncate" style="max-width: 215px;">لورم ایپسوم یک متن ساحتگی است که کاربر فراوانی دارد</span>
                                        <span class="msg-count badge-circle badge-success badge-sm">1</span>
                                        </p>
                                    </div>
                                </li>
                                <li class="author-offline has-new-message">
                                    <div class="user-avater">
                                        <img src="img/team-1.png" alt="">
                                    </div>
                                    <div class="user-message">
                                        <p>
                                        <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">طراحی وب</a>
                                        <span class="time-posted">3 ساعت پیش</span>
                                        </p>
                                        <p>
                                        <span class="desc text-truncate" style="max-width: 215px;">لورم ایپسوم یک متن ساحتگی است که کاربر فراوانی دارد</span>
                                        <span class="msg-count badge-circle badge-success badge-sm">1</span>
                                        </p>
                                    </div>
                                </li>
                                <li class="author-online has-new-message">
                                    <div class="user-avater">
                                        <img src="img/team-1.png" alt="">
                                    </div>
                                    <div class="user-message">
                                        <p>
                                        <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">طراحی وب</a>
                                        <span class="time-posted">3 ساعت پیش</span>
                                        </p>
                                        <p>
                                        <span class="desc text-truncate" style="max-width: 215px;">لورم ایپسوم یک متن ساحتگی است که کاربر فراوانی دارد</span>
                                        <span class="msg-count badge-circle badge-success badge-sm">1</span>
                                        </p>
                                    </div>
                                </li>
                                <li class="author-offline">
                                    <div class="user-avater">
                                        <img src="img/team-1.png" alt="">
                                    </div>
                                    <div class="user-message">
                                        <p>
                                        <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">طراحی وب</a>
                                        <span class="time-posted">3 ساعت پیش</span>
                                        </p>
                                        <p>
                                        <span class="desc text-truncate" style="max-width: 215px;">لورم ایپسوم یک متن ساحتگی است که کاربر فراوانی دارد</span>
                                        </p>
                                    </div>
                                </li>
                                <li class="author-offline">
                                    <div class="user-avater">
                                        <img src="img/team-1.png" alt="">
                                    </div>
                                    <div class="user-message">
                                        <p>
                                        <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">طراحی وب</a>
                                        <span class="time-posted">3 ساعت پیش</span>
                                        </p>
                                        <p>
                                        <span class="desc text-truncate" style="max-width: 215px;">لورم ایپسوم یک متن ساحتگی است که کاربر فراوانی دارد</span>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <a href="" class="dropdown-wrapper__more">مشاهده همه پیام ها</a>
                            </div>
                        </div>
                    </div>
                </li>
               @endauth
               <!-- ends: nav-message -->
               @guest
                   <li><a href="#">ورود</a></li>
                   <li><a href="#">ثبت نام</a></li>
               @endguest
               @auth
                <li class="nav-author">
                    <div class="dropdown-custom">
                        <a href="javascript:;" class="nav-item-toggle"><img src="img/author-nav.jpg" alt="" class="rounded-circle">
                            <span class="nav-item__title">اشکان<i class="las la-angle-down nav-item__arrow"></i></span>
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
                                    <a href="" class="nav-author__signout">
                                    <i class="uil uil-sign-out-alt"></i> خروج</a>
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
                  <img src="img/svg/search.svg" alt="search" class="svg feather-search">
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
                     <a href="#" class="">
                        <span class="nav-icon uil uil-create-dashboard"></span>
                        <span class="menu-text">داشبورد</span>
                     </a>
                  </li>
                  <li class="has-child">
                     <a href="#" class="">
                        <span class="nav-icon uil uil-bag"></span>
                        <span class="menu-text text-initial">فروشگاه</span>
                        <span class="toggle-icon"></span>
                     </a>
                     <ul>
                        <li class="">
                           <a href="products.html">محصولات</a>
                        </li>
                        <li class="">
                           <a href="product-details.html">جزئیات محصول</a>
                        </li>
                        <li class="">
                           <a href="add-product.html">افزودن محصول</a>
                        </li>
                        <li class="">
                           <a href="add-product.html">ویرایش محصول</a>
                        </li>
                        <li class="">
                           <a href="cart.html">سبد خرید</a>
                        </li>
                        <li class="">
                           <a href="order.html">سفارشات</a>
                        </li>
                        <li class="">
                           <a href="sellers.html">فروشندگان</a>
                        </li>
                        <li class="">
                           <a href="invoice.html">فاکتورها</a>
                        </li>
                     </ul>
                  </li>
                  <li class="has-child">
                     <a href="#" class="">
                        <span class="nav-icon uil uil-users-alt"></span>
                        <span class="menu-text">کاربران</span>
                        <span class="toggle-icon"></span>
                     </a>
                     <ul>
                        <li class="">
                           <a href="users-membar.html">تیم</a>
                        </li>
                        <li class="">
                           <a href="users-card.html">گرید کاربران</a>
                        </li>
                        <li class="">
                           <a href="users-list.html">لیست کاربران</a>
                        </li>
                        <li class="">
                           <a href="users-card2.html">استایل گرید کاربران </a>
                        </li>
                        <li class="">
                           <a href="users-group.html">گروه کاربران</a>
                        </li>
                        <li class="">
                           <a href="user-info.html">افزودن کاربر</a>
                        </li>
                        <li class="">
                           <a href="users-datatable.html">جدول کاربران</a>
                        </li>

                     </ul>
                  </li>
                  <li class="has-child">
                     <a href="#" class="">
                        <span class="nav-icon uil uil-user"></span>
                        <span class="menu-text">پشتیبانی</span>
                        <span class="toggle-icon"></span>
                     </a>
                     <ul>
                        <li class="">
                           <a href="support-ticket.html">پشتیبانی تیکت</a>
                        </li>
                        <li class="">
                           <a href="support-details.html">جزئیات تیکت</a>
                        </li>
                        <li class="">
                           <a href="new-ticket.html">تیکت جدید</a>
                        </li>
                     </ul>
                  </li>
                  <li class="has-child">
                     <a href="#" class="">
                        <span class="nav-icon uil uil-images"></span>
                        <span class="menu-text">بلاگ</span>
                        <span class="toggle-icon"></span>
                     </a>
                     <ul>
                        <li class="">
                           <a href="blog.html">استایل 1</a>
                        </li>
                        <li class="">
                           <a href="blog2.html">استایل 2</a>
                        </li>
                        <li class="">
                           <a href="blog3.html">استایل3</a>
                        </li>
                        <li class="">
                           <a href="blog-details.html">جزئیات</a>
                        </li>
                     </ul>
                  </li>
                  <li class="">
                     <a href="terms.html">
                        <span class="nav-icon uil uil-question-circle"></span>
                        <span class="menu-text">شرایط و ضوابط</span>
                     </a>
                  </li>
               </ul>
            </div>
         </div>
      </div>

      <div class="contents">
         <div class="dm-page-content">
            {{ $slot }}
         </div>
         <!-- ends: .dm-page-content -->
      </div>
      
      <footer class="footer-wrapper">
         <div class="footer-wrapper__inside">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-6">
                     <div class="footer-copyright">
                        <p><span>&copy; {{ date('Y') }}</span><a href="{{ route('home') }}">متارنگ</a>
                        </p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="footer-menu text-end">
                        <ul>
                           <li>
                              <a href="#">درباره</a>
                           </li>
                        </ul>
                     </div>
                     <!-- ends: .Footer Menu -->
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
   <!-- endinject-->
</body>

</html>
