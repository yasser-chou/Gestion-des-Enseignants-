<?php if(Session::get('success')): ?>
  <div class="alert alert-success">
  <?php echo e(Session::get('success')); ?>

  </div>
<?php endif; ?>
<?php if(Session::get('info')): ?>
   <div class="alert alert-info">
   <?php echo e(Session::get('info')); ?>

   </div>
<?php endif; ?>
<?php if(Session::get('error')): ?>
   <div class="alert alert-danger">
   <?php echo e(Session::get('error')); ?>

   </div>
<?php endif; ?>
<?php if($errors->count() > 0): ?>
  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="alert alert-danger">
  <?php echo e($error); ?>

  </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\GestionEnsei\resources\views/includes/messages.blade.php ENDPATH**/ ?>