<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Order\OrderRepositoryInterface;


class OrderController extends Controller
{
    

    public function __construct(OrderRepositoryInterface $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function index()
    {
        $order= $this->orderRepository->getAll();
        return view('admin.layout.order',compact('order'));
  }

  public function update($id, Request $request){
    $id= $id;
    $data= $request->all();
    $this->orderRepository->update($id,$data);
  }
}
