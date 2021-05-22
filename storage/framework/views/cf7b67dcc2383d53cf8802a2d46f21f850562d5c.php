
<?php $__env->startSection('content'); ?>
<div class="container">
 <div class="row my-5">
  <div class="col-md-8 mx-auto">
   <div class="card bg-light">
   <h3 class="card-body">Modifier</h3>
    <div class="card-body">
	 <form action="<?php echo e(route('profs.update',$prof->id)); ?>"  method="post" enctype="multipart/form-data">
		<?php echo csrf_field(); ?>
		<?php echo e(method_field('PUT')); ?>

		 <div class="form-group">
		  <label for="">Cin* </label>
		 <input type="text" name="cin" id="" class="form-control" value="<?php echo e($prof->cin); ?>"  aria-describedby="helpId">
		 </div>
		 <div class="form-group">
		  <label for="">Nom* </label>
		 <input type="text" name="nom" id="" class="form-control" value="<?php echo e($prof->nom); ?>"  aria-describedby="helpId">
		 </div>
		<div class="form-group">
		  <label for="">Prenom* </label>
		 <input type="text" name="prenom" id="" class="form-control" value="<?php echo e($prof->prenom); ?>"  aria-describedby="helpId">
		 </div>
		<div class="form-group">
		  <label for="">Sexe* </label>
		 <select name="sexe" class="form-control" name="" id="" >
		 <option value="" selected disabled>Veuillez choisir le sexe</option>
		 <option value="feminin" <?php echo e($prof->sexe == 'feminin' ? 'selected' : ''); ?>>feminin</option>
		  <option value="masculin" <?php echo e($prof->sexe == 'masculin' ? 'selected' : ''); ?>>Masculin</option>
		  </select>
		 </div>
		 <div class="form-group">
		  <label for="">Numéro de téléphone* </label>
		 <input type="text" name="tel" id="" class="form-control" value="<?php echo e($prof->tel); ?>"  aria-describedby="helpId">
		 </div>
		<div class="form-group">
		  <label for="">Email* </label>
		 <input type="text" name="email" id="" class="form-control" value="<?php echo e($prof->email); ?>"  aria-describedby="helpId">
		 </div>
		 <div class="form-group">
		  <label for="">Departement* </label>
		  <select name="depart" class="form-control" name="" id="" >
		 <option value="" selected disabled>Veuillez choisir le departement</option>
		 <option value="GI" <?php echo e($prof->depart == 'GI' ? 'selected' : ''); ?>>GI</option>
		  <option value="GIM" <?php echo e($prof->depart == 'GIM' ? 'selected' : ''); ?>>GIM</option>
		  <option value="TM" <?php echo e($prof->depart == 'TM' ? 'selected' : ''); ?>>TM</option>
		  <option value="TIMQ" <?php echo e($prof->depart == 'TIMQ' ? 'selected' : ''); ?>>TIMQ</option>
		  </select>
		 </div>
		 
		
		
		 <button type="submit" class="btn btn-primary">Valider</button>
		</form>
   
   
   
    </div>
   </div>
  </div>
 </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GestionEnsei\resources\views/profs/edit.blade.php ENDPATH**/ ?>