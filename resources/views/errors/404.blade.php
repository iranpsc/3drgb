<x-layouts.app title="صفحه یافت نشد">
    <div class="row justify-content-center">
        <div class="col-12">
           <!-- Start: error page -->
           <div class="min-vh-100 content-center">
              <div class="error-page text-center">
                 <img src="{{ asset('img/svg/404.svg') }}" alt="404" class="svg">
                 <div class="error-page__title">404</div>
                 <h5 class="fw-500">متاسف! صفحه ای که به دنبال آن هستید وجود ندارد.</h5>
                 <div class="content-center mt-30">
                    <a href="{{ route('home') }}" class="btn btn-primary btn-default btn-squared px-30">بازگشت به خانه</a>
                 </div>
              </div>
           </div>
           <!-- End: error page -->
        </div>
     </div>
</x-layouts.app>