@layout('layouts.default')
@section('content')
	<h1>Editing{{ $students->first_name}}</h1>
	{{ Form::open( ) }}