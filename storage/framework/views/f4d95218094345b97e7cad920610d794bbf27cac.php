<?php $__env->startSection('content'); ?>

      <!-- choices css -->
        <link href="<?php echo e(asset('libs/choices.js/public/assets/styles/choices.min.css')); ?>" rel="stylesheet" type="text/css" />

        <!-- dropzone css -->
        <link href="<?php echo e(asset('libs/dropzone/min/dropzone.min.css')); ?>" rel="stylesheet" type="text/css" />



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <form method="POST" action="Addtask" enctype='multipart/form-data'>
            <?php echo method_field('POST'); ?>
            <?php echo csrf_field(); ?>
            <!-- ============================================================== -->
            
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-12">
                                <div id="addproduct-accordion" class="custom-accordion">
                                    <div class="card" dir="rtl">
                                        <a href="#addproduct-billinginfo-collapse" class="text-dark" data-bs-toggle="collapse" aria-expanded="true" aria-controls="addproduct-billinginfo-collapse">
                                            <div class="p-4">

                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                                01
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="font-size-16 mb-1">معلومات الاضبارة</h5>
                                                        <p class="text-muted text-truncate mb-0">املأ جميع المعلومات أدناه</p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                                    </div>

                                                </div>

                                            </div>
                                        </a>

                                        <div id="addproduct-billinginfo-collapse" class="collapse show" data-bs-parent="#addproduct-accordion">
                                            <div class="p-4 border-top"dir="rtl">

                                              
                                                <div class="row">

                                                    



                                                    
 
                                                          <div class="modal fade" id="exampleModalScrollable"
                                                            tabindex="-1" role="dialog"
                                                            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="exampleModalScrollableTitle"></h5>
                                                                    </div>
                                                                   
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-light"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                      

                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label for="example-tel-input" class="col-md-2 col-form-label">رقم الهاتف</label>
                                                                    <input class="form-control <?php $__errorArgs = ['phoneNumber'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" value="" id="example-tel-input" name="phoneNumber">
                                                                    <?php $__errorArgs = ['phoneNumber'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <div class="invalid-feedback">
                                                                        رقم الهاتف مطلوب ويجب أن يكون فريدًا
                                                                    </div>
                                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                </div>
                                                            </div>
                                                        </div>


                                            </div>
                                        </div>
                                    </div>

                                  

                                   
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row mb-4">
                            <div class="col text-end">
                
                                <button type="submit" class="btn btn-primary btn-block btn-lg" value="Register" name="publish">
                            <span>اضافة</span></button>
                            </div> <!-- end col -->
                        </div> <!-- end row-->
                        <!-- end row -->

                    </div> <!-- container-fluid -->

                </form>



        <!-- choices js -->
        <script src="<?php echo e(asset('libs/choices.js/public/assets/scripts/choices.min.js')); ?>"></script>

        <!-- dropzone plugin -->
        <script src="<?php echo e(asset('libs/dropzone/min/dropzone.min.js')); ?>"></script>

        <!-- init js -->
        <script src="<?php echo e(asset('js/pages/ecommerce-choices.init.js')); ?>"></script>


       <script src="<?php echo e(asset('js/pages/form-validation.init.js')); ?>"></script>

       <script src="<?php echo e(asset('js/app.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('userheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Glasses\resources\views/Add-task.blade.php ENDPATH**/ ?>