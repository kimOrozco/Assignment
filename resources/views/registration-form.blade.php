<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="{{ URL:: asset('font-awesome/css/font-awesome.min.css') }}">
</head>
<body>

<div id="content">

<div class="head"><i class="fa fa-user" aria-hidden="true"></i> Student - Sign Up</div><hr>

<form method="POST" action="/student-reg">

	{{ csrf_field() }}
	<div class="text">
		Full Name &nbsp; <input type="text" class="size" name="first_name"><br><br>
		Course &nbsp; <input type="text" class="size" name="course"><br><br>
		ID Number &nbsp; <input type="number" class="size" name="student_number" ><br><br>
		Address &nbsp; <textarea type="text" class="size1" name="address"></textarea><br><br>
		Guardian &nbsp; <input type="text" class="size" name="guardian"><br><br>
		<button class="btn btn-primary" type="submit" id="reg" value="Register">Register</button>
	</div>
</form>
</div>
</body>
</html>



