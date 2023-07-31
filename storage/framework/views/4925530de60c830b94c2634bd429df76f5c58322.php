<?php $__env->startSection('content'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card"dir="rtl">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-sm-4">
                                                <div class="search-box me-2 mb-2 d-inline-block"class="search">
                                                    <div class="position-relative">
                                                        <input type="search"name="search"id="search" class="form-control" placeholder="Search...">
                                                        <i class="bx bx-search search-icon"></i>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="table-responsive">
                                            <table class="table align-middle table-nowrap table-check">
                                                <thead class="table-light">
                                                    <tr>

                                                        
                                                        <th class="align-middle"style="color: #123A5D;">رقم الزبون</th>
                                                        <th class="align-middle"style="color: #123A5D;">الباقي </th>
                                                        <th class="align-middle"style="color: #123A5D;"> انشاء فاتورة </th>
                                                       
                                                        <th class="align-middle"style="color: #123A5D;"> عرض التفاصيل</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody class="alldata">
                                                    <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>


                                                       <td><?php echo e($file->phoneNumber); ?></td>
                                                       <td><?php echo e($file->total); ?></td>
                                                      
                                                     
                       
                                                       
                                                       
                                                        


                                                        <td>
                                                            <!-- Button trigger modal -->
                                                           

                                                            <a href="/AddFatora/<?php echo e($file->id); ?>" class="btn btn-soft-dark" type="submit">
                                                                انشاء فاتورة
                                                            </a>

                                                         

                                                        </td>
                                                        <td>
                                                            <div class="d-flex gap-3">

                                                                <a href="/showfatora/<?php echo e($file->id); ?>" class="btn btn-soft-danger" type="submit">
                                                                    عرض التفاصيل
                                                                </a>

                                                            </div>
                                                        </td>

                                                    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                                </tbody>
                                                <tbody id="Content"class="searchdata">

                                                </tbody>
                                            </table>
                                        </div>
                                        <ul class="pagination pagination-rounded justify-content-end mb-2">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                                    <i class="mdi mdi-chevron-left"></i>
                                                </a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                                    <i class="mdi mdi-chevron-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->


                    <script type="text/javascript">

                        $('#search').on('keyup',function()
                        {
                            $value=$(this).val();
                            if($value){
                                $('.alldata').hide();
                                $('.searchdata').show();
                            }
                            else{
                                $('.alldata').show();
                                $('.searchdata').hide();
                            }
                            $.ajax({

                        type:'get',
                        url:'<?php echo e(URL::to('search')); ?>',
                        data:{'search':$value},

                        success:function(data){
                        console.log(data);
                        $('#Content').html(data);

                        }
                            });

                        })

                        </script>


 <!-- nouisliderribute js -->
 <script src="<?php echo e(asset('libs/nouisliderribute/nouislider.min.js')); ?>"></script>
 <script src="<?php echo e(asset('libs/wnumb/wNumb.min.js')); ?>"></script>
 <script src="<?php echo e(asset('js/pages/range-sliders.init.js')); ?>"></script>
        <script src="<?php echo e(asset('js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('userheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Glasses\resources\views/Show-Files.blade.php ENDPATH**/ ?>