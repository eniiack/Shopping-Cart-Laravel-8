@section('head', 'تخفیف ها')

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
                                                    <th class="text-center">آی دی تخفیف</th>
                                                    <th class="text-center">کد تخفیف</th>
                                                    <th class="text-center">میزان تخفیف (درصد)</th>
                                                    <th class="text-center">مربوط به کاربر</th>
                                                    <th class="text-center">مربوط به محصول</th>
                                                    <th class="text-center">مربوط به دسته</th>
                                                    <th class="text-center">مهلت استفاده</th>
                                                    <th class="text-center">اقدامات</th>
                                                    <th class="d-none"></th>
                                                    <th class="d-none"></th>
                                                    <th class="d-none"></th>
                                                    <th class="d-none"></th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($discounts as $discount)
                                                    <tr>
                                                        <td>{{ $discount->id }}</td>
                                                        <td>{{ $discount->code }}</td>
                                                        <td>{{ $discount->percent }}</td>
                                                        <td>{{ $discount->users->count() ? $discount->users->pluck('name')->join(', ') : 'همه کاربران' }}
                                                        </td>
                                                        <td>{{ $discount->products->count() ? $discount->products->pluck('title')->join(', ') : 'همه محصولات' }}
                                                        </td>
                                                        <td>{{ $discount->categories->count() ? $discount->categories->pluck('name')->join(', ') : 'همه دسته‌ها' }}
                                                        </td>
                                                        <td>{{ jdate($discount->expired_at)->ago() }}</td>
                                                        <td class="d-flex">
                                                            {{-- // permissions --}}
                                                            <form
                                                                action="{{ route('admin.discount.destroy', $discount->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="btn btn-sm btn-danger ml-1">حذف</button>
                                                            </form>
                                                            <a href="{{ route('admin.discount.edit', $discount->id) }}"
                                                                class="btn btn-sm btn-primary ml-1">ویرایش</a>
                                                        </td>
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
