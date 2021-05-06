@section('head', 'ویرایش کد تخفیف')

    @include('panel.layouts.header')
    @include('panel.layouts.menu')



    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">

                <section id="basic-horizontal-layouts">
                    <div class="row match-height">
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">ویرایش کد تخفیف</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div id="attributes"
                                            data-attributes="{{ json_encode(\App\Models\Attribute::all()->pluck('name')) }}">
                                        </div>
                                        <form class="form form-vertical" method="post" enctype="multipart/form-data"
                                            action="{{ route('admin.discount.update', ['discount' => $discount->id])}}">
                                            @csrf
                                            @method('PATCH')
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="inputEmail3" class="col-sm-2 control-label">کد
                                                                تخفیف</label>
                                                            <input type="text" name="code" class="form-control"
                                                                id="inputEmail3" placeholder="کد تخفیف را وارد کنید"
                                                                value="{{ old('code' , $discount->percent) }}">
                                                            @error('code')
                                                                <span class="alert m-t4 text-danger">*{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="precent" class="col-sm-2 control-label">میزان تخفیف
                                                                (درصد)</label>
                                                            <input type="number" name="percent" class="form-control"
                                                                placeholder="درصد تخفیف را وارد کنید"
                                                                value="{{ old('percent' , $discount->percent) }}">
                                                            @error('percent')
                                                                <span class="alert m-t4 text-danger">*{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label">کاربر مربوط به تخفیف
                                                                (اختیاری)</label>
                                                            <select class="form-control" name="users[]" id="users" multiple>
                                                                <option value="null">همه کاربرها</option>
                                                                @foreach (\App\Models\User::all() as $user)
                                                                <option value="{{ $user->id }}" {{ in_array($user->id , $discount->users->pluck('id')->toArray() ) ? 'selected' : '' }}>{{ $user->name }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('users[]')
                                                                <span
                                                                    class="alert m-t4 text-danger">*{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="inputPassword3" class="col-sm-2 control-label">محصول
                                                                مربوطه (اختیاری)</label>
                                                            <select class="form-control" name="products[]" id="products"
                                                                multiple>
                                                                <option value="null">همه محصول</option>
                                                                @foreach (\App\Models\Product::all() as $product)
                                                                <option value="{{ $product->id }}" {{ in_array($product->id , $discount->products->pluck('id')->toArray() ) ? 'selected' : '' }}>{{ $product->title }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('products[]')
                                                                <span
                                                                    class="alert m-t4 text-danger">*{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="inputPassword3" class="col-sm-2 control-label">دسته‌بندی مربوطه (اختیاری)</label>
                                                            <select class="form-control" name="categories[]" id="categories" multiple>
                                                                <option value="null">همه دسته‌ها</option>
                                                                @foreach(\App\Models\Category::all() as $category)
                                                                <option value="{{ $category->id }}" {{ in_array($category->id , $discount->categories->pluck('id')->toArray() ) ? 'selected' : '' }}>{{ $category->name }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('categories[]')
                                                                <span
                                                                    class="alert m-t4 text-danger">*{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="inputEmail3" class="col-sm-2 control-label">مهلت استفاده</label>
                            <input type="datetime-local" name="expired_at" class="form-control" id="inputEmail3" placeholder="ملهت استفاده را وارد کنید" value="{{ old('expired_at' , \Carbon\Carbon::parse($discount->expired_at)->format('Y-m-d\TH:i:s')) }}">
                                                            @error('expired_at[]')
                                                                <span
                                                                    class="alert m-t4 text-danger">*{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    
                                                   


                                                    <div class="col-12 d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-primary mr-1 mb-1">ثبت</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    @include('panel.layouts.footer')
    {{-- <script src="/js/ckeditor-4/ckeditor.js"></script> --}}
    <script src="/js/ckeditor5-build-classic/ckeditor.js"></script>
    <script src="/js/ckeditor5-build-classic/translations/fa.js"></script>
    <script>
        // CKEDITOR.replace('des');
        ClassicEditor
            .create(document.querySelector('#des'), {
                language: 'fa',

                cloudServices: {
                    tokenUrl: 'https://79468.cke-cs.com/token/dev/ca95a3451e8e8f0092b5ad3d6816afd187b903e9325f042eaff8bced2b2a',
                    uploadUrl: 'https://79468.cke-cs.com/easyimage/upload/'
                }
            })
            .catch(error => {
                console.error(error);
            });
        document.addEventListener("DOMContentLoaded", function() {

            document.getElementById('button-image').addEventListener('click', (event) => {
                event.preventDefault();

                window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
            });
        });

        // set file link
        function fmSetLink($url) {
            document.getElementById('image_label').value = $url;
        }
        $('#categories').select2({
            'placeholder': 'دسترسی مورد نظر را انتخاب کنید'
        })


        let changeAttributeValues = (event, id) => {
            let valueBox = $(`select[name='attributes[${id}][value]']`);


            //
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
                    'Content-Type': 'application/json'
                }
            })
            //
            $.ajax({
                type: 'POST',
                url: '/admin/attribute/values',
                data: JSON.stringify({
                    name: event.target.value
                }),
                success: function(res) {
                    valueBox.html(`
                                    <option value="" selected>انتخاب کنید</option>
                                    ${
                                        res.data.map(function (item) {
                                            return `<option value="${item}">${item}</option>`
                                        })
                                    }
                                `);
                }
            });
        }

        let createNewAttr = ({
            attributes,
            id
        }) => {

            return `
                            <div class="row" id="attribute-${id}">
                                <div class="col-5">
                                    <div class="form-group">
                                         <label>عنوان ویژگی</label>
                                         <select name="attributes[${id}][name]" onchange="changeAttributeValues(event, ${id});" class="attribute-select form-control">
                                            <option value="">انتخاب کنید</option>
                                            ${
                                                attributes.map(function(item) {
                                                    return `<option value="${item}">${item}</option>`
                                                })
                                            }
                                         </select>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="form-group">
                                         <label>مقدار ویژگی</label>
                                         <select name="attributes[${id}][value]" class="attribute-select form-control">
                                                <option value="">انتخاب کنید</option>
                                         </select>
                                    </div>
                                </div>
                                 <div class="col-2">
                                    <label >اقدامات</label>
                                    <div>
                                        <button type="button" class="btn btn-sm btn-warning" onclick="document.getElementById('attribute-${id}').remove()">حذف</button>
                                    </div>
                                </div>
                            </div>
                        `
        }

        $('#add_product_attribute').click(function() {
            let attributesSection = $('#attribute_section');
            let id = attributesSection.children().length;

            let attributes = $('#attributes').data('attributes');

            attributesSection.append(
                createNewAttr({
                    attributes,
                    id
                })
            );

            $('.attribute-select').select2({
                tags: true
            });
        });
        $('#users').select2({
            tags: true
        });
        $('#products').select2({
            tags: true
        });
        $('#categories').select2({
            tags: true
        });

    </script>
