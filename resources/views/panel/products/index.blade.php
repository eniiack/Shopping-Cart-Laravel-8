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
