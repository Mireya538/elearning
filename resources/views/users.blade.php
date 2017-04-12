@extends('layout.app')

@section('nav')
    @if (!Auth::guest())
        <li><a class="activate" href="{{ url('/admin') }}" ><i class="fa fa-cog"></i> Admin </a></li>
        <!-- <li><a href="{{ route('login') }}"><i class="fa fa-pencil-square-o"></i> Editor </a></li>
        <li><a href="{{ route('login') }}"><i class="fa fa-cog"></i> Moderador </a></li> -->
    @endif
@endsection

@section('header')
    @if (!Auth::guest())
    <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/project-4.jpg); height: 150px;" data-stellar-background-ratio="0.5"></header>
	

    @else

	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/img_bg_1.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>404</h1>
							<h2>Please return to the <a href="index"> main page.</a></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
    @endif
@endsection


@section('container')
    @if (!Auth::guest())

	<!-- <div id="fh5co-counter" class="fh5co-bg-section"> -->
		<div class="container col-md-12 col-sm-12">
			<div class="row animate-box col-md-12 col-sm-12">
				<div class="col-md-12">
					<h1>Users list</h1>
					<table class="table table-responsive table-hover table-inverse">
	                    <thead>
	                        <tr>
	                            <th></th>
	                            <th>Name</th>
	                            <th>Email</th>
	                            <th>Gender</th>
	                            <th>Country</th>
	                            <th>Save</th>
	                            <th>Remove</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                        <tr>
	                            <form>
							            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
	                            <td id="btn-clear"><a href="#"> Clear </a></td>
	                            <td><input id="id" value="" hidden></input>
	                            	<input id="name" type="text" required placeholder="Alex"></input></td>
	                            <td><input id="email" type="email" required placeholder="example@gmail.com"></input></td>
	                            <td><select id="gender">
	                            	<option value="Male">Male</option>
	                            	<option value="Female">Female</option></select></td>
	                            <td><input id="country" type="text" required placeholder="Costa Rica"></input></td>
	                            <td>
		                            	<button type="submit" id="add_user" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i></button>
		                            </form>
		                        </td>
	                            <td>
		                            <form>
		                            	<button type="submit" id="delete_user" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true" style=""></i></button>
		                            </form>
	                            </td>
	                        </tr>
	                        <tr>
	                            <th>#</th>
	                            <th>Name</th>
	                            <th>Email</th>
	                            <th>Gender</th>
	                            <th>Country</th>
	                            <th>Rols</th>
	                            <th>Select</th>
	                        </tr>
	                    @foreach ($users as $u) 
	                        <tr>
	                            <td name="id" scope="row"> {{ $u->id }} </td>
	                            <td name="name"> {{ $u->nombre }} </td>
	                            <td name="email"> {{ $u->email }} </td>
	                            <td name="gender"> {{ $u->genero }} </td>
	                            <td name="country"> {{ $u->pais }} </td>
	                            <td name="roles"> Roles... </td>
	                            <td class="btn-edit-rule"> <a href="#" class="btn btn-info"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a> </td>
	                        </tr>
	                    @endforeach 
	                    </tbody>
	                </table>
				</div>
			</div>
		</div>
	<!-- </div> -->
    @endif

@endsection

@section('script')
	<script src="../js/usercrud.js"></script>

@endsection
