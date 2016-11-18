<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Blog Post Ajax Crud</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
		<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" type="text/css">
		<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" type="text/css">
		<link rel="stylesheet" href="{{ asset('/css/myproject.css') }}" type="text/css">
		
    </head>
    <body>
		<div class="container">
			<div class="row">
				<div id="content" class="col-md-12">
				@yield('content')
				</div>
			</div>
		</div>
    </body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="{{ asset('/js/checklist.js') }}"  ></script>
	<script src="{{ asset('/js/bootstrap.min.js') }}"  ></script>
	<script src="{{ asset('/js/jquery.jeditable.mini.js') }}"  ></script>
	
</html>
