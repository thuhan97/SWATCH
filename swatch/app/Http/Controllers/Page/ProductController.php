<?php

namespace App\Http\Controllers\Page;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Repositories\Product\ProductRepositoryInterface;
use Validator;

use App\Product;
use App\Brand;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     private $productRepository;

    //* construct with middleware
     public function __construct(ProductRepositoryInterface $productRepository)
        {
    //     $this->middleware('auth');
        $this->productRepository=$productRepository;

        }
    
    public function getByGender($gender){
        $products= $this->productRepository->getByGender($gender);
        $gender=$gender;
       return view('layouts.mens',compact('products','gender'));
    }

    public function detail($id){
        $product= $this->productRepository->getById($id);
        $sameKind= $this->productRepository->getType($id);
        // print_r($sameKind);
        return view('layouts.product_detail',compact('product','sameKind'));
    }

    public function getFilter(Request $request){
        if($request->brand=="" && $request->min_price=="" && $request->max_price=="" && $request->gender==""){
            return redirect()->back();
        }
        else{
            
            $product=Product::query();

             if(!empty($request->brand)){
            $product = $product->where('brand_id',$request->brand);
           // print_r($product);
            $brand_title=Brand::where('id',$request->brand)->get();
           //print_r($brand_title);
            }
             if(!empty($request->gender)){
                $product= $product->where('gender',$request->gender);
                $gender=$request->gender;
                
            }
            $product= $product->whereBetween('price',[$request->min_price,$request->max_price]);
            $product=$product->paginate(9);
             //print_r($brand_title);
            // print_r(count($product));
            // print_r($product);
             if(isset($brand_title) && isset($gender)){
            return view('layouts.search',compact('product','brand_title','gender'));
             }
             else if(isset($brand_title)){
                return view('layouts.search',compact('product','brand_title'));
             }
             else if(isset($gender)){
                return view('layouts.search',compact('product','gender'));
             }
             else return view('layouts.search',compact('product'));

        }

    }
}

