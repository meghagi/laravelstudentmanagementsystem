<!DOCTYPE html>
<html>
<head>
    
    

    <title>Customer Table</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>
<body>

<div class="container-fluid bg-dark p-3">
  <a href=""class="text-white">Student Curd</a>

</div>
<div class="container bg-light p-3 ">
        <h1 class="text-center">Welcome to the student CRUD System</h1>
        </div>
        <div class="container bg-light p-3">
    <table class="table table-striped table-border p-3" >
        <thead>
            <tr>
            <th>Registered User</th>
            <th>New User</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <div class="p-3">
                       <a href="{{ url('/login') }}"><button class="btn bg-primary text-white">LogIn</button></a>

                    </div>
            </td>

            <td>
                <div class="p-3">
                        <a href="{{url('/reg')}}"><button class="btn bg-primary text-white ">SignUp</button></a>
                    </div>
            </td>
        </tr>
        </tbody>
    </table>
 </div>

</body>
</html>