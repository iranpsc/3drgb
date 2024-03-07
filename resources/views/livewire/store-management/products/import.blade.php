<div>
    <x-page title="درون ریزی محصولات">

        @if (session()->has('message'))
            <x-alert type="success" :message="session('message')" />
        @endif
        
        <div class="row justify-content-center">
            <div class="col-sm-8 col-md-6 col-lg-4">
                <form wire:submit="import">
                    <div class="flex flex-col gap-3">
                        <label for="file" class="">فایل اکسل</label>
                        <div >
                            <input type="file" class="w-full bg-[#F8F9FA] dark:bg-[#4A4E7C] rounded-[10px] p-3 border-dashed border-gray-500 dark:border-gray-400 border-2" id="file" wire:model="file">
                            @error('file') <span    >{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="mt-5">
                        <x-button type="submit" size="block">درون ریزی</x-button>
                    </div>
                </form>
            </div>
        </div>
    </x-page>
</div>
