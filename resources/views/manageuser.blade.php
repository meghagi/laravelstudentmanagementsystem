
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<style>
            #lgin{
                display:none;
            }
            #reg{
                display:none;
            }
            #brand{
                pointer-events: none;
                cursor: default;
            }
            #mua{
                display:none;
            }
            #msa{
                display:none;
            }
            #msm{
                display:none;
            }
            #hmt{
                display:none;
            }
            #hma{
                display:none;
            }
            #hms{
                display:none;
            }
            #prft{
                display:none;
            }
            #prfa{
                display:none;
            }
            #prfs{
                display:none;
            }
            @media screen and (max-width: 767px){
                #nav1{
                    display:none;
                }
                table thead {
                    display: none;
                }
                table tr {
                    display: flex;
                    flex-direction: column;
                    margin-bottom: 15px;
                    padding: 10px;
                    border-radius: 4px;
                    background-color: #fff;
                    box-shadow: 0 3px 3px rgba(0, 0, 0, 0.2);
                }
                table tbody tr:nth-child(odd) {
                    background-color: #fff;
                }
                table td {
                  padding: 0.25rem;
                }
                table td:nth-child(1) {
                    font-weight: bold;
                    font-size: 1.2em;
                }
                table td:nth-child(2)::before {
                    content: "Email: ";
                }
                table td:nth-child(3)::before {
                    content: "Role: ";
                }
                
                table td::before {
                    font-weight: bold;
                }
            }
            @media screen and (min-width:768px) {
                #nav2{
                    display: none;
                }  
            }  
            </style>
   
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
                <a class="nav-link mr-3 active" href=""></a>
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
<div class="container">
     <h1 class="mt-3 text-center">Users of Student CRUD System.Manage User</h1>
      <div class="col-lg-12">
	   <h1 style="background-color:lightgrey" align="center"> Display table data</h1>
</div>
<br><br>
        <?php
        $users = \DB::table('user1')->where('Role', '!=', 'admin')->get();
        ?>
<table class="table table-striped table-hover table-bordered">
<thead>
    <tr>
        <th>ID</th>
        <th>Email</th>
        <th>View</th>
        <th>Edit</th>
        <th>Delete</th>
        <th>ChangeRole</th>

    </tr>
    <thead>
    <tbody>
    @foreach($users as $user1)
            <tr>
                <td>{{ $user1->id }}</td>
                <td>{{ $user1->email }}</td>
                <td>
                    <a href="{{Route('read',['id'=>$user1->id])}}" class="mr-3 btn btn-secondary" title="View Details" data-toggle="tooltip">
                        <span class="fa fa-eye"></span>
                    </a>
                </td>
                <td>
                    <a href="{{Route('update',['id'=>$user1->id])}}" class="mr-3 btn btn-secondary" title="Edit Details" data-toggle="tooltip">
                        <span class="fa fa-pencil">Edit</span>
                    </a>
                </td>
                <td>
                    <!-- <a href="javascript:void(0)" title="Change Status" class="mr-3 btn btn-secondary delete_btn_ajax btn" data-toggle="tooltip" style="background-color:red">
                        <span class="fa fa-trash" style="background-color:red"></span>
                    </a> -->
                   
                        <a href="javascript:void(0)" title="Change Status" id="{{ $user1->id }}" class="delete_btn_ajax btn btn-danger" data-toggle="tooltip"><span class="fas fa-trash"></span></a><input type="hidden" class="delete_id_value" value='{{$user1->id}}'></td>
                    </a>
                </td>
                
                <td>Change role to: <a href="javascript:void(0)" title="Change Status" id="{{ $user1->id }}" class="student_btn_ajax btn btn-success ms-3 mt-2" data-toggle="tooltip">Student</a><input type="hidden" class="student_id_value" value='{{$user1->id}}'>
                                            <a href="javascript:void(0)" title="Change Status" id="{{ $user1->id }}" class="admission_btn_ajax btn btn-success ms-3 mt-2" data-toggle="tooltip">Admission</a><input type="hidden" class="admission_id_value" value='{{$user1->id}}'>
                                            <a href="javascript:void(0)" title="Change Status" id="{{ $user1->id }}" class="teacher_btn_ajax btn btn-success ms-3 mt-2" data-toggle="tooltip">Teacher</a><input type="hidden" class="teacher_id_value" value='{{$user1->id}}'></td>

                </td>
            </tr>
            @endforeach
