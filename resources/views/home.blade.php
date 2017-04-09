@extends('layouts.app')

@section('nav')
    @if (!Auth::guest())
            @foreach ($roles as $rol) 
                @if ($rol->rol_id == 1)
                    <li><i class="fa fa-cog"></i><a href="{{ route('login') }}">Superadmin Settings</a></li>
                @endif
                @if ($rol->rol_id == 2)
                    <li><i class="fa fa-cog"></i><a href="{{ route('login') }}">Admin Settings</a></li>
                @endif
                @if ($rol->rol_id == 3)
                    <li><i class="fa fa-cog"></i><a href="{{ route('login') }}">User Settings</a></li>
                @endif
            @endforeach 
    @endif
@endsection

@section('content')
<div class="container container-form">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    @if (!Auth::guest())
                        <ul>

                            @foreach ($roles as $rol) 
                                <li> {{ $rol->rol_id }} </li>
                            @endforeach 

                        </ul>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
