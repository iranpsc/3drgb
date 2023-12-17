<div>
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="shop-breadcrumb">

               <div class="breadcrumb-main">
                  <h4 class="text-capitalize breadcrumb-title">محصولات</h4>
                  <div class="breadcrumb-action justify-content-center flex-wrap">
                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="uil uil-estate"></i>خانه</a></li>
                           <li class="breadcrumb-item active" aria-current="page">محصولات</li>
                        </ol>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="products_page product_page--grid mb-30">
      <div class="container-fluid">
         <div class="row justify-content-center">
            <div class="columns-1 col-lg-8 col-sm-10 mb-lg-0 mb-30">
               <div class="widget mb-lg-30">
                  <div class="widget-header-title px-20 py-15">
                     <h6 class="d-flex align-content-center fw-500">
                        <img src="img/svg/sliders.svg" alt="sliders" class="svg"> فیلترها
                     </h6>
                  </div>
                  <div class="category_sidebar">
                     <!-- Start: Aside -->
                     <aside class="product-sidebar-widget mb-30">
                        <!-- Title -->
                        <div class="widget_title" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" role="button" aria-expanded="true">
                           <h6>دسته</h6>
                        </div>
                        <!-- Title -->
                        <!-- Body -->
                        <div class="card border-0 shadow-none multi-collapse mt-10 collapse show" id="multiCollapseExample2" wire:ignore>
                           <div class="product-category limit-list-item">
                              <ul>
                                 @forelse ($this->categories as $category)
                                    <li>
                                       <div class="w-100">
                                          <a href="javascript::void(0)" wire:click="getPorductsByCategory({{ $category->id }})" class="fs-14 color-gray">{{ $category->name }}<span class="item-numbers">{{ $category->products_count }}</span></a>
                                       </div>
                                    </li>
                                 @empty
                                    <li>
                                       <div class="w-100">
                                          <span class="fs-14 color-gray">دسته ای وجود ندارد</span>
                                       </div>
                                    </li>
                                 @endforelse
                              </ul>
                           </div>
                        </div>
                        <!-- Body -->
                     </aside>
                     <!-- End: Aside -->
                  </div>
               </div><!-- End: .widget -->
            </div><!-- End: .columns-1 -->
            <div class="columns-2 col-lg-12">
               <!-- Start: Top Bar -->
               <div class="shop_products_top_filter">
                  <div class="project-top-wrapper d-flex flex-wrap align-items-center">
                     <div class="project-top-left d-flex flex-wrap align-items-center">
                        <div class="project-search shop-search  global-shadow ">
                           <div class="d-flex align-items-center user-member__form">
                              <img src="{{ asset('img/svg/search.svg') }}" alt="search" class="svg">
                              <input class="form-control me-sm-2 border-0 box-shadow-none" wire:model.live.debounce.500ms="search" type="text" placeholder="جستجو" aria-label="Search">
                           </div>
                        </div>
                     </div>
                     <div class="project-top-right d-flex flex-wrap align-items-center">
                        <div class="project-category flex-wrap d-flex align-items-center">
                           <p class="fs-14 color-gray text-capitalize">مرتب سازی بر اساس:</p>
                           <div class="project-tap project-tab__product">
                              <ul class="nav px-1 " id="ap-tab" role="tablist">
                                 <li class="nav-item">
                                    <a class="nav-link @if($orderBy['newest']) active @endif" href="javascript::void(0)" wire:click="sortBy('newest')" role="tab" aria-controls="ap-overview" aria-selected="true">جدید ترین</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link @if($orderBy['cheapest']) active @endif" href="javascript::void(0)" wire:click="sortBy('cheapest')" role="tab" aria-controls="timeline" aria-selected="false">ارزان ترین</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link @if($orderBy['most-expensive']) active @endif" href="javascript::void(0)" wire:click="sortBy('most-expensive')" role="tab" aria-controls="activity" aria-selected="false">گرانترین</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link @if($orderBy['most-sales']) active @endif" href="javascript::void(0)" wire:click="sortBy('most-sales')" role="tab" aria-controls="draft" aria-selected="false">پر فروش ترین</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="project-icon-selected content-center mt-lg-0 mt-25">
                           <div class="listing-social-link listing-social-link__products pb-lg-0 pb-xs-2">
                              <div class="icon-list-social d-flex">
                                 <a class="icon-list-social__link rounded-circle icon-list-social__style justify-content-center active ms-xl-20" href="#">
                                    <img class="svg" src="{{ asset('img/svg/grid.svg') }}" alt="grid"></a>
                                 <a class="icon-list-social__link rounded-circle icon-list-social__style justify-content-center  " href="product-list.html">
                                    <img class="svg" src="{{ asset('img/svg/list.svg') }}" alt="list"></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- End: Top Bar -->
               <!-- Start: Shop Item -->
               <div class="tab-content mt-25" id="ap-tabContent">
                  <div class="tab-pane fade show active" id="ap-overview" role="tabpanel" aria-labelledby="ap-overview-tab">
                     <!-- Start: Shop Item -->
                     <div class="row product-page-list justify-content-center">
                        <!-- Add a hidden loading spinner to your HTML -->
                        <div id="loading" style="display: none;">
                           <img src="path_to_your_spinner.gif" alt="Loading..." />
                        </div>

                        @forelse ($products as $product)
                           <livewire:product-item :$product :key="'product' . $product->id" />
                        @empty
                           <x-alert type="warning" message="محصولی وجود ندارد" />
                        @endforelse

                     </div>
                     <!-- End: Shop Item -->
                  </div>
               </div>
               <!-- End: Shop Item -->
               <div class="row">
                  <div class="col-12">
                     <div class="user-pagination">
                        <div class="d-flex justify-content-lg-end justify-content-center mt-1 mb-30">
                           {{ $products->links() }}
                        </div>
                        <!-- End of Pagination-->
                     </div>
                  </div>
               </div>
            </div><!-- End: .columns-2 -->
         </div>
      </div>
   </div>
   <!-- End: .products -->
</div>