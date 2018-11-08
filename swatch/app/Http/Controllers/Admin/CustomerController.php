<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Repositories\ModelRepositoryInterface;
use yajra\Datatables\Datatables;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    //* construct with middleware
    // public function __construct(ModelRepositoryInterface $brand)
    // {
    //     $this->middleware('auth');
    //     $this->brand=$brand;
    // }
    public function index()
    {
        //
       // $brands= $this->brand->index();
        return view('admin.layout.customer');
       
    }

    
}
