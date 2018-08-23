@extends('layouts.app')
@section('head', 'Login')
@section('content')
	<div class="row">

		<div class="container">
		 {{--    <h2>Acceso a la Aplicacion</h2> --}}
		  <div class="panel panel-default">
		  	<br>
		  	<div class="col-md-4" style="display: block;margin-left: auto;margin-right: auto;">
		  		<div class="card">
		  			
		  			  <h5 class="card-header">Acceso a la Aplicación</h5>
				  <div class="card-body">
				   <form  method="POST" action="{{ route('login') }}" >
				   	{{ csrf_field() }}
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control" name="email" placeholder="Ingresa tu email">
							{!! $errors->first('email', '<span class="help-block">:message</span>') !!}
						</div>

						<div class="form-group">
							<label for="password">Contraseña</label>
							<input type="password" class="form-control" name="password" placeholder="Ingresa tu password">
							{!! $errors->first('password', '<span class="help-block">:message</span>') !!}
						</div>
						
						<button class="btn btn-primary btn-block" name="btnlogin">Ingresar</button>
					</form>
				  </div>
				</div>
		  		 
		  		

		  	</div>
		           
		  </div>
             


		</div>
	</div>

	</div>
@endsection