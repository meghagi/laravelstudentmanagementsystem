<html>
<head>
<title>Login Page</title>
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
	<div class="container-fluid bg-light py-3">
		<h1 align="center">Login into your account</h1>

	</div>
    <div class="container">
        <form action="{{ Route('welcome') }}" method="post">
            @csrf
            <div class="form group">
                <label for="Email">Email</label><br><br>
                <input type="Email" class="form-control" name="Email" placeholder="Enter the name"id="uname">
                <span class="text-danger">
                @error('Email')
                         {{$message}}

                    @enderror

                </span>
            </div>
            <br>
            <div class="form group">
                <label for="Password">Password</label><br><br>
                <input type="password"class="form-control" name="pwd" placeholder="Enter the password"id="pwd">
                <span class="text-danger">
                @error('pwd')
                         {{$message}}

                    @enderror

                </span>
            </div>
            </div>
  	<div class="col-sm-6">
	<div class="form-group">
	 <input type="submit" class="btn bg-primary text-white" name="submit" value="Login"style="margin-left: 110px;">

	</div>	
</form>
</div>
</body>
</html>
