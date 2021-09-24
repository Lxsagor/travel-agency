<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use App\Models\User;
use Session;


class UserController extends Controller
{
    function register(Request $req){

        //   return $req->input();
        $req->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            
            'password' => 'required|min:5|max:15'
            
        ]);
        $user = new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $res=$user->save();
        if($res){
          return back()->with('success','You have registered successfully.');
        }
        else{
          return back()->with('fail','Something Wrong.');

        }
  
  
  
      }
      function login(Request $req) 
    {
        $req->validate([
            
            'email' => 'required',
            
            'password' => 'required|min:5|max:15'
            
        ]);
        $user=User::where(['email'=>$req->email])->first();

        if(!$user || !Hash::check($req->password, $user->password))
        {
            return back()->with('fail','User information not found');
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/')->with('success','Successfully login');
        }
    }
    function userlist()
    {  
        if(Session::has('user')){
            $data= User::all();
            return view ('userlist',['users'=>$data]);
        }
        else{
            return back()->with('fail','User information not found.Please Login');
        }
    }
    function detail($id)
    {
        if(Session::has('user')){
            return User::find($id);
        }
        else{
            return back()->with('fail','User information not found.Please Login');
        }
      
    }
    function delete($id){
        
        if(Session::has('user')){
            User::destroy($id);
            return redirect('userList')->with('success','Deleted Successfully');
        }
        else{
            return back()->with('fail','User information not found.Please Login');
        }
        

    }
    function show($id){
 
        
        
        
        if(Session::has('user')){
            $data= User::find($id);
            return view('edit',['data'=>$data]);
        }
        else{
            return back()->with('fail','User information not found.Please Login');
        } 
        
    }
    function update(Request $req){
        
        if(Session::has('user')){
            $data=User::find($req->id);
            $data->name=$req->name;
            $data->email=$req->email;
            $data->save();
            return redirect('userList')->with('success','Updated Successfully');
        }
        else{
            return back()->with('fail','User information not found.Please Login');
        }
      
    }
    function logout(){
        if(Session::has('user')){
            Session::pull('user');
            return redirect('login')->with('success','Logout Successfully');
        }
        else{
            return back()->with('fail','User information not found.Please Login');
        }
        
    
    }
}
