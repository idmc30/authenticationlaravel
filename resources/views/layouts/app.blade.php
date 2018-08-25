<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('head')</title>
	<link rel="stylesheet"  href="/css/app.css">

</head>
<body>
	
    @if (session()->has('flash'))
    <div class="panel panel-default">
	  <div class="panel-body"><div class="alert alert-danger">
	   	 {{ session('flash') }}
	   </div></div>
	</div>
	   
	@endif	
	
	
	@yield('content')
	
</body>
</html>