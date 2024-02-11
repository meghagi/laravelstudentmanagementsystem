<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\ Users;
use App\Models\ Countries;
use App\Models\ Cities;
use App\Models\ States;
use App\Models\ classes;
use App\Models\student_marks;

class HomeController extends Controller
{
    
    public function index()
    {
    return view('manageuser');
    }
    public function manage_user(){
        if(Session::has('user')){
            $user = Session::get('user');
            if($user->Role=='admin'){
                return view('manageuser');
            }else{
                return redirect()->route('login');
            }
        }else{
            return redirect()->route('login');
        }
    }
//     public function manageUser()
// {
//     $users =Users::all(); // Assuming User is your model

//     $data =compact('users');
//           return view('manageuser')->with($data);
// }
public function read($id){
    
    if(Session::has('user')){
        return view('read', compact('id'));
    }else{
        return redirect()->route('login');
    }
}
public function update($id, Request $request)
{
    
    // $request->validate([
    //     'name'=>'required',
    //     'country'=>'required',
    //     'State'=>'required',

    // ]);
   
    if(Session::has('user')){
        $user = Session::get('user');
        if($user->Role=='admin'){
            return view('update', compact('id'));
        }else{
            return redirect()->route('login');
        }        
    }else{
        return redirect()->route('login');
    }
    $request->validate([
        'name' => 'required',
        'country' => 'required',
        'State' => 'required', // Assuming 'state' is the correct field name
    ]);
}
public function saveupdate(Request $request)
{
    //dd($request->all());
    $request->validate([
        'uname' => 'required',
        'country' => 'required',
        'State' => 'required', // Assuming 'state' is the correct field name
        'City'=>'required',
    ]);
  
    $user = Users::where('email', $request->email)->first();
        $user->name = $request->uname;
       
        $country = Countries::where('id', $request->country)->first();
        $country = json_decode($country);
        $user->country = $country->name;
        $state = States::where('s_id', $request->state)->first();
        $state = json_decode($state);
        // $user->state = $state->state;
        $city = Cities::where('c_id', $request->city)->first();
        $city = json_decode($city);
        
        $user->save();
        return redirect()->route('manageuser');
 
}
public function states_by_country(Request $request){
    $state = States::where('country_id', $request->country_id)->get();
    return response(json_decode($state));

}

public function cities_by_state(Request $request){
    $city = Cities::where('state_id', $request->state_id)->get();
    return response(json_decode($city));
}
// public function edit($id)
// {
//     echo $id; // This is just for debugging purposes, you can remove it if not needed
    
//     $user = Users::find($id);
    
//     // Check if the user is null
//     if (is_null($user)) {
//         return redirect('manageuser');
//     } else {
//         // Corrected the variable name and assignment
//         $title="Update Student Records";

//         $data = compact('user', 'title');
//         dd($data);
//         // Changed with() to with() method chaining
//         return view('update')->with($data);

//     }
public function manageadmission(){
    if(Session::has('user')){
        $user = Session::get('user');
       // dd($user);
        if($user->Role=='admin'){
            return view('manageadmission');
        }else{
            return redirect()->route('login');
        }
    }else{
        return redirect()->route('login');
    }
}
public function delete($id){
    $row = Users::find($id);
   
    $row->delete();
    return response()->json(['success',true]);
}
public function manageteacher()
{
    if(Session::has('user')){
        $user = Session::get('user');
        if($user->Role=='admin'){
            return view('manageteacher');
        }else{
            return redirect()->route('login');
        }
    }else{
        return redirect()->route('login');
    } 


}
public function managestudent()
{
    if(Session::has('user')){
        $user = Session::get('user');
        if($user->Role=='admin'){
            return view('managestudent');
        }else{
            return redirect()->route('login');
        }
    }else{
        return redirect()->route('login');
    } 
    
}
public function managestudentadmission(){
    if(Session::has('user')){
        $user = Session::get('user');
        if($user->Role=='admission'){
            return view('managestudentadmission');
        }else{
            return redirect()->route('login');
        }
    }else{
        return redirect()->route('login');
    }
}
public function manageuseradmission(){
    if(Session::has('user')){
        return view('manageuseradmission');
    }else{
        return redirect()->route('login');
    }
}
public function updatestudentadmission($id){
    if(Session::has('user')){
        $user = Session::get('user');
        if($user->Role=='admission'){
            return view('updatestudentadmission', compact('id'));
        }else{
            return redirect()->route('login');
        }        
    }else{
        return redirect()->route('login');
    }
}

public function saveupdatestudent(Request $request){
    {
        $request->validate([
            'uname' => 'required',
            'country' => 'required',
            'State' => 'required', // Assuming 'state' is the correct field name
            'City'=>'required',
        ]);
      
        $user = Users::where('email', $request->email)->first();
            $user->name = $request->uname;
           
            $country = Countries::where('id', $request->country)->first();
            $country = json_decode($country);
            $user->country = $country->name;
            $state = States::where('s_id', $request->state)->first();
            $state = json_decode($state);
            // $user->state = $state->state;
            $city = Cities::where('c_id', $request->city)->first();
            $city = json_decode($city);
            
            $user->save();
            return redirect()->route('managestudent');
     
    }
    
}
public function saveupdatestudentadmission(Request $request){
   //dd($request->all());
    $request->validate([
        'roll'=>'required',
        'name' => 'required',
        'country' => 'required',
        'State' => 'required', // Assuming 'state' is the correct field name
        'country'=>'required',
        'section'=>'required',
        'City'=>'required',
    ]);
  
    $user = Users::where('email', $request->email)->first();
    
        
        $user->rollno = $request->roll;
        $user->name = $request->name;
        $user->class = $request->class;
        $user->section = $request->section;
        $country = Countries::where('id', $request->country)->first();
        $country = json_decode($country);
        $user->country = $country->name;
        $state = States::where('s_id', $request->state)->first();
        $state = json_decode($state);
        // $user->state = $state->state;
        $city = Cities::where('c_id', $request->city)->first();
        $city = json_decode($city);
        
        $user->save();
        return redirect()->route('manageuseradmission');
 
}
public function useraccount()
{
    if(Session::has('user')){
        $user = Session::get('user');
        if($user->Role=='admin'){
            return view('useraccount');
        }else{
            return redirect()->route('login');
        }        
    }else{
        return redirect()->route('login');
    }
}
public function useraccountadmission()
{
    if(Session::has('user')){
        $user = Session::get('user');
        if($user->Role=='admission'){
            return view('useraccountadmission');
        }else{
            return redirect()->route('login');
        }        
    }else{
        return redirect()->route('login');
    }

}
public function useraccountteacher()
{
    if(Session::has('user'))
    {
        $user=Session::get('user');//intialize session in variable
        if($user->Role=="teacher")
        {
            return view('useraccountteacher');
        }
        else{
            return redirect()->route('login');
        }

    }
}
public function useraccountstudent()
{
    if(Session::has('user'))
    {
        $user=Session::get('user');//intialize session in variable
        if($user->Role=="student")
        {
            return view('useraccountstudent');
        }
        else{
            return redirect()->route('login');
        }

    }
}
public function managestudentmarks(){
    if(Session::has('user')){
        $user = Session::get('user');
        if($user->Role=='teacher'){
            return view('managestudentmarks');
        }else{
            return redirect()->route('login');
        }
    }else{
        return redirect()->route('login');
    }
}
 public function updatestudentmarks($id){
     if(Session::has('user')){
         $user = Session::get('user');
        if($user->Role=='teacher'){
           return view('updatestudentmarks', compact('id'));
        }else{
           return redirect()->route('login');
       }        
    }else{
        return redirect()->route('login');
     }
}
public function change($id, Request $request){
    $row = Users::find($id);
    $s = student_marks::find($row->email);
    \Log::info($row);
    
    if(isset($request->teacher_btn_set)){
        $row->Role = 'teacher';
        $row->save();
        return redirect()->route('manageuser');
    }


    if(isset($request->student_btn_set)){
        $row->Role = 'student';
        $row->save();
        if($s == NULL){
            $user = new student_marks;
            $user->name = $row->name;
            $user->email = $row->email;
            $user->save();
        }
        //return redirect()->route('manageuser');
        return response()->json(['success', true]);
    }

    if(isset($request->admission_btn_set)){
        $row->Role = 'admission';
        $row->save();
        return redirect()->route('manageuser');
    }

    
}
public function savemarks(Request $request){
    $student = student_marks::where('email', $request->email)->first();
    if($request->physics){
        $student->physics = $request->physics;
    }
    if($request->chemistry){
        $student->chemistry = $request->chemistry;
    }
    if($request->maths){
        $student->maths = $request->maths;
    }
    if($request->science){
        $student->science = $request->science;
    }
    if($request->hindi){
        $student->hindi = $request->hindi;
    }
    if($request->english){
        $student->english = $request->english;
    }
    $student->save();
    return redirect()->route('managestudentmarks');
}

}