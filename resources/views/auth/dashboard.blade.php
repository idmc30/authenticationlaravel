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
		  			
		  			  <h5 class="card-header">Email: <b> {{ auth()->user()->email }}</b></h5>

				  <div class="card-body">
				       Bienvenido <b>{{ auth()->user()->name }}</b>
				  </div>

				  <div class="card-footer">
				    <form method="POST" action="{{ route('logout') }}">
				       	{{ csrf_field() }}
                           <button class="btn btn-danger btn-xs btn-block">
                           	Cerrar Sesion
                           </button>
				       	
				       </form>
				  </div>
				</div>
		  		 
		  		

		  	</div>
		           
		  </div>
             


		</div>
	</div>

	</div>
@endsection