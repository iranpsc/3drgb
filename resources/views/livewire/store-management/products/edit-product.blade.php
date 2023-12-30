<div>
    <x-page title="ویرایش محصول">

        @session('success')
            <x-alert type="success" message="{{ session('success') }}" />
        @endsession
        
        <div class="row">
            <div class="col-md-6">

                <x-form.select wire:model="form.category_id" name="form.category_id" label="دسته بندی">
                    <option value="">انتخاب دسته بندی</option>
                    @php 
                        $parentCategories = $categories->reject(function($category) {
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
    
                <x-form.text  wire:model="form.sku" name="form.sku" label="شناسه محصول" />
                <x-form.text  wire:model="form.name" name="form.name" label="نام" />
                <x-form.text  wire:model="form.slug" name="form.slug" label="نامک" />
                <x-form.text  wire:model="form.price" name="form.price" label="قیمت عادی" />
                <x-form.text  wire:model="form.sale_price" name="form.sale_price" label="قیمت فروش ویژه" />

                <x-form.select wire:model="form.stock_status" name="form.stock_status" label="وضعیت انبار">
                    <option value="1" selected>موجود</option>
                    <option value="0">ناموجود</option>
                </x-form.select>

            </div>
            
            <div class="col-md-6">

                <x-form.text  wire:model="form.quantity" name="form.quantity" label="تعداد موجود در انبار" />
                <x-form.text  wire:model="form.delivery_time" name="form.delivery_time" label="مدت زمان تحویل" />
                
                <x-form.select wire:model="form.customer_can_add_review" name="form.customer_can_add_review" label="مشتری می تواند دیدگاه بنویسد؟">
                    <option value="1" selected>بله</option>
                    <option value="0">خیر</option>
                </x-form.select>

                <x-form.select wire:model="form.published" name="form.published" label="محصول انتشار داده شود؟">
                    <option value="1" selected>بله</option>
                    <option value="0">خیر</option>
                </x-form.select>
                
                <x-form.file wire:model="form.images" name="form.images" label="تصاویر محصول" multiple />
                
                <x-form.file wire:model="form.file" name="form.file" label="فایل محصول" />

                <div class="row form-group">
                    <label for="tags" class="form-col-label col-sm-4">برچسب ها</label>
                    <div class="col-sm-8">
                        <div wire:ignore>
                            <select name="tags" id="select-tag" label="برچسب ها" multiple="multiple">
                                <option value="">انتخاب برچسب ها</option>
                                @foreach ($tags as $tag)
                                    <option value="{{ $tag->id }}" @selected(in_array($tag->id, $form->product->tags->pluck('id')->toArray()))>{{ $tag->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('form.tags') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>

            </div>
        </div>

        <hr>

        <h4 class="mb-5">ویژگی ها</h4>

        @foreach ($attributes->chunk(2) as $items)
            <div class="row">
                @foreach ($items as $item)
                    <div class="col-sm-6">
                        <div id="attribute-box-{{ $item->id }}" wire:key="{{ $item->id }}">
                            <div class="form-group row">
                                <label for="attribute-{{ $item->id }}" class="col-sm-4 form-col-label">{{ $item->name }}</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-lg" id="attribute-{{ $item->id }}"
                                    value="{{ $form->product->attributes->contains($item) 
                                    ? $form->product->attributes->where('id', $item->id)->first()->pivot->value 
                                    : '' }}">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach

        <hr>

        <div class="row">
            <div class="col-12">
                
                <div class="form-group">
                    <label for="short_desciption">توضیحات کوتاه</label>
                    <textarea wire:model="form.short_description" name="form.short_description" class="form-control @error('form.short_description') is-invalid @enderror" id="short_desciption" rows="3"></textarea>
                    @error('form.short_description') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="meta_desciption">توضیحات متا</label>
                    <textarea wire:model="form.meta_description" name="form.meta_description" class="form-control @error('form.meta_description') is-invalid @enderror" id="meta_desciption" rows="3"></textarea>
                    @error('form.meta_description') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="meta_keywords">کلمات کلیدی متا</label>
                    <textarea wire:model="form.meta_keywords" name="form.meta_keywords" class="form-control @error('form.meta_keywords') is-invalid @enderror" id="meta_keywords" rows="3"></textarea>
                    @error('form.meta_keywords') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>

        <div class="form-group" wire:ignore>
            <label for="summernote2">توضیحات کامل</label>
            <div id="summernote2"></div>
        </div>

        <x-button type="submit" id="update-btn">بروزرسانی</x-button>

    </x-page>

</div>

@script
    <script>
        let updateBtn = document.getElementById('update-btn');
        let tags;
        let attributes = [];

        $('#summernote2').summernote('code', $wire.form.long_description);

        $('#select-tag').select2({
            placeholder: 'انتخاب برچسب ها',
            allowClear: true
        });

        $('#select-tag').on('change', function (e) {
            var data = $('#select-tag').select2("val");
            tags = data;
        });

        $('#select-tag').on('select2:unselect', function (e) {
            var data = $('#select-tag').select2("val");
            tags = data;
        });

        updateBtn.addEventListener('click', function() {

            updateBtn.classList.add('disabled');
            updateBtn.innerText = 'در حال ذخیره سازی ...';

            setTimeout(function() {
                updateBtn.classList.remove('disabled');
                updateBtn.innerText = 'ذخیره';
            }, 3000);

            // Get summer note value
            $wire.set('form.long_description', $('#summernote2').summernote('code'));

            // if tags is empty get tags from #select-tag
            if(!tags) {
                tags = $('#select-tag').select2("val");
            }
            
            $wire.set('form.tags', tags);

            let attributeBoxes = document.querySelectorAll('[id^="attribute-box-"]');

            attributeBoxes.forEach(function(box) {
                let attributeId = box.id.split('-')[2];
                let attributeValue = document.getElementById('attribute-' + attributeId).value;

                if(attributeValue) 
                {
                    // if attrribute with the same id exists replace it
                    let attributeIndex = attributes.findIndex(attribute => attribute.id == attributeId);

                    if(attributeIndex != -1) {
                        attributes[attributeIndex].value = attributeValue;
                        return;
                    }

                    attributes.push({
                        id: attributeId,
                        name: box.querySelector('label').innerText,
                        value: attributeValue,
                    });
                }
            });

            $wire.set('form.attributes', attributes);

            $wire.call('update');
        });

    </script>
@endscript