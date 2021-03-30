@section('head', 'ویرایش محصول')

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
                                    <h4 class="card-title">ویرایش محصول</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div id="attributes"
                                            data-attributes="{{ json_encode(\App\Models\Attribute::all()->pluck('name')) }}">
                                        </div>
                                        <form class="form form-vertical" enctype="multipart/form-data" method="post"
                                            action="{{ route('admin.products.update', ['product' => $product->id]) }}">
                                            @csrf
                                            @method('PATCH')
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical">عنوان محصول</label>
                                                            <input value="{{ $product->title }}" type="text" name="title"
                                                                id="first-name-vertical" class="form-control"
                                                                placeholder="عنوان محصول">
                                                            @error('title')
                                                                <span class="alert m-t4 text-danger">*{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical">توضیح محصول</label>
                                                            <textarea class="form-control" name="description" id="des"
                                                                cols="30" rows="10">{{ $product->description }}</textarea>
                                                            @error('des')
                                                                <span class="alert m-t4 text-danger">*{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 d-flex justify-content-between">
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <input type="text" placeholder="تصویر شاخص"
                                                                            id="image_label" value="{{ $product->image }}" class="form-control"
                                                                            name="image" aria-label="Image"
                                                                            aria-describedby="button-image">
                                                                        <div class="input-group-append">
                                                                            <button class="btn btn-outline-secondary"
                                                                                type="button"
                                                                                id="button-image">انتخاب</button>
                                                                        </div>
                                                                    </div>
                                                                    @error('image')
                                                                        <span
                                                                            class="alert m-t4 text-danger">*{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="first-name-vertical">تصویر شاخص</label>
                                                                    <img class="w-25" src="{{ $product->image }}" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical">قیمت</label>
                                                            <input dir="ltr" value="{{ $product->price }}" type="text"
                                                                name="price" id="first-name-vertical" class="form-control"
                                                                placeholder="قیمت">
                                                            @error('price')
                                                                <span class="alert m-t4 text-danger">*{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical">موجودی انبار</label>
                                                            <input dir="ltr" value="{{ $product->view_count }}"
                                                                type="text" name="count" id="first-name-vertical"
                                                                class="form-control" placeholder="موجودی انبار">
                                                            @error('count')
                                                                <span
                                                                    class="alert m-t4 text-danger">*{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="label">دسته بندی ها</label>
                                                            <select class="form-control" multiple name="categories[]" id="">
                                                            @include('panel.products.categories' , ['categories' => \App\Models\Category::all()])
                                                            </select>
                                                            @error('categories')
                                                                <div class="alert m-t4 text-danger">*{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div id="attribute_section">
                                                            @foreach ($product->attributes as $attribute)
                                                                <div class="row" id="attribute-{{ $loop->index }}">
                                                                    <div class="col-5">
                                                                        <div class="form-group">
                                                                            <label>عنوان ویژگی</label>
                                                                            <select
                                                                                name="attributes[{{ $loop->index }}][name]"
                                                                                onchange="changeAttributeValues(event, {{ $loop->index }});"
                                                                                class="attribute-select form-control">
                                                                                <option value="">انتخاب کنید</option>
                                                                                @foreach (\App\Models\Attribute::all() as $attr)
                                                                                    <option value="{{ $attr->name }}"
                                                                                        {{ $attr->name == $attribute->name ? 'selected' : '' }}>
                                                                                        {{ $attr->name }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-5">
                                                                        <div class="form-group">
                                                                            <label>مقدار ویژگی</label>
                                                                            <select
                                                                                name="attributes[{{ $loop->index }}][value]"
                                                                                class="attribute-select form-control">
                                                                                <option value="">انتخاب کنید</option>
                                                                                @foreach ($attribute->values as $value)
                                                                                    <option value="{{ $value->value }}"
                                                                                        {{ $value->id === $attribute->pivot->value_id ? 'selected' : '' }}>
                                                                                        {{ $value->value }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-2">
                                                                        <label>اقدامات</label>
                                                                        <div>
                                                                            <button type="button"
                                                                                class="btn btn-sm btn-warning"
                                                                                onclick="document.getElementById('attribute-{{ $loop->index }}').remove()">حذف</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                        <button class="btn btn-sm btn-danger" type="button"
                                                            id="add_product_attribute">ویژگی جدید</button>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h3 class="panel-title">گالری تصاویر</h3>
                                                            </div>
                                                            <div class="panel-body d-flex flex-wrap" id="uploaded_image">

                                                                @foreach ($product->galleries()->get() as $gallery)
                                                                    <div class="col-md-2" style="margin-bottom:16px;"
                                                                        align="center">
                                                                        <img src="{{ $gallery->image }}"
                                                                            class="img-thumbnail" width="175" height="175"
                                                                            style="height:175px;" />
                                                                        <button type="button"
                                                                            class="btn btn-link remove_image"
                                                                            id="{{ $gallery->image }}">Remove</button>
                                                                    </div>
                                                                @endforeach
                                                            </div>

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
    <script>
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

    <script type="text/javascript">
        $("body").on('change', '.file_input', function() {
            var value = $(this).val().replace(/^.*\\/, "");
            $("#idProduct").attr('value', value);
        });
        Dropzone.options.dropzoneForm = {
            autoProcessQueue: false,
            acceptedFiles: ".png,.jpg,.gif,.bmp,.jpeg",

            init: function() {
                var submitButton = document.querySelector("#submit-all");
                myDropzone = this;
                this.on("sending", function(file, xhr, formData) {
                        formData.append("product_id", document.getElementById('idProduct').value);
                    }),
                    submitButton.addEventListener('click', function() {
                        myDropzone.processQueue();
                    });

                this.on("complete", function(file, xhr) {
                    // alert(file.xhr.response);
                    if (this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0) {
                        var _this = this;
                        _this.removeAllFiles();
                    }
                    // load_images();
                });

            }

        };

        // load_images();

        // function load_images() {
        //     $.ajax({
        //         this.on("sending", function(file, xhr, formData) {
        //                 formData.append("product_id", document.getElementById('idProduct').value);
        //             }),
        //         url: "{{ route('admin.dropzone.fetch') }}",
        //         success: function(data) {
        //             $('#uploaded_image').html(data);
        //         }
        //     })
        // }

        $(document).on('click', '.remove_image', function() {
            var name = $(this).attr('id');
            $(this).parent().hide();
            $.ajax({
                url: "{{ route('admin.dropzone.delete') }}",
                data: {
                    name: name
                },
                success: function(file,xhr) {
                     alert(file.xhr.response);
                    // load_images();
                }
            });
           
        });

    </script>
