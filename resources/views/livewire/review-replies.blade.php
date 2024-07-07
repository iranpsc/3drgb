<div>
    @foreach ($review->replies as $reply)
        <div class="flex gap-5 ">
            <div class="w-12 h-12 rounded-full bg-[#164C96] text-gray-200 flex items-center justify-center">
                <img src="{{ asset('storage/' . $reply->user->avatar) }}" class="w-12 h-12 rounded-full">
            </div>
            <div class="space-y-1">
                <div class="flex items center gap-3 text-[#1D2939] dark:text-gray-200">
                    <p class="font-bold">{{ $reply->user->name }}</p>
                    <p class="text-xs">
                        {{ \Morilog\Jalali\Jalalian::fromDateTime($reply->created_at)->ago() }}
                    </p>
                </div>
            </div>
        </div>
        <div class="text-[#1d29399d] dark:text-gray-200 text-sm">
            <p>{{ $reply->comment }}</p>
        </div>
    @endforeach
</div>
