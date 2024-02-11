<html>
<head>
<title>updatestudentadmission</title>

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
            /* #prfa{
                display:none;
            } */
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
            <!-- <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href="{{url('/manageuseradmission')}}">Manage Admission</a>
            </li> -->
            
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
<?php
        $user = \DB::table('user1')->where('id',  $id )->first();
        $countries = \DB::table('countries')->get();
       
        $states = \DB::table('states')->get();
        $cities = \DB::table('cities')->get();
 
        ?>
        <div class="container">
            <h1 class="mt-5">Update Record</h1>



            <form action="{{ Route('saveupdatestudentadmission') }}" method="POST" enctype="multipart/form-data" id="createform">
            @csrf
                <div class="form-group">
                    <p>Please fill this form and submit to update admission record to the database.</p>
                    <input type="hidden" name="id" id="id" class="form-control mt-2" value="{{ $user->id }}">
                </div>
                <div class="form-group">
                    <input type="hidden" name="email" id="email" class="form-control" value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <label for="roll" class="mt-2">Roll No.</label>
                    <input type="text" name="roll" id="roll" class="form-control mt-2" value="{{ $user->rollno }}">
                </div>
                <div class="form-group">
                    <label for="name" class="mt-2">Name</label>
                    <input type="text" name="name" id="name" class="form-control mt-2" value="{{ $user->name }}">
                </div>
                <div class="form-group">
                    <label for="class" class="mt-2">Class</label>
                    <input type="text" name="class" id="class" class="form-control mt-2" value="{{ $user->class }}">
                </div>
                <div class="form-group">
                    <label for="section" class="mt-2">Section</label>
                    <select type="text" name="section" id="section" class="form-control mt-2">
                    <option value="">Select Section</option>
                    <option value="a">A</option>
                    <option value="b">B</option>
                    <option value="c">C</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="country" class="mt-2">Country</label>
                    <select type="text" name="country" id="country" class="form-control mt-2">
                    <option value="">Select Country</option>
                    @foreach($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                <label for="State" class="mt-2">State</label>
            <select type="text" name="State" id="State" class="form-control mt-2">
             @foreach($states as $state)
            <option value="{{ $state->s_id }}">{{ $state->state }}</option>
            @endforeach
          </select>
          <span class="text-danger">
					@error('State')
          {{$message}}

          @enderror
				</span>              
                      
                     </div>
                     <div class="form-group">
           
           <label for="city" class="mt-2">City</label>
           <select type="text" name="City" id="City" class="form-control mt-2">
           @foreach($cities as $city)
           <option value="{{$city->c_id}}">{{$city->city}}</option>
           @endforeach
         </select>
         <span class="text-danger">
                   @error('City')
         {{$message}}

         @enderror
               </span>   
        </div>
        
        
</div>
                
                <div class="mt-3 mb-3">
                    <button type="submit" class="btn btn-primary" id="btnadd">Submit</button>
                    <a href="{{ Route('manageuser') }}" class="btn btn-secondary ml-2">Cancel</a>
                </div>
            </form>
            </div>
        </div>
       