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
                                        <div id="attributes" data-attributes="{{ json_encode(\App\Models\Attribute::all()->pluck('name')) }}"></div>
                                        <form class="form form-vertical" method="post"
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
                                                                <span class="alert m-t4 text-danger">*{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="label">دسترسی ها</label>
                                                            <select class="form-control" multiple name="categories[]" id="">
                                                                @foreach (\App\Models\Category::all() as $category)
                                                                    <option value="{{ $category->id }}"
                                                                        {{ in_array($category->id, $product->categories->pluck('id')->toArray()) ? 'selected' : '' }}>
                                                                        {{ $category->name }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('categories')
                                                                <div class="alert m-t4 text-danger">*{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div id="attribute_section">
                                                            @foreach($product->attributes as $attribute)
                                                                <div class="row" id="attribute-{{ $loop->index }}">
                                                                    <div class="col-5">
                                                                        <div class="form-group">
                                                                            <label>عنوان ویژگی</label>
                                                                            <select name="attributes[{{ $loop->index }}][name]" onchange="changeAttributeValues(event, {{ $loop->index }});" class="attribute-select form-control">
                                                                                <option value="">انتخاب کنید</option>
                                                                                @foreach(\App\Models\Attribute::all() as $attr)
                                                                                    <option value="{{ $attr->name }}" {{ $attr->name ==  $attribute->name ? 'selected' : '' }}>{{ $attr->name }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-5">
                                                                        <div class="form-group">
                                                                            <label>مقدار ویژگی</label>
                                                                            <select name="attributes[{{ $loop->index }}][value]" class="attribute-select form-control">
                                                                                <option value="">انتخاب کنید</option>
                                                                                @foreach($attribute->values as $value)
                                                                                    <option value="{{ $value->value }}" {{ $value->id  === $attribute->pivot->value_id ? 'selected' : '' }}>{{ $value->value }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-2">
                                                                        <label >اقدامات</label>
                                                                        <div>
                                                                            <button type="button" class="btn btn-sm btn-warning" onclick="document.getElementById('attribute-{{ $loop->index }}').remove()">حذف</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                        <button class="btn btn-sm btn-danger" type="button"
                                                            id="add_product_attribute">ویژگی جدید</button>

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
    @yield('jsform')
