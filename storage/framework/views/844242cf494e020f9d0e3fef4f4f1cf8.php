
<?php $__env->startSection('content'); ?>
 
<div class="card">
  <div class="d-flex justify-content-between align-items-center">
    <h1>Edit Product</h1>

    <!-- Back Button -->
    <a href="<?php echo e(url()->previous()); ?>" class="btn btn-primary" style="margin-right: 1%">Back</a>
  </div>

  <div class="card-body">
      
      <form action="<?php echo e(url('data/' .$datas->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        <input type="hidden" name="id" id="id" value="<?php echo e($datas->id); ?>" id="id" />
        <label>Name:</label></br>
        <input type="text" name="name" id="name" value="<?php echo e($datas->name); ?>" class="form-control"></br>
        <label>Price (RM):</label></br>
        <input type="text" name="price" id="price" value="<?php echo e($datas->price); ?>" class="form-control"></br>
        <label>Details:</label></br>
        <input type="text" name="details" id="mobile" value="<?php echo e($datas->details); ?>" class="form-control"></br>
        <label>Publish:</label><br>
        <label><input type="radio" name="publish" value="1" <?php echo e($datas->publish == 1 ? 'checked' : ''); ?>> Yes</label><br>
        <label><input type="radio" name="publish" value="0" <?php echo e($datas->publish == 0 ? 'checked' : ''); ?>> No</label><br><br>
        
        <input type="submit" value="Update and Submit" class="btn btn-success mx-auto d-block"></br>
    </form>
   
  </div>
</div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('datas.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\fazly\Desktop\laravel\laraveltest\resources\views/datas/edit.blade.php ENDPATH**/ ?>