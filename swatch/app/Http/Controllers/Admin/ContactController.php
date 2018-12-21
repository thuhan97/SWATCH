<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\FeedbackMail;
use App\Repositories\Contact\ContactRepositoryInterface;
use App\Contact;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected  $contactRepository;
   

    public function __construct(ContactRepositoryInterface $contactRepository)
    {
        //$this->middleware('auth');
        $this->contactRepository=$contactRepository;
    }
    public function index()
    {
        
        $contacts= $this->contactRepository->getAll();
        return view('admin.layout.contact', compact('contacts'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create(Request $request)
    {
            # code...
        // echo json_encode($request->name);
        
         $data =$request->all();
         $this->contactRepository->create($data);
        // return response()->json(['msg'=>'update successfully','data'=>$data]) ;
        // $category = new Category();
        // $category->name = $request->name;
        // $category->save();

       return redirect()->back()->with('status','Bạn đã gửi thành công !');
    }

    public function show($id){
        $data=$this->contactRepository->find($id);
        return response()->json($data);
    }

    public function send(Request $request, $id){
        $data=array(
            'name'=>$request->name,
            'email'=>$request->email,
            'title'=>$request->title,
            'content'=>$request->content
        );
       
       Mail::to($data['email'])->send(new FeedbackMail($data));
       $this->contactRepository->update($id,['status'=>1]);
        return response()->json(["success"=>true]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $this->contactRepository->delete($id);
       echo json_encode((["success"=>true]));
    }
}
