
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h1>Laravel</h1>
                    </div>
                    <div class="card-body">
                        <a href="<?php echo e(url('/data/create')); ?>" class="btn btn-success btn-sm" title="Add New Product" style="float: right">
                            <i class="fa fa-plus" aria-hidden="true"></i> Create New Product
                        </a>
                        <br/>
                        <br/>
                        
                        <!-- Search Form -->
                        <form action="<?php echo e(url('/search')); ?>" method="GET" role="search" style="margin-left: 80%">
                            <div class="input-group" style="width: 250px;">
                                <input type="text" class="form-control" name="search" placeholder="Search products" style="margin-right: 10px;">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-info btn-sm" style="width: 80px; height: 40px;">
                                        <i class="fa fa-search"></i> Search
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th style="width: 120px;">Price (RM)</th> <!-- Add a custom class for styling -->
                                        <th>Details</th>
                                        <th>Publish</th>
                                        <th style="width: 200px;">Actions</th> <!-- Set a custom width for the Actions column -->
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($item->name); ?></td>
                                        <td class="price-column"><?php echo e($item->price); ?></td> <!-- Add a custom class for styling -->
                                        <td><?php echo e($item->details); ?></td>
                                        <td><?php echo e($item->publish == 1 ? 'Yes' : 'No'); ?></td>
 
                                        <td>
                                            <a href="<?php echo e(url('/data/' . $item->id)); ?>" title="View Product"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Show</button></a>
                                            <a href="<?php echo e(url('/data/' . $item->id . '/edit')); ?>" title="Edit Product"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="<?php echo e(url('/data' . '/' . $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
                                                <?php echo e(method_field('DELETE')); ?>

                                                <?php echo e(csrf_field()); ?>

                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Product" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- Back Button to Initial Products -->
                        <?php if(isset($search_text)): ?>
                            <a href="<?php echo e(url('/data')); ?>" class="btn btn-secondary mt-3">
                                <i class="fa fa-arrow-left"></i> Back
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('datas.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\fazly\Desktop\laravel\laraveltest\resources\views/datas/index.blade.php ENDPATH**/ ?>