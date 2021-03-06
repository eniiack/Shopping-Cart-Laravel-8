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
                    <div class="users-list-filter px-1">
                        <form>
                            <div class="row border rounded py-2 mb-2">
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <label for="users-list-verified">تایید شده</label>
                                    <fieldset class="form-group">
                                        <select class="form-control" id="users-list-verified">
                                            <option value="">همه</option>
                                            <option value="بله">بله</option>
                                            <option value="خیر">خیر</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <label for="users-list-role">نقش</label>
                                    <fieldset class="form-group">
                                        <select class="form-control" id="users-list-role">
                                            <option value="">همه</option>
                                            <option value="کاربر">کاربر</option>
                                            <option value="کارمند">کارمند</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <label for="users-list-status">وضعیت</label>
                                    <fieldset class="form-group">
                                        <select class="form-control" id="users-list-status">
                                            <option value="">همه</option>
                                            <option value="فعال">فعال</option>
                                            <option value="بسته شده">بسته شده</option>
                                            <option value="مسدود شده">مسدود شده</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3 d-flex align-items-center">
                                    <button type="reset"
                                        class="btn btn-primary btn-block glow users-list-clear mb-0 mt-75">پاکسازی</button>
                                </div>
                            </div>
                        </form>
                    </div>
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
                                                    <th class="text-center">ایمیل</th>
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
                                                @foreach ($users as $user)
                                                    <tr>
                                                        <td class="text-center">{{ $user->name }}</td>
                                                        <td class="text-center">{{ $user->email }}</td>
                                                        <td class="text-center d-flex justify-content-center align-items-center"><a
                                                                href="{{ route('admin.users.edit', ['user' => $user->id]) }}"><i
                                                                    class="bx bx-edit-alt"></i></a>
                                                            <form method="POST"
                                                                action="{{ route('admin.users.destroy', ['user' => $user->id]) }}">
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
