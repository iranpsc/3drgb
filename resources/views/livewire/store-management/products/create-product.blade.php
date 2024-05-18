<div>
    <x-page title="ایجاد محصول">

        @session('success')
            <x-alert type="success" message="{{ session('success') }}" />
        @endsession

        <div class="flex flex-col gap-10">
            <div class="grid lg:grid-cols-2 gap-7">

                <x-form.select wire:model="form.category_id" name="form.category_id" label="دسته بندی">
                    <option value="">انتخاب دسته بندی</option>

                    @php
                        $parentCategories = $categories->reject(function ($category) {
                            return $category->parent_id != null;
                        });
                    @endphp

                    @foreach ($parentCategories as $category)
                        <optgroup label="{{ $category->name }}">
                            @foreach ($category->children as $child)
                                <x-partials.category-option :category="$child" :level="1" />
                            @endforeach
                        </optgroup>
                    @endforeach

                </x-form.select>

                <x-form.text wire:model="form.sku" name="form.sku" label="شناسه" />
                <x-form.text wire:model="form.name" name="form.name" label="نام" />
                <x-form.text wire:model="form.slug" name="form.slug" label="نامک" />
                <x-form.text wire:model="form.price" name="form.price" label="قیمت عادی" />
                <x-form.text wire:model="form.sale_price" name="form.sale_price" label="قیمت فروش ویژه" />

                <div class="mt-10 mb-10 flex flex-col gap-4">
                    <label for="tags" class="flex flex-col gap-5">برچسب ها</label>
                    <div class="flex flex-col gap-5">
                        <div wire:ignore>
                            <select name="tags" id="select-tag"
                                class="bg-[#F8F9FA] dark:bg-[#4A4E7C] rounded-[10px] p-4 space-y-2  w-full"
                                label="برچسب ها" multiple="multiple" style="height:150px">
                                <option value="">انتخاب برچسب ها</option>
                                @foreach ($tags as $tag)
                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('form.tags')
                            <span
                                style="color:red;padding:14px;background-color:rgba(207, 117, 117, 0.47);border-radius:10px">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

            </div>
        </div>

        <hr>

        <h4 class="mb-5 mt-5">ویژگی ها</h4>

        @forelse ($attributes->chunk(2) as $items)
            <div class="grid lg:grid-cols-2  gap-7 mt-5  " id="stockInputs">
                @foreach ($items as $item)
                    <div class="w-full flex flex-col gap-7">
                        <div id="attribute-box-{{ $item->id }}" wire:key="{{ $item->id }}">
                            <div class="flex flex-col gap-5">
                                <label for="attribute-{{ $item->id }}">{{ $item->name }}</label>
                                <div class="w-full">
                                    <input type="text"
                                        class="w-full bg-[#F8F9FA] dark:bg-[#4A4E7C] rounded-[10px] p-4 "
                                        id="attribute-{{ $item->id }}">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @empty
            <x-alert type="warning" message="ویژگی ای برای این دسته بندی ثبت نشده است." />
        @endforelse

        <hr class="mt-5 mb-5" style="margin-bottom:20px">

        <div>
            <div class="flex flex-col gap-5 mt-5">

                <div class="flex flex-col gap-5">
                    <label for="short_desciption">توضیحات کوتاه</label>
                    <textarea wire:model="form.short_description" name="form.short_description"
                        class="form-control @error('form.short_description') is-invalid @enderror  w-full text-gray-400 py-3 rounded-[10px] border-2 border-gray-300 ring-offset-0 focus:ring-offset-0 ring-0 !focus:ring-0 bg-transparent"
                        id="short_desciption" rows="3"></textarea>
                    @error('form.short_description')
                        <span
                            style="color:red;padding:14px;background-color:rgba(207, 117, 117, 0.47);border-radius:10px">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-col gap-5">
                    <label for="meta_desciption">توضیحات متا</label>
                    <textarea wire:model="form.meta_description" name="form.meta_description"
                        class="form-control @error('form.meta_description') is-invalid @enderror w-full text-gray-400 py-3 rounded-[10px] border-2 border-gray-300 ring-offset-0 focus:ring-offset-0 ring-0 !focus:ring-0 bg-transparent"
                        id="meta_desciption" rows="3"></textarea>
                    @error('form.meta_description')
                        <span
                            style="color:red;padding:14px;background-color:rgba(207, 117, 117, 0.47);border-radius:10px">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-col gap-5">
                    <label for="meta_keywords">کلمات کلیدی متا</label>
                    <textarea wire:model="form.meta_keywords" name="form.meta_keywords"
                        class="form-control @error('form.meta_keywords') is-invalid @enderror  w-full text-gray-400 py-3 rounded-[10px] border-2 border-gray-300 ring-offset-0 focus:ring-offset-0 ring-0 !focus:ring-0 bg-transparent"
                        id="meta_keywords" rows="3"></textarea>
                    @error('form.meta_keywords')
                        <span
                            style="color:red;padding:14px;background-color:rgba(207, 117, 117, 0.47);border-radius:10px">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="mt-5" wire:ignore>
            <label for="summernote2">توضیحات محصول</label>
            <div id="summernote2" class="dark:text-gray-300"></div>
        </div>

        <x-button style="margin-top:50px" type="submit" id="save-btn">ذخیره</x-button>

    </x-page>

