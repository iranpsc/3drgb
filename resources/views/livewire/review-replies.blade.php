<div>
    <div class="flex flex-col gap-4 ">
        @foreach ($review->replies as $reply)
            <div class="border-r-4 border-[#F4F4F4] mr-3 pr-3 md:pr-10 md:mr-10 dark:border-[#0a0a0a] w-full">
                <div class="bg-[#F4F4F4] w-full rounded-[20px] p-5 flex flex-col gap-6 dark:bg-[#0a0a0a]  ">
                    <div class="w-full grid grid-cols-2  justify-between items-center gap-y-4">
                        <div class="flex  gap-3 w-max">
                            <div class="flex gap-3 items-center">
                                <div class="w-[32px] aspect-square overflow-hidden rounded-full ">
                                    <img src="{{ asset('storage/' . $reply->user->avatar) }}" alt="user" class="w-full">
                                </div>
                                <div class="flex gap-3 items-center">
                                    <a href="#"
                                        class="text-[#0F0F0E] dark:text-[#FCFCFC] text-xs md:text-base">{{ $reply->user->name }}
                                    </a>
    
                                </div>
                            </div>
    
                        </div>
                        <div class="text-[#5A5F66] dark:text-[#84858F] text-xs w-full md:text-left">
                            <time>{{ \Morilog\Jalali\Jalalian::fromDateTime($reply->created_at)->ago() }}</time>
                        </div>
                    </div>
                    <div class="w-full ">
                        <p class="dark:text-[#DEDEE9] text-[#343434] text-xs md:text-base  text-wrap ">
                            {{ $reply->comment }}</p>
                    </div>
    
                </div>
            </div>
        @endforeach
    </div>
</div>
