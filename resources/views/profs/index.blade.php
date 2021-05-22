@extends('layouts.master')

@section('content')
<div class="row my-4">
 <div class="col-md-3">
  <div class="catrd bg-light border border-primary">
	 <h3 class="card-header">
	   Recherche
	 </h3>
	  <div class="card-body">
	   <form action="{{route('profs.index')}}" method="post">
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
      <h3 class="card-header">{{$title}}</h3>
   <div class="card-body">
   @foreach($profs as $prof)
    <div class="media mb-2">
	<div class="media-left">
	
	 </div>
	 <div class="media-body">
	  <h3 class="text-info">
	   
	   </h3>
	   <p class="d-flex flex-row justify-content-start">
	   <th class=" media mb-2  badge-danger mx -2"> -{{$prof->nom}}</th>
	    
	   <th class="media mb-2 badge-primary">   {{$prof->prenom}}</th>
	  </p>
	 </div>
	 </div>
	 <hr>
	 @endforeach
	 </div>
   
   </div>
   </div>
</div>
@endsection