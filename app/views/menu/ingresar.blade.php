<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BBVA BACKEND</title>
	{{ HTML::style('css/bootstrap.css')}}
	{{ HTML::style('font-awesome-4.1.0/css/font-awesome.min.css')}}
	{{ HTML::style('css/sb-admin-2.css')}}
	{{ HTML::style('css/jquery-ui.css')}}
	{{ HTML::style('css/main.css') }}
	{{ HTML::script('js/jquery-1.11.0.js')}}
	{{ HTML::script('js/bootstrap.min.js')}}
	{{ HTML::script('js/main.js')}}
	{{ HTML::script('js/jquery.autocomplete.js')}}
</head>
<body>
	<div class="container-fluid">
		<div class="container general-info">
			<div class="row">
				<div class="col-sm-12">
					<div class="h1header">
						<h1>MENU DE LA SEMANA<h1>
						<div class="h1header-separator"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="row">
						{{Form::open()}}
						<div class="col-sm-12">
							@if($errors->has())
							    <div class="alert alert-danger alert-dismissible">           
							        <!--recorremos los errores en un loop y los mostramos-->
							        @foreach ($errors->all('<p>:message</p>') as $message)
							            {{ $message }}
							        @endforeach
							         
							    </div>
							@endif
							@if(Session::has('message'))
							    <div class="alert alert-info alert-dismissible">
							        {{ Session::get('message') }}
							    </div>                    
							@endif
						</div>
						<div class="col-sm-12">
							<div class="row">
								<div class="h2header">
									<h2>Almuerzo</h2>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="col-sm-6">
								<div class="row">
									<div class="col-sm-12">
										
										<div class="h3header">
											 <h3>{{Form::select('dia',array('1'=>'Lunes','2'=>'Martes','3'=>'Miercoles','4'=>'Jueves','5'=>'Viernes', '6'=>'Sabado','7'=>'Domingo'))}}</h3>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												{{Form::label('entrada','Entrada',array('class'=>'control-label'))}}
												{{Form::text('entrada','',array('class'=>'form-control'))}}
											</div>
											<div class="form-group">
												{{Form::label('segundo','Segundo',array('class'=>'control-label'))}}
												{{Form::text('segundo','',array('class'=>'form-control'))}}
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												{{Form::label('refresco','Refresco',array('class'=>'control-label'))}}
												{{Form::text('refresco','',array('class'=>'form-control'))}}
											</div>
											<div class="form-group">
												{{Form::label('postre','Postre',array('class'=>'control-label'))}}
												{{Form::text('postre','',array('class'=>'form-control'))}}
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									{{Form::submit('Enviar',array('class'=>'btn btn-primary'))}}
								</div>
							</div>
						</div>
						{{Form::close()}}
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>