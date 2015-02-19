<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        @if(Auth::check())
        <li>
            <div class="container-fluid">
                <div class="row photo">
                    <div class="text">
                        {{HTML::image('img/photo1.jpg')}}

                    </div>
                    <div class="text-info">
                        <br>Codigo : 
                            {{Auth::user()->comensal->codigo}}
                        <br>Nombres: 
                            {{Auth::user()->nombres}}
                        <br>Apellidos: 
                            {{Auth::user()->apellidos}}
                        <br>Racion - Almuerzo: 
                            {{($reserva_almuerzo)?'SI':'NO'}}
                        <br>Racion - Cena: 
                            {{($reserva_cena)?'SI':'NO'}}
                        <br>Escuela: <br>
                            {{Auth::user()->comensal->eap->nombre}}
                        <br>Facultad: <br>
                            {{Auth::user()->comensal->eap->facultad->nombre}}
                    </div>
                </div>
            </div>
        </li>
        @endif
        <li>
            <a href="{{route('index')}}"><i class="fa fa-fw fa-dashboard"></i> Inicio</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-fw fa-table"></i> Tables</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-fw fa-edit"></i> Forms</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
        </li>
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Drop down <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demo" class="collapse">
                <li>
                    <a href="#">Drop down 1</a>
                </li>
                <li>
                    <a href="#">Drop down 2</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="fa fa-fw fa-file"></i> Blank Page</a>
        </li>
    </ul>
</div>