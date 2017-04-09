@extends('layouts.app')

@section('nav')
    @if (!Auth::guest())
        @foreach ($grant_roles as $grant_rol) 
            @if ($grant_rol->rol_id == 1)
                <li class="active">
                    <a href="{{ route('login') }}" >
                        <i class="fa fa-cog"></i> Admin </a>
                </li>
            @endif
            @if ($grant_rol->rol_id == 2)
                <li><a href="{{ route('login') }}"><i class="fa fa-pencil-square-o"></i> Editor </a></li>
            @endif
            @if ($grant_rol->rol_id == 3)
                <li><a href="{{ route('login') }}"><i class="fa fa-cog"></i> Moderador </a></li>
            @endif
        @endforeach 
    @endif
@endsection

@section('content')
<div class="container container-form">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-1"></div>
            <div class="col-md-10"> 
            @if (!Auth::guest())
                @foreach ($grant_roles as $grant_rol) 
                    @if ($grant_rol->rol_id == 1)
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#home" id="crud-roles"> Roles </a></li>
                            <li><a data-toggle="tab" href="#menu1" id="crud-usuarios"> Usuarios </a></li>
                            <li><a data-toggle="tab" href="#menu2" id="crud-cursos"> Cursos </a></li>
                            <li><a data-toggle="tab" href="#menu3" id="crud-recursos"> Recursos </a></li>
                        </ul>
                        <div class="panel panel-default">
                            <div class="panel-body tab-content">
                             
                                <div id="home" class="tab-pane fade in active">
                                    <div class="col-md-7">
                                        <table class="table table-responsive table-hover table-inverse">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nombre</th>
                                                    <th>Modificar</th>
                                                    <th>Eliminar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($roles as $rol) 
                                                
                                                <tr>
                                                    <th scope="row"> {{ $rol->id }} </th>
                                                    <td> {{ $rol->nombre }} </td>
                                                    <td> <a href="getEditRole/{{ $rol->id }}" class="btn btn-info" data-toggle="modal" data-target="#edit-rol"><i class="fa fa-pencil"></i></a> </td>
                                                    @if($rol->id != 1)
                                                    <td> <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button> </td>
                                                    @else
                                                    <td> <button type="button" disable class="btn btn-default"><i class="fa fa-trash"></i></button> </td>
                                                    @endif
                                                </tr>
                                            @endforeach 
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add-rol"><i class="fa fa-plus"></i></button>
                                    </div>
                                </div>
                                <div id="menu1" class="tab-pane fade">
                                    <h3>Menu 1</h3>
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                                <div id="menu2" class="tab-pane fade">
                                    <h3>Menu 2</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                </div>
                                <div id="menu3" class="tab-pane fade">
                                    <h3>Menu 3</h3>
                                    <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach 
            @endif
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</div>

<!-- Modal -->

<div class="modal fade " id="add-rol" tabindex="-1" role="dialog" aria-labelledby="add-rol-Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-sm">
      <div class="modal-header">
        <h5 class="modal-title" id="add-rol-Label">Agregar Role</h5>
      </div>

        <form class="form-horizontal" role="form" method="POST" action="{{ url('insertRole') }}">
            {{ csrf_field() }}
            <div class="modal-body">

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Nombre</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button class="btn btn-primary" type="submit" value="Submit"> Guardar </button>
            </div>
        </form>
    </div>
  </div>
</div>


<div class="modal fade " id="edit-rol" tabindex="-1" role="dialog" aria-labelledby="add-rol-Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-sm">
      <div class="modal-header">
        <h5 class="modal-title" id="add-rol-Label">Editar Role</h5>
      </div>

        <form class="form-horizontal" role="form" method="POST" action="{{ url('insertRole') }}">
            {{ csrf_field() }}
            <div class="modal-body">

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Nombre</label>

                    <div class="col-md-6">
                        
                        <input id="name" type="text" class="form-control" name="name" value="{{ $edit_roles }}" required autofocu
                        

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button class="btn btn-primary" type="submit" value="Submit"> Guardar </button>
            </div>
        </form>
    </div>
  </div>
</div>

@endsection

@section('script')
    <!-- <script src="js/crud.js"></script> -->
@endsection