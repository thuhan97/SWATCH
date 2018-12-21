s<?php

namespace App\Http\Controllers\Page;
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
        $this->categoryRepository=$categoryRepository;
        }
    // public function index()
    // {
    //     $categories=$this->categoryRepository->getAll();
    //     $brands= $this->brandRepository->getAll();
    //    return  response()->json([
    //         'categories'=>$categories,
    //         'brands'=>$brands
    //    ]);
      
    // }
    public function getBySlug($slug){
        $brands= $this->brandRepository->getBySlug($slug);
        $slug=$slug;
       // print_r($brands);
         return view('layouts.simple',compact('brands','slug'));
    }

}
