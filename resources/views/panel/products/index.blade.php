@section('head', 'پنل مدیریت')

    @include('panel.layouts.header')
    @include('panel.layouts.menu')

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="users-list-wrapper">
                    <div class="users-list-table">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <!-- datatable start -->
                                    <div class="table-responsive">
                                        <table id="users-list-datatable" class="table">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">نام کاربری</th>
                                                    <th class="text-center">عنوان محصول</th>
                                                    <th class="text-center">قیمت</th>
                                                    @can('edit-product') 
                                                    <th class="text-center">ویرایش</th>
                                                    @endcan
                                                    <th class="d-none"></th>
                                                    <th class="d-none"></th>
                                                    <th class="d-none"></th>
                                                    <th class="d-none"></th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($products as $product)
                                                    <tr>
                                                        @php
                                                        $user = App\Models\User::find($product->user_id);    
                                                        @endphp
                                                        <td class="text-center">{{ $user->name }}</td>
                                                        <td class="text-center">{{ $product->title }}</td>
                                                        <td class="text-center">{{ $product->price }}</td>
                                                        @can('edit-product') 
                                                        <td
                                                            class="text-center d-flex   justify-content-center ">
                                                                <a
                                                                    href="{{ route('admin.products.edit', ['product' => $product->id]) }}"><i
                                                                        class="bx bx-edit-alt"></i></a>
                                                                <form method="POST"
                                                                    action="{{ route('admin.products.destroy', ['product' => $product->id]) }}">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <a style="padding: 0;" class="delete delete-product  ">
                                                                        <button type="submit"
                                                                            class="bx bxs-trash wrap-delete"></button
                                                                            type="submit">
                                                                    </a>
                                                                </form>
                                                        </td>
                                                        @endcan
                                                        {{-- @endif --}}
                                                        
                                                        <td class="d-none"></td>
                                                        <td class="d-none"></td>
                                                        <td class="d-none"></td>
                                                        <td class="d-none"></td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- datatable ends -->
                                </div>
                            </div>
                        </div>
                        {{-- <div class="card-footer">
                              {{ $products->appends([ 'search' => request('search') ])->render() }}
                           </div> --}}
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- END: Content-->


    @include('panel.layouts.footer')
    <script>
        $('#categories').select2({
            'placeholder' : 'دسترسی مورد نظر را انتخاب کنید'
        })


        let changeAttributeValues = (event , id) => {
            let valueBox = $(`select[name='attributes[${id}][value]']`);


            //
            $.ajaxSetup({
                headers : {
                    'X-CSRF-TOKEN' : document.head.querySelector('meta[name="csrf-token"]').content,
                    'Content-Type' : 'application/json'
                }
            })
            //
            $.ajax({
                type : 'POST',
                url : '/admin/attribute/values',
                data : JSON.stringify({
                    name : event.target.value
                }),
                success : function(res) {
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

        let createNewAttr = ({ attributes , id }) => {

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

            $('.attribute-select').select2({ tags : true });
        });
        $('.attribute-select').select2({ tags : true });

    </script>