<!doctype html>
<html dir="rtl" lang="fa-IR" class="loading-site no-js">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('home-page/style/main.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- scroll bg style -->

  <link rel="stylesheet" href="{{ asset('home-page/style/custom.css') }}">
  <title>{{ $title ?? config('app.name') }}</title>
  <style>
    .bg img {
      opacity: 0;
      transition: opacity 1s;
      -webkit-transition: opacity 1s;
    }

    .bg-loaded img {
      opacity: 1;
    }
  </style>
  <script>document.documentElement.className
      = document.documentElement.className
        .replace(/\bno-js\b/g, '') + ' js ';
  </script>

</head>

<body class="bg-gradient-to-t to-[#DAE7FE] from-[#ECF4FE]">
  <header class="z-[100] fixed top-0 w-full">
    <div class="bg-[#000BEEF7] w-full py-[10px] text-white text-sm font-mono hidden md:block px-5">
      <div class="flex items-center justify-between max-w-[85rem] mx-auto">
        <div>
          <a href="#" class="px-4">قوانین و مجوزات</a>
          <a href="#" class="px-4 border-x"> سوالات متداول </a>
          <a href="#" class="px-4"> سیاست حفظ حریم خصوصی </a>
        </div>
        <div class="flex gap-4">
          <div><a href="#"><img src="{{ asset('home-page/images/Union (1).png') }}" alt=""></a></div>
          <div><a href="#"><img src="{{ asset('home-page/images/Union (2).png') }}" alt=""></a></div>
          <div><a href="#"><img src="{{ asset('home-page/images/Union (3).png') }}" alt=""></a></div>
          <div><a href="#"><img src="{{ asset('home-page/images/Union (4).png') }}" alt=""></a></div>
        </div>
      </div>
    </div>
    <div dir="rtl" class=" flex flex-wrap lg:justify-start lg:flex-nowrap  w-full bg-white text-sm py-4   ">

      <nav
        class="max-w-[85rem] mx-auto w-full text-base px-4 gap-10 lg:flex sm:items-center sm:justify-between lg:items-center "
        aria-label="Global">
        <div class="flex flex-row-reverse items-center justify-between ">
          <div class="flex gap-4 items-center lg:hidden">
            <div><img src="{{ asset('home-page/images/bag-2.png') }}" alt=""></div>
            <div>
              <img src="{{ asset('home-page/images/profile.png') }}" alt="">
            </div>
          </div>
          <a class=" text-xl font-semibold lg:w-44" href="#"><img src="{{ asset('home-page/images/Group 1000002630.png') }}" class="w-full"
              alt=""></a>
          <div class="lg:hidden">
            <button type="button"
              class="hs-collapse-toggle  p-2 m-0 inline-flex justify-center items-center gap-2 rounded-md  font-medium  text-blue-700  align-middle  transition-all text-xl "
              data-hs-collapse="#navbar-collapse-basic" aria-controls="navbar-collapse-basic"
              aria-label="Toggle navigation">
              <svg class="hs-collapse-open:hidden w-7 h-7" width="20" height="20" fill="currentColor"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
              </svg>
              <svg class="hs-collapse-open:block hidden w-7 h-7" width="20" height="20" fill="currentColor"
                viewBox="0 0 16 16">
                <path
                  d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
              </svg>
            </button>
          </div>
        </div>

        <div id="navbar-collapse-basic" class="hidden w-full grow lg:flex  mx-auto justify-between">
          <div
            class="flex flex-col sm:gap-y-5 lg:gap-5 xl:gap-10 mt-5 lg:flex-row sm:items-center sm:justify-end md:justify-center sm:mt-0 sm:pl-5 mx-auto ">
            <a class="font-medium hover:text-blue-700 text-gray-600 duration-300  border-b-2 py-3 md:border-0 md:py-0" href=" {{ route('home') }}"
              aria-current="page">سه بعدی متا</a>
              <!--  megamenu -->
            <div
            class="hs-dropdown [--strategy:static] sm:[--strategy:absolute] [--adaptive:none]  hidden md:block  border-b-2 py-3 md:border-0 md:py-0">
            <button type="button" class="flex items-center w-full text-gray-600 hover:text-blue-700 font-medium ">
              دسته بندی ها
              <svg class=" mr-2 w-2.5 h-2.5 text-gray-600" width="16" height="16" viewBox="0 0 16 16"
              fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
            </svg>
               
            </button>
 
            <div class="bg-[#F9F9F9] p-0 md:w-[200px] shadow-none md:rounded-[10px] md:border-0 hs-dropdown-menu transition-[opacity,margin] sm:border duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 w-full hidden z-10 top-full   rounded-lg    before:absolute md:top-32 before:-top-5 before:w-full before:h-5">
              <div class="flex flex-col w-full">
                <div class="w-full hs-dropdown [--strategy:static] sm:[--strategy:absolute] [--adaptive:none]   flex flex-col  justify-center md:justify-around md:rounded-[10px] items-center  gap-x-40 max-h-[300px] overflow-y-scroll md:max-h-max md:overflow-auto">
                  <div class="hs-dropdown w-full [--strategy:static] sm:[--strategy:absolute] [--adaptive:none]  ">
                    @foreach ($categories as $category)
                      @if(is_null($category->parent))
                        <button id="hs-mega-menu-basic-dr" type="button"
                          class="bg-[#F9F9F9] p-2 focus:bg-white flex items-center w-full text-gray-600  hover:text-blue-700 font-medium   gap-5">
                          <div>
                            <img src="{{ asset('home-page/images/Frame 234.png') }}" alt="">
                          </div>
                          {{ $category->name }}
                          <svg class="ml-2 w-2.5 h-2.5 text-gray-600 rotate-90" width="16" height="16" viewBox="0 0 16 16"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                              stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                          </svg>
                        </button>
                      @endif
                      <div class="absolute space-y-[22.5px] top-0 hs-dropdown-menu md:border-0 transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 md:w-max hidden px-5 z-10 bg-white border-0 shadow-none rounded-l-[10px] p-2 x before:absolute  sm:border before:top-0 before:left-[-60px] left-0 md:left-[-65px]  before:h-5">
                        @foreach ($category->children as $child)
                          <a class="flex items-center gap-x-3.5 py-3  rounded-md text-sm text-gray-500 font-semibold hover:text-blue-700 duration-300 transition-all   "
                            href="./abutus.html">
                            {{ $child->name }}
                          </a>
                        @endforeach
                      </div>
                    @endforeach
 
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--  megamenu end-->
          <!-- mobile megamenu -->
         
          <div class="hs-accordion-group w-full   overflow-hidden sm:hidden  border-b-2  md:border-0 md:py-0">
            <div class="hs-accordion active" id="hs-basic-nested-heading-two">
              <button
                class="text-[#000BEE] active flex justify-between p-2 hs-accordion-toggle hs-accordion-active:text-white hs-accordion-active:bg-[#000BEE] py-3 px-5  items-center gap-x-3 w-full font-bold  "
                aria-controls="hs-basic-nested-collapse-two">
                بانک مدل سه بعدی
                <svg class="rotate-180 hs-accordion-active:hidden hs-accordion-active:text-white  block w-4 h-4 text-[#000BEE]" width="8" height="7" viewBox="0 0 8 7" fill="#000BEE" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M5.73205 6C4.96225 7.33333 3.03775 7.33333 2.26795 6L0.535898 3C-0.233902 1.66667 0.728349 1.43121e-07 2.26795 2.77717e-07L5.73205 5.80558e-07C7.27165 7.15154e-07 8.2339 1.66667 7.4641 3L5.73205 6Z"
                    fill="#000BEE" />
                </svg>
                <svg class="hs-accordion-active:block hs-accordion-active:text-white hs-accordion-active:group-hover:text-blue-600 hidden w-4 h-4  text-[#000BEE]" width="8" height="7" viewBox="0 0 8 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M5.73205 6C4.96225 7.33333 3.03775 7.33333 2.26795 6L0.535898 3C-0.233902 1.66667 0.728349 1.43121e-07 2.26795 2.77717e-07L5.73205 5.80558e-07C7.27165 7.15154e-07 8.2339 1.66667 7.4641 3L5.73205 6Z"
                    fill="white" />
                </svg>
 
              </button>
              <div id="hs-basic-nested-collapse-one"
                class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 px-3 bg-[#F7F7FE]"
                aria-labelledby="hs-basic-nested-heading-one">
                <div class="hs-accordion-group space-y-5 py-5">
                  
                  <div class="hs-accordion " id="hs-basic-nested-sub-heading-one">
                   <button class=" hs-accordion-toggle  hs-accordion-active:text-[#000BEE] py-1 flex items-center gap-x-7 w-full font-semibold  text-[#848383] transition " aria-controls="hs-basic-nested-sub-collapse-two">
                     <div>
                       <img src="../images/Group 1000002634.png" alt="">
                     </div>
                     مدل سه بعدی
                     
                     <svg class="hs-accordion-active:hidden hs-accordion-active:text-[#000BEE] hs-accordion-active:group-hover:text-[#000BEE] block w-4 h-4" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                       <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                       <path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                     </svg>
                     <svg class="hs-accordion-active:block hs-accordion-active:text-blue-600 hs-accordion-active:group-hover:text-blue-600 hidden w-4 h-4 text-gray-600 group-hover:text-gray-500 " width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                       <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                     </svg>
                   </button>
                   <div id="hs-basic-nested-sub-collapse-one" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-nested-sub-heading-two">
                    
                   <ul class="list-disc pr-20">
                       <a href="#" class="text-blue-700">
                         <li>آواتار</li>
                       </a>
                       <a href="#" class="text-blue-700">
                         <li>پکیج آواتار</li>
                       </a>
                       <a href="#" class="text-blue-700">
                         <li>سه بعدی</li>
                       </a>
                       <a href="#" class="text-blue-700">
                         <li>پکیج سه بعدی</li>
                       </a>
                     </ul>
                   </div>
                 </div>
                 <div class="hs-accordion " id="hs-basic-nested-sub-heading-one">
                   <button class=" hs-accordion-toggle  hs-accordion-active:text-[#000BEE] py-1 flex items-center gap-x-7 w-full font-semibold  text-[#848383] transition " aria-controls="hs-basic-nested-sub-collapse-two">
                     <div>
                       <img src="../images/Group 1000002634.png" alt="">
                     </div>
                     مدل سه بعدی
                     
                     <svg class="hs-accordion-active:hidden hs-accordion-active:text-[#000BEE] hs-accordion-active:group-hover:text-[#000BEE] block w-4 h-4" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                       <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                       <path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                     </svg>
                     <svg class="hs-accordion-active:block hs-accordion-active:text-blue-600 hs-accordion-active:group-hover:text-blue-600 hidden w-4 h-4 text-gray-600 group-hover:text-gray-500 " width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                       <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                     </svg>
                   </button>
                   <div id="hs-basic-nested-sub-collapse-one" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-nested-sub-heading-two">
                    
                     <ul class="list-disc pr-20">
                       <a href="#" class="text-blue-700">
                         <li>آواتار</li>
                       </a>
                       <a href="#" class="text-blue-700">
                         <li>پکیج آواتار</li>
                       </a>
                       <a href="#" class="text-blue-700">
                         <li>سه بعدی</li>
                       </a>
                       <a href="#" class="text-blue-700">
                         <li>پکیج سه بعدی</li>
                       </a>
                     </ul>
                   </div>
                 </div>
                 <div class="hs-accordion " id="hs-basic-nested-sub-heading-one">
                   <button class=" hs-accordion-toggle  hs-accordion-active:text-[#000BEE] py-1 flex items-center gap-x-7 w-full font-semibold  text-[#848383] transition " aria-controls="hs-basic-nested-sub-collapse-two">
                     <div>
                       <img src="../images/Group 1000002634.png" alt="">
                     </div>
                     مدل سه بعدی
                     
                     <svg class="hs-accordion-active:hidden hs-accordion-active:text-[#000BEE] hs-accordion-active:group-hover:text-[#000BEE] block w-4 h-4" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                       <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                       <path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                     </svg>
                     <svg class="hs-accordion-active:block hs-accordion-active:text-blue-600 hs-accordion-active:group-hover:text-blue-600 hidden w-4 h-4 text-gray-600 group-hover:text-gray-500 " width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                       <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                     </svg>
                   </button>
                   <div id="hs-basic-nested-sub-collapse-one" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-nested-sub-heading-two">
                    
                     <ul class="list-disc pr-20">
                       <a href="#" class="text-blue-700">
                         <li>آواتار</li>
                       </a>
                       <a href="#" class="text-blue-700">
                         <li>پکیج آواتار</li>
                       </a>
                       <a href="#" class="text-blue-700">
                         <li>سه بعدی</li>
                       </a>
                       <a href="#" class="text-blue-700">
                         <li>پکیج سه بعدی</li>
                       </a>
                     </ul>
                   </div>
                 </div>
                 <div class="hs-accordion " id="hs-basic-nested-sub-heading-one">
                   <button class=" hs-accordion-toggle  hs-accordion-active:text-[#000BEE] py-1 flex items-center gap-x-7 w-full font-semibold  text-[#848383] transition " aria-controls="hs-basic-nested-sub-collapse-two">
                     <div>
                       <img src="../images/Group 1000002634.png" alt="">
                     </div>
                     مدل سه بعدی
                     
                     <svg class="hs-accordion-active:hidden hs-accordion-active:text-[#000BEE] hs-accordion-active:group-hover:text-[#000BEE] block w-4 h-4" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                       <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                       <path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                     </svg>
                     <svg class="hs-accordion-active:block hs-accordion-active:text-blue-600 hs-accordion-active:group-hover:text-blue-600 hidden w-4 h-4 text-gray-600 group-hover:text-gray-500 " width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                       <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                     </svg>
                   </button>
                   <div id="hs-basic-nested-sub-collapse-one" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-nested-sub-heading-two">
                    
                     <ul class="list-disc pr-20">
                       <a href="#" class="text-blue-700">
                         <li>آواتار</li>
                       </a>
                       <a href="#" class="text-blue-700">
                         <li>پکیج آواتار</li>
                       </a>
                       <a href="#" class="text-blue-700">
                         <li>سه بعدی</li>
                       </a>
                       <a href="#" class="text-blue-700">
                         <li>پکیج سه بعدی</li>
                       </a>
                     </ul>
                   </div>
                 </div>
                 
                </div>
              </div>
            </div>
          </div>
          <!-- mobile megamenu end -->
            <a class="font-medium hover:text-blue-700 text-gray-600 duration-300  border-b-2 py-3 md:border-0 md:py-0"
              href="abuotus.html" aria-current="page">
              ثبت سفارش</a>
            <a class="font-medium hover:text-blue-700 text-gray-600 duration-300  border-b-2 py-3 md:border-0 md:py-0"
              href="abuotus.html" aria-current="page">
              درباره ما</a>
            <a class="font-medium hover:text-blue-700 text-gray-600 duration-300  border-b-2 py-3 md:border-0 md:py-0"
              href="abuotus.html" aria-current="page">
              تماس با ما</a>
            <a class="font-medium hover:text-blue-700 text-gray-600 duration-300  border-b-2 py-3 md:border-0 md:py-0"
              href="abuotus.html" aria-current="page">
              آموزش</a>
          </div>

        </div>
        <div id="navbar-collapse-basic"
          class=" hidden  lg:flex flex-col lg:flex-row text-base font-bold  mt-3 lg:mt-0 md:flex gap-3 w-max">
          <div class=" items-center gap-3 hidden lg:flex">
            <div class="bg-[#D8E5FD] p-[11px] rounded-full  w-max">
              <img src="{{ asset('home-page/images/search-normal.png') }}" alt="">
            </div>
            <div class="bg-[#D8E5FD] p-[10px] rounded-full w-max">
              <img src="{{ asset('home-page/images/bag-2.png') }}" alt="">
            </div>
          </div>
          <div class="bg-[#D8E5FD] rounded-3xl  justify-between w-max hidden lg:flex">
            @guest
                <div class="text-white bg-[#000BEE] rounded-3xl py-[10px] px-7 w-max flex items-center">
                    <a href="{{ route('login') }}">ورود</a>
                </div>
                <div class="text-[#000BEE] py-[10px] px-6 flex items-center gap-3">
                    <img src="{{ asset('home-page/images/profile.png') }}" alt="">
                    <a href="{{ route('register') }}">ثبت نام</a>
                </div>
            @endguest
            @auth
                <div class="text-white bg-[#000BEE] rounded-3xl py-[10px] px-7 w-max flex items-center">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    {{ __('خروج') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            @endauth
          </div>
        </div>
      </nav>
    </div>
  </header>

  <div>
    <div class="bg-[#ECF4FE] w-full relative   " style="padding-top: 6rem;">
      <div
        class="max-w-[85rem] mx-auto flex flex-col md:flex-row items-ctener justify-between mt-24 gap-10 px-10 md:px-5 py-5">
        <div class="w-full md:w-[45%]">
          <p class="text-[#000BEE] font-extrabold text-4xl">
            مدل سه بعدی و تجربه ای متفاوت
          </p>
          <p class="text-stone-800 font-bold text-xl lg:text-2xl">
            ما اینجا هستیم تا روزانه محصولات سه بعدی را در اختیار شما طراحان قرار دهیم . سامانه سه بعدی متا با تعرفه ای
            ثابت مرکز عرضه جدید ترین مدل سه بعدی ، آیکون ، انیمیشن و دیگر فایل های طراحی میباشد .
          </p>
          <div class="flex gap-5 relative mt-20">
            <input type="text"
              class="relative w-full p-5 text-[#ACB9FA] font-bold bg-[#D8E5FD] rounded-[32px] focus:outline-none pr-12 md:px-20">
            <img src="{{ asset('home-page/images/search-normal.png') }}" alt="" class="absolute right-5 top-5">
            <button
              class="bg-[#000BEE] font-bold md:text-xl py-5 px-5 md:px-14 w-max rounded-[32px] text-white text-center">جستجو</button>
          </div>
        </div>
        <div class="w-full flex items-center justify-end md:w-[55%]">
          <img src="{{ asset('home-page/images/Asset 2@300x 1.png') }}" alt="">
        </div>
      </div>
    </div>
    <img src="{{ asset('home-page/images/IMG_1967.PNG') }}" alt="" class="  w-full  overflow-hidden mb-36" style="margin-top:-230px ;">
  </div>

  <section class="max-w-[85rem] mx-auto px-5">
    <div class="">
      <div class="w-full flex justify-center flex-col items-center gap-4">
        <p class="text-stone-800 font-bold text-xl">
          محصولات ما
        </p>
        <p class="text-[#000BEE] font-extrabold text-5xl">
          هزاران فایل بینظیر
        </p>
      </div>
      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-7 px-10 sm:px-2">
        <a href="#"
          class="bg-white flex flex-col overflow-hidden rounded-[32px] justify-between items-center text-center py-12 px-6 gap-16 hover:drop-shadow-2xl duration-500 transition-all">
          <div>
            <img src="{{ asset('home-page/images/Design 1.png') }}" alt="">
          </div>
          <div class="flex flex-col justify-end ">
            <p class="text-gray-500 text-sm font-serif mb-[-8px]">
              3D models
            </p>
            <p class="text-[#000BEE] text-3xl font-bold p-0 m-0">
              مدل‌های سه بعدی
            </p>

          </div>

        </a>
        <a href="#"
          class="bg-white flex flex-col overflow-hidden rounded-[32px] justify-between items-center text-center py-12 px-6 gap-16 hover:drop-shadow-2xl duration-500 transition-all">
          <div>
            <img src="{{ asset('home-page/images/Group (3).png') }}" alt="">
          </div>
          <div class="flex flex-col justify-end ">
            <p class="text-gray-500 text-sm font-serif mb-[-8px]">
              Icons
            </p>
            <p class="text-[#000BEE] text-3xl font-bold p-0 m-0">
              ایکون ها
            </p>

          </div>

        </a>
        <a href="#"
          class="bg-white flex flex-col overflow-hidden rounded-[32px] justify-between items-center text-center py-12 px-6 gap-16 hover:drop-shadow-2xl duration-500 transition-all">
          <div>
            <img src="{{ asset('home-page/images/Group@2x.png') }}" alt="">
          </div>
          <div class="flex flex-col justify-end ">
            <p class="text-gray-500 text-sm font-serif mb-[-8px]">
              Vector and Illustrator
            </p>
            <p class="text-[#000BEE] text-3xl font-bold p-0 m-0">
              وکتور و ایلوستریتور
            </p>

          </div>

        </a>
        <a href="#"
          class="bg-white flex flex-col overflow-hidden rounded-[32px] justify-between items-center text-center py-12 px-6 gap-16 hover:drop-shadow-2xl duration-500 transition-all">
          <div>
            <img src="{{ asset('home-page/images/Group.png') }}" alt="">
          </div>
          <div class="flex flex-col justify-end ">
            <p class="text-gray-500 text-sm font-serif mb-[-8px]">
              Lotties animation
            </p>
            <p class="text-[#000BEE] text-3xl font-bold p-0 m-0">
              انیمیشن Lotties
            </p>

          </div>

        </a>

      </div>
    </div>
    <div class="flex flex-col md:flex-row items-center gap-y-5 gap-x-20 w-full px-5 md:px-10 mt-28 py-32">
      <div class="w-full md:w-1/2 flex justify-center items-center">
        <img src="{{ asset('home-page/images/Image 2.png') }}" alt="">
      </div>
      <div class="flex flex-col gap-5 w-full md:w-1/2 items-center md:items-start justify-center">
        <p class="text-[#000BEE] font-extrabold text-3xl m-0 p-0">
          مدل های سه بعدی
        </p>
        <p class="text-stone-800 font-bold">
          کیفیت طراحی ههای خود را با استاده از مدل های سه یعدی افزایش دهید .
        </p>
        <a href="#"
          class="text-[#000BEE] bg-[#CDD6FC] px-5 py-3 rounded-3xl font-bold text-xl w-max flex items-center justify-center gap-6 md:gap-10">
          <p class="m-0 p-0">
            لیست مدل های سه بعدی
          </p>
          <img src="{{ asset('home-page/images/Union.png') }}" alt="">
        </a>
      </div>
    </div>
  </section>
  <section class="max-w-[85rem] mx-auto md:px-5">
    <!-- start slyder -->
    <div class="flex flex-col  mt-32 md:px-5">
      <div class="w-full flex-col relative  ">
        <div class="flex flex-col justify-start items-start gap-3 px-5">
          <p class="text-2xl md:text-4xl text-[#000BEE] font-extrabold text-center p-0 m-0 "> دسته بندی های پر طرفدار
          </p>
          <p class="text-sm text-stone-800 ">لیستی ار محصولات سه بعدی ، انیمیشن آیکون و فایل های ایلیسترتور</p>
        </div>

        <div class="w-full h-full mx-auto overflow-x-hidden overflow-y-hidden py-5 my-5 pl-5 md:pl-0" dir="ltr">
          <div id="slider"
            class="h-full flex lg:gap-6 gap-5 items-center justify-start transition ease-out duration-700 ">
            <div class="flex flex-shrink-0 relative  ">
              <a href="#"
                class="bg-white p-3 w-[160px] md:w-[190px] flex flex-col overflow-hidden rounded-[20px] justify-center items-center gap-10 text-center">
                <div class="w-full p-1 md:p-5">
                  <img src="{{ asset('home-page/images/طراحی داخلی 1.png') }}" alt="" class="w-full">
                </div>
                <div>
                  <p class="text-gray-500 text-sm font-serif mb-[-6px]">
                    Icons
                  </p>
                  <p class="text-[#000BEE] text-xl md:text-3xl font-bold">
                    ایکون ها
                  </p>
                </div>
              </a>
            </div>
            <div class="flex flex-shrink-0 relative  ">
              <a href="#"
                class="bg-white p-3 w-[160px] md:w-[190px] flex flex-col overflow-hidden rounded-[20px] justify-center items-center gap-10 text-center">
                <div class="w-full p-1 md:p-5">
                  <img src="{{ asset('home-page/images/طراحی داخلی 1.png') }}" alt="" class="w-full">
                </div>
                <div>
                  <p class="text-gray-500 text-sm font-serif mb-[-6px]">
                    Icons
                  </p>
                  <p class="text-[#000BEE] text-xl md:text-3xl font-bold">
                    ایکون ها
                  </p>
                </div>
              </a>
            </div>
            <div class="flex flex-shrink-0 relative  ">
              <a href="#"
                class="bg-white p-3 w-[160px] md:w-[190px] flex flex-col overflow-hidden rounded-[20px] justify-center items-center gap-10 text-center">
                <div class="w-full p-1 md:p-5">
                  <img src="{{ asset('home-page/images/طراحی داخلی 1.png') }}" alt="" class="w-full">
                </div>
                <div>
                  <p class="text-gray-500 text-sm font-serif mb-[-6px]">
                    Icons
                  </p>
                  <p class="text-[#000BEE] text-xl md:text-3xl font-bold">
                    ایکون ها
                  </p>
                </div>
              </a>
            </div>
            <div class="flex flex-shrink-0 relative  ">
              <a href="#"
                class="bg-white p-3 w-[160px] md:w-[190px] flex flex-col overflow-hidden rounded-[20px] justify-center items-center gap-10 text-center">
                <div class="w-full p-1 md:p-5">
                  <img src="{{ asset('home-page/images/طراحی داخلی 1.png') }}" alt="" class="w-full">
                </div>
                <div>
                  <p class="text-gray-500 text-sm font-serif mb-[-6px]">
                    Icons
                  </p>
                  <p class="text-[#000BEE] text-xl md:text-3xl font-bold">
                    ایکون ها
                  </p>
                </div>
              </a>
            </div>
            <div class="flex flex-shrink-0 relative  ">
              <a href="#"
                class="bg-white p-3 w-[160px] md:w-[190px] flex flex-col overflow-hidden rounded-[20px] justify-center items-center gap-10 text-center">
                <div class="w-full p-1 md:p-5">
                  <img src="{{ asset('home-page/images/طراحی داخلی 1.png') }}" alt="" class="w-full">
                </div>
                <div>
                  <p class="text-gray-500 text-sm font-serif mb-[-6px]">
                    Icons
                  </p>
                  <p class="text-[#000BEE] text-xl md:text-3xl font-bold">
                    ایکون ها
                  </p>
                </div>
              </a>
            </div>
            <div class="flex flex-shrink-0 relative  ">
              <a href="#"
                class="bg-white p-3 w-[160px] md:w-[190px] flex flex-col overflow-hidden rounded-[20px] justify-center items-center gap-10 text-center">
                <div class="w-full p-1 md:p-5">
                  <img src="{{ asset('home-page/images/طراحی داخلی 1.png') }}" alt="" class="w-full">
                </div>
                <div>
                  <p class="text-gray-500 text-sm font-serif mb-[-6px]">
                    Icons
                  </p>
                  <p class="text-[#000BEE] text-xl md:text-3xl font-bold">
                    ایکون ها
                  </p>
                </div>
              </a>
            </div>
            <div class="flex flex-shrink-0 relative  ">
              <a href="#"
                class="bg-white p-3 w-[160px] md:w-[190px] flex flex-col overflow-hidden rounded-[20px] justify-center items-center gap-10 text-center">
                <div class="w-full p-1 md:p-5">
                  <img src="{{ asset('home-page/images/طراحی داخلی 1.png') }}" alt="" class="w-full">
                </div>
                <div>
                  <p class="text-gray-500 text-sm font-serif mb-[-6px]">
                    Icons
                  </p>
                  <p class="text-[#000BEE] text-xl md:text-3xl font-bold">
                    ایکون ها
                  </p>
                </div>
              </a>
            </div>
            <div class="flex flex-shrink-0 relative  ">
              <a href="#"
                class="bg-white p-3 w-[160px] md:w-[190px] flex flex-col overflow-hidden rounded-[20px] justify-center items-center gap-10 text-center">
                <div class="w-full p-1 md:p-5">
                  <img src="{{ asset('home-page/images/طراحی داخلی 1.png') }}" alt="" class="w-full">
                </div>
                <div>
                  <p class="text-gray-500 text-sm font-serif mb-[-6px]">
                    Icons
                  </p>
                  <p class="text-[#000BEE] text-xl md:text-3xl font-bold">
                    ایکون ها
                  </p>
                </div>
              </a>
            </div>
            <div class="flex flex-shrink-0 relative  ">
              <a href="#"
                class="bg-white p-3 w-[160px] md:w-[190px] flex flex-col overflow-hidden rounded-[20px] justify-center items-center gap-10 text-center">
                <div class="w-full p-1 md:p-5">
                  <img src="{{ asset('home-page/images/طراحی داخلی 1.png') }}" alt="" class="w-full">
                </div>
                <div>
                  <p class="text-gray-500 text-sm font-serif mb-[-6px]">
                    Icons
                  </p>
                  <p class="text-[#000BEE] text-xl md:text-3xl font-bold">
                    ایکون ها
                  </p>
                </div>
              </a>
            </div>
            <div class="flex flex-shrink-0 relative  ">
              <a href="#"
                class="bg-white p-3 w-[160px] md:w-[190px] flex flex-col overflow-hidden rounded-[20px] justify-center items-center gap-10 text-center">
                <div class="w-full p-1 md:p-5">
                  <img src="{{ asset('home-page/images/طراحی داخلی 1.png') }}" alt="" class="w-full">
                </div>
                <div>
                  <p class="text-gray-500 text-sm font-serif mb-[-6px]">
                    Icons
                  </p>
                  <p class="text-[#000BEE] text-xl md:text-3xl font-bold">
                    ایکون ها
                  </p>
                </div>
              </a>
            </div>




          </div>
        </div>
        <div class="absolute  md:top-7 flex w-full justify-center md:w-max md:left-0 gap-5 items-center">

          <button aria-label="slide forward"
            class=" aspect-square  focus:outline-none focus:bg-[#000BEE] focus:ring-2 focus:ring-offset-2 focus:ring-[#000BEE] bg-[#CDD6FC] p-5 rounded-full"
            id="next">
            <svg class="text-white" width="14" height="14" viewBox="0 0 8 14" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
          </button>
          <button aria-label="slide backward"
            class=" aspect-square  focus:outline-none focus:bg-[#000BEE] focus:ring-2 focus:ring-offset-2 focus:ring-[#000BEE] bg-[#CDD6FC] p-5 rounded-full"
            id="prev">
            <svg class="text-white" width="14" height="14" viewBox="0 0 8 14" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
          </button>
          <div>
            <a href="#"
              class="text-[#000BEE] bg-[#CDD6FC] px-3 md:px-5 py-3 rounded-3xl font-bold text-lg md:text-xl">مشاهده
              همه</a>
          </div>
        </div>
      </div>
    </div>
    <!-- end slyder -->
  </section>
  <section class="w-full mt-32">
    <div id="content" role="main" class="content-area">
      <section class="section has-parallax" id="section_719570122">
        <div class="bg section-bg fill bg-fill   " data-parallax-container=".section" data-parallax-background
          data-parallax="-7">

        </div>

        <div class="section-content relative">

          <div id="gap-658953857" class="gap-element clearfix" style="display:block; height:auto;">

            <style>
              #gap-658953857 {
                padding-top: 40px;
              }
            </style>
          </div>


          <div class="row" style="max-width:1200px" id="row-2117521907">


            <div id="col-10208202" class="col small-12 large-12 px-5">
              <div class="col-inner text-center flex flex-col gap-5 py-10 rounded-3xl "
                style="background-color:#000ceec2;">
                <div id="text-3122729349" class="text ">
                  <h2 style="color: white;">“خدمات طراحی محیط های سه بعدی به صورت Low-Poly و High-Poly”</h2>
                  <style>
                    #text-3122729349 {
                      font-size: 1.4rem;
                      text-align: center;
                    }
                  </style>
                </div>
                <a href="#"
                  class="bg-white text-[#000BEE] font-bold md:text-xl rounded-3xl px-5 md:px-10 py-[10px] w-max mx-auto flex items-center gap-6 md:gap-10">
                  <p class="m-0 p-0">
                    نمونه کار و ثبت سفارش
                  </p>
                  <img src="{{ asset('home-page/images/Union.png') }}" alt="">
                </a>

              </div>

              <style>
                #col-10208202>.col-inner {
                  padding: 50px 20px 50px 20px;
                }

                @media (min-width:550px) {
                  #col-10208202>.col-inner {
                    padding: 50px 70px 50px 70px;
                  }
                }
              </style>
            </div>



          </div>

        </div>


        <style>
          #section_719570122 {
            padding-top: 55px;
            padding-bottom: 55px;
            min-height: 300px;
          }

          #section_719570122 .section-bg.bg-loaded {
            background-image: url(https://3d.irpsc.com/wp-content/uploads/2023/03/3d-irpsc-model-order.jpg);
          }

          #section_719570122 .section-bg {
            background-position: 0% 4%;
          }

          #section_719570122 .ux-shape-divider--top svg {
            height: 150px;
            --divider-top-width: 100%;
          }

          #section_719570122 .ux-shape-divider--bottom svg {
            height: 150px;
            --divider-width: 100%;
          }
        </style>
      </section>
    </div>
  </section>
  <section>
    <div>
      <p class="text-4xl font-bold text-[#000BEE] mt-32 text-center">محصولات ما</p>
    </div>
    <div class="mx-auto max-w-[85rem]">
      <div class="border-b ">
        <nav class="flex justify-center  lg:text-2xl font-bold" aria-label="Tabs" role="tablist">
          <button type="button"
            class="px-5 hs-tab-active:text-black  items-center gap-2 whitespace-nowrap text-black/30 hover:text-black active"
            id="tabs-with-underline-item-1" data-hs-tab="#tabs-with-underline-1" aria-controls="tabs-with-underline-1"
            role="tab">
            بالاترین امتیاز
          </button>
          <button type="button"
            class="hs-tab-active:text-black  items-center gap-2 whitespace-nowrap text-black/30 hover:text-black border-x border-black/30 px-5"
            id="tabs-with-underline-item-2" data-hs-tab="#tabs-with-underline-2" aria-controls="tabs-with-underline-2"
            role="tab">
            جدید ترین
          </button>
          <button type="button"
            class="px-5 hs-tab-active:text-black  items-center gap-2 whitespace-nowrap text-black/30 hover:text-black"
            id="tabs-with-underline-item-3" data-hs-tab="#tabs-with-underline-3" aria-controls="tabs-with-underline-3"
            role="tab">
            پرفروش ترین
          </button>
        </nav>
      </div>

      <div class="mt-3 flex flex-col items-center ">
        <div id="tabs-with-underline-1" role="tabpanel" aria-labelledby="tabs-with-underline-item-1 ">
          <div class="flex justify-between text-sm duration-500 transition-all w-full ">
            <div class="flex gap-7 overflow-x-scroll w-screen px-3 md:w-auto scrollbar  duration-500 transition-all">
              <div>
                <a href="#"
                  class="bg-transparent border border-gray-300 hover:border-white hover:bg-white w-[180px]  md:w-[270px] flex flex-col overflow-hidden rounded-[20px] justify-between items-center text-center p-5 gap-5  duration-500 transition-all">
                  <div class="p-6">
                    <img src="{{ asset('home-page/images/3D-rgb-10000.png') }}" alt="">
                  </div>
                  <div class="flex flex-col justify-center items-center gap-3">

                    <p class="text-[#000BEE] text-3xl font-bold p-0 m-0">
                      ایکون ها
                    </p>
                    <button class="rounded-lg w-max px-5 py-3 bg-[#D8E5FD] text-[#000BEE] m-0 text-sm">
                      Icons
                    </button>
                  </div>
                </a>
              </div>
              <div>
                <a href="#"
                  class="bg-transparent border border-gray-300 hover:border-white hover:bg-white w-[180px]  md:w-[270px] flex flex-col overflow-hidden rounded-[20px] justify-between items-center text-center p-5 gap-5  duration-500 transition-all">
                  <div class="p-6">
                    <img src="{{ asset('home-page/images/3D-rgb-10000.png') }}" alt="">
                  </div>
                  <div class="flex flex-col justify-center items-center gap-3">

                    <p class="text-[#000BEE] text-3xl font-bold p-0 m-0">
                      ایکون ها
                    </p>
                    <button class="rounded-lg w-max px-5 py-3 bg-[#D8E5FD] text-[#000BEE] m-0 text-sm">
                      Icons
                    </button>
                  </div>
                </a>
              </div>
              <div>
                <a href="#"
                  class="bg-transparent border border-gray-300 hover:border-white hover:bg-white w-[180px]  md:w-[270px] flex flex-col overflow-hidden rounded-[20px] justify-between items-center text-center p-5 gap-5  duration-500 transition-all">
                  <div class="p-6">
                    <img src="{{ asset('home-page/images/3D-rgb-10000.png') }}" alt="">
                  </div>
                  <div class="flex flex-col justify-center items-center gap-3">

                    <p class="text-[#000BEE] text-3xl font-bold p-0 m-0">
                      ایکون ها
                    </p>
                    <button class="rounded-lg w-max px-5 py-3 bg-[#D8E5FD] text-[#000BEE] m-0 text-sm">
                      Icons
                    </button>
                  </div>
                </a>
              </div>
              <div>
                <a href="#"
                  class="bg-transparent border border-gray-300 hover:border-white hover:bg-white w-[180px]  md:w-[270px] flex flex-col overflow-hidden rounded-[20px] justify-between items-center text-center p-5 gap-5  duration-500 transition-all">
                  <div class="p-6">
                    <img src="{{ asset('home-page/images/3D-rgb-10000.png') }}" alt="">
                  </div>
                  <div class="flex flex-col justify-center items-center gap-3">

                    <p class="text-[#000BEE] text-3xl font-bold p-0 m-0">
                      ایکون ها
                    </p>
                    <button class="rounded-lg w-max px-5 py-3 bg-[#D8E5FD] text-[#000BEE] m-0 text-sm">
                      Icons
                    </button>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div id="tabs-with-underline-2" class="hidden" role="tabpanel" aria-labelledby="tabs-with-underline-item-2">
          <div class="flex justify-between text-sm">
            <p class="text-pink-600 font-bold">item item 2</p>
            <p class="text-pink-600 font-bold">item item 2</p>

          </div>
        </div>
        <div id="tabs-with-underline-3" class="hidden" role="tabpanel" aria-labelledby="tabs-with-underline-item-3">
          <div class="flex justify-between text-sm">
            <p class="text-pink-600 font-bold">item item 3</p>
            <p class="text-pink-600 font-bold">item item 3 </p>
            <p class="text-pink-600 font-bold">item item 3</p>
            <p class="text-pink-600 font-bold">item item 3 </p>
          </div>
        </div>
        <div id="tabs-with-underline-4" class="hidden" role="tabpanel" aria-labelledby="tabs-with-underline-item-4">
          <div class="flex justify-between text-sm">
            <p class="text-pink-600 font-bold">item item 4</p>
            <p class="text-pink-600 font-bold">item item 4 </p>

          </div>
        </div>
        <div id="tabs-with-underline-5" class="hidden" role="tabpanel" aria-labelledby="tabs-with-underline-item-5">
          <div class="flex justify-between text-sm">
            <p class="text-pink-600 font-bold">item item 5</p>
            <p class="text-pink-600 font-bold">item item 5 </p>

          </div>
        </div>
        <div id="tabs-with-underline-6" class="hidden" role="tabpanel" aria-labelledby="tabs-with-underline-item-6">
          <div class="flex justify-between text-sm">
            <p class="text-pink-600 font-bold">item item 6</p>
            <p class="text-pink-600 font-bold">item item 6 </p>

          </div>
        </div>
      </div>

      <div class="flex justify-center gap-3 lg:text-2xl font-bold mt-10" aria-label="Tabs" role="tablist">
        <button type="button"
          class="bg-[#CDD6FC] p-2 rounded-full duration-500 transition-all  hs-tab-active:w-10 hs-tab-active:bg-[#000BEE] slyder-but "
          id="tabs-with-underline-item-4" data-hs-tab="#tabs-with-underline-4" aria-controls="tabs-with-underline-4"
          role="tab">

        </button>
        <button type="button"
          class="bg-[#CDD6FC] p-2 rounded-full duration-500 transition-all  hs-tab-active:w-10 hs-tab-active:bg-[#000BEE] slyder-but "
          id="tabs-with-underline-item-5" data-hs-tab="#tabs-with-underline-5" aria-controls="tabs-with-underline-5"
          role="tab">

        </button>
        <button type="button"
          class="bg-[#CDD6FC] p-2 rounded-full duration-500 transition-all  hs-tab-active:w-10 hs-tab-active:bg-[#000BEE] slyder-but "
          id="tabs-with-underline-item-6" data-hs-tab="#tabs-with-underline-6" aria-controls="tabs-with-underline-6"
          role="tab">

        </button>
      </div>
    </div>
  </section>
  <section class="max-w-[85rem] mx-auto mt-32 px-5">
    <!-- <div class="flex flex-wrap justify-center gap-5 my-20">
      <div>
        <a href="#" >
          <img src="../images/meta-logo-irpsc.png" alt="" class="w-14">
        </a>
      </div>
      <div>
        <a href="#" >
          <img src="../images/Metaverse-University.png" alt="" class="w-14">
        </a>
      </div>
      <div>
        <a href="#" >
          <img src="../images/NFT..png" alt="" class="w-14">
        </a>
      </div>
      <div>
        <a href="#" >
          <img src="../images/sale.png" alt="" class="w-14">
        </a>
      </div>
      <div>
        <a href="#" >
          <img src="../images/shop-icon.png" alt="" class="w-14">
        </a>
      </div>
      <div>
        <a href="#" >
          <img src="../images/supply-icon.png" alt="" class="w-14">
        </a>
      </div>
      <div>
        <a href="#" >
          <img src="../images/target-icon.png" alt="" class="w-14">
        </a>
      </div>
      <div>
        <a href="#" >
          <img src="../images/video.png" alt="" class="w-14">
        </a>
      </div>
      <div>
        <a href="#" >
          <img src="../images/irpsc-icon.png" alt="" class="w-14">
        </a>
      </div>
      <div>
        <a href="#" >
          <img src="../images/animal-icon.png" alt="" class="w-14">
        </a>
      </div>
      <div>
        <a href="#" >
          <img src="../images/home-icon.png" alt="" class="w-14">
        </a>
      </div>
      <div>
        <a href="#" >
          <img src="../images/green-knowledge-base-icon.png" alt="" class="w-14">
        </a>
      </div>
      <div>
        <a href="#" >
          <img src="../images/faq.png" alt="" class="w-14">
        </a>
      </div>
      <div>
        <a href="#" >
          <img src="../images/crm-icon.png" alt="" class="w-14">
        </a>
      </div>
      <div>
        <a href="#" >
          <img src="../images/ad.irpsc.com.png" alt="" class="w-14">
        </a>
      </div>
      <div>
        <a href="#" >
          <img src="../images/color-metaverse (1).png" alt="" class="w-14">
        </a>
      </div>
      
    </div> -->
 
    <div class="flex-wrap flex justify-center items-ctener gap-2 mx-auto " style="margin-bottom:50px ;">

   <a href="https://irpsc.com" style="width:55px ;" target="_blank " title="وزارت تعاون کار و رفاه اجتماعی">
     <img src="https://irpsc.com/img-icon/vezarat.png">
 </a>
 <a class="active" href="#" target="_blank "  style="width:55px ;" title="نماد اعتماد الکترونیک">
     <img src="https://irpsc.com/img-icon/enamad.png">
     <i class="vi vi-chat"></i>
 </a>
 <a href="https://irpsc.com" target="_blank "  style="width:55px ;" title="ثبت اسناد و املاک کشور">
     <img src="https://irpsc.com/img-icon/qazaii.png">
 </a>
 <a href="https://video.irpsc.com" target="_blank "  style="width:55px ;" title="مرکز آموزش ویدئویی">
     <img src="https://irpsc.com/img-icon/video.png">
 </a>
 <a href="https://faq.irpsc.com" target="_blank "  style="width:55px ;" title="انجمن پرسش و پاسخ">
     <img src="https://irpsc.com/img-icon/faq.png">
 </a>
 <a href="https://Shop.irpsc.com" target="_blank "  style="width:55px ;" title="فروشگاه ملی">
     <img src="https://irpsc.com/img-icon/shop.png">
 </a>
 <a href="https://supply.irpsc.com" target="_blank "  style="width:55px ;" title="تولید کنندگان">
     <img src="https://irpsc.com/img-icon/supply.png">
 </a>
 <a href="https://crm.irpsc.com" target="_blank "  style="width:55px ;" title="مدیریت بر مدیران">
     <img src="https://irpsc.com/img-icon/crm.png">
 </a>
 <a href="https://target.irpsc.com" target="_blank "  style="width:55px ;" title="نگرش ملی">
     <img src="https://irpsc.com/img-icon/target.png">
 </a>
 <a href="https://animal.irpsc.com" target="_blank "  style="width:55px ;" title="حیوانات و دامپزشک">
     <img src="https://irpsc.com/img-icon/animal.png">
 </a>
 <a href="https://irpsc.com" target="_blank "  style="width:55px ;" title="رسانه ملی">
     <img src="https://irpsc.com/img-icon/irpsc.png">
 </a>
 <a href="https://meta.irpsc.com" target="_blank "  style="width:55px ;" title="اخبار متا">
     <img src="https://irpsc.com/img-icon/meta.png">
 </a>
 <a href="https://uni.irpsc.com" target="_blank "  style="width:55px ;" title="دانشگاه متاورس">
     <img src="https://irpsc.com/img-icon/uni.png">
 </a>
 <a href="https://crm.irpsc.com/knowledgebase" target="_blank "  style="width:55px ;" title="استخدام | دانش محور">
     <img src="https://irpsc.com/img-icon/knowledge.png">
 </a>
 <a href="https://sale.irpsc.com" target="_blank "  style="width:55px ;" title="فروشگاه مجازی حم">
     <img src="https://irpsc.com/img-icon/sale.png">
 </a>
 <a href="https://ad.irpsc.com" target="_blank "  style="width:55px ;" title="تبلیغات ملی">
     <img src="https://irpsc.com/img-icon/ad.png">
 </a>
 <a href="https://nft.irpsc.com" target="_blank "  style="width:55px ;" title="بازار NFT">
     <img src="https://irpsc.com/img-icon/nft.png">
 </a>
 <a href="https://rgb.irpsc.com" target="_blank "  style="width:55px ;" title="متاورس رنگ">
     <img src="https://irpsc.com/img-icon/rgb.png">
 </a> 
   <a href="https://rgb.irpsc.com" target="_blank "  style="width:55px ;" title="سه بعدی متا">
     <img src="https://irpsc.com/img-icon/3d.gif">
 </a>
 <a title="خانه"  style="width:55px ;">
     <img src="https://irpsc.com/img-icon/home-soon.png">
 </a>


    </div>
    <div class="flex flex-col md:flex-row gap-10">
      <div
        class="bg-[#2667FF] w-full md:w-[55%] rounded-[32px] text-white p-10 flex flex-col lg:flex-row gap-y-7 justify-between items-center">
        <div class="space-y-3  lg:w-1/2">
          <p class="m-0 p-0 font-bold text-3xl ">
            ثبت سفارش
          </p>
          <p>
            طراحی مدل سه بعدی خود را به ما واگذار کنید
          </p>
        </div>
        <div class="font-bold ">
          <a href="#" class="rounded-3xl bg-white/75 py-3 px-5 text-[#2667FF]">ثبت سفارش و نمونه کار ها</a>
        </div>
      </div>
      <div
        class="bg-[#20D05C] w-full md:w-[45%] rounded-[32px] text-white p-10 flex flex-col md:flex-row gap-y-7 justify-between items-center">
        <div class="space-y-3">
          <p class="m-0 p-0 font-bold text-3xl">
            پشتیبانی 24 ساعته
          </p>
          <p>
            پیام خود را در واتس آپ ارسال کنید
          </p>
        </div>
        <div class="font-bold">
          <a href="#" class="rounded-3xl bg-white/75 py-3 px-5 text-[#20D05C]">09028689789</a>
        </div>
      </div>
    </div>
  </section>
  <footer class="bg-[#D8E5FD] max-w-[1320px] mx-5 md:mx-auto p-5 rounded-t-[32px] mt-10 gap-6 flex flex-col">
    <div class="flex flex-col md:flex-row gap-5 md:gap-14 w-max mx-auto">
      <a href="#" class="text-stone-800 font-bold">بانک مدل 3 بعدی</a>
      <a href="#" class="text-stone-800 font-bold">آموزش</a>
      <a href="#" class="text-stone-800 font-bold">سیاست و حریم خصوصی</a>
    </div>
    <div class="flex flex-wrap justify-center gap-5 mx-auto ">
      <div>
        <a href="#">
          <img src="{{ asset('home-page/images/youtub.png') }}" alt="">
        </a>
      </div>
      <div>
        <a href="#">
          <img src="{{ asset('home-page/images/whatsapp.png') }}" alt="">
        </a>
      </div>
      <div>
        <a href="#">
          <img src="{{ asset('home-page/images/telegram.png') }}" alt="">
        </a>
      </div>
      <div>
        <a href="#">
          <img src="{{ asset('home-page/images/istagram.png') }}" alt="">
        </a>
      </div>
      <div>
        <a href="#" class="rounded-full bg-gray-500 p-2 w-max flex justify-center items-center">
          <img src="{{ asset('home-page/images/sms.png') }}" alt="">
        </a>
      </div>
      <div>
        <a href="#" class="rounded-full bg-[#E70000] p-2 px-[10px] w-max flex justify-center items-center">
          <img src="{{ asset('home-page/images/Vector (9).png') }}" alt="">
        </a>
      </div>
    </div>
    <div>
      <p class="text-sm text-[#393939] text-center m-0  p-0">
        تمام حقوق مادی و معنوی مطالب و طرح قالب برای این سایت میباشد.
      </p>
    </div>
  </footer>

