
<?php $__env->startSection('content'); ?>
 
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Price (RM)</th>
                    <th>Details</th>
                    <th>Publish</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($item->name); ?></td>
                    <td><?php echo e($item->price); ?></td>
                    <td><?php echo e($item->details); ?></td>
                    <td>
                        <?php if($item->publish == 1): ?>
                            Yes
                        <?php else: ?>
                            No
                        <?php endif; ?>
                    </td>
    
                    <td>
                        <a href="<?php echo e(url('/data/' . $item->id)); ?>" title="View Product"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
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

    <!-- Back Button -->
    <a href="<?php echo e(url()->previous()); ?>" class="btn btn-secondary mt-3">Back</a>
 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('datas.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\fazly\Desktop\laravel\laraveltest\resources\views/datas/search.blade.php ENDPATH**/ ?>