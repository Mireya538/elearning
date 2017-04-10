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
                            <li><a href="{{ url('role') }}" id="crud-roles"> Roles </a></li>
                            <li><a href="#menu1" id="crud-usuarios"> Usuarios </a></li>
                            <li><a href="#menu2" id="crud-cursos"> Cursos </a></li>
                            <li><a href="#menu3" id="crud-recursos"> Recursos </a></li>
                        </ul>
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
@endsection

@section('script')
    <!-- <script src="js/crud.js"></script> -->
@endsection