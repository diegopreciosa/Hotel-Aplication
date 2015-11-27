<html>
	<head>
		@include('includes.head')
		
	</head>
	<body>
		<div class="container">
		<div class="row">
		<div class="col-lg-2"></div>
		<div class="col-lg-10" >

					<header class="row">
						@include('includes.header')
					</header>

					<div id="main" class="row">
						@yield('content')
					</div>

					<footer class="row">
						@include('includes.footer')
					</footer>

			</div>
			<div class="col-lg-1"></div>
		</div>
	</div>
	</body>
</html>