</div>

@script
    <script>
        let saveBtn = document.getElementById('save-btn');
        let tags;
        let attributes = [];
        let fileName = '';

        saveBtn.addEventListener('click', function() {
            saveBtn.classList.add('disabled');
            saveBtn.innerText = 'در حال ذخیره سازی ...';

            setTimeout(function() {
                saveBtn.classList.remove('disabled');
                saveBtn.innerText = 'ذخیره';
            }, 3000);

            $wire.set('form.attributes', attributes);

            // Get summer note value
            $wire.set('form.long_description', $('#summernote2').summernote('code'));

            $wire.set('form.tags', tags);

            let attributeBoxes = document.querySelectorAll('[id^="attribute-box-"]');

            attributeBoxes.forEach(function(box) {
                let attributeId = box.id.split('-')[2];
                let attributeValue = document.getElementById('attribute-' + attributeId).value;

                if (attributeValue) {
                    // if attrribute with the same id exists replace it
                    let attributeIndex = attributes.findIndex(attribute => attribute.id == attributeId);

                    if (attributeIndex != -1) {
                        attributes[attributeIndex].value = attributeValue;
                        return;
                    }

                    attributes.push({
                        id: attributeId,
                        name: box.querySelector('label').innerText,
                        value: attributeValue
                    });
                }
            });

            $wire.set('form.attributes', attributes);

            $wire.call('save');
        });

        $('#summernote2').summernote({
            height: 300,
        });

        $('#select-tag').select2({
            placeholder: 'انتخاب برچسب ها',
            allowClear: true
        });

        $('#select-tag').on('change', function(e) {
            var data = $('#select-tag').select2("val");
            tags = data;
        });

        $('#select-tag').on('select2:unselect', function(e) {
            var data = $('#select-tag').select2("val");
            tags = data;
        });

        let showStockInputs = document.getElementById('showStockInputs');
        let stockInputs = document.getElementById('stockInputs');

        showStockInputs.addEventListener('click', function() {
            if (showStockInputs.checked) {
                stockInputs.classList.remove('hidden');
            } else {
                stockInputs.classList.add('hidden');
            }
        });

        // Initialize Resumable.js
        var r = new Resumable({
            headers: {
                'Accept': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
            },
            target: '/upload', // Replace with your upload endpoint
            chunkSize: 1 * 1024 * 1024, // 1MB chunk size
            simultaneousUploads: 4, // Number of simultaneous uploads
            testChunks: false, // Disable chunk testing
            throttleProgressCallbacks: 1, // Trigger progress event every 1 second
            maxFiles: 1, // Max number of files
        });

        // Add event listeners
        r.on('fileAdded', function(file) {
            // Handle when a file is added
            console.log('File added:', file);
        });

        r.on('fileProgress', function(file) {
            // Handle file upload progress
            var progress = Math.floor(file.progress() * 100);
            console.log('File progress:', progress + '%');
        });

        r.on('fileSuccess', function(file, message) {
            // Handle when a file is successfully uploaded
            console.log('File uploaded:', file);
            console.log('Server response:', message);
        });

        r.on('fileError', function(file, message) {
            // Handle when a file upload encounters an error
            console.error('File upload error:', message);
        });

        // Start uploading the file
        r.upload();
    </script>
@endscript
