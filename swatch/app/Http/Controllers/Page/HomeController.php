<?php

namespace App\Http\Controllers\Page;
use App\Http\Controllers\Controller;
use App\Repositories\Product\ProductRepositoryInterface;
use App\Repositories\Sale\SaleRepositoryInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    private $productRepository;
    private $saleRepository;

    //* construct with middleware
     public function __construct(ProductRepositoryInterface $productRepository, SaleRepositoryInterface $saleRepository)
        {
    //     $this->middleware('auth');
        $this->productRepository=$productRepository;
        $this->saleRepository= $saleRepository;

        }
    public function index(){
        $newPr=$this->productRepository->getNewProduct();
        $specialPr=$this->productRepository->getSpecialProduct();
        $salePr= $this->saleRepository->getSale();
        return view('layouts.home',compact('newPr','specialPr','salePr'));
    }

    public function getSearch(Request $request){
        // print_r($request->key);
        $product =$this->productRepository->getSearch($request->key);
        $key= $request->key;
         return view('layouts.search', compact('product','key'));
         // print_r($product);
    }
}
