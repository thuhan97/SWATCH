<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Repositories\Customer\CustomerRepositoryInterface;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   protected  $customer;

    //* construct with middleware
    public function __construct(CustomerRepositoryInterface $customer)
    {
        // $this->middleware('auth');
        $this->customer=$customer;
    }
    public function index()
    {
        //
       // $brands= $this->brand->index();
        return view('admin.layout.customer');
       
    }

    public function add(Request $request){
        $data=[
        'name'=> $request->name,
        'phone'=> $request->phone,
        'email'=> $request->email,
        'gender'=> $request->gender,
        'address'=> $request->address,
    ];
        $this->customer->create($data);
        echo json_encode("success");
    }

    
}
