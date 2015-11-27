<html>
	<head>
		<title>Laravel</title>
		<link rel="stylesheet" type="text/css" href="{!! URL::asset('bootstrap/css/bootstrap.min.css') !!}" />
		
			</head>
	<body>
		<div class="container">
			
			
			<div class="row col-lg-5">
				<h2>Get Request</h2>
				<button type="button" class="btn btn-warning" id="getRequest">GetRequest</button>
			</div>
			
			<div class="row col-lg-5">
				<h2>Register Form</h2>
				<form id="register">
					<label for="firstname"></label>
					<input type="text" id="firstname" class="form-control" />
					
					<label for="lastname"></label>
					<input type="text" id="lasttname" class="form-control" />
					<br> 
					<input type="submit" value="Register" class="btn btn-primary"  />
				</form>
			</div>
		</div>
		<div id="getRequestData"></div>
		<script type="text/javascript" src="{!! asset('js/jquery-1.11.3.js') !!}"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('#getRequest').click(function(){
					$.get('getRequest',function(data) {
						$('#getRequestData').append(data); 
						console.log(data);
					  
					});				  
				});
			  
			});
			
		</script>
	</body>
</html>
