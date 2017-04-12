@extends('layout.app')

@section('nav')
    @if (!Auth::guest())
        @foreach ($grant_roles as $grant_rol) 
            @if ($grant_rol->rol_id == 1)
                <li>
                    <a href="{{ url('/admin') }}" >
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

@section('header')
    <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/project-9.jpg); height: 150px;" data-stellar-background-ratio="0.5"></header>
@endsection
