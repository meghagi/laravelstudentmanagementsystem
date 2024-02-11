<html>
<head>
<title>Manage User</title>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<?php
        $user1= \DB::table('user1')->where('id',  $id )->first();
        // dd($crud);
        ?>
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
                <a class="nav-link ms-3 active" href="{{url('/managestudent')}}">Manage Student</a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link mr-3 active" href="{{url('/manage_student_admission')}}">ManageStudentAdmission</a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link mr-3 active" href=""></a>
            </li>
             <li class="nav-item" id="lgout">
                <a class="nav-link ms-3" href="{{url('/logout')}}"><i class="fa fa-sign-out"></i>Logout</a>
            </li>
            <li calss="nav-item" id="prfa">
                <a class="nav-link ms-3" href="profile.php"><i class="fa fa-user"></i> Profile</a>
            </li>
</div>
</nav>
<br>
<table class="table table-striped table-hover table-bordered">
<thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Country</th>
        <th>State</th>
        <th>City</th>
        <th>Image</th>

    </tr>
</thead>
    <tbody>
    <td>{{ $user1->id }}</td>
                            <td>{{ $user1->name }}</td>
                            <td>{{ $user1->country }}</td>
                            <td>{{ $user1->state }}</td>
                            <td>{{ $user1->city }}</td>
                            <td>{{ $user1->file1 }}</td>
</tbody>
</table>
</body>
</html>