<div>

    @session('message')
        <x-alert type="success" message="{{ session('message') }}" />
    @endsession

    @if (Auth::check() && Auth::user()->hasPurchased($product) && !Auth::user()->hasReviewed($product))
        <div class="flex flex-col gap-7 text-[#1D2939] dark:text-gray-200">
            <div class="font-bold text-xl">
                یک نظر بنویسید
            </div>
            <div class="flex flex-col gap-3">
                <p>محصول چگونه است؟</p>

                <div class="col-sm-6">
                    <div class="stars-rating flex gap-3 items-center" id="star-rating">
                        <span class="star-icon las la-star"></span>
                        <span class="star-icon las la-star"></span>
                        <span class="star-icon las la-star"></span>
                        <span class="star-icon las la-star"></span>
                        <span class="star-icon las la-star"></span>
                    </div>
                    @error('rating')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="space-y-5 w-full lg:w-[60%]">
                <p>عنوان</p>
                <input type="text"
                    class="w-full text-gray-400 py-3 rounded-[10px] border-2 border-gray-300 ring-offset-0 focus:ring-offset-0 ring-0 !focus:ring-0 bg-transparent">
                <p class="mt-5">نظر شما در باره این محصول چیست؟</p>
                <textarea wire:model="comment" name="" id="" cols="30" rows="10"
                    class="w-full text-gray-400 py-3 rounded-[10px] border-2 border-gray-300 ring-offset-0 focus:ring-offset-0 ring-0 !focus:ring-0 bg-transparent"></textarea>
                @error('comment')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <div class="flex justify-end mt-10">
                    <button type="button"
                        class="bg-[#3A4980] dark:bg-[#001448] text-white py-4 pb-[17px] rounded-full w-max px-6"
                        id="save-review-btn">ارسال بررسی</button>
                </div>
            </div>
        </div>
    @endif
    @forelse ($product->reviews as $review)
        <div class="w-full" wire:key="{{ $review->id }}">
            <div class="w-full lg:w-[60%] space-y-10">
                <div class="w-full">
                    <div class="space-y-5 ">
                        <div class="flex gap-5 ">
                            <div
                                class="w-12 h-12 rounded-full bg-[#164C96] text-gray-200 flex items-center justify-center">
                                <img src="" class="w-12 h-12 rounded-full">
                            </div>
                            <div class="space-y-1">
                                <div class="flex items-center gap-3 text-[#1D2939] dark:text-gray-200">
                                    <p class="font-bold">{{ $review->user->name }}</p>
                                    <p class="text-xs">3 روز پیش</p>
                                </div>
                                <div class="product-details__availability my-2">
                                    <div class="free">
                                        <div class="stars-rating flex gap-3 items-center">
                                            @for ($i = 0; $i < 5; $i++)
                                                <span
                                                    class="star-icon las la-star @if ($i < $review->rating) active @endif"></span>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-5">
                            <p class="text-[#1D2939] dark:text-gray-200">
                                بهترین محصول در بازار
                            </p>
                            <div class="text-[#1d29399d] dark:text-gray-200 text-sm">
                                <p>{{ $review->comment }}</p>
                                <div class="flex gap-4 items-center justify-end">
                                    <button class="text-xs text-red-600">Replay</button>
                                    <button class="text-xs ">Like</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <x-alert type="success" message="نظری ثبت نشده است." />
    @endforelse
</div>




@script
    <script>
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

            $wire.set('rating', rating);

            $wire.call('saveReview');
        });
    </script>
@endscript