</body>
<!-- start scroll bg script -->

<script src="https://code.jquery.com/jquery-3.7.1.min.js" id="jquery-core-js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script type='text/javascript' id='flatsome-js-js-extra'>
  /* <![CDATA[ */
  var flatsomeVars = { "theme": { "version": "3.16.2" }, "ajaxurl": "https:\/\/3d.irpsc.com\/wp-admin\/admin-ajax.php", "rtl": "1", "sticky_height": "53", "assets_url": "https:\/\/3d.irpsc.com\/wp-content\/themes\/flatsome\/assets\/js\/", "lightbox": { "close_markup": "<button title=\"%title%\" type=\"button\" class=\"mfp-close\"><svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"><\/line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"><\/line><\/svg><\/button>", "close_btn_inside": false }, "user": { "can_edit_pages": false }, "i18n": { "mainMenu": "\u0641\u0647\u0631\u0633\u062a \u0627\u0635\u0644\u06cc", "toggleButton": "\u062a\u063a\u06cc\u06cc\u0631 \u0648\u0636\u0639\u06cc\u062a" }, "options": { "cookie_notice_version": "1", "swatches_layout": false, "swatches_box_select_event": false, "swatches_box_behavior_selected": false, "swatches_box_update_urls": "1", "swatches_box_reset": false, "swatches_box_reset_extent": false, "swatches_box_reset_time": 300, "search_result_latency": "0" }, "is_mini_cart_reveal": "1" };
  /* ]]> */
</script>
<script type='text/javascript'
  src='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js'
  id='flatsome-js-js'></script>

<!-- end scroll bg script -->
<script src="{{ asset('home-page/script/preline.js') }}"></script>
<script>
  let defaultTransform = 0;
  function goNext() {
    defaultTransform = defaultTransform - 300;
    var slider = document.getElementById("slider");
    if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.4) defaultTransform = 0;
    slider.style.transform = "translateX(" + defaultTransform + "px)";
  }
  next.addEventListener("click", goNext);
  function goPrev() {
    var slider = document.getElementById("slider");
    if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
    else defaultTransform = defaultTransform + 300;
    slider.style.transform = "translateX(" + defaultTransform + "px)";
  }
  prev.addEventListener("click", goPrev);

</script>


</html>