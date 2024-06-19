<div>

    @session('message')
        <x-alert type="success" message="{{ session('message') }}" />
    @endsession

    <div class="flex flex-col-reverse md:flex-row gap-5 items-center justify-center w-full  my-5">
        <div
            class="bg-[#FFFFFF] dark:bg-[#001448] p-8 rounded-[10px] flex flex-col justify-center items-center gap-5 w-full md:w-[70%]">
            <dl class="w-full">
                @php
                    $five_star_review_percentage = ($product->five_star_reviews_count / $users_count) * 100;
                @endphp
                <dd class="flex items-center gap-4 w-full">
                    <div
                        class="w-[50%] md:w-[60%] 2xl:w-[65%] 3xl:w-[70%] bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                        <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500"
                            style="width: {{ $five_star_review_percentage }}%"></div>
                    </div>
                    <div class="flex items-center gap-4 w-[50%] md:w-[40%] 2xl:w-[35%] 3xl:w-[30%]">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-yellow-300 ms-1" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-yellow-300 ms-1" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-yellow-300 ms-1" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-yellow-300 ms-1" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 ms-1 text-yellow-300 dark:text-gray-500" aria-hidden="true"
                                fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                </path>
                            </svg>
                        </div>
                        <span
                            class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ $five_star_review_percentage }}%</span>
                    </div>
                </dd>
            </dl>
            <dl class="w-full">
                @php
                    $four_star_review_percentage = ($product->four_star_reviews_count / $users_count) * 100;
                @endphp
                <dd class="flex items-center gap-4 w-full">
                    <div
                        class="w-[50%] md:w-[60%] 2xl:w-[65%] 3xl:w-[70%] bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                        <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500"
                            style="width: {{ $four_star_review_percentage }}%"></div>
                    </div>
                    <div class="flex items-center gap-4 w-[50%] md:w-[40%] 2xl:w-[35%] 3xl:w-[30%]">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-yellow-300 ms-1" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-yellow-300 ms-1" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-yellow-300 ms-1" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-yellow-300 ms-1" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true"
                                fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                </path>
                            </svg>
                        </div>
                        <span
                            class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ $four_star_review_percentage }}%</span>
                    </div>
                </dd>
            </dl>
            <dl class="w-full">
                @php
                    $three_star_review_percentage = ($product->three_star_reviews_count / $users_count) * 100;
                @endphp
                <dd class="flex items-center gap-4 w-full">
                    <div
                        class="w-[50%] md:w-[60%] 2xl:w-[65%] 3xl:w-[70%] bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                        <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500"
                            style="width: {{ $three_star_review_percentage }}%"></div>
                    </div>
                    <div class="flex items-center gap-4 w-[50%] md:w-[40%] 2xl:w-[35%] 3xl:w-[30%]">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-yellow-300 ms-1" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-yellow-300 ms-1" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-yellow-300 ms-1" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-gray-300 ms-1" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true"
                                fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                </path>
                            </svg>
                        </div>
                        <span
                            class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ $three_star_review_percentage }}%</span>
                    </div>
                </dd>
            </dl>
            <dl class="w-full">
                @php
                    $two_star_review_percentage = ($product->two_star_reviews_count / $users_count) * 100;
                @endphp
                <dd class="flex items-center gap-4 w-full">
                    <div
                        class="w-[50%] md:w-[60%] 2xl:w-[65%] 3xl:w-[70%] bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                        <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500"
                            style="width: {{ $two_star_review_percentage }}%"></div>
                    </div>
                    <div class="flex items-center gap-4 w-[50%] md:w-[40%] 2xl:w-[35%] 3xl:w-[30%]">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-yellow-300 ms-1" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-yellow-300 ms-1" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-gray-300 ms-1" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-gray-300 ms-1" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true"
                                fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                </path>
                            </svg>
                        </div>
                        <span
                            class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ $two_star_review_percentage }}
                            %</span>
                    </div>
                </dd>
            </dl>
            <dl class="w-full">
                @php
                    $one_star_review_percentage = ($product->one_star_reviews_count / $users_count) * 100;
                @endphp
                <dd class="flex items-center gap-4 w-full">
                    <div
                        class="w-[50%] md:w-[60%] 2xl:w-[65%] 3xl:w-[70%] bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                        <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500"
                            style="width: {{ $one_star_review_percentage }}%"></div>
                    </div>
                    <div class="flex items-center gap-4 w-[50%] md:w-[40%] 2xl:w-[35%] 3xl:w-[30%]">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-yellow-300 ms-1" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-gray-300 ms-1" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-gray-300 ms-1" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-gray-300 ms-1" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true"
                                fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                </path>
                            </svg>
                        </div>
                        <span
                            class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ $one_star_review_percentage }}%</span>
                    </div>
                </dd>
            </dl>
        </div>
        <div
            class="bg-[#FFFFFF] dark:bg-[#001448] p-5 md:p-[34px] rounded-[10px] flex flex-row-reverse md:flex-col items-center justify-between w-full md:w-[30%] gap-5 lg:gap-10">
            <div class="flex flex-col gap-5 lg:gap-10 items-center justify-center">
                <p class="text-2xl md:text-5xl font-bold text-[#4F547B] dark:text-gray-300">{{ floor($product->rating_avg) }}
                </p>
                <div class="flex items-center gap-2">
                    <svg class="w-6 h-6 text-yellow-300 ms-1" aria-hidden="true" fill="currentColor"
                        viewBox="0 0 22 20">
                        <path
                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                        </path>
                    </svg>
                    <svg class="w-6 h-6 text-yellow-300 ms-1" aria-hidden="true" fill="currentColor"
                        viewBox="0 0 22 20">
                        <path
                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                        </path>
                    </svg>
                    <svg class="w-6 h-6 text-yellow-300 ms-1" aria-hidden="true" fill="currentColor"
                        viewBox="0 0 22 20">
                        <path
                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                        </path>
                    </svg>
                    <svg class="w-6 h-6 text-yellow-300 ms-1" aria-hidden="true" fill="currentColor"
                        viewBox="0 0 22 20">
                        <path
                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                        </path>
                    </svg>
                    <svg class="w-6 h-6 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true" fill="currentColor"
                        viewBox="0 0 22 20">
                        <path
                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                        </path>
                    </svg>
                </div>
            </div>
            <p class="text-[#4F547B] dark:text-gray-300">رتبه بندی محصول</p>
        </div>
    </div>

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
    @elseif($product->is_free)
        @if (Auth::check())
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
        @else
            <x-alert type="success" message="برای ارسال نظر باید وارد حساب کاربری خود شوید." />
        @endif
    @endif
    @forelse ($product->reviews as $review)
        <div class="w-full" wire:key="{{ $review->id }}">
            <div class="w-full">
                <div class="space-y-5 ">
                    <div class="flex gap-5 ">
                        <div
                            class="w-12 h-12 rounded-full bg-[#164C96] text-gray-200 flex items-center justify-center">
                            <img src="{{ asset('storage/' . $review->user->avatar) }}"
                                class="w-12 h-12 rounded-full">
                        </div>
                        <div class="space-y-1">
                            <div class="flex items-center gap-3 text-[#1D2939] dark:text-gray-200">
                                <p class="font-bold">{{ $review->user->name }}</p>
                                <p class="text-xs">
                                    {{ \Morilog\Jalali\Jalalian::fromDateTime($review->created_at)->ago() }}</p>
                            </div>
                            <div class="product-details__availability my-2">
                                <div class="free">
                                    <div class="stars-rating flex gap-1 items-center">
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
                        <div class="text-[#1d29399d] dark:text-gray-200 text-sm">
                            <p>{{ $review->comment }}</p>
                            <div class="flex gap-4 items-center justify-end mt-5">
                                <button class="text-xs text-red-600"
                                    wire:click="saveReviewReply({{ $review->id }})">Replay</button>
                                <button class="text-xs" wire:click="likeReview({{ $review->id }})">Like</button>
                            </div>
                            <div class="flex gap-4 items-center justify-end mt-5">
                                @session('message')
                                    <x-alert type="success" message="{{ session('message') }}" />
                                @endsession
                                <textarea id="review-reply-box-{{ $review->id }}" cols="30" rows="10" class="d-hidden"
                                    wire:model="reviewReplyText"></textarea>
                                @error('reviewReplyText')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
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
