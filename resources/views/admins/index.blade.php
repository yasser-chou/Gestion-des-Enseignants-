@extends('layouts.master')
@section('content')
    <div class="row my-4">
    <div class="col-md-12">
	  <div class="from-group">
	  <button   class="btn btn-primary" data-toggle="modal" data-target="#addProf"><i class="fa fa-plus"></i></button>
	</div>
	 <div class="card">
	 <div class="card-body">
	 <table class="table">
	 <thead>
	 <tr>
	     <th>Id</th>
		 <th>Cin</th>
		 <th>Nom</th> 
		 <th>Prenom</th>
		 <th>Sexe</th> 
		 <th>Numéro de téléphone</th> 
		 <th>Email</th>
		  <th>Departement</th>
		  <th>Action</th>
	 
	 </tr>
	 </thead>
	  <tbody> 
	  @foreach($profs as $prof)
	  <tr>
	     <td>{{$prof->id}}</td>
	     <td>{{$prof->cin}}</td>
	     <td>{{$prof->nom}}</td>
	     <td>{{$prof->prenom}}</td>
	     <td>{{$prof->sexe}}</td>  
		  <td>{{$prof->tel}}</td>
	     <td>{{$prof->email}}</td>
		 <td>{{$prof->depart}}</td>
	    <td>
		 <a href="{{route('profs.edit',$prof->id)}}" class="btn btn-warning" ><i class="fa fa-edit"></i></a>
		  <form action="{{route('profs.destroy',$prof->id)}}" method="post">
		@csrf
		{{method_field('delete')}}
		 <button type="submit" class="btn btn-danger" ><i class="fa fa-trash"></i></button>
		</form>
		</td>
	   
	    
	 </tr>
	 @endforeach 
	  </tbody>
	  </table>
	  
	 </div>
	 </div>
    </div>
    </div>
	
	<div class="modal fade" id="addProf" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" >

        <span aria-hidden="true">&times;</span>
		
		
      </div>
      <div class="modal-body">
	    <form action="{{route('profs.store')}}"  method="post" enctype="multipart/form-data">
		@csrf
		<div class="container">
         <div class="row my-5">
         <div class="col-md-8 mx-auto">
         <div class="card bg-light">
         <h3 class="card-body">Ajouter un enseignent</h3>
         <div class="card-body">
		 <div class="form-group">
		  <label for="">Cin* </label>
		 <input type="text" name="cin" id="" class="form-control" placeholder="Cin" aria-describedby="helpId">
		 </div>
		<div class="form-group">
		  <label for="">Nom* </label>
		 <input type="text" name="nom" id="" class="form-control" placeholder="Nom" aria-describedby="helpId">
		 </div>
		 <div class="form-group">
		  <label for="">Prenom* </label>
		 <input type="text" name="prenom" id="" class="form-control" placeholder="Prenom" aria-describedby="helpId">
		 </div>
		<div class="form-group">
		  <label for="">Sexe* </label>
		 <select name="sexe" type="text" id="" class="form-control">
		 <option value="" selected disabled>Veuillez choisir un type</option>
		 <option value="feminin">Féminin</option>
		  <option value="masculin">Masculin</option>
		  </select>
		 </div>
		 <div class="form-group">
		  <label for="">Numéro de téléphone* </label>
		 <input type="text" name="tel" id="" class="form-control" placeholder="Téléphone" aria-describedby="helpId">
		 </div>
		  <div class="form-group">
		  <label for="">Email* </label>
		 <input type="text" name="email" id="" class="form-control" placeholder="Email" aria-describedby="helpId">
		 </div>
		 <div class="form-group">
		  <label for="">Departement* </label>
		<select name="depart" type="text" id="" class="form-control">
		 <option value="" selected disabled>Veuillez choisir le departement</option>
		 <option value="GI">GI</option>
		  <option value="GIM">GIM</option>
		  <option value="TM">TM</option>
		  <option value="TIMQ">TIMQ</option>
		  </select>
		 </div>
		 <h3></h3>
		 <button type="submit" class="btn btn-primary">Ajouter</button>
		</form>
      </div>
    </div>
	  </div>
    </div>
  </div>
</div>
@endsection