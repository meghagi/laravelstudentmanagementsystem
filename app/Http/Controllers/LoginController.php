<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ Users; 
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
    	return view('index1');
    }
    public function reg1()
    {
          return view('registration');
    }
 public function stored(Request $request)
{
    $request->validate([
        'Email' => 'required|Email',
        'pwd' => 'required',
        'cpwd' => 'required',
        'file1'=>'required',
    ]);

    // Retrieve all input data from the request
    $requestData = $request->all();

   $user1= new Users;
   

    // Set attributes on the Student model
    $user1->email = $requestData['Email'];
    $user1->password = $requestData['pwd'];

    // Check if file1 is present in the request
    if ($request->hasFile('file1')) {
        $file1 = $request->file('file1');
        $ext1 = $file1->getClientOriginalExtension();
        $filename1 = time() . '_' . $user1->name . '.' . $ext1;
        $file1->move('uploads/', $filename1);
        $user1->file1 = $filename1; // Save file name to the model attribute
    }

    // Save the Student model
    $user1->save();

    // Redirect back with success message
    return redirect()->back()->with('success', 'Resume Updated Successfully!!');
}
public function login1()
{
    return view('Login');
}
// public function login2(Request $request)
// {
//     $request->validate([
//         'Email' => 'required|Email',
//         'pwd' => 'required',
//         ]) ;

//         print_r($request->all()); 
//         $data = $request->input('Email');
//         $request->session()->put('Email', $data); // Fix typo
//         return redirect('admin1'); // Use return instead of echo
      
        
          
        
// }
public function welcome(Request $request)
    {
        $request->validate([
            'Email' => 'required|email',
            'pwd' => 'required',
        ]);

        $email = $request->input('Email');
        //  $password = $request->input('pwd');

        $user = Users::where('email', $email)->first();
        //dd($user);
        // if (!$user || !password_verify($password, $user->password)) {
        //     return redirect()->back()->with('error', 'Invalid credentials');
        // }

       
        //  if($user)
        //  {
        //      session()->put('user',$user);
        // switch ($user->Role) {
        //     case 'admin':
        //         return redirect()->route('admin1');
        //     case 'admission':
        //         return redirect()->route('admission');
        //     case 'teacher':
        //         return redirect()->route('teacher');
        //     case 'student':
        //         return redirect()->route('student');
        //     default:
        //         return redirect()->back()->with('error', 'Invalid role');
        //     }
        // }
         if ($request->isMethod('post')) {
          

            if($user){
                //dd($user);
                Session::put('user',$user);
                
                // dd(Session::get('user'));
                if($user->Role=='admin'){
                    return redirect()->route('admin2');
                }elseif($user->Role=='admission'){
                    return redirect()->route('admission');
                }elseif($user->Role=='teacher'){
                    return redirect()->route('teacher');
                }elseif($user->Role=='student'){
                    return redirect()->route('student');
                 
                }else{
                    return redirect()->route('login');
                }
            }
    }
}
    public function view()
    {
       
        $students1=Users::all();
    /*echo "<pre>";
          print_r($student);
          echo"</pre>";*/
          //die;
          
          $data =compact('students1');
          return view('admin')->with($data);
    }
    public function logout()
    {
        Session::flush();
        return redirect()->route('login');
    }

    public function admin(){
        if(Session::has('user')){

            return view('admin');
        }else{
            return redirect()->route('login');
        }
    }
    
    public function admission(){
        if(Session::has('user')){
            return view('admission');
        }else{
            return redirect()->route('login');
        }
    }
    public function teacher(){
        if(Session::has('user')){
            return view('teacher');
        }else{
            return redirect()->route('login');
        }
    }
    public function student(){
        if(Session::has('user')){
            return view('student');
        }else{
            return redirect()->route('login');
        }
    }
    public function read($id){
        if(Session::has('user')){
            return view('read', compact('id'));
        }else{
            return redirect()->route('login');
        }
    }
}


