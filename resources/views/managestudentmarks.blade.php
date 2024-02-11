<html>
<head>
<title>Manage Student Mark</title>
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
                <a class="nav-link ms-3 active" href="{{url('/teacher')}}">Home</a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href="{{url('/managestudentmarks')}}">Manage Student Marks</a>
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
                <a class="nav-link ms-3" href="{{url('/useraccountteacher')}}"><i class="fa fa-user"></i> Profile</a>
            </li>
</div>
</nav>
<div class="container">
     <h1 class="mt-3 text-center">Users of Student CRUD System.</h1>
      <div class="col-lg-12">
	   <h1 style="background-color:lightgrey" align="center"> student marks</h1>
</div>
<body>
        
        <div class="container">
            <h1 class="mt-3 text-center">Update Students Marks.</h1>
        </div>
        <br><br>
        <?php
        $crud = \DB::table('user1')->where('Role', 'student')->get();
        $user = Session::get('user');
        $name = $user->name;
        print_r($name);
        ?>
        <div class="container">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>ID</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Class</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($crud as $one)
                <!-- {{$crud}}
              -->
                    <?php
                    $class = $one->class;
                    print_r($class);
                    if($class){
                        $row = \DB::table('classes')->where('class', $class)->first(); 
                       print_r($row);
                      
                        $p = $row->physics;
                        //print_r($p);
                       
                        $c = $row->chemistry;
                        //print_r($p);
                        $m = $row->maths;
                       print_r($m);
                        $s = $row->science;
                        //print_r($s);
                        $h = $row->hindi;
                        $e = $row->english;
                    }
                    ?>
                  @if($class && ($p==$name  or  $c==$name  or  $m==$name  or $s==$name  or  $h==$name  or $e==$name) )
                        <tr class="text-center">
                            <td>{{$one->id}}</td>
                            <td>{{$one->email}}</td>
                            <td>{{$one->Role}}</td>
                            <td>{{$one->class}}</td>   
                    <td><a href="{{ Route('updatestudentmarks', ['id'=>$one->id]) }}" class="btn btn-secondary" title="Update Details" data-toggle="tooltip">Update Marks</a></td>
                        </tr>
                
                    @endif
                    
                    @endforeach

               
</tbody>
            </table>
        </div>
</body>
<html>            