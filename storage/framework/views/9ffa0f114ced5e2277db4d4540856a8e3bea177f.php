<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <?php echo $__env->yieldContent('styles'); ?>
    <title>CestionEnsei</title>
  </head>
  <body>
    <div class="container my-3 border border-primary"> 
	<div class="header h-50 bg-primary rounded shadow-sm">
       <ul class="nav">
       <li class="nav-item">
       <a class="nav-link text-white" href="<?php echo e(route('profs.index')); ?>" >Gestion des enseignants</a>
       </li>
	    <a class="nav-link text-white" href="<?php echo e(route('admins.index')); ?>">Admin</a>
      
	   <li class="nav-item">
	<!--  <?php if(auth()->guard()->check()): ?>
	   <?php if(auth()->user()->isAdmin()): ?>
	     <li class="nav-item">
       <a class="nav-link text-white" href="<?php echo e(route('admins.index')); ?>">Admin</a>
       </li><?php endif; ?>
	   <li class="nav-item">
       <a class="nav-link text-white" href="#">deconnexion</a>
       </li>
	   
	   
	   <?php else: ?>
       <li class="nav-item">
       <a class="nav-link text-white" href="#">Inscription</a>
       </li>
       <li class="nav-item">
       <a class="nav-link text-white" href="#">Connexion</a>
       </li>
	   <?php endif; ?> -->
	    </li>
       </ul>
	</div>
	<div class="row">
	<div class="col-md-6.mx-auto my-4">
	<?php echo $__env->make('includes.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</div>
	</div>
	  <?php echo $__env->yieldContent('content'); ?>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
     <?php echo $__env->yieldContent('script'); ?>
  </body>
</html><?php /**PATH C:\xampp\htdocs\GestionEnsei\resources\views/layouts/master.blade.php ENDPATH**/ ?>