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
  <title>{{'سه بعدی متا' . ' | ' .  $title  ?? config('app.name') }}</title>
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
  
  {{ $slot }}

  <section class="max-w-[85rem] mx-auto mt-32 px-5">
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
</body>
</html>