@extends('layout.baseLayout')

@section('scripts')
	{{ HTML::script('js/main.js') }}
@stop

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">
				<div class="text-primary">MENU SEMANAL</div>
			</h1>
		</div>
	</div>
	@if(Session::has('warning'))
	<div class="row">
		<div class="col-lg-12">
			<div class="alert alert-danger alert-dismissible" role="alert" >
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<a href="#" class="alert-link"></a>
				{{Session::get('warning')}}
			</div>
		</div>
		</div>
	@endif
	@if(Session::has('message'))
	<div class="row">
		<div class="col-lg-12">
			<div class="alert alert-success alert-dismissible" role="alert" >
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<a href="#" class="alert-link"></a>
				{{Session::get('message')}}
			</div>
		</div>
		</div>
	@endif
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
								@if($hoy == $dia)
								<a href="#" {{($reserva_almuerzo)?'class="reservado"':''}} data-toggle="modal" data-target="#almuerzoModal">
								@endif
									<div class="panel-heading">
										<h2 class="subtitle">Almuerzo</h2>
									</div>
								@if($hoy == $dia)
								</a>
								@endif
								<div class="panel-body">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												{{ Form::label('aentrada','Entrada :',array('class'=>'control-label'))}}
												{{ Form::text('aentrada'.$dia,$entradas[$almuerzos[$dia]->entrada_id],array('class'=>'form-control', 'disabled' => true)) }}
											</div>
											<div class="form-group">
												{{ Form::label('afondo','Fondo: ',array('class'=>'control-label'))}}
												{{ Form::text('afondo'.$dia,$platos[$almuerzos[$dia]->plato_id],array('class' => 'form-control', 'disabled' => true))}}
											</div>
										</div>
										<div class="col-sm-6">
												<div class="form-group">
												{{ Form::label('arefresco','Refresco :',array('class'=>'control-label'))}}
												{{ Form::text('arefresco'.$dia,$refrescos[$almuerzos[$dia]->refresco_id],array('class'=>'form-control', 'disabled' => true)) }}
											</div>
											<div class="form-group">
												{{ Form::label('apostre','Postre: ',array('class'=>'control-label'))}}
												{{ Form::text('apostre'.$dia,$postres[$almuerzos[$dia]->postre_id],array('class' => 'form-control', 'disabled' => true))}}
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="panel panel-default">
								@if($hoy == $dia)
								<a href="#" {{($reserva_cena)?'class=reservado':''}} data-toggle="modal" data-target="#cenaModal">
								@endif
									<div class="panel-heading">
										<h2 class="subtitle">Cena</h2>
									</div>
								@if($hoy == $dia)
								</a>
								@endif
								<div class="panel-body">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												{{ Form::label('centrada','Entrada :',array('class'=>'control-label'))}}
												{{ Form::text('centrada'.$dia,$entradas[$cenas[$dia]->entrada_id],array('class'=>'form-control', 'disabled' => true)) }}
											</div>
											<div class="form-group">
												{{ Form::label('cfondo','Fondo: ',array('class'=>'control-label'))}}
												{{ Form::text('cfondo'.$dia,$platos[$cenas[$dia]->plato_id],array('class' => 'form-control', 'disabled' => true))}}
											</div>
										</div>
										<div class="col-sm-6">
												<div class="form-group">
												{{ Form::label('crefresco','Refresco :',array('class'=>'control-label'))}}
												{{ Form::text('crefresco'.$dia,$refrescos[$cenas[$dia]->refresco_id],array('class'=>'form-control', 'disabled' => true)) }}
											</div>
											<div class="form-group">
												{{ Form::label('cpostre','Postre: ',array('class'=>'control-label'))}}
												{{ Form::text('cpostre'.$dia,$postres[$cenas[$dia]->postre_id],array('class' => 'form-control', 'disabled' => true))}}
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
	<input type="hidden" value={{$hoy}} id="hoy" name="hoy">
	<input type="hidden" value={{$fin}} name="fin">
	<input type="hidden" value={{$inicio}} name="inicio">
	<input type="hidden" value={{$amenu_id}} name="amenu_id">
	<input type="hidden" value={{$cmenu_id}} name="cmenu_id">
	@include('reserva.almuerzo')
	@include('reserva.cena')
	@endfor
</div>
@stop