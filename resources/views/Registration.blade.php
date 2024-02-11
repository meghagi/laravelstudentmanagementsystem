<html>
<head>
<title>Registration Page</title>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

	<div class="container-fluid bg-dark py-3">
		<a href="{{url('/login')}}" class="text-white"style="font-style: bold; font-size: 20px;">Student curd System</a>
		<a href="{{url('/login')}}" style="font-style: bold; font-size: 15px; display: inline; margin-left:20px; color:grey;" >Login</a>
		<a href="{{url('/reg')}}" style="font-style: bold; font-size: 15px; display: inline; margin-left:20px; color:grey;" >Register</a>
	</div>
	<div class="container-fluid">
		<h1 align="center">Register into your account</h1>

	</div>
	<div class="container">
		<form action="{{url('/registed')}}" name="myForm" method="post" enctype="multipart/form-data">
    @csrf
    
		<div class="form-group">
			<label for="Email">Email:</label>
			
				<input type="Email" class="form-control" placeholder="Enter the Username" name="Email"id="Email">
				   <small class="fw-light">We'll never share your email with anyone else.</small><br>

				<span class="text-danger">
					 <!-- @error('Email')
                         {{$message}}

                    @enderror -->
					
				</span>

		
		</div>
		<div class="form-group">
			<label for="Username">Password:</label>
			
				<input type="password" class="form-control" placeholder="Enter the password" name="pwd"id="pwd1">
				   
				       
				<span class="text-danger">
					@error('pwd')
                         {{$message}}

                    @enderror
				</span>

		
		</div>
		<div class="form-group">
			<label for="Username">Confirm Password:</label>
			
				<input type="password" class="form-control" placeholder="Enter the confirmpassword" name="cpwd"id="cpwd1">
				   
				       
				<span class="text-danger">
					@error('cpwd')
                         {{$message}}

                    @enderror
				</span>

		
		</div>
		<div class="form-group">
			<label for="upload">Upload</label>
			
				<input type="file" class="form-control"  name="file1"id="file1">
				   			       
				<span class="text-danger">
					@error('file1')
                         {{$message}}

                    @enderror
				</span>

		
		</div>
		<input type="submit" class="btn btn-primary" value="submit"name="submit"id="submit1">
	</form>
	</div>

	</body>
</html>