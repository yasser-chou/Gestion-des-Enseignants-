@extends('layouts.master')

@section('content')
<div class="row my-4">
 <div class="col-md-3">
  <div class="catrd bg-light border border-primary">
	 <h3 class="card-header">
	   Recherche
	 </h3>
	  <div class="card-body">
	   <form action="#" method="post">
	   @csrf
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
      <h3 class="card-header">{{$prof->nom}}</h3>
   <div class="card-body">
   
    <div class="media mb-2">
	<div class="media-middle">
	
	 </div>
	 <div class="media-body">
	  <h3 class="text-info">
	   <a href="{{'profs.show',$prof->id}}" class="btn btn-link">
	   {{$prof->nom}}
	   </a>
	   </h3>
	   <p class="d-flex flex-row justify-content-start">
	   <span class=" media mb-2  badge-danger mx -3">Type: {{$prof->nom}}</span>
	   <span class="media mb-2 badge-primary">Prix:{{$prof->nom}}</span>
	  </p>
	 </div>
	 </div>
	 <hr>
	
	 </div>
   
   </div>
   </div>
</div>
@endsection