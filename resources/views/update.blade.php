@include('layouts.navbar')
<html>
<head>
<title>Update</title>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

  
<!-- <div class="container-fluid bg-dark py-3">
		<a href="{{url('/login')}}" class="text-white"style="font-style: bold; font-size: 20px;">Student curd System</a>
		<a href="{{url('/login')}}" style="font-style: bold; font-size: 15px; display: inline; margin-left:20px; color:grey;" >Login</a>
		<a href="{{url('/reg')}}" style="font-style: bold; font-size: 15px; display: inline; margin-left:20px; color:grey;" >Register</a>
	</div> -->
 
  <?php
        $user = \DB::table('user1')->where('id',  $id )->first();
        $countries = \DB::table('countries')->get();
        $states = \DB::table('states')->get();
        $cities = \DB::table('cities')->get();
 
 
        ?>
	<div class="container bg-light p-3 ">
    <h1 >Update record</h1>
        <small class="fw-light">Please fill this form and submit to update admission record to the database.</small>
 
        </div>
        
  <div class="container">
  	<form action="{{ Route('saveupdate') }}" method="POST" name="myForm">
  	@csrf
    <div class="form-group">
                    <p>Please fill this form and submit to update admission record to the database.</p>
                    <input type="hidden" name="id" id="id" class="form-control mt-2" value="{{ $user->id }}">

                </div>
                <div class="form-group">
                    <input type="hidden" name="email" id="email" class="form-control" value="{{ $user->email }}">
                </div>
  			<div class="form-group">
  				 <label for="Username">Name:</label>
         <input type="text" class="form-control" id="name" placeholder="Enter name" name="uname"value="{{$user->name}}">
               
          <span class="text-danger">
					@error('uname')
          {{$message}}

          @enderror
				</span>

          
        </div>
         <div class="form-group">
           
            <label for="Country" class="mt-2">Country</label>
            <select type="text" name="country" id="Country" class="form-control mt-2" >
            @foreach($countries as $country)
            <option value="{{ $country->id }}">{{ $country->name }}</option>
            @endforeach
          </select>
          <span class="text-danger">
					@error('country')
          {{$message}}

          @enderror
				</span>
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
  	<div class="col-sm-6">
	<div class="form-group">
	 <input type="submit" class="btn bg-primary text-white" name="submit" value="Submit"style="margin-left: 110px;">
   <a href="{{ Route('manageuser') }}" class="btn btn-secondary ml-2">Cancel</a>

	</div>		
      
</div>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<script>

    $(document).ready(function() {
    $('#country').on('change', function() {
    var country_id = this.value;
    //$("#state").html('');
    $.ajax({
        url: "{{ url('states_by_country') }}",
        type: "POST",
        data: {
            country_id: country_id,
            _token: '{{csrf_token()}}'
        },
        success: function(result){
            $('#state').html('<option value=""> Select State </option>');
            $.each(result, function (key,value) {
                    $("#state").append('<option value="' + value.s_id + '">' + value.state + '</option>');
                });
            $('#city').html('<option value="">Select State First</option>'); 
        }
    });
    });    
    $('#state').on('change', function() {
    var state_id = this.value;
    $.ajax({
        url: "{{ url('cities_by_state') }}",
        type: "POST",
        data: {
            state_id: state_id,
            _token: '{{csrf_token()}}'
        },
        success: function(result){
            $('#state').html('<option value=""> Select State </option>');
            $.each(result, function (key,value) {
                    $("#city").append('<option value="' + value.c_id + '">' + value.city + '</option>');
                });
    }
    });
    });
    });
</script>

</body>