<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Request;
use App\http\Requests\RegisterRequest;
use Validator;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
     public function getLogin()
    {
    	//return view('Admin.login');
    	 
    
        if (Auth::check()) {
            // nếu đăng nhập thàng công thì 
            return redirect()->route('admin.index');
        } else {
            return view('admin.login');
        }

    
    }
    public function postLogin(Request $request){

    	$validate = Validator::make(
		    $request->all(),
		    [
		       'username'=>'required|max:255',
		       'password'=>'required|min:5'
		    ],

		    [
		        'required' => ':attribute không được để trống',
		        'min' => ':attribute không được nhỏ hơn :min',
		        'max' => ':attribute không được lớn hơn :max',
		    ]

		);

		if ($validate->fails()) {
		    return redirect()->back()->withErrors($validate)->withInput();
		}
		//else return redirect()->route('user.index');
	  else {
        $username = $request->input('username');
        $password = $request->input('password');

        if( Auth::attempt(['username' => $username, 'password' =>$password])) {
          $username=Auth::user()->username;
          //print_r($username);
          return redirect()->route('admin.index');
        } else {
          $errors = new MessageBag(['errorlogin' => 'Username hoặc mật khẩu không đúng']);
          return redirect()->back()->withInput()->withErrors($errors);
        }
      }
    }
    public function logout(){
      Auth::logout();
      return redirect('/login');
    }
}
