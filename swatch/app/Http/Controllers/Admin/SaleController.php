<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Repositories\Sale\SaleRepositoryInterface;
use App\Repositories\Product\ProductRepositoryInterface;
use Validator;


class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     private $saleRepository;
     private $productRepository;
   

    //* construct with middleware
    public function __construct(SaleRepositoryInterface $saleRepository,ProductRepositoryInterface $productRepository)
    {
        //$this->middleware('auth');
        $this->saleRepository=$saleRepository;
        $this->productRepository=$productRepository;
    }
    public function index()
    {
        //
        $products= $this->productRepository->getAll();
        $sales= $this->saleRepository->getAll();
        return view('admin.layout.sale', compact('sales','products'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validation = Validator::make($request->all(),[
            'product_id'=>'required',
            'discount'=>'required',
            'start_at'=>'required',
            'end_at'=>'required'
        ]);
        if($validation->passes()){
            $this->saleRepository->create([
                'product_id'=>$request->get('product_id'),
                'discount'=>$request->get('discount'),
                'start_at'=>$request->get('start_at'),
                'end_at'=>$request->get('end_at'),
            ]);
            echo json_encode(["success"=>true]);
        }
        else{
            return response()->json([
                'message'=>$validation->errors()->all(),
                'class_name'=>'alert-danger'
            ]);
        }

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $eidtSale= $this->saleRepository->find($id);
        return json_encode($eidtSale);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $validation = Validator::make($request->all(),[
            'product_id'=>'required',
            'discount'=>'required',
            'start_at'=>'required',
            'end_at'=>'required'
        ]);
        if($validation->passes()){
            $id=$request->id;
            $this->saleRepository->update($id,[
                'product_id'=>$request->get('product_id'),
                'discount'=>$request->get('discount'),
                'start_at'=>$request->get('start_at'),
                'end_at'=>$request->get('end_at'),
            ]);
            echo json_encode(["success"=>true]);
        }
        else{
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
        $this->saleRepository->delete($id);
        echo json_encode(["success"=>true]);
    }
}
