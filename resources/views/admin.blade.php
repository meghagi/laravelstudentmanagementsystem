
<?php
// Retrieve user from the session
$user = Session()->get('user');

if ($user) {
    $userEmail = $user->email;
    echo "<h2>Welcome $userEmail</h2>";
} else {
    echo "<h2>Welcome Guest</h2>"; // Assuming guest user when session user is not set
}
?>

 

<html>
<head>
<title>Welcome Admin</title>
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
                <a class="nav-link ms-3 active" href="{{url('/admin1')}}">Home</a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href="{{url('/manageuser')}}">Manage User</a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href="{{url('/manageadmission')}}">Manage Admission</a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href="{{url('/manageteacher')}}">Manage Teacher</a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href="{{url('/managestudent')}}">Manage Student </a>
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
                <a class="nav-link ms-3" href="{{url('/useraccount')}}"><i class="fa fa-user"></i> Profile</a>
            </li>
</div>
</nav>
<div class="container">
     <h1 class="mt-3 text-center">Users of Student CRUD System.</h1>
      <div class="col-lg-12">
	   <h1 style="background-color:lightgrey" align="center"> Display table data</h1>
</div>
<table class="table table-striped table-hover table-bordered">
    <!-- <pre>
    <?php
       // print_r($students1);
        
        $students1 = \DB::table('User1')->where('Role', '!=', 'admin')->get();

    ?>
</pre> -->
<thead>
    <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Role</th>


    </tr>
</thead>
<tbody>
@foreach($students1 as $stud)
    <tr>

        <td>{{$stud->id}}</td>
        <td>{{$stud->email}}</td>
        <td>{{$stud->Role}}</td>
        <td></td>
</tr>
@endforeach
<tbody>

</table>
</div>
</body>