<?php

namespace App\Http\Controllers\Page;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Repositories\Product\ProductRepositoryInterface;
use Validator;

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


}

