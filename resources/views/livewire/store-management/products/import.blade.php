<div>
    <x-page title="درون ریزی محصولات">

        @if (session()->has('message'))
            <x-alert type="success" :message="session('message')" />
        @endif
        
        <div class="row justify-content-center">
            <div class="col-sm-8 col-md-6 col-lg-4">
                <form wire:submit="import">
                    <div class="form-group row">
                        <label for="file" class="form-col-label col-sm-4">فایل اکسل</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" id="file" wire:model="file">
                            @error('file') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <x-button type="submit" size="block">درون ریزی</x-button>
                    </div>
                </form>
            </div>
        </div>
    </x-page>
</div>
