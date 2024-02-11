<html>
<head>
<title>ManageStudentAdmission</title>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
   

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

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
            <!-- <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href="{{url('/manageuser')}}">Manage User</a>
            </li> -->
            <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href="{{url('/manageuseradmission')}}">Manage Admission</a>
            </li>
            
            <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href="{{url('/managestudentadmission')}}">Manage Student Admission</a>
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
            <h1 class="mt-3 text-center">Manage student .</h1>
        </div>
        <br><br>
        <div class="container">
            <?php
          $crud = \DB::table('user1')->where('Role', 'student')->get();     
            
       
        ?>
        <div class="container">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Role</th>
                    </tr>
                 </thead>
                 <tbody>
@foreach($crud as $stud)
    <tr>

        <td>{{$stud->id}}</td>
        <td>{{$stud->email}}</td>
        <td>{{$stud->Role}}</td>
        <td></td>
</tr>
@endforeach
                               </tbody>
            
        </div>
    </body>
</html>
