<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@extends('template.index')
	@section('content')
		@if(count($no_telp) > 0)
		<ul>
			@foreach($no_telp as $value)
				<li>{{ $value }}</li>
			@endforeach
		</ul>
		@endif
	@stop
</body>
</html>