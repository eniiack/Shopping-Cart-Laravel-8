@section('head', 'مقام ها')

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
                                                    <th class="text-center">نام مقام</th>
                                                    <th class="text-center">توضیح مقام</th>
                                                    <th class="text-center">ویرایش</th>
                                                    <th class="d-none"></th>
                                                    <th class="d-none"></th>
                                                    <th class="d-none"></th>
                                                    <th class="d-none"></th>
                                                    <th class="d-none"></th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- <div class="col-lg-9 col-md-9 col-xs-12 pull-right">
                                                    <div class="search-header">
                                                        <form action="#">
                                                            <input type="text" name="search" class="search-input" placeholder="نام کالا، برند و یا دسته مورد نظر خود را جستجو کنید…">
                                                            <button type="submit" class="button-search">
                                                                <img src="/images/search.png">
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div> --}}
                                                @foreach ($roles as $role)
                                                    <tr>
                                                        <td class="text-center">{{ $role->name }}</td>
                                                        <td class="text-center">{{ $role->Label }}</td>
                                                        <td class="text-center d-flex justify-content-center align-items-center"><a
                                                                href="{{ route('admin.roles.edit',  $role->id) }}"><i
                                                                    class="bx bx-edit-alt"></i></a>
                                                            <form method="POST"
                                                                action="{{ route('admin.roles.destroy', $role->id) }}">
                                                                @csrf
                                                                @method('DELETE')
                                                                <a style="padding: 0;" class="delete delete-product  ">
                                                                    <button type="submit" class="bx bxs-trash wrap-delete"></button type="submit">
                                                                </a>
                                                            </form>
                                                        </td>
                                                        <td class="d-none"></td>
                                                        <td class="d-none"></td>
                                                        <td class="d-none"></td>
                                                        <td class="d-none"></td>
                                                        <td class="d-none"></td>
                                                        <td class="d-none"></td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                         
                                            {{-- <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled" id="users-list-datatable_previous">
                                                    <a href="#" aria-controls="users-list-datatable" data-dt-idx="0" tabindex="0" class="page-link">قبلی</a>
                                                </li>
                                                <li class="paginate_button page-item active">
                                                    <a href="#" aria-controls="users-list-datatable" data-dt-idx="1" tabindex="0" class="page-link">{{ $users->render() }}</a>
                                                </li>
                                                <li class="paginate_button page-item next disabled" id="users-list-datatable_next">
                                                    <a href="#" aria-controls="users-list-datatable" data-dt-idx="2" tabindex="0" class="page-link">بعدی</a>
                                                </li>
                                            </ul> --}}
                                        </table>
                                    </div>
                                    
                                    <!-- datatable ends -->
                                </div>
                            </div>
                        </div>
                        {{-- <div class="card-footer">
                            {{ $users->render() }}
                           </div> --}}
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- END: Content-->


    @include('panel.layouts.footer')
