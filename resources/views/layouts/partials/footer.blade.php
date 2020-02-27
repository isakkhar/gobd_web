<!-- Footer -->
<footer id="page-footer" class="bg-body-light">
    <div class="content py-3">
        <div class="row font-size-sm">
            <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-left">
                <a class="font-w600" href="https://gobd.delivery" target="_blank">GO BD Delivery</a> &copy; <span data-toggle="year-copy"></span>
            </div>
        </div>
    </div>
</footer>
<!-- END Footer -->

<!-- Apps Modal -->
<!-- Opens from the modal toggle button in the header -->
<div class="modal fade" id="one-modal-apps" tabindex="-1" role="dialog" aria-labelledby="one-modal-apps" aria-hidden="true">
    <div class="modal-dialog modal-dialog-top modal-sm" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Apps</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <div class="row gutters-tiny">
                        <div class="col-6">
                            <!-- CRM -->
                            <a class="block block-rounded block-themed bg-default" href="javascript:void(0)">
                                <div class="block-content text-center">
                                    <i class="si si-speedometer fa-2x text-white-75"></i>
                                    <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                        CRM
                                    </p>
                                </div>
                            </a>
                            <!-- END CRM -->
                        </div>
                        <div class="col-6">
                            <!-- Products -->
                            <a class="block block-rounded block-themed bg-danger" href="javascript:void(0)">
                                <div class="block-content text-center">
                                    <i class="si si-rocket fa-2x text-white-75"></i>
                                    <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                        Products
                                    </p>
                                </div>
                            </a>
                            <!-- END Products -->
                        </div>
                        <div class="col-6">
                            <!-- Sales -->
                            <a class="block block-rounded block-themed bg-success mb-0" href="javascript:void(0)">
                                <div class="block-content text-center">
                                    <i class="si si-plane fa-2x text-white-75"></i>
                                    <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                        Sales
                                    </p>
                                </div>
                            </a>
                            <!-- END Sales -->
                        </div>
                        <div class="col-6">
                            <!-- Payments -->
                            <a class="block block-rounded block-themed bg-warning mb-0" href="javascript:void(0)">
                                <div class="block-content text-center">
                                    <i class="si si-wallet fa-2x text-white-75"></i>
                                    <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                        Payments
                                    </p>
                                </div>
                            </a>
                            <!-- END Payments -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Apps Modal -->
</div>
<!-- END Page Container -->

<!-- OneUI Core JS -->
<script src="{{ mix('js/oneui.app.js') }}"></script>

<!-- Laravel Scaffolding JS -->
<script src="{{ mix('js/laravel.app.js') }}"></script>



@yield('js_after')
</body>
</html>
