<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Repositories\User\UserRepositoryInterface;
use Validator;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     private $userRepository;
   

    //* construct with middleware
    public function __construct(UserRepositoryInterface $userRepository)
    {
        //$this->middleware('auth');
        $this->userRepository=$userRepository;
    }
    public function index()
    {
        //
        $users= $this->userRepository->getAll();
        return view('admin.layout.user',compact('users'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){

       $validation= Validator::make($request->all(), [
        'email' => 'required|email|unique:users',
        'username' => 'required|unique:users',
        'password'=>'required',
        'level'=>'required',
        'avatar' => 'required|image|mimes:jpg,jpeg,png,gif'
    ]);
       //echo json_encode("data");
    if ($validation->passes()) {
               $image= $request->file('avatar');
               $new_name=rand().'.'.$image->getClientOriginalExtension();
               $image->move(public_path('dist/img/user'),$new_name);
               $this->userRepository->create([
                    'email'=>$request->get('email'),
                    'username'=>$request->get('username'),
                    'password'=>bcrypt($request->get('password')),
                    'level'=>$request->get('level'),
                    'avatar'=>$new_name
               ]);
               return json_encode(["success"=>true]);
            
     }
     else {
        return response()->json([
            'message'=>$validation->errors()->all(),
            'class_name'=>'alert-danger'
        ]);
        }
    }

    public function show($id=null)
    {
        $editUser=(isset($id))? $this->userRepository->find($id):null;
        return json_encode($editUser);
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $validation= Validator::make($request->all(), [
        'email' => 'required|email',
        'username' => 'required',
        'password'=>'required',
        'level'=>'required',
        'avatar' => 'required|image|mimes:jpg,jpeg,png,gif'
    ]);
       //echo json_encode("data");
    if ($validation->passes()) {
               $image= $request->file('avatar');
               $new_name=rand().'.'.$image->getClientOriginalExtension();
               $image->move(public_path('dist/img/user'),$new_name);
               $id=$request->id;
               $this->userRepository->update($id,[
                    'email'=>$request->get('email'),
                    'username'=>$request->get('username'),
                    'password'=>bcrypt($request->get('password')),
                    'level'=>$request->get('level'),
                    'avatar'=>$new_name
               ]);
               return json_encode(["success"=>true]);
            
     }
     else {
        return response()->json([
            'message'=>$validation->errors()->all(),
            'class_name'=>'alert-danger'
        ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
        $this->userRepository->delete($id);
        echo json_encode((["success"=>true]));
    }
}
