@extends('layouts.master')
@section('content')
<div class="container">
 <div class="row my-5">
  <div class="col-md-8 mx-auto">
   <div class="card bg-light">
   <h3 class="card-body">Modifier</h3>
    <div class="card-body">
	 <form action="{{route('profs.update',$prof->id)}}"  method="post" enctype="multipart/form-data">
		@csrf
		{{method_field('PUT')}}
		 <div class="form-group">
		  <label for="">Cin* </label>
		 <input type="text" name="cin" id="" class="form-control" value="{{$prof->cin}}"  aria-describedby="helpId">
		 </div>
		 <div class="form-group">
		  <label for="">Nom* </label>
		 <input type="text" name="nom" id="" class="form-control" value="{{$prof->nom}}"  aria-describedby="helpId">
		 </div>
		<div class="form-group">
		  <label for="">Prenom* </label>
		 <input type="text" name="prenom" id="" class="form-control" value="{{$prof->prenom}}"  aria-describedby="helpId">
		 </div>
		<div class="form-group">
		  <label for="">Sexe* </label>
		 <select name="sexe" class="form-control" name="" id="" >
		 <option value="" selected disabled>Veuillez choisir le sexe</option>
		 <option value="feminin" {{$prof->sexe == 'feminin' ? 'selected' : ''}}>feminin</option>
		  <option value="masculin" {{$prof->sexe == 'masculin' ? 'selected' : ''}}>Masculin</option>
		  </select>
		 </div>
		 <div class="form-group">
		  <label for="">Numéro de téléphone* </label>
		 <input type="text" name="tel" id="" class="form-control" value="{{$prof->tel}}"  aria-describedby="helpId">
		 </div>
		<div class="form-group">
		  <label for="">Email* </label>
		 <input type="text" name="email" id="" class="form-control" value="{{$prof->email}}"  aria-describedby="helpId">
		 </div>
		 <div class="form-group">
		  <label for="">Departement* </label>
		  <select name="depart" class="form-control" name="" id="" >
		 <option value="" selected disabled>Veuillez choisir le departement</option>
		 <option value="GI" {{$prof->depart == 'GI' ? 'selected' : ''}}>GI</option>
		  <option value="GIM" {{$prof->depart == 'GIM' ? 'selected' : ''}}>GIM</option>
		  <option value="TM" {{$prof->depart == 'TM' ? 'selected' : ''}}>TM</option>
		  <option value="TIMQ" {{$prof->depart == 'TIMQ' ? 'selected' : ''}}>TIMQ</option>
		  </select>
		 </div>
		 
		
		
		 <button type="submit" class="btn btn-primary">Valider</button>
		</form>
   
   
   
    </div>
   </div>
  </div>
 </div>
</div>
@endsection