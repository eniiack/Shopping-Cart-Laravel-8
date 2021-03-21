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
                                    

                                    <div class="row">
                                      <div class="col-12">
                                          <div class="card">
                                              <div class="card-header">
                                                  <h3 class="card-title">دسته بندی ها</h3>
                              
                                                  <div class="card-tools d-flex">
                                                      <form action="">
                                                          <div class="input-group input-group-sm" style="width: 150px;">
                                                              <input type="text" name="search" class="form-control float-right" placeholder="جستجو" value="{{ request('search') }}">
                              
                                                              <div class="input-group-append">
                                                                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                                              </div>
                                                          </div>
                                                      </form>
                                                      <div class="btn-group-sm mr-1">
                                                         
                                                      </div>
                                                  </div>
                                              </div>
                                              <!-- /.card-header -->
                                              <div class="card-body table-responsive p-0">
                                                  @include('panel.category.categories_group' , ['categories' => $categories])
                                              </div>
                                              <!-- /.card-body -->
                                              <div class="card-footer">
                                                  {{ $categories->appends([ 'search' => request('search') ])->render() }}
                                              </div>
                                          </div>
                                          <!-- /.card -->
                                      </div>
                                  </div>

                                    <!-- datatable ends -->
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            {{ $categories->appends(['search' => request('search')])->render() }}
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- END: Content-->


    @include('panel.layouts.footer')
