<html>
<head>
<title>admission</title>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<nav class="navbar navbar-expand bg-dark navbar-dark" id="nav1">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item" id="brand">
                <a class="navbar-brand" href="{{url('/login')}}">Student CRUD System</a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href="{{url('/admin2')}}">Home</a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href="{{url('/manageuseradmission')}}">Manage User Admission</a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href=""></a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href=""></a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href=""></a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link mr-3 active" href=""></a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link mr-3 active" href=""></a>
            </li>
             <li class="nav-item" id="lgout">
                <a class="nav-link ms-3" href="{{url('/login')}}"><i class="fa fa-sign-out"></i>Logout</a>
            </li>
            <li calss="nav-item" id="prfa">
                <a class="nav-link ms-3" href="{{url('/useraccountadmission')}}"><i class="fa fa-user"></i> Profile</a>
            </li>
</div>
</nav>

<div class="container">
     <h1 class="mt-3 text-center">Users of Student CRUD System.</h1>
      <div class="col-lg-12">
	   <h1 style="background-color:lightgrey" align="center"> admission detail</h1>
</div>

    
        
        <div class="container">
            <h1 class="mt-3 text-center">Admission Detail.</h1>
        </div>
        <br><br>
        <div class="container">
            <?php
                $user = Session::get('user');
            
        $crud = \DB::table('user1')->where('Role', 'student')->orwhere('Role', 'user')->get();
        ?>
        <div class="container">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Role</th>
                    </tr>
                    @foreach($crud as $one)
                    <tr>
                        <td>{{$one->id}}</td>
                        <td>{{$one->email}}</td>
                        <td>{{$one->Role}}</td>
                    </tr>
                    @endforeach
                </thead>
            
        </div>
    </body>
</html>
