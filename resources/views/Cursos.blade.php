<!DOCTYPE html>
<html>
<head>
	<title>Cursos</title>
</head>
<body>


	<ul>

	@foreach ($cursos as $curso) 
		<li> {{ $curso->nombre }} </li>
	@endforeach	

	</ul>


</body>
</html>