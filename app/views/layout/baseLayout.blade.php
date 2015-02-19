<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{$title}}</title>

    <!-- Bootstrap Core CSS -->
    {{ HTML::style('css/datepicker3.css' )}}
    {{ HTML::style('css/bootstrap.min.css') }}

    <!-- Custom CSS -->
    {{ HTML::style('css/sb-admin.css') }}

    <!-- Custom Fonts -->
    {{ HTML::style('font-awesome-4.1.0/css/font-awesome.min.css') }}

    {{ HTML::style('css/main.css' )}}

</head>

<body>

	<div id="wrapper">
		@include('layout.header')
		<div id="page-wrapper">
			@yield('content')
		</div>
		@include('layout.footer')
	</div>
    <input type="hidden" name="base_path" id="base_path" value="{{route('index')}}">
    {{ HTML::script('js/jquery-1.11.0.js') }}

    <!-- Bootstrap Core JavaScript -->
    {{ HTML::script('js/bootstrap.min.js') }}

    {{ HTML::script('js/bootstrap-datepicker.js')}}

    {{ HTML::script('js/angular.min.js') }}

    @yield('scripts')
    <!-- Morris Charts JavaScript 
    {{ HTML::script('js/plugins/morris/raphael.min.js') }}
    {{ HTML::script('js/plugins/morris/morris.min.js') }}
    {{ HTML::script('js/plugins/morris/morris-data.js') }}-->
    
</body>

</html>
