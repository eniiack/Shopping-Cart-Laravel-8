@section('head', 'ایجاد دسترسی')

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
                                    <h4 class="card-title">ایجاد دسترسی</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-vertical" method="post"
                                            action="{{ route('admin.users.permissions.store' , $user->id) }}">
                                            @csrf
                                            <div class="form-body">
                                                <div class="row">
                                                 

                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="label">مقام ها</label>
                                                            <select class="select2 form-control" multiple name="roles[]" id="">
                                                                @foreach(\App\Models\Role::all() as $role)
                                                                    <option value="{{ $role->id }}"  {{in_array($role->id , $user->roles->pluck('id')->toArray()  ) ? "selected" : "" }} >{{ $role->name }} - {{ $role->Label }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('roles')
                                                                <div class="alert m-t4 text-danger">*{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="label">دسترسی ها</label>
                                                            <select class="select2 form-control" multiple name="permissions[]" id="">
                                                                @foreach(\App\Models\Permission::all() as $permission)
                                                                    <option value="{{ $permission->id }}"  {{in_array($permission->id , $user->permissions->pluck('id')->toArray()  ) ? "selected" : "" }} >{{ $permission->name }} - {{ $permission->Label }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('permissions')
                                                                <div class="alert m-t4 text-danger">*{{ $message }}</div>
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
