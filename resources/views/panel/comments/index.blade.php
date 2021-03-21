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
                                    <div class="card-tools d-flex">
                                        <div class="col-lg-9 col-md-9 col-xs-12 pull-right">
                                            <div class="search-header">
                                                <form action="">
                                                    <div class="input-group input-group-sm" style="width: 150px;">
                                                        <input type="text" name="search" class="form-control float-right" placeholder="جستجو" value="{{ request('search') }}">
                        
                                                        <div class="input-group-append">
                                                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="btn-group-sm mr-1">

                                        </div>
                                    </div>
                                    <!-- datatable start -->
                                    <div class="table-responsive">
                                        <table id="users-list-datatable" class="table">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">نام کاربری</th>
                                                    <th class="text-center">عنوان محصول</th>
                                                    <th class="text-center">ویرایش</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($comments as $comment)
                                                    <tr>
                                                        <td class="text-center">{{ $comment->user->name }}</td>
                                                        <td class="text-center">{{ $comment->comment }}</td>
                                                        <td class="text-center">
                                                            <form method="POST"
                                                                action="{{ route('admin.comments.destroy', ['comment' => $comment->id]) }}">
                                                                @csrf
                                                                @method('DELETE')
                                                                <a style="padding: 0;" class="delete delete-product  ">
                                                                    <button type="submit"
                                                                        class="bx bxs-trash wrap-delete"></button
                                                                        type="submit">
                                                                </a>
                                                            </form>
                                                            <form action="{{ route('admin.comments.update' , $comment->id) }}" method="POST">
                                                                @csrf
                                                                @method('PATCH')
                                                                <button type="submit" class="btn btn-sm btn-success ml-1">تایید</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- datatable ends -->
                                </div>
                            </div>
                            <div class="card-footer">
                                {{ $comments->appends(['search' => request('search')])->render() }}
                            </div>
                        </div>

                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- END: Content-->


    @include('panel.layouts.footer')
