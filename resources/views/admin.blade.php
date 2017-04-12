@extends('home')

@section('header')
	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/img_bg_2.jpg); height: 250px;" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<!-- <div class="container"> -->
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t" style="height: 50px;">
						<div class="display-tc animate-box" style="margin-top: 95px; height: 50px;" data-animate-effect="fadeIn">
							<h1>Site Management</h1>
							<!-- <h2>Free html5 templates Made by <a href="http://freehtml5.co" target="_blank">freehtml5.co</a></h2> -->
						</div>
					</div>
				</div>
			</div>
		<!-- </div> -->
	</header>
@endsection

@section('container')
	<div id="fh5co-counter" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-3 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="{{ url('/users') }}"><img src="../images/project-1.jpg" alt="" class="img-responsive">
						<h3>Users</h3>
						<span>Manage Users</span>
					</a>
				</div>
				<div class="col-md-3 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="../images/project-2.jpg" alt="" class="img-responsive">
						<h3>Courses</h3>
						<span>Manage Courses</span>
					</a>
				</div>
				<div class="col-md-3 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="../images/project-3.jpg" alt="" class="img-responsive">
						<h3>Rols</h3>
						<span>Manage Rols</span>
					</a>
				</div>
				<div class="col-md-3 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="../images/project-9.jpg" alt="" class="img-responsive">
						<h3>Granted Rols</h3>
						<span>Manage Granted Rols</span>
					</a>
				</div>
			</div>
		</div>
	</div>

@endsection

