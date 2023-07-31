<?php $__env->startSection('content'); ?>

      <!-- choices css -->
        <link href="<?php echo e(asset('libs/choices.js/public/assets/styles/choices.min.css')); ?>" rel="stylesheet" type="text/css" />

        <!-- dropzone css -->
        <link href="<?php echo e(asset('libs/dropzone/min/dropzone.min.css')); ?>" rel="stylesheet" type="text/css" />



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <form method="POST" action="/AddFatora/<?php echo e($task->id); ?>" enctype='multipart/form-data'>
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
                                                        <h5 class="font-size-16 mb-1">معلومات الرحلة</h5>
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

                                                <div class="mb-3">
                                                    <label for="title" class="form-label">اسم الشخص </label>
                                                    <input id="title" type="text" class="form-control" name="name">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="example-number-input" class="col-md-2 col-form-label">نوع النضارات  </label>
                                                
                                                    <select class="form-select" id="person_count" name="type">
                                                        <option value=""></option>
                                                        <option value="نضارات شمسية">نضارات شمسية</option>
                                                        <option value="نضارات طبية">نضارات طبية</option>
                                                        <option value="عدسات لاصقة">نضارات طبية</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-number-input" class="col-md-2 col-form-label">العميل   </label>
                                                
                                                    <select class="form-select" id="person_count" name="type_customer">
                                                        <option value=""></option>
                                                        <option value="عميل محلي"> عميل محلي</option>
                                                        <option value="عميل VIP">عميل VIP </option>
                                                       
                                                    </select>
                                                </div>


                                                
                                                <div class="mb-3">
                                                    <label for="title" class="form-label"> العدسات  </label>
                                                    <input id="title" type="text" class="form-control" name="glasses">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-number-input" class="col-md-2 col-form-label">انواع العدسات    </label>
                                                
                                                    <select class="form-select" id="person_count" name="type_glasses">
                                                        <option value=""></option>
                                                        <option value="طبي ملون يومي"> طبي ملون يومي</option>
                                                        <option value="طبي ملون شهري ">طبي ملون شهري </option>
                                                        <option value="طبي شفاف يومي"> طبي شفاف يومي</option>
                                                        <option value="طبي شفاف شهري ">طبي شفاف شهري </option>
                                                    </select>
                                                    
                                                </div>
                                                <div class="mb-3" dir="rtl">
                                                    <label class="col-md-2 col-form-label">حالة الاستلام</label>
                                                    <br>
                                                
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="recive" id="option1" value="تم" />
                                                        <label class="form-check-label" for="option1">تم</label>
                                                    </div>
                                                
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="recive" id="option2" value="لم يتم الاستلام" />
                                                        <label class="form-check-label" for="option2">لم يتم الاستلام</label>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="title" class="form-label"> السعر  </label>
                                                    <input id="title" type="text" class="form-control" name="price">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="title" class="form-label"> المبلغ المدفوع  </label>
                                                    <input id="title" type="text"  class="form-control" name="amount_paid">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="title" class="form-label"> الباقي  </label>
                                                    <input id="title" type="text"  class="form-control" name="remaining_amount">
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

        <script src="<?php echo e(asset('js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('userheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Glasses\resources\views/AddFatora.blade.php ENDPATH**/ ?>