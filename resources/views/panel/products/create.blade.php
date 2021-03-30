@section('head', 'ایجاد محصول')

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
                                    <h4 class="card-title">ایجاد محصول</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div id="attributes"
                                            data-attributes="{{ json_encode(\App\Models\Attribute::all()->pluck('name')) }}">
                                        </div>
                                        <form class="form form-vertical" method="post" enctype="multipart/form-data"
                                            action="{{ route('admin.products.store') }}">
                                            @csrf
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical">عنوان محصول</label>
                                                            <input id="title" type="text" name="title" id="first-name-vertical"
                                                                class="form-control namak" placeholder="عنوان محصول">
                                                            @error('title')
                                                                <span class="alert m-t4 text-danger">*{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical">توضیح محصول</label>
                                                            <textarea class="form-control" name="description" id="des"
                                                                cols="30" rows="10"></textarea>
                                                            @error('description')
                                                                <span class="alert m-t4 text-danger">*{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical">تصویر شاخص</label>
                                                            {{-- <input dir="ltr"  type="file" name="image" id="first-name-vertical"
                                                                class="form-control"  placeholder="تصویر شاخص"> --}}

                                                            <div class="input-group">
                                                                <input type="text" placeholder="تصویر شاخص" id="image_label"
                                                                    class="form-control" name="image" aria-label="Image"
                                                                    aria-describedby="button-image">
                                                                <div class="input-group-append">
                                                                    <button class="btn btn-outline-secondary" type="button"
                                                                        id="button-image">انتخاب</button>
                                                                </div>
                                                            </div>



                                                            @error('image')
                                                                <span class="alert m-t4 text-danger">*{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical">قیمت</label>
                                                            <input dir="ltr" type="text" name="price"
                                                                id="first-name-vertical" class="form-control"
                                                                placeholder="قیمت">
                                                            @error('price')
                                                                <span class="alert m-t4 text-danger">*{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical">موجودی انبار</label>
                                                            <input dir="ltr" type="text" name="inventory"
                                                                id="first-name-vertical" class="form-control"
                                                                placeholder="موجودی انبار">
                                                            @error('inventory')
                                                                <span class="alert m-t4 text-danger">*{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="label">دسته بندی ها</label>
                                                            <select class="form-control" multiple name="categories[]" id="">
                                                                @foreach (\App\Models\Category::all() as $category)
                                                                    <option value="{{ $category->id }}">
                                                                        {{ $category->name }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('permissions')
                                                                <div class="alert m-t4 text-danger">*{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div id="attribute_section">

                                                        </div>
                                                        <button class="btn btn-sm btn-danger" type="button"
                                                            id="add_product_attribute">ویژگی جدید</button>

                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                                <h3 class="panel-title">گالری تصاویر</h3>
                                                            </div>
                                                        <div class="panel-body" id="uploaded_image">
                                            
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
            .create( document.querySelector( '#des' ),{
        language: 'fa',

        cloudServices: {
            tokenUrl: 'https://79468.cke-cs.com/token/dev/ca95a3451e8e8f0092b5ad3d6816afd187b903e9325f042eaff8bced2b2a',
            uploadUrl: 'https://79468.cke-cs.com/easyimage/upload/'
        }
            } )
            .catch( error => {
                console.error( error );
            } );
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
        $('.attribute-select').select2({
            tags: true
        });

    </script>
