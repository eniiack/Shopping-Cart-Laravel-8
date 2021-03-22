    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-left d-inline-block">ارائه شده در وب‌سایت <a
                    href="https://www.rtl-theme.com" target="_blank">راست‌چین</a></span><span
                class="float-right d-sm-inline-block d-none">ساخته شده با<i
                    class="bx bxs-heart pink ml-50 font-small-3"></i></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i
                    class="bx bx-up-arrow-alt"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('script')
    <!--footer------------------------------------->
    @include('sweet::alert')
    <!-- BEGIN: Vendor JS-->
    <script src="/assets/vendors/js/vendors.min.js"></script>
    <script src="/assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
    <script src="/assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
    <script src="/assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="/assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="/assets/vendors/js/extensions/swiper.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="/assets/js/scripts/configs/vertical-menu-light.js"></script>
    <script src="/assets/js/core/app-menu.js"></script>
    <script src="/assets/js/core/app.js"></script>
    <script src="/assets/js/scripts/components.js"></script>
    <script src="/assets/js/scripts/footer.js"></script>
    <script src="/assets/js/scripts/customizer.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="/assets/js/scripts/pages/dashboard-ecommerce.js"></script>
    <script src="/assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="/assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="/assets/js/scripts/pages/page-users.js"></script>
    <!-- END: Page JS-->
    <script src="/assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="/assets/js/scripts/forms/select/form-select2.js"></script>
    
    @section('jsform')
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
    @endsection
    </body>
    <!-- END: Body-->

    </html>
