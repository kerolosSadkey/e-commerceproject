<?php
namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;
use App\user;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{

    public function adduser(Request $request){
          $this->validate($request,
          [
            "fname"=>"required",
            "lname"=>"required",
            "email"=>"required|email|unique:users",
            "password"=>'required_with:confirmpassword|same:password|min:6',
            "confirmpassword"=>"required|min:6",
            "role"=>"required",
          ],
          [
             "fname.required"=>"First name is required",
             "lname.required"=>"Last name is required",
             "email.required"=>"input required and must is email",
             "password.required" => "password is required",
             "password.min:8"=>"password must not be less than 8 number",
             "confirmpassword.required"=>"Confirm password is required",
             "password.confirmed"=>"Confirm password not equal  password ",
             "role.required"=>"select role must is required",
          ]);

          $user =new user();

          $user->fname=$request->input('fname');
          $user->lname=$request->input('lname');
          $user->email =$request->input('email');
          $user->password=Hash::make($request->input('password')) ;
          $user->gender=$request->input('gender');
          $user->role=$request->input('role');

        if(  $user->save()){
            Auth::login($user);
        }

         return view('home');
    }

    public function login(Request $request){
        $this->validate($request,
        [

          "email"=>"required|email ",
          "password"=>"required",
        ],
        [

           "email.required"=>"input required and must is email",
           "password.required" => "password is required",
        ]);

      if(  auth::attempt(['email' => $request->email, 'password' => $request->password])){
          return view("home");
      }else{
        return view("login");
      }
    }
}
