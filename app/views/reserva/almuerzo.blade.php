<div class="modal fade" id="almuerzoModal" tabindex="-1" role="dialog" aria-labelledby="almuerzoModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      {{ Form::open() }}
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="almuerzoModalLabel">Reserva de ración</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
            <h3>Raciones disponibles: {{$almuerzo_raciones[$hoy]}}</h3>
            </div>
            <div class="form-group">
              Tipo:   Almuerzo
            </div>
            <div class="form-group">
              Turno:  {{ Form::select('aturno',$almuerzo_turnos,null,array('class' => 'form-control','id' => 'aturno'))}}
            </div>
          </div>
        </div>
      </div>
      <input type="hidden" value={{$hoy}} name="hoy">
      <input type="hidden" value={{$fin}} name="fin">
      <input type="hidden" value={{$inicio}} name="inicio">
      <input type="hidden" value={{$amenu_id}} name="amenu_id">
      <input type="hidden" value={{$cmenu_id}} name="cmenu_id">
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        {{ Form::submit('Reservar',array('class'=>'btn btn-primary' , 'name' => 'reservarAlmuerzo'))}}
        {{ Form::close() }}
      </div>
    </div>
  </div>
</div>