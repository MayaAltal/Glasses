<?php $__env->startSection('content'); ?>

<div class="container-fluid"dir="rtl">

    <div class="row">
        <div class="col-lg-12"dir="rtl">
            <div class="card">

                <div class="card-header align-items-center">
                    <div class="row">
                    <div class="col-xl-8">
                    <h4 class="card-title">
                   الفواتير
                    </h4>
                        </div><!---endcol1--->
                       
                </div><!-----end row----->
                </div><!-- end card header -->



<div class="card-body">
    <div class="row">

        <?php
        $counter = 1; // تعيين قيمة العداد الأولية

    ?>

    <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-lg-4" id="id<?php echo e($task->id); ?>" dir="rtl">
    <div class="card">

        <h6 class="card-header text-purple"> رقم الفاتورة : <?php echo e($counter); ?>  </h6>
        <?php
         $counter++;

              ?>

     <div class="row">

                    <div class="col-md-8">

                            <div class="card-body">

                               

                                

                                <p class="card-text">
                                    <?php if($task->name !== null): ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-octagon" style="color:#123A5D;">
                                            <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                                            <line x1="12" y1="8" x2="12" y2="12"></line>
                                            <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                        </svg>
                                        الاسم  : <?php echo e($task->name); ?>

                                    <?php endif; ?>
                                </p>

                                <p class="card-text">
                                    <?php if($task->type !== null): ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-octagon" style="color:#123A5D;">
                                            <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                                            <line x1="12" y1="8" x2="12" y2="12"></line>
                                            <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                        </svg>
                                        النوع  : <?php echo e($task->type); ?>

                                    <?php endif; ?>
                                </p>
                                  <p class="card-text">
                                    <?php if($task->type_customer !== null): ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-octagon" style="color:#123A5D;">
                                            <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                                            <line x1="12" y1="8" x2="12" y2="12"></line>
                                            <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                        </svg>
                                        نوع العميل: <?php echo e($task->type_customer); ?>

                                    <?php endif; ?>
                                </p>
                                <p class="card-text">
                                    <?php if($task->glasses !== null): ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-octagon" style="color:#123A5D;">
                                            <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                                            <line x1="12" y1="8" x2="12" y2="12"></line>
                                            <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                        </svg>
                                        العدسات: <?php echo e($task->glasses); ?>

                                    <?php endif; ?>
                                </p>
                                <p class="card-text">
                                    <?php if($task->type_glasses !== null): ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-octagon" style="color:#123A5D;">
                                            <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                                            <line x1="12" y1="8" x2="12" y2="12"></line>
                                            <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                        </svg>
                                         نوع العدسات: <?php echo e($task->type_glasses); ?>

                                    <?php endif; ?>
                                </p>
                                  <p class="card-text">
                                    <?php if($task->recive !== null): ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-octagon" style="color:#123A5D;">
                                            <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                                            <line x1="12" y1="8" x2="12" y2="12"></line>
                                            <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                        </svg>
                                        حالة الاستلام : <?php echo e($task->recive); ?>

                                    <?php endif; ?>
                                </p>
                                <p class="card-text">
                                    <?php if($task->price !== null): ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-octagon" style="color:#123A5D;">
                                            <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                                            <line x1="12" y1="8" x2="12" y2="12"></line>
                                            <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                        </svg>
                                        السعر  : <?php echo e($task->price); ?>

                                    <?php endif; ?>
                                </p>
                                <p class="card-text">
                                    <?php if($task->amount_paid !== null): ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-octagon" style="color:#123A5D;">
                                            <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                                            <line x1="12" y1="8" x2="12" y2="12"></line>
                                            <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                        </svg>
                                         المبلغ المدفوع : <?php echo e($task->amount_paid); ?>

                                    <?php endif; ?>
                                </p>
                                <p class="card-text">
                                    <?php if($task->remaining_amount !== null): ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-octagon" style="color:#123A5D;">
                                            <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                                            <line x1="12" y1="8" x2="12" y2="12"></line>
                                            <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                        </svg>
                                         المبلغ الباقي : <?php echo e($task->remaining_amount); ?>

                                    <?php endif; ?>
                                </p>

                                  <hr>
                                  
        

                               

                            </div>


                        </div>
                        <!-- col -->

                        <div class="col-md-4"style="margin-top:30px;">
                            <a href="javascript:void(0)" onclick="deleteS(<?php echo e($task->id); ?>)"class="text-muted px-5">
                            <i class="mdi mdi-trash-can-outline fa-2x"></i>

                            </a>
                            <br>

                            <br>
                            <a href="/edit_fatora/<?php echo e($task->id); ?>" class="text-muted px-5">
                                <i class="bx bx-pencil fa-2x"></i>
                            </a>
                        </div>



                        </div>
                        <!-- row -->
                    </div>
</div><!-- end col -->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


</div>
<!-- ene card body -->
</div>
<!-- end card -->
</div>
<!-- end col -->
</div>
<!-- end row -->

</div>




<script>

    function deleteS(id){
    
    
    
            $.ajax(
            {
                url: '/delete_fatora/'+id,
                type: 'get',
    
                data: {
    
    
                    "_token": $("input[name_token]").val()
                },
                success: function (response)
                {
                   $("#id"+id).remove();
                }
            });
    
    
        };
    
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('userheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Glasses\resources\views/ShowDetails.blade.php ENDPATH**/ ?>