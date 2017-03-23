<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="{{ URL:: asset('css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL:: asset('font-awesome/css/font-awesome.min.css') }}">
</head>
<body><br>
	<form method="POST" action="/add-student">
		{{ csrf_field() }}
		<h2><i class="fa fa-file" aria-hidden="true"></i> Registered Students
		<button class="btn btn-primary" id="reg1" type="submit"><i class="fa fa-plus" aria-hidden="true"></i>
		Add Student</button></h2><br>
		
	</form>
	
	<table>
		<thead>
			<tr>
				<th> Full Name </th>
				<th> Course </th>
				<th> Student Number </th>
				<th> Address </th>
				<th> Guardian </th>
				<th><i class="fa fa-pencil fa-lg" aria-hidden="true"></i></th>
				<th><i class="fa fa-trash fa-lg" aria-hidden="true"></i></th>
			</tr>
		</thead>

		<tbody>
			<?php foreach ($users as $user):
			?>
			<tr>
				<td hidden> <?php echo $user->id ?> </td>
				<td> <?php echo $user->first_name ?> </td>
				<td> <?php echo $user->course ?> </td>
				<td> <?php echo $user->student_number ?> </td>
				<td> <?php echo $user->address ?> </td>
				<td> <?php echo $user->guardian ?> </td>
				<td> 
					<form method="POST" action="/update">
					{{ csrf_field() }}
					<input type="hidden" name="studentid" value="{{$user->id}}">
					<input type="hidden" name="fullname" value="{{$user->first_name}}">
					<input type="hidden" name="course" value="{{$user->course}}">
					<input type="hidden" name="studentnumber" value="{{$user->student_number}}">
					<input type="hidden" name="address" value="{{$user->address}}">
					<input type="hidden" name="guardian" value="{{$user->guardian}}">
					<button class="btn btn-xs btn-primary" >Edit </button>
					</form>
				</td>
				<td>
					<form method="POST" action="/delete/{{$user->id}}">
					{{ csrf_field() }}
					<input type="hidden" name="studentid" value="{{$user->id}}">
					<input type="hidden" name="fullname" value="{{$user->first_name}}">
					<input type="hidden" name="course" value="{{$user->course}}">
					<input type="hidden" name="studentnumber" value="{{$user->student_number}}">
					<input type="hidden" name="address" value="{{$user->address}}">
					<input type="hidden" name="guardian" value="{{$user->guardian}}">
					<button type="submit" class="btn btn-xs btn-danger" href="/delete/{{$user->id}}">Delete</button> 
					</form>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

</body>
</html>