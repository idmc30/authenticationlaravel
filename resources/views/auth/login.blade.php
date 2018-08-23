@extends('layouts.app')

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
				   <form action="">
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control" name="email" placeholder="Ingresa tu email">
						</div>

						<div class="form-group">
							<label for="password">Contraseña</label>
							<input type="password" class="form-control" name="password" placeholder="Ingresa tu password">
						</div>
						<input class="btn btn-primary" type="button" name="btnlogin" value="Ingresar">
					</form>
				  </div>
				</div>
		  		 
		  		

		  	</div>
		           
		  </div>
             


		</div>
	</div>

	</div>
@endsection