<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="{{ URL:: asset('font-awesome/css/font-awesome.min.css') }}">
</head>

<body><div id="content1">
<div class="head"><i class="fa fa-check fa-lg" aria-hidden="true"></i> Registration Complete </div><hr>
<br>
<div class="textA">
	Full Name: &nbsp; <?php echo $first_name ?><br>
	Course: &nbsp; &nbsp; <?php echo $course ?><br>
	ID Number: &nbsp; <?php echo $student_number ?><br>
	Address: &nbsp; <?php echo $address ?><br>
	Guardian: &nbsp; <?php echo $guardian ?><br>

</div>

<form method="POST" action="/show-list">
{{ csrf_field() }}<br><br>
	<button class="btn btn-primary" id="btn1" type="submit">Show Students</button>
</form>
</div>
</body>
</html>
