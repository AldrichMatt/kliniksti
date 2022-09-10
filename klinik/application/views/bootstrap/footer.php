</div>
</div>
</div>
    
    <!-- Modal -->
    <div class="modal fade text-left" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel20" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form id="modal-form" class="form-horizontal module-form"></form>
            </div>
        </div>
    </div>
    
    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0">
            <span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021
                <a class="ml-25" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a>
                <span class="d-none d-sm-inline-block">, All rights Reserved</span>
            </span>
                <span class="float-md-right d-none d-md-block">Hand-crafted & Made with
                    <i data-feather="heart"></i>
                </span>
            </p>
        </footer>
        <button class="btn btn-primary btn-icon scroll-top" type="button">
            <i data-feather="arrow-up"></i>
        </button>
        <!-- END: Footer-->
        
        <!-- SCRIPT -->
        
        <!-- BEGIN: Page Vendor JS-->
        <script src="https://primamedis.saudagarteknologi.com/app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
        <script src="https://primamedis.saudagarteknologi.com/assets/js/modals.js"></script>

        <!-- END: Page Vendor JS-->
    
    <!-- BEGIN: Theme JS-->
    <script>var menuUrl = "https://primamedis.saudagarteknologi.com";</script>

    <script src="https://primamedis.saudagarteknologi.com/app-assets/js/core/app-menu.js"></script>
    <script src="https://primamedis.saudagarteknologi.com/app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <script src="https://primamedis.saudagarteknologi.com/app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <script src="https://primamedis.saudagarteknologi.com/assets/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    
    <script>
        function trim (myString)
        {
            return myString.replace(/^\s+/,'').replace(/\s+$/,'')
        } 
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
                
            }
            
            if (jQuery(this).hasClass("active")) {
            } else
            {
                var title = trim($('.active').text());
                $('#title').text(title);
                $('#subpath').text(title);

            }

        })

        ///
        $('.date').datepicker({  
           format: 'mm-dd-yyyy'
        });
    </script>
    
        
    <script src="https://primamedis.saudagarteknologi.com/app-assets/vendors/js/forms/select/select2.full.min.js"></script>

    <script src="https://primamedis.saudagarteknologi.com/app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <script src="https://primamedis.saudagarteknologi.com/app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="https://primamedis.saudagarteknologi.com/app-assets/vendors/js/extensions/toastr.min.js"></script>
    <!-- BEGIN: Page Vendor JS-->
    <script src="https://primamedis.saudagarteknologi.com/app-assets/vendors/js/extensions/swiper.min.js"></script>
    <!-- END: Page Vendor JS-->
    <!-- BEGIN: Page JS-->
    <script src="https://primamedis.saudagarteknologi.com/app-assets/js/scripts/extensions/ext-component-swiper.js"></script>
    <script src="https://primamedis.saudagarteknologi.com/app-assets/js/scripts/pages/dashboard-ecommerce.js"></script>
    <script src="https://primamedis.saudagarteknologi.com/app-assets/js/scripts/cards/card-analytics.js"></script>
    <!-- END: Page JS-->
        
    <script>
        $(window).on('load', function () {
            horizontal()
        })
    </script>
        
    <!-- END SCRIPT -->

</body>