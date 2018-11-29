<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Repositories\Product\ProductRepositoryInterface;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Brand\BrandRepositoryInterface;
use Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     private $productRepository;
     private $categoryRepository;
     private $brandRepository;
   

    //* construct with middleware
     public function __construct(ProductRepositoryInterface $productRepository, CategoryRepositoryInterface $categoryRepository, BrandRepositoryInterface $brandRepository)
        {
    //     $this->middleware('auth');
        $this->categoryRepository=$categoryRepository;
        $this->productRepository=$productRepository;
        $this->brandRepository=$brandRepository;

        }
    public function index()
    {
        //
       $products= $this->productRepository->getAll();
       $categories= $this->categoryRepository->getAll();
       $brands= $this->brandRepository->getAll();

        return view('admin.layout.product', compact('products','categories','brands'));
       
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
        'price' => 'required',
        'gender' => 'required',
        'brand_id' => 'required',
        'size' => 'required',
        'shell_material' => 'required',
        'chain_material' => 'required',
        'glass_material' => 'required',
        'presure' => 'required',
        'guarantee' => 'required',
        'image' => 'required|image|mimes:jpg,jpeg,png,gif'
    ]);
       //echo json_encode("data");
    if ($validation->passes()) {

               $image= $request->file('image');
               $new_name=rand().'.'.$image->getClientOriginalExtension();
               $image->move(public_path('dist/img/product'),$new_name);
               $this->productRepository->create([
                    'name'=>$request->get('name'),
                    'price' => $request->get('price'),
                    'gender' => $request->get('gender'),
                    'brand_id' => $request->get('brand_id'),
                    'size' => $request->get('size'),
                    'shell_material' => $request->get('shell_material'),
                    'chain_material' => $request->get('chain_material'),
                    'glass_material' => $request->get('glass_material'),
                    'presure' => $request->get('presure'),
                    'guarantee' => $request->get('guarantee'),
                    'description'=>$request->get('description'),
                    'status' => $request->get('status'),
                    'special' => $request->get('special'),
                    'image'=>$new_name
               ]);
               return json_encode($request->all());
            
     }
     else {
        return response()->json([
            'message'=>$validation->errors()->all(),
            'class_name'=>'alert-danger'
        ]);
    }
 }
    // $Products=$request->all();
    // $this->ProductRepository->create($Products);
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id=null)
    {
        $editProduct=(isset($id))? $this->productRepository->find($id):null;
        return json_encode($editProduct);
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
        'price' => 'required',
        'gender' => 'required',
        'brand_id' => 'required',
        'size' => 'required',
        'shell_material' => 'required',
        'chain_material' => 'required',
        'glass_material' => 'required',
        'presure' => 'required',
        'guarantee' => 'required',
        'image' => 'required|image|mimes:jpg,jpeg,png,gif'
    ]);
       //echo json_encode("data");
    if ($validation->passes()) {
               $image= $request->file('image');
               $new_name=rand().'.'.$image->getClientOriginalExtension();
               $image->move(public_path('dist/img/product'),$new_name);
               $id=$request->get('id');
               $this->productRepository->update($id,[
                    'name'=>$request->get('name'),
                    'price' => $request->get('price'),
                    'gender' => $request->get('gender'),
                    'brand_id' => $request->get('brand_id'),
                    'size' => $request->get('size'),
                    'shell_material' => $request->get('shell_material'),
                    'chain_material' => $request->get('chain_material'),
                    'glass_material' => $request->get('glass_material'),
                    'presure' => $request->get('presure'),
                    'guarantee' => $request->get('guarantee'),
                    'description' => $request->get('description'),
                    'status' => $request->get('status'),
                    'special' => $request->get('special'),
                    'image'=>$new_name
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
        $this->productRepository->delete($id);
        echo json_encode((["success"=>true]));
    }
}
