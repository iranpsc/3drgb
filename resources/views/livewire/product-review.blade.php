<div>

    @if(session()->has('message'))
        <x-alert type="success" message="{{ session('message') }}" />
    @endif
    
    @if (Auth::check() && Auth::user()->hasPurchased($product) && !Auth::user()->hasReviewed($product))
        <div class="row justify-content-right my-2">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-right">
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label class="form-col-label col-6">امتیاز دهید</label>
                                    <div class="col-sm-6">
                                        <div class="stars-rating d-flex align-items-center" id="star-rating">
                                            <span class="star-icon las la-star"></span>
                                            <span class="star-icon las la-star"></span>
                                            <span class="star-icon las la-star"></span>
                                            <span class="star-icon las la-star"></span>
                                            <span class="star-icon las la-star"></span>
                                        </div>
                                        @error('rating') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="form-col-label col-6">نظر شما در باره این محصول چیست؟</label>
                                    <div class="col-sm-6">
                                        <textarea class="form-control" wire:model="comment" rows="5"></textarea>
                                        @error('comment') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary btn-default btn-squared border-0 me-10 my-sm-0 my-2" id="save-review-btn">ثبت نظر</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @forelse ($product->reviews as $review)
        <div class="card" wire:key="{{ $review->id }}">
            <div class="card-body">
                <div class="row justify-content-right">
                    <div class="col-md-6">
                        <div class="product-details__availability my-2">
                            <div class="title">
                                <p>نام کاربر</p>
                                <span class="free">{{ $review->user->name }}</span>
                            </div>
                        </div>
                        <div class="product-details__availability my-2">
                            <div class="title">
                                <p>امتیاز</p>
                                <div class="free">
                                    <div class="stars-rating d-flex align-items-center">
                                        @for ($i = 0; $i < 5; $i++)
                                            <span class="star-icon las la-star @if($i < $review->rating) active @endif"></span>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-details__availability my-2">
                            <div class="title">
                                <p>نظر</p>
                                <span class="free">{{ $review->comment }}</span>
                            </div>
                        </div>

                        @if (Auth::check() && Auth::user()->hasRole('admin') && !$review->approved)
                            <div class="product-details__availability my-2">
                                <div class="title">
                                    <p>عملیات</p>
                                    <div class="free">
                                        <button type="button" class="btn btn-info btn-default btn-squared border-0 me-10 my-sm-0 d-inline" wire:click="approveReview({{ $review->id }})" wire:confirm="آیا این نظر را تایید می کنید؟">تایید</button>
                                        <button type="button" class="btn btn-danger btn-default btn-squared border-0 me-10 my-sm-0 d-inline" wire:click="deleteReview({{ $review->id }})" wire:confirm="ایا این نظر را حذف می کنید؟">حذف</button>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @empty
        <x-alert type="success" message="نظری ثبت نشده است." />
    @endforelse
</div>

<script>
    document.addEventListener('livewire:initialized', () => {
        let starRating = document.getElementById('star-rating');
        let saveReviewBtn = document.getElementById('save-review-btn');

        // When user mouse over the star rating add mouse cursor
        starRating.addEventListener('mouseover', function(e) {
            starRating.style.cursor = 'pointer';
        });

        starRating.addEventListener('click', function(e) {
            let stars = starRating.getElementsByClassName('star-icon');

            for (let i = 0; i < stars.length; i++) {
                stars[i].classList.remove('active');
            }

            let star = e.target;

            star.classList.add('active');

            while (star = star.previousElementSibling) {
                star.classList.add('active');
            }
        });

        saveReviewBtn.addEventListener('click', function(e) {
            let stars = starRating.getElementsByClassName('star-icon active');

            let rating = stars.length;

            @this.set('rating', rating);

            @this.call('saveReview');
        });

    });

</script>
