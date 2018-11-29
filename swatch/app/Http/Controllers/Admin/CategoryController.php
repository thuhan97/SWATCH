<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\Request\DataRequest;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected  $categoryRepository;
   

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        //$this->middleware('auth');
        $this->categoryRepository=$categoryRepository;
    }
    public function index()
    {
        
        $categories= $this->categoryRepository->getAll();
        return view('admin.layout.category', compact('categories'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id=null){
        $editCategory=(isset($id))? $this->categoryRepository->find($id):null;
        return json_encode($editCategory);
       //return view('admin.layout.category', compact('editCategory','id'));
        
    }
    public function create(Request $request)
    {
            # code...
        // echo json_encode($request->name);
       
         $data =$request->all();
         $this->categoryRepository->create($data);
        // return response()->json(['msg'=>'update successfully','data'=>$data]) ;
        // $category = new Category();
        // $category->name = $request->name;
        // $category->save();

        echo json_encode(["success"=> true]);
    }

    
     
    public function update( Request $request, $id)
    {
            $data= $request->id;
            $data= $request->all();
            $this->categoryRepository->update($id,$data); 
            echo json_encode(["success"=> true]);
        
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $this->categoryRepository->delete($id);
       echo json_encode((["success"=>true]));
    }
}