</tbody>

</table>
<script>
            $(document).ready(function(){
                $('.delete_btn_ajax').click(function(e){
                    e.preventDefault();
                    var deleteid = $(this).attr('id');
                    console.log(deleteid);
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
                $(document).ready(function(){
                $('.student_btn_ajax').click(function(e){
                    e.preventDefault();
                    var statusid = $(this).attr('id');
                    console.log(statusid);
                    var url = "{{ route('change', ':id') }}";
                    var table_row = $(this).closest('tr');
                    swal.fire({
                        title: 'Are you Sure?',
                        text: 'You want to change role.',
                        icon: 'warning',
                        showCancelButton: true,
                        cancelButtonColor: '#9A2124',
                        confirmButtonColor: '#34A853',
                        confirmButtonText: 'Yes, Change it!'
                    }).then((result)=>{
                        if(result.isConfirmed){
                            $.ajax({
                                type: "POST",
                                url: url.replace(':id', statusid),
                                data:{
                                    student_id: statusid,
                                    student_btn_set: 1,
                                    _token: '{{ csrf_token() }}',
                                },
                                success: function(response) {
                                    console.log("here");
                                    swal.fire(
                                        'Changed!',
                                        'Your status has been changed.',
                                        'success'
                                    ).then((result)=>{
                                        window.location.reload();
                                    });

                                } 
                            });
                        }
                    })
                    });
                });
                $(document).ready(function(){
                $('.admission_btn_ajax').click(function(e){
                    e.preventDefault();
                    var statusid = $(this).attr('id');
                    console.log(statusid);
                    var url = "{{ route('change', ':id') }}";
                    var table_row = $(this).closest('tr');
                    swal.fire({
                        title: 'Are you Sure?',
                        text: 'You want to change role.',
                        icon: 'warning',
                        showCancelButton: true,
                        cancelButtonColor: '#9A2124',
                        confirmButtonColor: '#34A853',
                        confirmButtonText: 'Yes, Change it!'
                    }).then((result)=>{
                        if(result.isConfirmed){
                            $.ajax({
                                type: "POST",
                                url: url.replace(':id', statusid),
                                data:{
                                    admission_id: statusid,
                                    admission_btn_set: 1,
                                    _token: '{{ csrf_token() }}',
                                },
                                success: function(response) {
                                    console.log("here");
                                    swal.fire(
                                        'Changed!',
                                        'Your status has been changed.',
                                        'success'
                                    ).then((result)=>{
                                        window.location.reload();
                                    });

                                } 
                            });
                        }
                    })
                    });
                });  
                
                $(document).ready(function(){
                $('.teacher_btn_ajax').click(function(e){
                    e.preventDefault();
                    var statusid = $(this).attr('id');
                    var url = "{{ route('change', ':id') }}";
                    var table_row = $(this).closest('tr');
                    swal.fire({
                        title: 'Are you Sure?',
                        text: 'You want to change role.',
                        icon: 'warning',
                        showCancelButton: true,
                        cancelButtonColor: '#9A2124',
                        confirmButtonColor: '#34A853',
                        confirmButtonText: 'Yes, Change it!'
                    }).then((result)=>{
                        if(result.isConfirmed){
                            $.ajax({
                                type: "POST",
                                url: url.replace(':id', statusid),
                                data:{
                                    teacher_id: statusid,
                                    teacher_btn_set: 1,
                                    _token: '{{ csrf_token() }}',
                                },
                                success: function(response) {
                                    console.log("here");
                                    swal.fire(
                                        'Changed!',
                                        'Your status has been changed.',
                                        'success'
                                    ).then((result)=>{
                                        window.location.reload();
                                    });

                                } 
                            });
                        }
                    })
                    });
                });    

           
    </script>
</body>