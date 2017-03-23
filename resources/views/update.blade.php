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

<div class="head">Update Information</div><hr><br>


<form method="POST" action="/edit/{{$id}}">
{{ csrf_field() }}
	<div class="text">
	<input type="hidden" name="studentid" value="{{$id}}">
	Full Name: &nbsp;<input type="text" name="fullname" value="{{$first_name}}"><br><br>
	Course: &nbsp;<input type="text" name="course" value="{{$course}}"><br><br>
	ID Number: &nbsp; <input type="text" name="studentnumber" value="{{$student_number}}"><br><br>
	Address: &nbsp; <input type="text" name="address" value="{{$address}}"><br><br>
	Guardian: &nbsp; <input type="text" name="guardian" value="{{$guardian}}"><br><br>
	<button type="submit" id="reg" class="btn btn-primary"><i class="fa fa-check" aria-hidden="true"></i>
	Done</button></div>
</form>
</div>
</body>
</html>
