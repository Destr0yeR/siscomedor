<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		{{ HTML::style('css/normalize.css')}}
		{{ HTML::style('css/main.css')}}
		{{ HTML::style('css/bootstrap.min.css')}}


		{{ HTML::script('js/jquery-1.11.0.js')}}
		{{ HTML::script('js/bootstrap.min.js')}}
	</head>
	<body>
		<div class="container">
			@yield('content')
		</div>
		
	</body>
</html>
