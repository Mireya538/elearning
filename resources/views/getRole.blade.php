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
                                <div class="col-md-5">
                                    <h1> Listar Roles </h1>
                                    <table class="table table-responsive table-hover table-inverse">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nombre</th>
                                                <th>Modificar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($roles as $rol) 
                                            <tr>
                                                <th scope="row"> {{ $rol->id }} </th>
                                                <td> {{ $rol->nombre }} </td>
                                                <td> <a href="role/{{ $rol->id }}" class="btn btn-info btn-edit-rule"><i class="fa fa-pencil"></i></a> </td>
                                            </tr>
                                        @endforeach 
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-5">
                                    <h2> Gestionar Roles </h2>
                                    <hr>
                                    <h3> Agregar </h3>
                                    <form class="form-horizontal" role="form" method="POST" action="{{ url('insertRole') }}">
                                        {{ csrf_field() }}

                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label for="name" class="col-md-4 control-label">Nombre</label>

                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                                @if ($errors->has('name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group center">
                                            <button type="submit" class="btn btn-success" id="role-add"><i class="fa fa-plus"></i> Agregar</button>
                                        </div>
                                    </form>
                                    <hr>
                                    <h3> Actualizar </h3>
                                    <form class="form-horizontal" role="form" method="PUT" action="{{ url('updateRole') }}">
                                        {{ csrf_field() }}

                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label for="name" class="col-md-4 control-label">Nombre</label>

                                            <div class="col-md-6">
                                                <input type="hidden" class="form-control" name="id">
                                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                                @if ($errors->has('name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group center">
                                            <button type="submit" class="btn btn-primary" value="Submit"><i class="fa fa-floppy-o"></i> Actualizar </button>
                                        </div>
                                    </form>
                                    <hr>
                                    <h3> Eliminar </h3>
                                    <form class="form-horizontal" role="form" method="DELETE" >
                                        {{ csrf_field() }}

                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label for="name" class="col-md-4 control-label">Nombre</label>

                                            <div class="col-md-6">
                                                <input type="hidden" class="form-control" name="id">
                                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                                @if ($errors->has('name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group center">
                                            <button type="submit" class="btn btn-danger" value="Submit"><i class="fa fa-floppy-o"></i> Eliminar </button>
                                        </div>
                                    </form>
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
@endsection

@section('script')
    <script src="js/crud.js"></script>
@endsection