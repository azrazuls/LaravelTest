
<?php $__env->startSection('content'); ?>

<div class="card">
  <div class="d-flex justify-content-between align-items-center">
    <h1>Add New Product</h1>

    <!-- Back Button -->
    <a href="<?php echo e(url()->previous()); ?>" class="btn btn-primary" style="margin-right: 1%">Back</a>
  </div>

  <div class="card-body">

    <form action="<?php echo e(url('data')); ?>" method="post">
      <?php echo csrf_field(); ?>

      <label>Name:</label></br>
      <input type="text" name="name" id="name" placeholder="Name" class="form-control"></br>
      <label>Price (RM):</label></br>
      <input type="text" name="price" id="price" placeholder="0.00" class="form-control"></br>
      <label>Details:</label></br>
      <input type="text" name="details" id="details" placeholder="Details.." class="form-control"></br>
      <label>Publish</label><br>
      <label><input type="radio" name="publish" value="Yes"> Yes</label><br>
      <label><input type="radio" name="publish" value="No"> No</label><br><br>
      <input type="submit" value="Submit" class="btn btn-success mx-auto d-block"></br>
    </form>

  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('datas.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\fazly\Desktop\laravel\laraveltest\resources\views/datas/create.blade.php ENDPATH**/ ?>