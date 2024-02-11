@include('layouts.navbar')
<html>
<head>
<title>Manageadmission</title>
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
<div class="container">
     <h1 class="mt-3 text-center">Users of Student CRUD System.</h1>
      <div class="col-lg-12">
	   <h1 style="background-color:lightgrey" align="center"> Admission detail</h1>
</div>
<!-- <nav class="navbar navbar-expand bg-dark navbar-dark" id="nav1">
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
                <a class="nav-link mr-3 active" href="">ManageStudentAdmission</a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link mr-3 active" href=""></a>
            </li>
             <li class="nav-item" id="lgout">
                <a class="nav-link ms-3" href="{{url('/login')}}"><i class="fa fa-sign-out"></i>Logout</a>
            </li>
            <li calss="nav-item" id="prfa">
                <a class="nav-link ms-3" href="profile.php"><i class="fa fa-user"></i> Profile</a>
            </li>
</div>
</nav>

     -->
        
        <div class="container">
            <h1 class="mt-3 text-center">Admission Detail.</h1>
        </div>
        <br><br>
        <div class="container">
            <?php
               
            
        $crud = \DB::table('user1')->where('Role', 'admission')->get();
        ?>
        <div class="container">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>View</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    @foreach($crud as $one)
                    <tr>
                        <td>{{$one->id}}</td>
                        <td>{{$one->email}}</td>
                        <td>{{$one->Role}}</td>
                        
                        <td>
                    <a href="{{Route('read',['id'=>$one->id])}}" class="mr-3 btn btn-secondary" title="View Details" data-toggle="tooltip">
                        <span class="fa fa-eye"></span>
                    </a>
                </td>
                <td>
                    <a href="{{Route('update',['id'=>$one->id])}}" class="mr-3 btn btn-secondary" title="Edit Details" data-toggle="tooltip">
                        <span class="fa fa-pencil"></span>
                    </a>
                </td>
                <td>
                   <a href="javascript:void(0)" title="Change Status" id="{{ $one->id }}" class="delete_btn_ajax btn btn-danger" data-toggle="tooltip"><span class="fas fa-trash"></span></a><input type="hidden" class="delete_id_value" value='{{$one->id}}'></td>

                </td>
               
                    </tr>
                    @endforeach
                </thead>
               
        </div>
       <script>
            $(document).ready(function(){
                $('.delete_btn_ajax').click(function(e){
                    e.preventDefault();
                    var deleteid = $(this).attr('id');
                    var url = "{{ route('delete', ':id') }}";
                    var table_row = $(this).closest('tr');
                    swal.fire({
                        title: 'Are you Sure?',
                        text: 'You want be able to revert back.',
                        icon: 'warning',
                        showCancelButton: true,
                        cancelButtonColor: '#9A2124',
                        confirmButtonColor: '#34A853',
                        confirmButtonText: 'Yes, Delete it!'
                    }).then((result)=>{
                        if(result.isConfirmed){
                            $.ajax({
                                type: "GET",
                                url: url.replace(':id',deleteid),
                                data:{
                                    _token: '{{ csrf_token() }}',
                                    delete_id: deleteid,
                                    
                                },
                                success: function(response) {
                                    console.log("here");
                                    swal.fire(
                                        'Deleted!',
                                        'Your record has been deleted.',
                                        'success'
                                    ).then((result)=>{
                                        table_row.remove();
                                    });

                                } 
                            });
                        }
                    })
                    });
                });    

    </script>

    
    </body>
</html>

    