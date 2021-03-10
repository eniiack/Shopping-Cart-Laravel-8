@section('head', 'ویرایش مقام')

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
                                    <h4 class="card-title">ویرایش مقام</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-vertical" method="post"
                                            action="{{ route('admin.roles.update', $role->id) }}">
                                            @csrf
                                            @method('PATCH')
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical">عنوان مقام</label>
                                                            <input type="text" name="name" id="first-name-vertical"
                                                                class="form-control" value="{{ $role->name  }}" placeholder="عنوان مقام">
                                                            @error('name')
                                                                <span class="alert m-t4 text-danger">*{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="label">توضیح مقام</label>
                                                            <input type="text" id="label" class="form-control"
                                                                name="label" value="{{  $role->Label }}" placeholder="توضیح مقام">
                                                            @error('label')
                                                                <div class="alert m-t4 text-danger">*{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="label">دسترسی ها</label>
                                                            <select class="form-control" multiple name="permissions[]" id="">
                                                                @foreach(\App\Models\Permission::all() as $permission)
                                                                    <option value="{{ $permission->id }}"  {{in_array($permission->id , $role->permissions->pluck('id')->toArray()  ) ? "selected" : "" }} >{{ $permission->name }} - {{ $permission->Label }}</option>
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
