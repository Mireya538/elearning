@extends('layout')

@section('title', 'Home')


@section('content')
    <form role="form" method="post" action="signup" accept-charset="UTF-8">
	    <input type="hidden" name="_token" value="{{ csrf_token() }}">
	    <div class="form-group">
	         <label class="sr-only" for="exampleInputName">Name</label>
	         <input type="text" class="form-control" id="exampleInputName" placeholder="Nombre" required name="nombre">
	    </div>
	    <div class="form-group">
	         <label class="sr-only" for="exampleInputEmail2">Email address</label>
	         <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Email address" required name="email">
	    </div>
	    <div class="form-group">
	         <label class="sr-only" for="exampleInputPassword2">Password</label>
	         <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Clave" required name="password">
	         <div class="help-block text-right"><a href="">Forget the password ?</a></div>
	    </div>
	    <div class="form-group">
	         <button type="submit" class="btn btn-primary btn-block">Sign in</button>
	    </div>
	    <div class="checkbox">
	         <label>
	         <input type="checkbox"> keep me logged-in
	         </label>
	    </div>
	</form>
@endsection