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

<body>
        <?php
            $student = \DB::table('user1')->where('id',$id)->first();
            $class = $student->class;
            $row = \DB::table('classes')->where('class', $class)->first();
            $user = Session::get('user');
            $name = $user->name;

        ?>
<div class="container">
     <h1 class="mt-3 text-center">Users of Student CRUD System.</h1>
      <div class="col-lg-12">
	   <h1 style="background-color:lightgrey" align="center">Update student marks</h1>
</div>
<div class="container">
            <h1 class="mt-5">Update Marks</h1>

                <form action="{{ Route('savemarks') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <p>Please fill this form and submit to update student marks to the database.</p>
                        <input type="hidden" name="email" id="email" class="form-control mt-2" value="{{ $student->email }}">
                    </div>
                    <?php
                    if($row->physics==$name){
                    ?>
                    <div class="form-group">
                        <label for="physics" class="mt-2">Physics</label>
                        <input type="number" name="physics" id="physics" class="form-control mt-2"  required>
                    </div>
                    <?php
                    }
                    ?>
                     <?php
                    if($row->chemistry==$name){
                    ?>
                    <div class="form-group">
                        <label for="chemistry" class="mt-2">chemistry</label>
                        <input type="number" name="chemistry" id="chemistry" class="form-control mt-2"  required>
                    </div>
                    <?php
                    }
                    ?>
                     <?php
                    if($row->maths==$name){
                    ?>
                    <div class="form-group">
                        <label for="maths" class="mt-2">maths</label>
                        <input type="number" name="maths" id="maths" class="form-control mt-2"  required>
                    </div>
                    <?php
                    }
                    ?>
                     <?php
                    if($row->science==$name){
                    ?>
                    <div class="form-group">
                        <label for="science" class="mt-2">science</label>
                        <input type="number" name="science" id="science" class="form-control mt-2"  required>
                    </div>
                    <?php
                    }
                    ?>
                     <?php
                    if($row->hindi==$name){
                    ?>
                    <div class="form-group">
                        <label for="physics" class="mt-2">hindi</label>
                        <input type="number" name="hindi" id="hindi" class="form-control mt-2"  required>
                    </div>
                    <?php
                    }
                    ?>
                     <?php
                    if($row->english==$name){
                    ?>
                    <div class="form-group">
                        <label for="english" class="mt-2">english</label>
                        <input type="number" name="english" id="english" class="form-control mt-2"  required>
                    </div>
                    <?php
                    }
                    ?>
                      <div class="mt-3 mb-3">
                    <button type="submit" class="btn btn-primary" id="btnadd">Submit</button>
                   <!-- <a href="{{ Route('managestudentmarks') }}" class="btn btn-secondary ml-2">Cancel</a> -->
                </div>
            </form>
 </div>

</body>
<html>