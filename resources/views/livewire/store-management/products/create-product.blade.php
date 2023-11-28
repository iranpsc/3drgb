<div>
    <x-page title="ایجاد محصول">
        <div class="row">
            <div class="col-md-6">
                @if (session()->has('message'))
                    <x-alert type="success" message="{{ session('message') }}" />
                @endif
        
                <x-forms.select-input wire:model="form.category_id" name="form.category_id" label="دسته بندی">
                    <option value="">انتخاب دسته بندی</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </x-forms.select-input>
    
                <x-forms.text-input  wire:model="form.sku" name="form.sku" label="شناسه محصول" />
                <x-forms.text-input  wire:model="form.name" name="form.name" label="نام" />
                <x-forms.text-input  wire:model="form.slug" name="form.slug" label="نامک" />
                <x-forms.text-input  wire:model="form.price" name="form.price" label="قیمت عادی" />
                <x-forms.text-input  wire:model="form.sale_price" name="form.sale_price" label="قیمت فروش ویژه" />

                <x-forms.select-input wire:model="form.stock_status" name="form.stock_status" label="وضعیت انبار">
                    <option value="1" selected>موجود</option>
                    <option value="0">ناموجود</option>
                </x-forms.select-input>

                <x-forms.text-input  wire:model="form.quantity" name="form.quantity" label="تعداد موجود در انبار" />
                <x-forms.text-input  wire:model="form.delivery_time" name="form.delivery_time" label="مدت زمان تحویل" />

                <div class="form-group">
                    <label for="short_desciption">توضیحات</label>
                    <textarea wire:model="form.short_description" name="form.short_description" class="form-control @error('form.short_description') is-invalid @enderror" id="short_desciption" rows="3"></textarea>
                    @error('form.short_description') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-md-6">
                <x-forms.select-input wire:model="form.customer_can_add_review" name="form.customer_can_add_review" label="مشتری می تواند دیدگاه بنویسد؟">
                    <option value="1" selected>بله</option>
                    <option value="0">خیر</option>
                </x-forms.select-input>

                <x-forms.select-input wire:model="form.published" name="form.published" label="محصول انتشار داده شود؟">
                    <option value="1" selected>بله</option>
                    <option value="0">خیر</option>
                </x-forms.select-input>
                
                <x-forms.file-input wire:model="form.images" name="form.images" label="تصاویر محصول" multiple />
                <x-forms.file-input wire:model="form.file" name="form.file" label="فایل محصول" />

                <div class="row form-group" wire:ignore>
                    <label for="tags" class="form-col-label col-sm-4">برچسب ها</label>
                    <div class="col-sm-8">
                        <select name="tags" id="select-tag" label="برچسب ها" multiple="multiple">
                            <option value="">انتخاب برچسب ها</option>
                            @foreach ($tags as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                @foreach ($attributes as $attribute)
                    <div id="attribute-box-{{ $attribute->id }}" wire:key="{{ $attribute->id }}">
                        <div class="form-group row">
                            <label for="attribute-{{ $attribute->id }}" class="col-sm-4 form-col-label">{{ $attribute->name }}</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-lg" id="attribute-{{ $attribute->id }}">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="form-group" wire:ignore>
            <label for="summernote2">توضیحات کامل</label>
            <div id="summernote2"></div>
        </div>

        <x-button type="submit" id="save-btn">ذخیره</x-button>

    </x-page>

    @push('scripts')
        <script>
            $(document).ready(function() {
                let saveBtn = document.getElementById('save-btn');
                let tags;
                let attributes = [];

                saveBtn.addEventListener('click', function() {
                    saveBtn.classList.add('disabled');
                    saveBtn.innerText = 'در حال ذخیره سازی ...';

                    setTimeout(function() {
                        saveBtn.classList.remove('disabled');
                        saveBtn.innerText = 'ذخیره';
                    }, 3000);

                    @this.set('form.attributes', attributes);

                    // Get summer note value
                    @this.set('form.long_description', $('#summernote2').summernote('code'));

                    @this.set('form.tags', tags);

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
                                value: attributeValue
                            });
                        }
                    });

                    @this.set('form.attributes', attributes);

                    @this.call('save');
                });
                
                $('#summernote2').summernote({
                    height: 300,
                });

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

            });

        </script>
    @endpush
</div>
