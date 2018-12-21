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
        $customer= $this->customer->getAll();
        return view('admin.layout.customer', compact('customer'));
       
    }

    public function delete($id){
        $this->customer->delete($id);
        echo json_encode("success");
    }

    

    
}
