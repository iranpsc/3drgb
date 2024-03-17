<div>
    <main class="w-full main-content-smallNav">
      <section>
        <div class="bg-[#000BEEF7] w-full py-[10px] text-white text-sm font-mono hidden lg:block px-5">
          <div class="flex items-center justify-between max-w-[1500px] mx-auto">
            <div>
              <a href="#" class="px-4">قوانین و مجوزات</a>
              <a href="#" class="px-4 border-x"> سوالات متداول </a>
              <a href="#" class="px-4"> سیاست حفظ حریم خصوصی </a>
            </div>
            <div class="flex gap-4">
              <div><a href="#"><img src="https://3d.irpsc.com/home-page/images/Union (1).png" alt=""></a></div>
              <div><a href="#"><img src="https://3d.irpsc.com/home-page/images/Union (2).png" alt=""></a></div>
              <div><a href="#"><img src="https://3d.irpsc.com/home-page/images/Union (3).png" alt=""></a></div>
              <div><a href="#"><img src="https://3d.irpsc.com/home-page/images/Union (4).png" alt=""></a></div>
            </div>
          </div>
        </div>
      </section>
      <div>
        <div class="bg-[#ECF4FE] dark:bg-[#4A4E7C] w-full relative   pt-20 ">
          <div
            class="w-full mx-auto flex flex-col md:flex-row items-ctener justify-between  gap-10 px-10 md:px-10  py-5 lg:px-20">
            <div class="w-full md:w-[45%] flex flex-col justify-center">
              <p class="text-[#000BEE] dark:text-white py-3 font-extrabold text-4xl" style="font-family:rokh ;">
                مدل سه بعدی و تجربه ای متفاوت
              </p>
              <p class="text-stone-800 dark:text-[#ffffff] font-bold text-xl lg:text-2xl mt-5">
                ما اینجا هستیم تا روزانه محصولات سه بعدی را در اختیار شما طراحان قرار دهیم . سامانه سه بعدی متا با
                تعرفه ای
                ثابت مرکز عرضه جدید ترین مدل سه بعدی ، آیکون ، انیمیشن و دیگر فایل های طراحی میباشد .
              </p>
              <div class="flex gap-5 relative mt-20">
                <input type="text"  wire:model.live.debounce.500ms="searchTerm"
                  class="relative w-full p-5 text-[#ACB9FA] font-bold bg-[#D8E5FD] dark:bg-[#001448c9] rounded-[32px] focus:outline-none pr-12 md:px-20">


                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute right-5 top-5">
                        <path class="dark:stroke-white" d="M11.4582 21.7501C17.1421 21.7501 21.7498 17.1423 21.7498 11.4584C21.7498 5.77448 17.1421 1.16675 11.4582 1.16675C5.77424 1.16675 1.1665 5.77448 1.1665 11.4584C1.1665 17.1423 5.77424 21.7501 11.4582 21.7501Z" stroke="#000BEE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path class="dark:stroke-white" d="M22.8332 22.8334L20.6665 20.6667" stroke="#000BEE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                <button type="button" wire:click="search"
                  class="bg-[#000BEE] dark:bg-[#C2008C] text-white font-bold md:text-xl pb-5 pt-[18px] px-5 md:px-14 w-max rounded-[32px]  text-center">جستجو</button>

              </div>
            </div>
            <div class="w-full flex items-center justify-end md:w-[55%]">
              <img src="{{ asset('home-page/images/Asset 2@300x 1.png') }}" alt="">
            </div>
          </div>
        </div>
        <img src="{{ asset('home-page/images/output-onlinepngtools.png') }}" alt="" class=" hidden dark:block  w-full  overflow-hidden mb-36 2xl:mt-[-185px]">
        <img src="{{ asset('home-page/images/helal.png') }}" alt="" class=" dark:hidden w-full  overflow-hidden mb-36 2xl:mt-[-185px]">

      </div>

      <section class="w-full mx-auto max-w-[1500px] lg:mt-[-85px]">
        <div class="space-y-10">
          <div class="w-full flex justify-center flex-col items-center gap-4 space-y-5 py-10">
            <p class="text-stone-800 dark:text-[#ffffff] font-bold text-2xl">
              محصولات ما
            </p>
            <p class="text-[#000BEE] dark:text-[#E8E9FF] font-extrabold text-5xl" style="font-family:rokh;">
              هزاران فایل بینظیر
            </p>
          </div>
          <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-7 px-10 sm:px-2">
            <a href="#"
              class="bg-white dark:bg-[#001448] flex flex-col overflow-hidden rounded-xl justify-between items-center text-center py-12 px-6 gap-16 hover:drop-shadow-2xl duration-500 transition-all">
              <div>
                <img src="{{ asset('home-page/images/Design 1.png') }}" alt="">
              </div>
              <div class="flex flex-col justify-end ">
                <p class="text-gray-500 text-sm font-serif " style="font-family:rokh ;">
                  3D models
                </p>
                <p class="text-[#000BEE]  dark:text-[#E8E9FF] text-3xl font-bold p-0 m-0" style="font-family:rokh ;">
                  مدل‌های سه بعدی
                </p>
              </div>
            </a>
            <a href="#"
              class="bg-white dark:bg-[#001448] flex flex-col overflow-hidden rounded-xl justify-between items-center text-center py-12 px-6 gap-16 hover:drop-shadow-2xl duration-500 transition-all">
              <div>
                <img src="{{ asset('home-page/images/Group (3).png') }}" alt="">
              </div>
              <div class="flex flex-col justify-end ">
                <p class="text-gray-500 text-sm font-serif ">
                  Icons
                </p>
                <p class="text-[#000BEE] dark:text-[#E8E9FF] text-3xl font-bold p-0 m-0">
                  ایکون ها
                </p>

              </div>

            </a>
            <a href="#"
              class="bg-white dark:bg-[#001448] flex flex-col overflow-hidden rounded-xl justify-between items-center text-center py-12 px-6 gap-16 hover:drop-shadow-2xl duration-500 transition-all">
              <div>
                <img src="{{ asset('home-page/images/Group@2x.png') }}" alt="">
              </div>
              <div class="flex flex-col justify-end ">
                <p class="text-gray-500 text-sm font-serif " style="font-family:rokh ;">
                  Vector and Illustrator
                </p>
                <p class="text-[#000BEE] dark:text-[#E8E9FF] text-3xl font-bold p-0 m-0">
                  وکتور و ایلوستریتور
                </p>

              </div>

            </a>
            <a href="#"
              class="bg-white dark:bg-[#001448] flex flex-col overflow-hidden rounded-xl justify-between items-center text-center py-12 px-6 gap-16 hover:drop-shadow-2xl duration-500 transition-all">
              <div>
                <img src="{{ asset('home-page/images/Group.png') }}" alt="">
              </div>
              <div class="flex flex-col justify-end ">
                <p class="text-gray-500 text-sm font-serif ">
                  Lotties animation
                </p>
                <p class="text-[#000BEE] dark:text-[#E8E9FF] text-3xl font-bold p-0 m-0" style="font-family:rokh ;">
                  انیمیشن Lotties
                </p>

              </div>

            </a>

          </div>
        </div>
        <div class="flex flex-col md:flex-row items-center gap-y-5 gap-x-20 w-full px-5 mt-28 py-32">
          <div class="w-full md:w-1/2 flex justify-center items-center">
            <img src="{{ asset('home-page/images/Image 2.png') }}" alt="">
          </div>
          <div class="flex flex-col gap-10 w-full md:w-1/2 items-center md:items-start justify-center">
            <p class="text-[#000BEE] dark:text-[#E8E9FF] font-extrabold text-4xl m-0 p-0" style="font-family:rokh ;">
              مدل های سه بعدی
            </p>
            <p class="text-stone-800 dark:text-[#D1D1D1] font-bold text-xl">
              کیفیت طراحی های خود را با استفاده از مدل های سه بعدی افزایش دهید .
            </p>
            <a href="#"
              class="text-[#000BEE] text-xl dark:text-[#E8E9FF] bg-[#CDD6FC] dark:bg-[#C2008C] px-5 py-3 rounded-3xl font-bold text-xl w-max flex items-center justify-center gap-6 md:gap-10">
              <p class="m-0 p-0">
                لیست مدل های سه بعدی
              </p>
              <img src="../images/Union.png" alt="">
            </a>
          </div>
        </div>
      </section>
      <section class="w-full mx-auto  max-w-[1500px] ">
        <!-- start slyder -->
        <div class="flex flex-col  mt-32  w-full">
          <div class="w-full flex-col relative  ">
            <div class="flex flex-col justify-start items-start gap-3 px-5">
              <p class="text-2xl md:text-4xl text-[#000BEE] dark:text-[#E8E9FF] font-extrabold text-center p-0 m-0 " style="font-family:rokh ;">
                دسته بندی های پر طرفدار
              </p>
              <p class="text-sm text-stone-800 dark:text-[#ffffff] ">لیستی ار محصولات سه بعدی ، انیمیشن آیکون و فایل
                های ایلیسترتور</p>
            </div>

            <div class="w-full h-full mx-auto overflow-x-hidden overflow-y-hidden py-5 my-5 pl-5 md:pl-0" dir="ltr">
              <div id="slider"
                class="h-full flex lg:gap-7 gap-5 items-center justify-start transition ease-out duration-700 ">
                <div class="flex flex-shrink-0 relative  ">
                  <a href="#"
                    class="bg-white dark:bg-[#001448] p-3 w-[160px] md:w-[190px] flex flex-col overflow-hidden rounded-[20px] justify-center items-center gap-10 text-center">
                    <div class="w-full p-1 md:p-5">
                      <img src="{{ asset('home-page/images/طراحی داخلی 1.png') }}" alt="" class="w-full">
                    </div>
                    <div>
                      <p class="text-gray-500 text-sm font-serif mb-[-6px]">
                        Icons
                      </p>
                      <p class="text-[#000BEE] dark:text-[#E8E9FF] text-xl md:text-3xl font-bold">
                        ایکون ها
                      </p>
                    </div>
                  </a>
                </div>
                <div class="flex flex-shrink-0 relative  ">
                  <a href="#"
                    class="bg-white dark:bg-[#001448] p-3 w-[160px] md:w-[190px] flex flex-col overflow-hidden rounded-[20px] justify-center items-center gap-10 text-center">
                    <div class="w-full p-1 md:p-5">
                      <img src="{{ asset('home-page/images/طراحی داخلی 1.png') }}" alt="" class="w-full">
                    </div>
                    <div>
                      <p class="text-gray-500 text-sm font-serif mb-[-6px]">
                        Icons
                      </p>
                      <p class="text-[#000BEE] dark:text-[#E8E9FF] text-xl md:text-3xl font-bold">
                        ایکون ها
                      </p>
                    </div>
                  </a>
                </div>
                <div class="flex flex-shrink-0 relative  ">
                  <a href="#"
                    class="bg-white dark:bg-[#001448] p-3 w-[160px] md:w-[190px] flex flex-col overflow-hidden rounded-[20px] justify-center items-center gap-10 text-center">
                    <div class="w-full p-1 md:p-5">
                      <img src="{{ asset('home-page/images/طراحی داخلی 1.png') }}" alt="" class="w-full">
                    </div>
                    <div>
                      <p class="text-gray-500 text-sm font-serif mb-[-6px]">
                        Icons
                      </p>
                      <p class="text-[#000BEE] dark:text-[#E8E9FF] text-xl md:text-3xl font-bold">
                        ایکون ها
                      </p>
                    </div>
                  </a>
                </div>
                <div class="flex flex-shrink-0 relative  ">
                  <a href="#"
                    class="bg-white dark:bg-[#001448] p-3 w-[160px] md:w-[190px] flex flex-col overflow-hidden rounded-[20px] justify-center items-center gap-10 text-center">
                    <div class="w-full p-1 md:p-5">
                      <img src="{{ asset('home-page/images/طراحی داخلی 1.png') }}" alt="" class="w-full">
                    </div>
                    <div>
                      <p class="text-gray-500 text-sm font-serif mb-[-6px]">
                        Icons
                      </p>
                      <p class="text-[#000BEE] dark:text-[#E8E9FF] text-xl md:text-3xl font-bold">
                        ایکون ها
                      </p>
                    </div>
                  </a>
                </div>
                <div class="flex flex-shrink-0 relative  ">
                  <a href="#"
                    class="bg-white dark:bg-[#001448] p-3 w-[160px] md:w-[190px] flex flex-col overflow-hidden rounded-[20px] justify-center items-center gap-10 text-center">
                    <div class="w-full p-1 md:p-5">
                      <img src="{{ asset('home-page/images/طراحی داخلی 1.png') }}" alt="" class="w-full">
                    </div>
                    <div>
                      <p class="text-gray-500 text-sm font-serif mb-[-6px]">
                        Icons
                      </p>
                      <p class="text-[#000BEE] dark:text-[#E8E9FF] text-xl md:text-3xl font-bold">
                        ایکون ها
                      </p>
                    </div>
                  </a>
                </div>
                <div class="flex flex-shrink-0 relative  ">
                  <a href="#"
                    class="bg-white dark:bg-[#001448] p-3 w-[160px] md:w-[190px] flex flex-col overflow-hidden rounded-[20px] justify-center items-center gap-10 text-center">
                    <div class="w-full p-1 md:p-5">
                      <img src="{{ asset('home-page/images/طراحی داخلی 1.png') }}" alt="" class="w-full">
                    </div>
                    <div>
                      <p class="text-gray-500 text-sm font-serif mb-[-6px]">
                        Icons
                      </p>
                      <p class="text-[#000BEE] dark:text-[#E8E9FF] text-xl md:text-3xl font-bold">
                        ایکون ها
                      </p>
                    </div>
                  </a>
                </div>
                <div class="flex flex-shrink-0 relative  ">
                  <a href="#"
                    class="bg-white dark:bg-[#001448] p-3 w-[160px] md:w-[190px] flex flex-col overflow-hidden rounded-[20px] justify-center items-center gap-10 text-center">
                    <div class="w-full p-1 md:p-5">
                      <img src="{{ asset('home-page/images/طراحی داخلی 1.png') }}" alt="" class="w-full">
                    </div>
                    <div>
                      <p class="text-gray-500 text-sm font-serif mb-[-6px]">
                        Icons
                      </p>
                      <p class="text-[#000BEE] dark:text-[#E8E9FF] text-xl md:text-3xl font-bold">
                        ایکون ها
                      </p>
                    </div>
                  </a>
                </div>
                <div class="flex flex-shrink-0 relative  ">
                  <a href="#"
                    class="bg-white dark:bg-[#001448] p-3 w-[160px] md:w-[190px] flex flex-col overflow-hidden rounded-[20px] justify-center items-center gap-10 text-center">
                    <div class="w-full p-1 md:p-5">
                      <img src="{{ asset('home-page/images/طراحی داخلی 1.png') }}" alt="" class="w-full">
                    </div>
                    <div>
                      <p class="text-gray-500 text-sm font-serif mb-[-6px]">
                        Icons
                      </p>
                      <p class="text-[#000BEE] dark:text-[#E8E9FF] text-xl md:text-3xl font-bold">
                        ایکون ها
                      </p>
                    </div>
                  </a>
                </div>
                <div class="flex flex-shrink-0 relative  ">
                  <a href="#"
                    class="bg-white dark:bg-[#001448] p-3 w-[160px] md:w-[190px] flex flex-col overflow-hidden rounded-[20px] justify-center items-center gap-10 text-center">
                    <div class="w-full p-1 md:p-5">
                      <img src="{{ asset('home-page/images/طراحی داخلی 1.png') }}" alt="" class="w-full">
                    </div>
                    <div>
                      <p class="text-gray-500 text-sm font-serif mb-[-6px]">
                        Icons
                      </p>
                      <p class="text-[#000BEE] dark:text-[#E8E9FF] text-xl md:text-3xl font-bold">
                        ایکون ها
                      </p>
                    </div>
                  </a>
                </div>
                <div class="flex flex-shrink-0 relative  ">
                  <a href="#"
                    class="bg-white dark:bg-[#001448] p-3 w-[160px] md:w-[190px] flex flex-col overflow-hidden rounded-[20px] justify-center items-center gap-10 text-center">
                    <div class="w-full p-1 md:p-5">
                      <img src="{{ asset('home-page/images/طراحی داخلی 1.png') }}" alt="" class="w-full">
                    </div>
                    <div>
                      <p class="text-gray-500 text-sm font-serif mb-[-6px]">
                        Icons
                      </p>
                      <p class="text-[#000BEE] dark:text-[#E8E9FF] text-xl md:text-3xl font-bold">
                        ایکون ها
                      </p>
                    </div>
                  </a>
                </div>




              </div>
            </div>
            <div class="absolute  md:top-7 flex w-full justify-center md:w-max md:left-0 gap-5 items-center">
              <button aria-label="slide forward"
                class=" aspect-square  focus:outline-none focus:bg-[#000BEE] dark:bg-[#c2008b36] dark:focus:bg-[#C2008C] dark:focus:ring-[#C2008C] focus:ring-2 focus:ring-offset-2 focus:ring-[#000BEE] bg-[#CDD6FC] p-5 rounded-full"
                id="next">

                <svg style="width:20px; height:20px" class="dark:fill-white rotate-180" width="29" height="22" viewBox="0 0 29 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" class="dark:fill-white " clip-rule="evenodd" d="M10 0C9.44772 0 9 0.447715 9 1C9 3.84609 7.67935 5.92053 5.97199 7.39265C4.25137 8.87621 2.17172 9.71149 0.803669 10.0192C0.791773 10.0216 0.779936 10.0242 0.768166 10.027C0.696033 10.0441 0.626926 10.0691 0.561789 10.1009C0.46092 10.1499 0.370703 10.2149 0.293615 10.292C0.193146 10.392 0.113024 10.5144 0.061842 10.6534C0.0213566 10.7627 -0.000339508 10.8799 -0.000213623 11.0001C-0.00028038 11.0787 0.0089798 11.156 0.0267162 11.2306C0.0613613 11.3774 0.128351 11.5117 0.219749 11.6255C0.330452 11.7638 0.478315 11.8735 0.652571 11.9378C0.701506 11.956 0.75202 11.9704 0.803688 11.9808C2.17174 12.2885 4.25138 13.1238 5.97199 14.6074C7.67935 16.0795 9 18.1539 9 21C9 21.5523 9.44772 22 10 22C10.5523 22 11 21.5523 11 21C11 17.4461 9.32065 14.8539 7.27801 13.0926C6.80751 12.687 6.31601 12.3235 5.81819 12H28C28.5523 12 29 11.5523 29 11C29 10.4477 28.5523 10 28 10H5.81819C6.31601 9.6765 6.80751 9.31303 7.27801 8.90735C9.32065 7.14614 11 4.55391 11 1C11 0.447715 10.5523 0 10 0Z" fill="#000BEE"/>
                </svg>

              </button>
              <button aria-label="slide backward"
                class=" aspect-square  focus:outline-none focus:bg-[#000BEE] dark:bg-[#c2008b36] dark:focus:bg-[#C2008C] dark:focus:ring-[#C2008C] focus:ring-2 focus:ring-offset-2 focus:ring-[#000BEE] bg-[#CDD6FC] p-5 rounded-full"
                id="prev">
                <svg style="width:20px; height:20px" width="29" height="22" viewBox="0 0 29 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" class="dark:fill-white " clip-rule="evenodd" d="M10 0C9.44772 0 9 0.447715 9 1C9 3.84609 7.67935 5.92053 5.97199 7.39265C4.25137 8.87621 2.17172 9.71149 0.803669 10.0192C0.791773 10.0216 0.779936 10.0242 0.768166 10.027C0.696033 10.0441 0.626926 10.0691 0.561789 10.1009C0.46092 10.1499 0.370703 10.2149 0.293615 10.292C0.193146 10.392 0.113024 10.5144 0.061842 10.6534C0.0213566 10.7627 -0.000339508 10.8799 -0.000213623 11.0001C-0.00028038 11.0787 0.0089798 11.156 0.0267162 11.2306C0.0613613 11.3774 0.128351 11.5117 0.219749 11.6255C0.330452 11.7638 0.478315 11.8735 0.652571 11.9378C0.701506 11.956 0.75202 11.9704 0.803688 11.9808C2.17174 12.2885 4.25138 13.1238 5.97199 14.6074C7.67935 16.0795 9 18.1539 9 21C9 21.5523 9.44772 22 10 22C10.5523 22 11 21.5523 11 21C11 17.4461 9.32065 14.8539 7.27801 13.0926C6.80751 12.687 6.31601 12.3235 5.81819 12H28C28.5523 12 29 11.5523 29 11C29 10.4477 28.5523 10 28 10H5.81819C6.31601 9.6765 6.80751 9.31303 7.27801 8.90735C9.32065 7.14614 11 4.55391 11 1C11 0.447715 10.5523 0 10 0Z" fill="#000BEE"/>
                </svg>
              </button>
              <div>
                <a href="#"
                  class="text-[#000BEE] dark:bg-[#c2008b36] dark:text-[#E8E9FF] bg-[#CDD6FC] px-3 md:px-5 py-3 rounded-3xl font-bold text-lg md:text-xl">مشاهده
                  همه</a>
              </div>
            </div>
          </div>
        </div>
        <!-- end slyder -->
      </section>
      <section class="w-full mt-32 mx-auto flex justify-center items-center max-w-[1500px] ">
        <div
          class="w-full text-center flex flex-col justify-center items-center xl:flex-row gap-5 gap-y-10 py-12 xl:py-16 px-7 rounded-3xl bg-[#000ceec2] dark:bg-[#001448] ">
          <div class="lg:w-[70%]">
            <h2 class="text-white text-3xl 2xl:text-5xl !leading-[70px]  text-right" style="font-family:rokh ;">“خدمات طراحی محیط های سه بعدی به صورت Low-Poly و High-Poly”
            </h2>
          </div>
          <a href="#"
            class="lg:w-max h-max bg-white dark:bg-[#4A4E7C] text-[#000BEE] dark:text-white font-bold md:text-xl rounded-full px-5 md:px-10 py-6 w-max mx-auto flex items-center gap-6 md:gap-10">
            <p class="m-0 p-0 ">
              نمونه کار و ثبت سفارش
            </p>
            <img src="../images/Union.png" alt="">
          </a>
        </div>
      </section>
      <section class="w-full max-w-[1500px] mx-auto">
        <div>
          <p class="text-4xl font-bold text-[#000BEE] dark:text-[#E8E9FF] mt-32 text-center py-3" style="font-family:rokh ;">محصولات ما</p>
        </div>
        <div class="mx-auto  w-full ">
          <div class="py-4">
            <nav class="flex justify-center gap-2  lg:text-2xl font-bold py-5" aria-label="Tabs" role="tablist" style="font-family:rokh ;">
              <button type="button"
                class="px-3 hs-tab-active:text-black dark:hs-tab-active:text-white items-center gap-2 whitespace-nowrap text-black/30 dark:text-[#D1D1D1] dark:hover:text-white hover:text-black active"
                id="tabs-with-underline-item-1" data-hs-tab="#tabs-with-underline-1" onclick="topProductBtn()"
                aria-controls="tabs-with-underline-1" role="tab">
                بالاترین امتیاز
              </button>
              <button type="button"
                class="px-4 border-x-2 border-gray-400 hs-tab-active:text-black dark:hs-tab-active:text-white items-center gap-2 whitespace-nowrap text-black/30 dark:text-[#D1D1D1] dark:hover:text-white hover:text-black"
                id="tabs-with-underline-item-2" data-hs-tab="#tabs-with-underline-2" onclick="newProductBtn()"
                aria-controls="tabs-with-underline-2" role="tab">
                جدید ترین
              </button>
              <button type="button"
                class="px-3 hs-tab-active:text-black dark:hs-tab-active:text-white items-center gap-2 whitespace-nowrap text-black/30 dark:text-[#D1D1D1] dark:hover:text-white hover:text-black"
                id="tabs-with-underline-item-3" data-hs-tab="#tabs-with-underline-3" onclick="successProductBtn()"
                aria-controls="tabs-with-underline-3" role="tab">
                پرفروش ترین
              </button>
            </nav>
          </div>

          <div class="mt-3 flex flex-col items-center ">
            <div id="tabs-with-underline-1" role="tabpanel" aria-labelledby="tabs-with-underline-item-1 ">
              <div id="tabs-with-underline-4" class="" role="tabpanel"aria-labelledby="tabs-with-underline-item-4">
                <div class="flex justify-between text-sm">
                  <div class="flex justify-between text-sm duration-500 transition-all w-full ">
                    <div
                      class="flex gap-4 xl:gap-5 overflow-x-scroll w-screen lg:w-[92vw]  px-3 xl:w-auto scrollbar  duration-500 transition-all">
                      <!-- start card -->
                      <div>
                        <a href="#"
                          class="bg-white dark:bg-[#001448] w-[195px]  md:w-[270px] 2xl:w-[285px] flex flex-col overflow-hidden rounded-xl justify-between items-center text-center p-3 gap-2  duration-500 transition-all">
                          <div class="p-3 w-[80%] " >
                            <img src="{{ asset('home-page/images/3D-rgb-10000.png') }}" alt="">
                          </div>
                          <div class="w-full flex flex-col justify-center items-center gap-3">
                            <p class="text-[#000BEE] dark:text-[#D1D1D1] text-xs lg:text-sm font-bold p-0 m-0">
                              سه بعدی/غذا
                            </p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">مدل سه بعدی غذا همبرگر</p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">    9000 تومان</p>

                            <div class="w-full flex justify-between gap-2 ">
                              <button
                              class="rounded-lg w-[60%] px-2 py-3 bg-[#FFE3E3] dark:bg-[#C2008C]  text-[#FF0000] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                              افزودن به سبد خرید
                            </button>
                            <button
                              class="rounded-lg w-[40%]  px-2 py-3 bg-[#D8E5FD] dark:bg-[#4A4E7C]  text-[#000BEE] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                                 مشاهده سریع
                            </button>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- end card -->
                      <!-- start card -->
                      <div>
                        <a href="#"
                          class="bg-white dark:bg-[#001448] w-[195px]  md:w-[270px] 2xl:w-[285px] flex flex-col overflow-hidden rounded-xl justify-between items-center text-center p-3 gap-2  duration-500 transition-all">
                          <div class="p-3 w-[80%] " >
                            <img src="{{ asset('home-page/images/3D-rgb-10000.png') }}" alt="">
                          </div>
                          <div class="w-full flex flex-col justify-center items-center gap-3">
                            <p class="text-[#000BEE] dark:text-[#D1D1D1] text-xs lg:text-sm font-bold p-0 m-0">
                              سه بعدی/غذا
                            </p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">مدل سه بعدی غذا همبرگر</p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">    9000 تومان</p>

                            <div class="w-full flex justify-between gap-2 ">
                              <button
                              class="rounded-lg w-[60%] px-2 py-3 bg-[#FFE3E3] dark:bg-[#C2008C]  text-[#FF0000] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                              افزودن به سبد خرید
                            </button>
                            <button
                              class="rounded-lg w-[40%]  px-2 py-3 bg-[#D8E5FD] dark:bg-[#4A4E7C]  text-[#000BEE] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                                 مشاهده سریع
                            </button>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- end card -->
                      <!-- start card -->
                      <div>
                        <a href="#"
                          class="bg-white dark:bg-[#001448] w-[195px]  md:w-[270px] 2xl:w-[285px] flex flex-col overflow-hidden rounded-xl justify-between items-center text-center p-3 gap-2  duration-500 transition-all">
                          <div class="p-3 w-[80%] " >
                            <img src="{{ asset('home-page/images/3D-rgb-10000.png') }}" alt="">
                          </div>
                          <div class="w-full flex flex-col justify-center items-center gap-3">
                            <p class="text-[#000BEE] dark:text-[#D1D1D1] text-xs lg:text-sm font-bold p-0 m-0">
                              سه بعدی/غذا
                            </p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">مدل سه بعدی غذا همبرگر</p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">    9000 تومان</p>

                            <div class="w-full flex justify-between gap-2 ">
                              <button
                              class="rounded-lg w-[60%] px-2 py-3 bg-[#FFE3E3] dark:bg-[#C2008C]  text-[#FF0000] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                              افزودن به سبد خرید
                            </button>
                            <button
                              class="rounded-lg w-[40%]  px-2 py-3 bg-[#D8E5FD] dark:bg-[#4A4E7C]  text-[#000BEE] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                                 مشاهده سریع
                            </button>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- end card -->
                      <!-- start card -->
                      <div>
                        <a href="#"
                          class="bg-white dark:bg-[#001448] w-[195px]  md:w-[270px] 2xl:w-[285px] flex flex-col overflow-hidden rounded-xl justify-between items-center text-center p-3 gap-2  duration-500 transition-all">
                          <div class="p-3 w-[80%] " >
                            <img src="{{ asset('home-page/images/3D-rgb-10000.png') }}" alt="">
                          </div>
                          <div class="w-full flex flex-col justify-center items-center gap-3">
                            <p class="text-[#000BEE] dark:text-[#D1D1D1] text-xs lg:text-sm font-bold p-0 m-0">
                              سه بعدی/غذا
                            </p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">مدل سه بعدی غذا همبرگر</p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">    9000 تومان</p>

                            <div class="w-full flex justify-between gap-2 ">
                              <button
                              class="rounded-lg w-[60%] px-2 py-3 bg-[#FFE3E3] dark:bg-[#C2008C]  text-[#FF0000] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                              افزودن به سبد خرید
                            </button>
                            <button
                              class="rounded-lg w-[40%]  px-2 py-3 bg-[#D8E5FD] dark:bg-[#4A4E7C]  text-[#000BEE] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                                 مشاهده سریع
                            </button>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- end card -->
                      <!-- start card -->
                      <div>
                        <a href="#"
                          class="bg-white dark:bg-[#001448] w-[195px]  md:w-[270px] 2xl:w-[285px] flex flex-col overflow-hidden rounded-xl justify-between items-center text-center p-3 gap-2  duration-500 transition-all">
                          <div class="p-3 w-[80%] " >
                            <img src="{{ asset('home-page/images/3D-rgb-10000.png') }}" alt="">
                          </div>
                          <div class="w-full flex flex-col justify-center items-center gap-3">
                            <p class="text-[#000BEE] dark:text-[#D1D1D1] text-xs lg:text-sm font-bold p-0 m-0">
                              سه بعدی/غذا
                            </p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">مدل سه بعدی غذا همبرگر</p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">    9000 تومان</p>

                            <div class="w-full flex justify-between gap-2 ">
                              <button
                              class="rounded-lg w-[60%] px-2 py-3 bg-[#FFE3E3] dark:bg-[#C2008C]  text-[#FF0000] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                              افزودن به سبد خرید
                            </button>
                            <button
                              class="rounded-lg w-[40%]  px-2 py-3 bg-[#D8E5FD] dark:bg-[#4A4E7C]  text-[#000BEE] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                                 مشاهده سریع
                            </button>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- end card -->
                    </div>
                  </div>
                </div>
              </div>
              <div id="tabs-with-underline-5" class="hidden" role="tabpanel"
                aria-labelledby="tabs-with-underline-item-5">
                <div class="flex justify-between text-sm">
                  <div class="flex justify-between text-sm duration-500 transition-all w-full ">
                    <div
                      class="flex gap-4 xl:gap-5 overflow-x-scroll w-screen lg:w-[92vw]  px-3 xl:w-auto scrollbar  duration-500 transition-all">
                      <!-- start card -->
                      <div>
                        <a href="#"
                          class="bg-white dark:bg-[#001448] w-[195px]  md:w-[270px] 2xl:w-[285px] flex flex-col overflow-hidden rounded-xl justify-between items-center text-center p-3 gap-2  duration-500 transition-all">
                          <div class="p-3 w-[80%] " >
                            <img src="{{ asset('home-page/images/3D-rgb-10000.png') }}" alt="">
                          </div>
                          <div class="w-full flex flex-col justify-center items-center gap-3">
                            <p class="text-[#000BEE] dark:text-[#D1D1D1] text-xs lg:text-sm font-bold p-0 m-0">
                              سه بعدی/غذا
                            </p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">2مدل سه بعدی غذا همبرگر</p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">    9000 تومان</p>

                            <div class="w-full flex justify-between gap-2 ">
                              <button
                              class="rounded-lg w-[60%] px-2 py-3 bg-[#FFE3E3] dark:bg-[#C2008C]  text-[#FF0000] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                              افزودن به سبد خرید
                            </button>
                            <button
                              class="rounded-lg w-[40%]  px-2 py-3 bg-[#D8E5FD] dark:bg-[#4A4E7C]  text-[#000BEE] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                                 مشاهده سریع
                            </button>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- end card -->
                      <!-- start card -->
                      <div>
                        <a href="#"
                          class="bg-white dark:bg-[#001448] w-[195px]  md:w-[270px] 2xl:w-[285px] flex flex-col overflow-hidden rounded-xl justify-between items-center text-center p-3 gap-2  duration-500 transition-all">
                          <div class="p-3 w-[80%] " >
                            <img src="{{ asset('home-page/images/3D-rgb-10000.png') }}" alt="">
                          </div>
                          <div class="w-full flex flex-col justify-center items-center gap-3">
                            <p class="text-[#000BEE] dark:text-[#D1D1D1] text-xs lg:text-sm font-bold p-0 m-0">
                              سه بعدی/غذا
                            </p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">مدل سه بعدی غذا همبرگر2</p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">    9000 تومان</p>

                            <div class="w-full flex justify-between gap-2 ">
                              <button
                              class="rounded-lg w-[60%] px-2 py-3 bg-[#FFE3E3] dark:bg-[#C2008C]  text-[#FF0000] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                              افزودن به سبد خرید
                            </button>
                            <button
                              class="rounded-lg w-[40%]  px-2 py-3 bg-[#D8E5FD] dark:bg-[#4A4E7C]  text-[#000BEE] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                                 مشاهده سریع
                            </button>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- end card -->
                      <!-- start card -->
                      <div>
                        <a href="#"
                          class="bg-white dark:bg-[#001448] w-[195px]  md:w-[270px] 2xl:w-[285px] flex flex-col overflow-hidden rounded-xl justify-between items-center text-center p-3 gap-2  duration-500 transition-all">
                          <div class="p-3 w-[80%] " >
                            <img src="{{ asset('home-page/images/3D-rgb-10000.png') }}" alt="">
                          </div>
                          <div class="w-full flex flex-col justify-center items-center gap-3">
                            <p class="text-[#000BEE] dark:text-[#D1D1D1] text-xs lg:text-sm font-bold p-0 m-0">
                              سه بعدی/غذا
                            </p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">مدل سه بعدی غذا همبرگر2</p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">    9000 تومان</p>

                            <div class="w-full flex justify-between gap-2 ">
                              <button
                              class="rounded-lg w-[60%] px-2 py-3 bg-[#FFE3E3] dark:bg-[#C2008C]  text-[#FF0000] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                              افزودن به سبد خرید
                            </button>
                            <button
                              class="rounded-lg w-[40%]  px-2 py-3 bg-[#D8E5FD] dark:bg-[#4A4E7C]  text-[#000BEE] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                                 مشاهده سریع
                            </button>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- end card -->
                      <!-- start card -->
                      <div>
                        <a href="#"
                          class="bg-white dark:bg-[#001448] w-[195px]  md:w-[270px] 2xl:w-[285px] flex flex-col overflow-hidden rounded-xl justify-between items-center text-center p-3 gap-2  duration-500 transition-all">
                          <div class="p-3 w-[80%] " >
                            <img src="{{ asset('home-page/images/3D-rgb-10000.png') }}" alt="">
                          </div>
                          <div class="w-full flex flex-col justify-center items-center gap-3">
                            <p class="text-[#000BEE] dark:text-[#D1D1D1] text-xs lg:text-sm font-bold p-0 m-0">
                              سه بعدی/غذا
                            </p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">مدل سه بعدی غذا همبرگر2</p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">    9000 تومان</p>

                            <div class="w-full flex justify-between gap-2 ">
                              <button
                              class="rounded-lg w-[60%] px-2 py-3 bg-[#FFE3E3] dark:bg-[#C2008C]  text-[#FF0000] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                              افزودن به سبد خرید
                            </button>
                            <button
                              class="rounded-lg w-[40%]  px-2 py-3 bg-[#D8E5FD] dark:bg-[#4A4E7C]  text-[#000BEE] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                                 مشاهده سریع
                            </button>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- end card -->
                    </div>
                  </div>
                </div>
              </div>
              <div id="tabs-with-underline-6" class="hidden" role="tabpanel"
                aria-labelledby="tabs-with-underline-item-6">
                <div class="flex justify-between text-sm">
                  <div class="flex justify-between text-sm duration-500 transition-all w-full ">
                    <div
                      class="flex gap-4 xl:gap-5 overflow-x-scroll w-screen lg:w-[92vw]  px-3 xl:w-auto scrollbar  duration-500 transition-all">
                      <!-- start card -->
                      <div>
                        <a href="#"
                          class="bg-white dark:bg-[#001448] w-[195px]  md:w-[270px] 2xl:w-[285px] flex flex-col overflow-hidden rounded-xl justify-between items-center text-center p-3 gap-2  duration-500 transition-all">
                          <div class="p-3 w-[80%] " >
                            <img src="{{ asset('home-page/images/3D-rgb-10000.png') }}" alt="">
                          </div>
                          <div class="w-full flex flex-col justify-center items-center gap-3">
                            <p class="text-[#000BEE] dark:text-[#D1D1D1] text-xs lg:text-sm font-bold p-0 m-0">
                              سه بعدی/غذا
                            </p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">مدل سه بعدی غذا همبرگر3</p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">    9000 تومان</p>

                            <div class="w-full flex justify-between gap-2 ">
                              <button
                              class="rounded-lg w-[60%] px-2 py-3 bg-[#FFE3E3] dark:bg-[#C2008C]  text-[#FF0000] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                              افزودن به سبد خرید
                            </button>
                            <button
                              class="rounded-lg w-[40%]  px-2 py-3 bg-[#D8E5FD] dark:bg-[#4A4E7C]  text-[#000BEE] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                                 مشاهده سریع
                            </button>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- end card -->
                      <!-- start card -->
                      <div>
                        <a href="#"
                          class="bg-white dark:bg-[#001448] w-[195px]  md:w-[270px] 2xl:w-[285px] flex flex-col overflow-hidden rounded-xl justify-between items-center text-center p-3 gap-2  duration-500 transition-all">
                          <div class="p-3 w-[80%] " >
                            <img src="{{ asset('home-page/images/3D-rgb-10000.png') }}" alt="">
                          </div>
                          <div class="w-full flex flex-col justify-center items-center gap-3">
                            <p class="text-[#000BEE] dark:text-[#D1D1D1] text-xs lg:text-sm font-bold p-0 m-0">
                              سه بعدی/غذا
                            </p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">مدل سه بعدی غذا همبرگر3</p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">    9000 تومان</p>

                            <div class="w-full flex justify-between gap-2 ">
                              <button
                              class="rounded-lg w-[60%] px-2 py-3 bg-[#FFE3E3] dark:bg-[#C2008C]  text-[#FF0000] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                              افزودن به سبد خرید
                            </button>
                            <button
                              class="rounded-lg w-[40%]  px-2 py-3 bg-[#D8E5FD] dark:bg-[#4A4E7C]  text-[#000BEE] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                                 مشاهده سریع
                            </button>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- end card -->
                      <!-- start card -->
                      <div>
                        <a href="#"
                          class="bg-white dark:bg-[#001448] w-[195px]  md:w-[270px] 2xl:w-[285px] flex flex-col overflow-hidden rounded-xl justify-between items-center text-center p-3 gap-2  duration-500 transition-all">
                          <div class="p-3 w-[80%] " >
                            <img src="{{ asset('home-page/images/3D-rgb-10000.png') }}" alt="">
                          </div>
                          <div class="w-full flex flex-col justify-center items-center gap-3">
                            <p class="text-[#000BEE] dark:text-[#D1D1D1] text-xs lg:text-sm font-bold p-0 m-0">
                              سه بعدی/غذا
                            </p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">مدل سه بعدی غذا همبرگر3</p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">    9000 تومان</p>

                            <div class="w-full flex justify-between gap-2 ">
                              <button
                              class="rounded-lg w-[60%] px-2 py-3 bg-[#FFE3E3] dark:bg-[#C2008C]  text-[#FF0000] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                              افزودن به سبد خرید
                            </button>
                            <button
                              class="rounded-lg w-[40%]  px-2 py-3 bg-[#D8E5FD] dark:bg-[#4A4E7C]  text-[#000BEE] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                                 مشاهده سریع
                            </button>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- end card -->
                      <!-- start card -->
                      <div>
                        <a href="#"
                          class="bg-white dark:bg-[#001448] w-[195px]  md:w-[270px] 2xl:w-[285px] flex flex-col overflow-hidden rounded-xl justify-between items-center text-center p-3 gap-2  duration-500 transition-all">
                          <div class="p-3 w-[80%] " >
                            <img src="{{ asset('home-page/images/3D-rgb-10000.png') }}" alt="">
                          </div>
                          <div class="w-full flex flex-col justify-center items-center gap-3">
                            <p class="text-[#000BEE] dark:text-[#D1D1D1] text-xs lg:text-sm font-bold p-0 m-0">
                              سه بعدی/غذا
                            </p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">مدل سه بعدی غذا همبرگر3</p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">    9000 تومان</p>

                            <div class="w-full flex justify-between gap-2 ">
                              <button
                              class="rounded-lg w-[60%] px-2 py-3 bg-[#FFE3E3] dark:bg-[#C2008C]  text-[#FF0000] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                              افزودن به سبد خرید
                            </button>
                            <button
                              class="rounded-lg w-[40%]  px-2 py-3 bg-[#D8E5FD] dark:bg-[#4A4E7C]  text-[#000BEE] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                                 مشاهده سریع
                            </button>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- end card -->
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div id="tabs-with-underline-2" class="hidden" role="tabpanel"
              aria-labelledby="tabs-with-underline-item-2">

              <div id="tabs-with-underline-2-1" class="" role="tabpanel"aria-labelledby="tabs-with-underline-item-2-1">
                <div class="flex justify-between text-sm">
                  <div class="flex justify-between text-sm duration-500 transition-all w-full ">
                    <div
                      class="flex gap-4 xl:gap-5 overflow-x-scroll w-screen lg:w-[92vw]  px-3 xl:w-auto scrollbar  duration-500 transition-all">
                      <!-- start card -->
                      <div>
                        <a href="#"
                          class="bg-white dark:bg-[#001448] w-[195px]  md:w-[270px] 2xl:w-[285px] flex flex-col overflow-hidden rounded-xl justify-between items-center text-center p-3 gap-2  duration-500 transition-all">
                          <div class="p-3 w-[80%] " >
                            <img src="{{ asset('home-page/images/3D-rgb-10000.png') }}" alt="">
                          </div>
                          <div class="w-full flex flex-col justify-center items-center gap-3">
                            <p class="text-[#000BEE] dark:text-[#D1D1D1] text-xs lg:text-sm font-bold p-0 m-0">
                              سه بعدی/غذا
                            </p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">مدل سه بعدی غذا همبرگر</p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">    9000 تومان</p>

                            <div class="w-full flex justify-between gap-2 ">
                              <button
                              class="rounded-lg w-[60%] px-2 py-3 bg-[#FFE3E3] dark:bg-[#C2008C]  text-[#FF0000] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                              افزودن به سبد خرید
                            </button>
                            <button
                              class="rounded-lg w-[40%]  px-2 py-3 bg-[#D8E5FD] dark:bg-[#4A4E7C]  text-[#000BEE] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                                 مشاهده سریع
                            </button>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- end card -->
                      <!-- start card -->
                      <div>
                        <a href="#"
                          class="bg-white dark:bg-[#001448] w-[195px]  md:w-[270px] 2xl:w-[285px] flex flex-col overflow-hidden rounded-xl justify-between items-center text-center p-3 gap-2  duration-500 transition-all">
                          <div class="p-3 w-[80%] " >
                            <img src="{{ asset('home-page/images/3D-rgb-10000.png') }}" alt="">
                          </div>
                          <div class="w-full flex flex-col justify-center items-center gap-3">
                            <p class="text-[#000BEE] dark:text-[#D1D1D1] text-xs lg:text-sm font-bold p-0 m-0">
                              سه بعدی/غذا
                            </p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">مدل سه بعدی غذا همبرگر</p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">    9000 تومان</p>

                            <div class="w-full flex justify-between gap-2 ">
                              <button
                              class="rounded-lg w-[60%] px-2 py-3 bg-[#FFE3E3] dark:bg-[#C2008C]  text-[#FF0000] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                              افزودن به سبد خرید
                            </button>
                            <button
                              class="rounded-lg w-[40%]  px-2 py-3 bg-[#D8E5FD] dark:bg-[#4A4E7C]  text-[#000BEE] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                                 مشاهده سریع
                            </button>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- end card -->
                      <!-- start card -->
                      <div>
                        <a href="#"
                          class="bg-white dark:bg-[#001448] w-[195px]  md:w-[270px] 2xl:w-[285px] flex flex-col overflow-hidden rounded-xl justify-between items-center text-center p-3 gap-2  duration-500 transition-all">
                          <div class="p-3 w-[80%] " >
                            <img src="{{ asset('home-page/images/3D-rgb-10000.png') }}" alt="">
                          </div>
                          <div class="w-full flex flex-col justify-center items-center gap-3">
                            <p class="text-[#000BEE] dark:text-[#D1D1D1] text-xs lg:text-sm font-bold p-0 m-0">
                              سه بعدی/غذا
                            </p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">مدل سه بعدی غذا همبرگر</p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">    9000 تومان</p>

                            <div class="w-full flex justify-between gap-2 ">
                              <button
                              class="rounded-lg w-[60%] px-2 py-3 bg-[#FFE3E3] dark:bg-[#C2008C]  text-[#FF0000] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                              افزودن به سبد خرید
                            </button>
                            <button
                              class="rounded-lg w-[40%]  px-2 py-3 bg-[#D8E5FD] dark:bg-[#4A4E7C]  text-[#000BEE] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                                 مشاهده سریع
                            </button>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- end card -->
                      <!-- start card -->
                      <div>
                        <a href="#"
                          class="bg-white dark:bg-[#001448] w-[195px]  md:w-[270px] 2xl:w-[285px] flex flex-col overflow-hidden rounded-xl justify-between items-center text-center p-3 gap-2  duration-500 transition-all">
                          <div class="p-3 w-[80%] " >
                            <img src="{{ asset('home-page/images/3D-rgb-10000.png') }}" alt="">
                          </div>
                          <div class="w-full flex flex-col justify-center items-center gap-3">
                            <p class="text-[#000BEE] dark:text-[#D1D1D1] text-xs lg:text-sm font-bold p-0 m-0">
                              سه بعدی/غذا
                            </p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">مدل سه بعدی غذا همبرگر</p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">    9000 تومان</p>

                            <div class="w-full flex justify-between gap-2 ">
                              <button
                              class="rounded-lg w-[60%] px-2 py-3 bg-[#FFE3E3] dark:bg-[#C2008C]  text-[#FF0000] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                              افزودن به سبد خرید
                            </button>
                            <button
                              class="rounded-lg w-[40%]  px-2 py-3 bg-[#D8E5FD] dark:bg-[#4A4E7C]  text-[#000BEE] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                                 مشاهده سریع
                            </button>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- end card -->
                    </div>
                  </div>
                </div>
              </div>
              <div id="tabs-with-underline-2-2" class="hidden" role="tabpanel"
                aria-labelledby="tabs-with-underline-item-2-2">
                <div class="flex justify-between text-sm">
                  <div class="flex justify-between text-sm duration-500 transition-all w-full ">
                    <div
                      class="flex gap-4 xl:gap-5 overflow-x-scroll w-screen lg:w-[92vw]  px-3 xl:w-auto scrollbar  duration-500 transition-all">
                      <!-- start card -->
                      <div>
                        <a href="#"
                          class="bg-white dark:bg-[#001448] w-[195px]  md:w-[270px] 2xl:w-[285px] flex flex-col overflow-hidden rounded-xl justify-between items-center text-center p-3 gap-2  duration-500 transition-all">
                          <div class="p-3 w-[80%] " >
                            <img src="{{ asset('home-page/images/3D-rgb-10000.png') }}" alt="">
                          </div>
                          <div class="w-full flex flex-col justify-center items-center gap-3">
                            <p class="text-[#000BEE] dark:text-[#D1D1D1] text-xs lg:text-sm font-bold p-0 m-0">
                              سه بعدی/غذا
                            </p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">2مدل سه بعدی غذا همبرگر</p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">    9000 تومان</p>

                            <div class="w-full flex justify-between gap-2 ">
                              <button
                              class="rounded-lg w-[60%] px-2 py-3 bg-[#FFE3E3] dark:bg-[#C2008C]  text-[#FF0000] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                              افزودن به سبد خرید
                            </button>
                            <button
                              class="rounded-lg w-[40%]  px-2 py-3 bg-[#D8E5FD] dark:bg-[#4A4E7C]  text-[#000BEE] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                                 مشاهده سریع
                            </button>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- end card -->
                      <!-- start card -->
                      <div>
                        <a href="#"
                          class="bg-white dark:bg-[#001448] w-[195px]  md:w-[270px] 2xl:w-[285px] flex flex-col overflow-hidden rounded-xl justify-between items-center text-center p-3 gap-2  duration-500 transition-all">
                          <div class="p-3 w-[80%] " >
                            <img src="{{ asset('home-page/images/3D-rgb-10000.png') }}" alt="">
                          </div>
                          <div class="w-full flex flex-col justify-center items-center gap-3">
                            <p class="text-[#000BEE] dark:text-[#D1D1D1] text-xs lg:text-sm font-bold p-0 m-0">
                              سه بعدی/غذا
                            </p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">مدل سه بعدی غذا همبرگر2</p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">    9000 تومان</p>

                            <div class="w-full flex justify-between gap-2 ">
                              <button
                              class="rounded-lg w-[60%] px-2 py-3 bg-[#FFE3E3] dark:bg-[#C2008C]  text-[#FF0000] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                              افزودن به سبد خرید
                            </button>
                            <button
                              class="rounded-lg w-[40%]  px-2 py-3 bg-[#D8E5FD] dark:bg-[#4A4E7C]  text-[#000BEE] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                                 مشاهده سریع
                            </button>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- end card -->
                      <!-- start card -->
                      <div>
                        <a href="#"
                          class="bg-white dark:bg-[#001448] w-[195px]  md:w-[270px] 2xl:w-[285px] flex flex-col overflow-hidden rounded-xl justify-between items-center text-center p-3 gap-2  duration-500 transition-all">
                          <div class="p-3 w-[80%] " >
                            <img src="{{ asset('home-page/images/3D-rgb-10000.png') }}" alt="">
                          </div>
                          <div class="w-full flex flex-col justify-center items-center gap-3">
                            <p class="text-[#000BEE] dark:text-[#D1D1D1] text-xs lg:text-sm font-bold p-0 m-0">
                              سه بعدی/غذا
                            </p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">مدل سه بعدی غذا همبرگر2</p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">    9000 تومان</p>

                            <div class="w-full flex justify-between gap-2 ">
                              <button
                              class="rounded-lg w-[60%] px-2 py-3 bg-[#FFE3E3] dark:bg-[#C2008C]  text-[#FF0000] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                              افزودن به سبد خرید
                            </button>
                            <button
                              class="rounded-lg w-[40%]  px-2 py-3 bg-[#D8E5FD] dark:bg-[#4A4E7C]  text-[#000BEE] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                                 مشاهده سریع
                            </button>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- end card -->
                      <!-- start card -->
                      <div>
                        <a href="#"
                          class="bg-white dark:bg-[#001448] w-[195px]  md:w-[270px] 2xl:w-[285px] flex flex-col overflow-hidden rounded-xl justify-between items-center text-center p-3 gap-2  duration-500 transition-all">
                          <div class="p-3 w-[80%] " >
                            <img src="{{ asset('home-page/images/3D-rgb-10000.png') }}" alt="">
                          </div>
                          <div class="w-full flex flex-col justify-center items-center gap-3">
                            <p class="text-[#000BEE] dark:text-[#D1D1D1] text-xs lg:text-sm font-bold p-0 m-0">
                              سه بعدی/غذا
                            </p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">مدل سه بعدی غذا همبرگر2</p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">    9000 تومان</p>

                            <div class="w-full flex justify-between gap-2 ">
                              <button
                              class="rounded-lg w-[60%] px-2 py-3 bg-[#FFE3E3] dark:bg-[#C2008C]  text-[#FF0000] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                              افزودن به سبد خرید
                            </button>
                            <button
                              class="rounded-lg w-[40%]  px-2 py-3 bg-[#D8E5FD] dark:bg-[#4A4E7C]  text-[#000BEE] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                                 مشاهده سریع
                            </button>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- end card -->
                    </div>
                  </div>
                </div>
              </div>
              <div id="tabs-with-underline-2-3" class="hidden" role="tabpanel"
                aria-labelledby="tabs-with-underline-item-2-3">
                <div class="flex justify-between text-sm">
                  <div class="flex justify-between text-sm duration-500 transition-all w-full ">
                    <div
                      class="flex gap-4 xl:gap-5 overflow-x-scroll w-screen lg:w-[92vw]  px-3 xl:w-auto scrollbar  duration-500 transition-all">
                      <!-- start card -->
                      <div>
                        <a href="#"
                          class="bg-white dark:bg-[#001448] w-[195px]  md:w-[270px] 2xl:w-[285px] flex flex-col overflow-hidden rounded-xl justify-between items-center text-center p-3 gap-2  duration-500 transition-all">
                          <div class="p-3 w-[80%] " >
                            <img src="{{ asset('home-page/images/3D-rgb-10000.png') }}" alt="">
                          </div>
                          <div class="w-full flex flex-col justify-center items-center gap-3">
                            <p class="text-[#000BEE] dark:text-[#D1D1D1] text-xs lg:text-sm font-bold p-0 m-0">
                              سه بعدی/غذا
                            </p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">مدل سه بعدی غذا همبرگر3</p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">    9000 تومان</p>

                            <div class="w-full flex justify-between gap-2 ">
                              <button
                              class="rounded-lg w-[60%] px-2 py-3 bg-[#FFE3E3] dark:bg-[#C2008C]  text-[#FF0000] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                              افزودن به سبد خرید
                            </button>
                            <button
                              class="rounded-lg w-[40%]  px-2 py-3 bg-[#D8E5FD] dark:bg-[#4A4E7C]  text-[#000BEE] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                                 مشاهده سریع
                            </button>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- end card -->
                      <!-- start card -->
                      <div>
                        <a href="#"
                          class="bg-white dark:bg-[#001448] w-[195px]  md:w-[270px] 2xl:w-[285px] flex flex-col overflow-hidden rounded-xl justify-between items-center text-center p-3 gap-2  duration-500 transition-all">
                          <div class="p-3 w-[80%] " >
                            <img src="{{ asset('home-page/images/3D-rgb-10000.png') }}" alt="">
                          </div>
                          <div class="w-full flex flex-col justify-center items-center gap-3">
                            <p class="text-[#000BEE] dark:text-[#D1D1D1] text-xs lg:text-sm font-bold p-0 m-0">
                              سه بعدی/غذا
                            </p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">مدل سه بعدی غذا همبرگر3</p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">    9000 تومان</p>

                            <div class="w-full flex justify-between gap-2 ">
                              <button
                              class="rounded-lg w-[60%] px-2 py-3 bg-[#FFE3E3] dark:bg-[#C2008C]  text-[#FF0000] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                              افزودن به سبد خرید
                            </button>
                            <button
                              class="rounded-lg w-[40%]  px-2 py-3 bg-[#D8E5FD] dark:bg-[#4A4E7C]  text-[#000BEE] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                                 مشاهده سریع
                            </button>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- end card -->
                      <!-- start card -->
                      <div>
                        <a href="#"
                          class="bg-white dark:bg-[#001448] w-[195px]  md:w-[270px] 2xl:w-[285px] flex flex-col overflow-hidden rounded-xl justify-between items-center text-center p-3 gap-2  duration-500 transition-all">
                          <div class="p-3 w-[80%] " >
                            <img src="{{ asset('home-page/images/3D-rgb-10000.png') }}" alt="">
                          </div>
                          <div class="w-full flex flex-col justify-center items-center gap-3">
                            <p class="text-[#000BEE] dark:text-[#D1D1D1] text-xs lg:text-sm font-bold p-0 m-0">
                              سه بعدی/غذا
                            </p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">مدل سه بعدی غذا همبرگر3</p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">    9000 تومان</p>

                            <div class="w-full flex justify-between gap-2 ">
                              <button
                              class="rounded-lg w-[60%] px-2 py-3 bg-[#FFE3E3] dark:bg-[#C2008C]  text-[#FF0000] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                              افزودن به سبد خرید
                            </button>
                            <button
                              class="rounded-lg w-[40%]  px-2 py-3 bg-[#D8E5FD] dark:bg-[#4A4E7C]  text-[#000BEE] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                                 مشاهده سریع
                            </button>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- end card -->
                      <!-- start card -->
                      <div>
                        <a href="#"
                          class="bg-white dark:bg-[#001448] w-[195px]  md:w-[270px] 2xl:w-[285px] flex flex-col overflow-hidden rounded-xl justify-between items-center text-center p-3 gap-2  duration-500 transition-all">
                          <div class="p-3 w-[80%] " >
                            <img src="{{ asset('home-page/images/3D-rgb-10000.png') }}" alt="">
                          </div>
                          <div class="w-full flex flex-col justify-center items-center gap-3">
                            <p class="text-[#000BEE] dark:text-[#D1D1D1] text-xs lg:text-sm font-bold p-0 m-0">
                              سه بعدی/غذا
                            </p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">مدل سه بعدی غذا همبرگر3</p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">    9000 تومان</p>

                            <div class="w-full flex justify-between gap-2 ">
                              <button
                              class="rounded-lg w-[60%] px-2 py-3 bg-[#FFE3E3] dark:bg-[#C2008C]  text-[#FF0000] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                              افزودن به سبد خرید
                            </button>
                            <button
                              class="rounded-lg w-[40%]  px-2 py-3 bg-[#D8E5FD] dark:bg-[#4A4E7C]  text-[#000BEE] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                                 مشاهده سریع
                            </button>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- end card -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="tabs-with-underline-3" class="hidden" role="tabpanel"
              aria-labelledby="tabs-with-underline-item-3">
              <div id="tabs-with-underline-3-1" class="" role="tabpanel"aria-labelledby="tabs-with-underline-item-3-1">
                <div class="flex justify-between text-sm">
                  <div class="flex justify-between text-sm duration-500 transition-all w-full ">
                    <div
                      class="flex gap-4 xl:gap-5 overflow-x-scroll w-screen lg:w-[92vw]  px-3 xl:w-auto scrollbar  duration-500 transition-all">
                      <!-- start card -->
                      <div>
                        <a href="#"
                          class="bg-white dark:bg-[#001448] w-[195px]  md:w-[270px] 2xl:w-[285px] flex flex-col overflow-hidden rounded-xl justify-between items-center text-center p-3 gap-2  duration-500 transition-all">
                          <div class="p-3 w-[80%] " >
                            <img src="{{ asset('home-page/images/3D-rgb-10000.png') }}" alt="">
                          </div>
                          <div class="w-full flex flex-col justify-center items-center gap-3">
                            <p class="text-[#000BEE] dark:text-[#D1D1D1] text-xs lg:text-sm font-bold p-0 m-0">
                              سه بعدی/غذا
                            </p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">مدل سه بعدی غذا همبرگر11</p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">    9000 تومان</p>

                            <div class="w-full flex justify-between gap-2 ">
                              <button
                              class="rounded-lg w-[60%] px-2 py-3 bg-[#FFE3E3] dark:bg-[#C2008C]  text-[#FF0000] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                              افزودن به سبد خرید
                            </button>
                            <button
                              class="rounded-lg w-[40%]  px-2 py-3 bg-[#D8E5FD] dark:bg-[#4A4E7C]  text-[#000BEE] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                                 مشاهده سریع
                            </button>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- end card -->
                      <!-- start card -->
                      <div>
                        <a href="#"
                          class="bg-white dark:bg-[#001448] w-[195px]  md:w-[270px] 2xl:w-[285px] flex flex-col overflow-hidden rounded-xl justify-between items-center text-center p-3 gap-2  duration-500 transition-all">
                          <div class="p-3 w-[80%] " >
                            <img src="{{ asset('home-page/images/3D-rgb-10000.png') }}" alt="">
                          </div>
                          <div class="w-full flex flex-col justify-center items-center gap-3">
                            <p class="text-[#000BEE] dark:text-[#D1D1D1] text-xs lg:text-sm font-bold p-0 m-0">
                              سه بعدی/غذا
                            </p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">مدل سه بعدی غذا همبرگر</p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">    9000 تومان</p>

                            <div class="w-full flex justify-between gap-2 ">
                              <button
                              class="rounded-lg w-[60%] px-2 py-3 bg-[#FFE3E3] dark:bg-[#C2008C]  text-[#FF0000] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                              افزودن به سبد خرید
                            </button>
                            <button
                              class="rounded-lg w-[40%]  px-2 py-3 bg-[#D8E5FD] dark:bg-[#4A4E7C]  text-[#000BEE] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                                 مشاهده سریع
                            </button>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- end card -->
                      <!-- start card -->
                      <div>
                        <a href="#"
                          class="bg-white dark:bg-[#001448] w-[195px]  md:w-[270px] 2xl:w-[285px] flex flex-col overflow-hidden rounded-xl justify-between items-center text-center p-3 gap-2  duration-500 transition-all">
                          <div class="p-3 w-[80%] " >
                            <img src="{{ asset('home-page/images/3D-rgb-10000.png') }}" alt="">
                          </div>
                          <div class="w-full flex flex-col justify-center items-center gap-3">
                            <p class="text-[#000BEE] dark:text-[#D1D1D1] text-xs lg:text-sm font-bold p-0 m-0">
                              سه بعدی/غذا
                            </p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">مدل سه بعدی غذا همبرگر</p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">    9000 تومان</p>

                            <div class="w-full flex justify-between gap-2 ">
                              <button
                              class="rounded-lg w-[60%] px-2 py-3 bg-[#FFE3E3] dark:bg-[#C2008C]  text-[#FF0000] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                              افزودن به سبد خرید
                            </button>
                            <button
                              class="rounded-lg w-[40%]  px-2 py-3 bg-[#D8E5FD] dark:bg-[#4A4E7C]  text-[#000BEE] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                                 مشاهده سریع
                            </button>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- end card -->
                      <!-- start card -->
                      <div>
                        <a href="#"
                          class="bg-white dark:bg-[#001448] w-[195px]  md:w-[270px] 2xl:w-[285px] flex flex-col overflow-hidden rounded-xl justify-between items-center text-center p-3 gap-2  duration-500 transition-all">
                          <div class="p-3 w-[80%] " >
                            <img src="{{ asset('home-page/images/3D-rgb-10000.png') }}" alt="">
                          </div>
                          <div class="w-full flex flex-col justify-center items-center gap-3">
                            <p class="text-[#000BEE] dark:text-[#D1D1D1] text-xs lg:text-sm font-bold p-0 m-0">
                              سه بعدی/غذا
                            </p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">مدل سه بعدی غذا همبرگر</p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">    9000 تومان</p>

                            <div class="w-full flex justify-between gap-2 ">
                              <button
                              class="rounded-lg w-[60%] px-2 py-3 bg-[#FFE3E3] dark:bg-[#C2008C]  text-[#FF0000] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                              افزودن به سبد خرید
                            </button>
                            <button
                              class="rounded-lg w-[40%]  px-2 py-3 bg-[#D8E5FD] dark:bg-[#4A4E7C]  text-[#000BEE] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                                 مشاهده سریع
                            </button>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- end card -->
                    </div>
                  </div>
                </div>
              </div>
              <div id="tabs-with-underline-3-2" class="hidden" role="tabpanel"
                aria-labelledby="tabs-with-underline-item-3-2">
                <div class="flex justify-between text-sm">
                  <div class="flex justify-between text-sm duration-500 transition-all w-full ">
                    <div
                      class="flex gap-4 xl:gap-5 overflow-x-scroll w-screen lg:w-[92vw]  px-3 xl:w-auto scrollbar  duration-500 transition-all">
                      <!-- start card -->
                      <div>
                        <a href="#"
                          class="bg-white dark:bg-[#001448] w-[195px]  md:w-[270px] 2xl:w-[285px] flex flex-col overflow-hidden rounded-xl justify-between items-center text-center p-3 gap-2  duration-500 transition-all">
                          <div class="p-3 w-[80%] " >
                            <img src="{{ asset('home-page/images/3D-rgb-10000.png') }}" alt="">
                          </div>
                          <div class="w-full flex flex-col justify-center items-center gap-3">
                            <p class="text-[#000BEE] dark:text-[#D1D1D1] text-xs lg:text-sm font-bold p-0 m-0">
                              سه بعدی/غذا
                            </p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">31مدل سه بعدی غذا همبرگر</p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">    9000 تومان</p>

                            <div class="w-full flex justify-between gap-2 ">
                              <button
                              class="rounded-lg w-[60%] px-2 py-3 bg-[#FFE3E3] dark:bg-[#C2008C]  text-[#FF0000] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                              افزودن به سبد خرید
                            </button>
                            <button
                              class="rounded-lg w-[40%]  px-2 py-3 bg-[#D8E5FD] dark:bg-[#4A4E7C]  text-[#000BEE] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                                 مشاهده سریع
                            </button>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- end card -->
                      <!-- start card -->
                      <div>
                        <a href="#"
                          class="bg-white dark:bg-[#001448] w-[195px]  md:w-[270px] 2xl:w-[285px] flex flex-col overflow-hidden rounded-xl justify-between items-center text-center p-3 gap-2  duration-500 transition-all">
                          <div class="p-3 w-[80%] " >
                            <img src="{{ asset('home-page/images/3D-rgb-10000.png') }}" alt="">
                          </div>
                          <div class="w-full flex flex-col justify-center items-center gap-3">
                            <p class="text-[#000BEE] dark:text-[#D1D1D1] text-xs lg:text-sm font-bold p-0 m-0">
                              سه بعدی/غذا
                            </p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">مدل سه بعدی غذا همبرگر32</p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">    9000 تومان</p>

                            <div class="w-full flex justify-between gap-2 ">
                              <button
                              class="rounded-lg w-[60%] px-2 py-3 bg-[#FFE3E3] dark:bg-[#C2008C]  text-[#FF0000] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                              افزودن به سبد خرید
                            </button>
                            <button
                              class="rounded-lg w-[40%]  px-2 py-3 bg-[#D8E5FD] dark:bg-[#4A4E7C]  text-[#000BEE] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                                 مشاهده سریع
                            </button>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- end card -->
                      <!-- start card -->
                      <div>
                        <a href="#"
                          class="bg-white dark:bg-[#001448] w-[195px]  md:w-[270px] 2xl:w-[285px] flex flex-col overflow-hidden rounded-xl justify-between items-center text-center p-3 gap-2  duration-500 transition-all">
                          <div class="p-3 w-[80%] " >
                            <img src="{{ asset('home-page/images/3D-rgb-10000.png') }}" alt="">
                          </div>
                          <div class="w-full flex flex-col justify-center items-center gap-3">
                            <p class="text-[#000BEE] dark:text-[#D1D1D1] text-xs lg:text-sm font-bold p-0 m-0">
                              سه بعدی/غذا
                            </p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">مدل سه بعدی غذا همبرگر32</p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">    9000 تومان</p>

                            <div class="w-full flex justify-between gap-2 ">
                              <button
                              class="rounded-lg w-[60%] px-2 py-3 bg-[#FFE3E3] dark:bg-[#C2008C]  text-[#FF0000] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                              افزودن به سبد خرید
                            </button>
                            <button
                              class="rounded-lg w-[40%]  px-2 py-3 bg-[#D8E5FD] dark:bg-[#4A4E7C]  text-[#000BEE] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                                 مشاهده سریع
                            </button>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- end card -->
                      <!-- start card -->
                      <div>
                        <a href="#"
                          class="bg-white dark:bg-[#001448] w-[195px]  md:w-[270px] 2xl:w-[285px] flex flex-col overflow-hidden rounded-xl justify-between items-center text-center p-3 gap-2  duration-500 transition-all">
                          <div class="p-3 w-[80%] " >
                            <img src="{{ asset('home-page/images/3D-rgb-10000.png') }}" alt="">
                          </div>
                          <div class="w-full flex flex-col justify-center items-center gap-3">
                            <p class="text-[#000BEE] dark:text-[#D1D1D1] text-xs lg:text-sm font-bold p-0 m-0">
                              سه بعدی/غذا
                            </p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">مدل سه بعدی غذا همبرگر32</p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">    9000 تومان</p>

                            <div class="w-full flex justify-between gap-2 ">
                              <button
                              class="rounded-lg w-[60%] px-2 py-3 bg-[#FFE3E3] dark:bg-[#C2008C]  text-[#FF0000] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                              افزودن به سبد خرید
                            </button>
                            <button
                              class="rounded-lg w-[40%]  px-2 py-3 bg-[#D8E5FD] dark:bg-[#4A4E7C]  text-[#000BEE] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                                 مشاهده سریع
                            </button>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- end card -->
                    </div>
                  </div>
                </div>
              </div>
              <div id="tabs-with-underline-3-3" class="hidden" role="tabpanel"
                aria-labelledby="tabs-with-underline-item-3-3">
                <div class="flex justify-between text-sm">
                  <div class="flex justify-between text-sm duration-500 transition-all w-full ">
                    <div
                      class="flex gap-4 xl:gap-5 overflow-x-scroll w-screen lg:w-[92vw]  px-3 xl:w-auto scrollbar  duration-500 transition-all">
                      <!-- start card -->
                      <div>
                        <a href="#"
                          class="bg-white dark:bg-[#001448] w-[195px]  md:w-[270px] 2xl:w-[285px] flex flex-col overflow-hidden rounded-xl justify-between items-center text-center p-3 gap-2  duration-500 transition-all">
                          <div class="p-3 w-[80%] " >
                            <img src="{{ asset('home-page/images/3D-rgb-10000.png') }}" alt="">
                          </div>
                          <div class="w-full flex flex-col justify-center items-center gap-3">
                            <p class="text-[#000BEE] dark:text-[#D1D1D1] text-xs lg:text-sm font-bold p-0 m-0">
                              سه بعدی/غذا
                            </p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">مدل سه بعدی غذا همبرگر31</p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">    9000 تومان</p>

                            <div class="w-full flex justify-between gap-2 ">
                              <button
                              class="rounded-lg w-[60%] px-2 py-3 bg-[#FFE3E3] dark:bg-[#C2008C]  text-[#FF0000] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                              افزودن به سبد خرید
                            </button>
                            <button
                              class="rounded-lg w-[40%]  px-2 py-3 bg-[#D8E5FD] dark:bg-[#4A4E7C]  text-[#000BEE] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                                 مشاهده سریع
                            </button>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- end card -->
                      <!-- start card -->
                      <div>
                        <a href="#"
                          class="bg-white dark:bg-[#001448] w-[195px]  md:w-[270px] 2xl:w-[285px] flex flex-col overflow-hidden rounded-xl justify-between items-center text-center p-3 gap-2  duration-500 transition-all">
                          <div class="p-3 w-[80%] " >
                            <img src="{{ asset('home-page/images/3D-rgb-10000.png') }}" alt="">
                          </div>
                          <div class="w-full flex flex-col justify-center items-center gap-3">
                            <p class="text-[#000BEE] dark:text-[#D1D1D1] text-xs lg:text-sm font-bold p-0 m-0">
                              سه بعدی/غذا
                            </p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">مدل سه بعدی غذا همبرگر3</p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">    9000 تومان</p>

                            <div class="w-full flex justify-between gap-2 ">
                              <button
                              class="rounded-lg w-[60%] px-2 py-3 bg-[#FFE3E3] dark:bg-[#C2008C]  text-[#FF0000] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                              افزودن به سبد خرید
                            </button>
                            <button
                              class="rounded-lg w-[40%]  px-2 py-3 bg-[#D8E5FD] dark:bg-[#4A4E7C]  text-[#000BEE] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                                 مشاهده سریع
                            </button>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- end card -->
                      <!-- start card -->
                      <div>
                        <a href="#"
                          class="bg-white dark:bg-[#001448] w-[195px]  md:w-[270px] 2xl:w-[285px] flex flex-col overflow-hidden rounded-xl justify-between items-center text-center p-3 gap-2  duration-500 transition-all">
                          <div class="p-3 w-[80%] " >
                            <img src="{{ asset('home-page/images/3D-rgb-10000.png') }}" alt="">
                          </div>
                          <div class="w-full flex flex-col justify-center items-center gap-3">
                            <p class="text-[#000BEE] dark:text-[#D1D1D1] text-xs lg:text-sm font-bold p-0 m-0">
                              سه بعدی/غذا
                            </p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">مدل سه بعدی غذا همبرگر3</p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">    9000 تومان</p>

                            <div class="w-full flex justify-between gap-2 ">
                              <button
                              class="rounded-lg w-[60%] px-2 py-3 bg-[#FFE3E3] dark:bg-[#C2008C]  text-[#FF0000] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                              افزودن به سبد خرید
                            </button>
                            <button
                              class="rounded-lg w-[40%]  px-2 py-3 bg-[#D8E5FD] dark:bg-[#4A4E7C]  text-[#000BEE] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                                 مشاهده سریع
                            </button>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- end card -->
                      <!-- start card -->
                      <div>
                        <a href="#"
                          class="bg-white dark:bg-[#001448] w-[195px]  md:w-[270px] 2xl:w-[285px] flex flex-col overflow-hidden rounded-xl justify-between items-center text-center p-3 gap-2  duration-500 transition-all">
                          <div class="p-3 w-[80%] " >
                            <img src="{{ asset('home-page/images/3D-rgb-10000.png') }}" alt="">
                          </div>
                          <div class="w-full flex flex-col justify-center items-center gap-3">
                            <p class="text-[#000BEE] dark:text-[#D1D1D1] text-xs lg:text-sm font-bold p-0 m-0">
                              سه بعدی/غذا
                            </p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">مدل سه بعدی غذا همبرگر3</p>
                            <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">    9000 تومان</p>

                            <div class="w-full flex justify-between gap-2 ">
                              <button
                              class="rounded-lg w-[60%] px-2 py-3 bg-[#FFE3E3] dark:bg-[#C2008C]  text-[#FF0000] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                              افزودن به سبد خرید
                            </button>
                            <button
                              class="rounded-lg w-[40%]  px-2 py-3 bg-[#D8E5FD] dark:bg-[#4A4E7C]  text-[#000BEE] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                                 مشاهده سریع
                            </button>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- end card -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- show more products -->
          <div id="top-product-btn" class="flex justify-center gap-3 lg:text-2xl font-bold mt-10" aria-label="Tabs" role="tablist">
            <button type="button"
              class="bg-[#CDD6FC] p-2 rounded-full duration-500 transition-all  hs-tab-active:w-10 hs-tab-active:bg-[#000BEE] dark:hs-tab-active:bg-[#C2008C] slyder-but active "
              id="tabs-with-underline-item-4" data-hs-tab="#tabs-with-underline-4"
              aria-controls="tabs-with-underline-4" role="tab">

            </button>
            <button type="button"
              class="bg-[#CDD6FC] p-2 rounded-full duration-500 transition-all  hs-tab-active:w-10 hs-tab-active:bg-[#000BEE] dark:hs-tab-active:bg-[#C2008C] slyder-but "
              id="tabs-with-underline-item-5" data-hs-tab="#tabs-with-underline-5"
              aria-controls="tabs-with-underline-5" role="tab">

            </button>
            <button type="button"
              class="bg-[#CDD6FC] p-2 rounded-full duration-500 transition-all  hs-tab-active:w-10 hs-tab-active:bg-[#000BEE] dark:hs-tab-active:bg-[#C2008C] slyder-but "
              id="tabs-with-underline-item-6" data-hs-tab="#tabs-with-underline-6"
              aria-controls="tabs-with-underline-6" role="tab">

            </button>
          </div>
          <div id="new-product-btn" class="justify-center gap-3 lg:text-2xl font-bold mt-10 hidden" aria-label="Tabs" role="tablist" >
            <button type="button"
              class="bg-[#CDD6FC] p-2 rounded-full duration-500 transition-all  hs-tab-active:w-10 hs-tab-active:bg-[#000BEE] dark:hs-tab-active:bg-[#C2008C] slyder-but active "
              id="tabs-with-underline-item-2-1" data-hs-tab="#tabs-with-underline-2-1"
              aria-controls="tabs-with-underline-2-1" role="tab">

            </button>
            <button type="button"
              class="bg-[#CDD6FC] p-2 rounded-full duration-500 transition-all  hs-tab-active:w-10 hs-tab-active:bg-[#000BEE] dark:hs-tab-active:bg-[#C2008C] slyder-but "
              id="tabs-with-underline-item-2-2" data-hs-tab="#tabs-with-underline-2-2"
              aria-controls="tabs-with-underline-2-2" role="tab">

            </button>
            <button type="button"
              class="bg-[#CDD6FC] p-2 rounded-full duration-500 transition-all  hs-tab-active:w-10 hs-tab-active:bg-[#000BEE] dark:hs-tab-active:bg-[#C2008C] slyder-but "
              id="tabs-with-underline-item-2-3" data-hs-tab="#tabs-with-underline-2-3"
              aria-controls="tabs-with-underline-2-3" role="tab">

            </button>
          </div>
          <div id="success-product-btn" class="justify-center gap-3 lg:text-2xl font-bold mt-10 hidden" aria-label="Tabs" role="tablist" >
            <button type="button"
              class="bg-[#CDD6FC] p-2 rounded-full duration-500 transition-all  hs-tab-active:w-10 hs-tab-active:bg-[#000BEE] dark:hs-tab-active:bg-[#C2008C] slyder-but active "
              id="tabs-with-underline-item-3-1" data-hs-tab="#tabs-with-underline-3-1"
              aria-controls="tabs-with-underline-3-1" role="tab">

            </button>
            <button type="button"
              class="bg-[#CDD6FC] p-2 rounded-full duration-500 transition-all  hs-tab-active:w-10 hs-tab-active:bg-[#000BEE] dark:hs-tab-active:bg-[#C2008C] slyder-but "
              id="tabs-with-underline-item-3-2" data-hs-tab="#tabs-with-underline-3-2"
              aria-controls="tabs-with-underline-3-2" role="tab">

            </button>
            <button type="button"
              class="bg-[#CDD6FC] p-2 rounded-full duration-500 transition-all  hs-tab-active:w-10 hs-tab-active:bg-[#000BEE] dark:hs-tab-active:bg-[#C2008C] slyder-but "
              id="tabs-with-underline-item-3-3" data-hs-tab="#tabs-with-underline-3-3"
              aria-controls="tabs-with-underline-3-3" role="tab">

            </button>
          </div>
        </div>
        <!-- end show more products -->

      </section>

    </main>
</div>
