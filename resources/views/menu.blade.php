<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title></title>
	<link rel="stylesheet" href="{{url('public/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{url('public/css/font-awesome.min.css')}}">
</head>
<body>
 
<div class="container">
	<nav class="navbar navbar-default" role="navigation">
		 <ul class="nav navbar-nav navbar-left">
			@foreach($categories as $item)
			@if($item->children->count() > 0)
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					{{$item->title}}
					<b class="caret"></b></a>
					<ul class="dropdown-menu">
						@foreach($item->children as $submenu)
						<li><a href="#">{{$submenu->title}}</a></li>
						@endforeach
					</ul>
				</li>
				@else
				<li><a href="">{{$item->title}}</a></li>
				@endif
				@endforeach
			</ul>
		</nav>
</div>
 
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
	<script src="{{url('public/js/bootstrap.min.js')}}"></script>
 
</body>
</html>