

<?php $__env->startSection('content'); ?>
<div class="row my-4">
 <div class="col-md-3">
  <div class="catrd bg-light border border-primary">
	 <h3 class="card-header">
	   Recherche
	 </h3>
	  <div class="card-body">
	   <form action="<?php echo e(route('profs.index')); ?>" method="post">
	   <?php echo csrf_field(); ?>
	    <div class="form-group">
	    <label for="search">Recherche</label>
	    <input type="text" name="search" id="" class="form-control" placeholder="Recherche"></input>
	    </div>
	    <div class="form-group">
	    <button type="submit" class="btn btn-primary">Valider</button>
	    </div>
	   </form>
	  </div>
  </div>
 </div>
   <div class="col-md-6">
   <div class="card border border-primary">
      <h3 class="card-header"><?php echo e($title); ?></h3>
   <div class="card-body">
   <?php $__currentLoopData = $profs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prof): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="media mb-2">
	<div class="media-left">
	
	 </div>
	 <div class="media-body">
	  <h3 class="text-info">
	   
	   </h3>
	   <p class="d-flex flex-row justify-content-start">
	   <th class=" media mb-2  badge-danger mx -2"> -<?php echo e($prof->nom); ?></th>
	    
	   <th class="media mb-2 badge-primary">   <?php echo e($prof->prenom); ?></th>
	  </p>
	 </div>
	 </div>
	 <hr>
	 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	 </div>
   
   </div>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GestionEnsei\resources\views/profs/index.blade.php ENDPATH**/ ?>