<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Repositories\Brand\BrandRepositoryInterface;
use App\Repositories\Category\CategoryRepositoryInterface;
use Validator;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     private $brandRepository;
     private $categoryRepository;

   

    //* construct with middleware
     public function __construct(BrandRepositoryInterface $brandRepository, CategoryRepositoryInterface $categoryRepository)
        {
    //     $this->middleware('auth');
        $this->brandRepository=$brandRepository;
        $this->categoryRepository= $categoryRepository;
        }
    public function index()
    {
        //
       $brands= $this->brandRepository->getAll();
       $categories= $this->categoryRepository->getAll();
        return view('admin.layout.brand', compact('brands','categories'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       $validation= Validator::make($request->all(), [
        'name' => 'required',
        'category_id' => 'required',
        'image' => 'required|image|mimes:jpg,jpeg,png,gif',
        'slug'=>'required'
    ]);
       //echo json_encode("data");
    if ($validation->passes()) {
               $image= $request->file('image');
               $new_name=rand().'.'.$image->getClientOriginalExtension();
               $image->move(public_path('dist/img/brand'),$new_name);
               $this->brandRepository->create([
                    'name'=>$request->get('name'),
                    'category_id'=>$request->get('category_id'),
                    'image'=>$new_name,
                    'slug'=>$request->get('slug')
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
    // $brands=$request->all();
    // $this->brandRepository->create($brands);
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id=null)
    {
        $editBrand=(isset($id))? $this->brandRepository->find($id):null;
        return json_encode($editBrand);
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
        'name' => 'required',
        'category_id' => 'required',
        'image' => 'required|image|mimes:jpg,jpeg,png,gif',
        'slug'=>'required'
    ]);
       //echo json_encode("data");
    if ($validation->passes()) {
               $image= $request->file('image');
               $new_name=rand().'.'.$image->getClientOriginalExtension();
               $image->move(public_path('dist/img/brand'),$new_name);
               $id=$request->get('id');
               $this->brandRepository->update($id,[
                    'name'=>$request->get('name'),
                    'category_id'=>$request->get('category_id'),
                    'image'=>$new_name,
                    'slug'=>$request->get('slug')
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
        $this->brandRepository->delete($id);
        echo json_encode((["success"=>true]));
    }
}
