
<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-body">
        <h1>Show Product</h1>

        <!-- Back Button -->
        <a href="<?php echo e(url()->previous()); ?>" class="btn btn-primary" style="float: right;">Back</a>

        <div class="card-body">
            <h5 class="card-title"><b>Name:</b> <?php echo e($datas->name); ?></h5>
            <p class="card-text"><b>Price (RM):</b> <?php echo e($datas->price); ?></p>
            <p class="card-text"><b>Details:</b> <?php echo e($datas->details); ?></p>
            <p class="card-text"><b>Publish: </b>
                <?php if($datas->publish == 1): ?>
                    <span class="badge badge-success" style="color: black; font-size: 16px">Yes</span>
                <?php else: ?>
                    <span class="badge badge-danger" style="color: black; font-size: 16px">No</span>
                <?php endif; ?>
            </p>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('datas.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\fazly\Desktop\laravel\laraveltest\resources\views/datas/show.blade.php ENDPATH**/ ?>