<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserController extends Controller
{
    function register(Request $req){

        //   return $req->input();
        $user = new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
  
        return redirect('/login');
  
  
  
      }
      function login(Request $req) 
    {
        $user=User::where(['email'=>$req->email])->first();

        if(!$user || !Hash::check($req->password, $user->password))
        {
            return "Username or password is not matched";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
    function userlist()
    {
        $data= User::all();
        return view ('userlist',['users'=>$data]);
    }
    function detail($id)
    {
       return User::find($id);
    }
    function delete($id){
        User::destroy($id);
        return redirect('userList');

    }
    function show($id){
        $data= User::find($id);
        return view('edit',['data'=>$data]);
    }
    function update(Request $req){
        $data=User::find($req->id);
        $data->name=$req->name;
        $data->email=$req->email;
        $data->save();
        return redirect('userList');
    }
}
