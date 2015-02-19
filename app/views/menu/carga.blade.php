@extends('layout.baseLayout')

@section('content')
<div class="container-fluid">	
	{{ Form::open() }}
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">
				<div class="text-primary">MENU SEMANAL</div>
			</h1>
		</div>
	</div>
	@for($dia = 1 ; $dia <=7 ; $dia++)
	<input type="hidden" value={{$fechas[$dia]}} name="fecha{{$dia}}">
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-primary" id={{$dia}}>
				<div class="panel-heading">
					<h3 class="panel-title">
					{{$dias[$dia]}}: {{$fechas[$dia]}}
					</h3>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h2 class="subtitle">Almuerzo</h2>
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												{{ Form::label('aentrada','Entrada :',array('class'=>'control-label'))}}
												{{ Form::select('aentrada'.$dia,$entradas,null,array('class'=>'form-control')) }}
											</div>
											<div class="form-group">
												{{ Form::label('afondo','Fondo: ',array('class'=>'control-label'))}}
												{{ Form::select('afondo'.$dia,$platos,null,array('class' => 'form-control'))}}
											</div>
										</div>
										<div class="col-sm-6">
												<div class="form-group">
												{{ Form::label('arefresco','Refresco :',array('class'=>'control-label'))}}
												{{ Form::select('arefresco'.$dia,$refrescos,null,array('class'=>'form-control')) }}
											</div>
											<div class="form-group">
												{{ Form::label('apostre','Postre: ',array('class'=>'control-label'))}}
												{{ Form::select('apostre'.$dia,$postres,null,array('class' => 'form-control'))}}
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h2 class="subtitle">Cena</h2>
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												{{ Form::label('centrada','Entrada :',array('class'=>'control-label'))}}
												{{ Form::select('centrada'.$dia,$entradas,null,array('class'=>'form-control')) }}
											</div>
											<div class="form-group">
												{{ Form::label('cfondo','Fondo: ',array('class'=>'control-label'))}}
												{{ Form::select('cfondo'.$dia,$platos,null,array('class' => 'form-control'))}}
											</div>
										</div>
										<div class="col-sm-6">
												<div class="form-group">
												{{ Form::label('crefresco','Refresco :',array('class'=>'control-label'))}}
												{{ Form::select('crefresco'.$dia,$refrescos,null,array('class'=>'form-control')) }}
											</div>
											<div class="form-group">
												{{ Form::label('cpostre','Postre: ',array('class'=>'control-label'))}}
												{{ Form::select('cpostre'.$dia,$postres,null,array('class' => 'form-control'))}}
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endfor
	<div class="row">
		<div class="col-sm-offset-8 col-sm-2">
			{{ Form::submit('Cargar',array('class' => 'btn btn-primary btn-block')) }}
		</div>
		<div class="col-sm-2">
			<a href="/">
				<div class="btn btn-primary btn-block text-fondo">
					Cancelar
				</div>
			</a>
		</div>
	</div>
	<input type="hidden" value={{$hoy}} id="hoy">
	<input type="hidden" value={{$fin}} name="fin">
	<input type="hidden" value={{$inicio}} name="inicio">
	{{ Form::close()}}
</div>
@stop