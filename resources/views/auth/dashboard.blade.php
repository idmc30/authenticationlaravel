@extends('layouts.app')
@section('head', 'Login')
@section('content')
	<div class="row">

		<div class="container">
		 {{--    <h2>Acceso a la Aplicacion</h2> --}}
		  <div class="panel panel-default">
		  	<br>
		  	<div class="col-md-5" style="display: block;margin-left: auto;margin-right: auto;">
		  		<div class="card">
		  			
		  			  <h5 class="card-header">Bienvenido <b>{{ auth()->user()->name }}</b></h5>
				  <div class="card-body">
				       
				  </div>
				</div>
		  		 
		  		

		  	</div>
		           
		  </div>
             


		</div>
	</div>

	</div>
@endsection