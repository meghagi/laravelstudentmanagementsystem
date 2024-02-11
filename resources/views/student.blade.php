<html>
<head>
<title>Student</title>
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
                <a class="nav-link ms-3 active" href="{{url('/student')}}">Home</a>
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
                <a class="nav-link ms-3" href="{{url('/useraccountstudent')}}"><i class="fa fa-user"></i> Profile</a>
            </li>
</div>
</nav>
<div class="container">
     <h1 class="mt-3 text-center">Users of Student CRUD System.</h1>
      <div class="col-lg-12">
	   <h1 style="background-color:lightgrey" align="center"> Student detail</h1>
</div>

    
        
        <div class="container">
            <h1 class="mt-3 text-center">Students Detail.</h1>
        </div>
        <br><br>
        <div class="container">
            <?php
                $user = Session::get('user');
                $student = \DB::table('student_marks')->where('name',$user->name)->first();
            ?>
                <table class="table table-striped table-bordered">
                    <thead>
                        <th>ID</th>
                        <th>name</th>
                        <th>Role</th>
                    </thead>
                    <tbody>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->Role }}</td>
                    </tbody>
                </table>
        </div>
        <br><br><br>
        <div class="container">
            <h2>Marksheet</h2>
        </div>
        <div class="container">
            <table class="table table-striped table-bordered">
                <thead>
                    <th>Name</th>
                    <th>Physics</th>
                    <th>Chemistry</th>
                    <th>Maths</th>
                    <th>Science</th>
                    <th>Hindi</th>
                    <th>English</th>
                </thead>
                <tbody>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->physics }}</td>
                    <td>{{ $student->chemistry }}</td>
                    <td>{{ $student->maths }}</td>
                    <td>{{ $student->science }}</td>
                    <td>{{ $student->hindi }}</td>
                    <td>{{ $student->english }}</td>
                </tbody>
            </table>
        </div>

    </body>
</html>

