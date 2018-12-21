<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Repositories\Comment\CommentRepositoryInterface;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    private $commentRepository;
    //* construct with middleware
    public function __construct(CommentRepositoryInterface $commentRepository)
    {
        //$this->middleware('auth');
        $this->commentRepository=$commentRepository;
    }

    public function index(){
        $comment=$this->commentRepository->getAll();
        return view('admin.layout.comment',compact('comment'));
    }
    public function create(Request $request){
        $data=$request->all();
        $this->commentRepository->create($data);
        echo json_encode("success");

    }
    public function delete($id){
        $this->commentRepository->delete($id);
        echo json_encode('success');
    }

    
}
