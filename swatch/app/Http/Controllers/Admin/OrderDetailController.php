<?php

namespace App\Http\Controllers\Admin;
use App\Repositories\Order\OrderRepositoryInterface;
use App\Repositories\OrderDetail\OrderDetailRepositoryInterface;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class OrderDetailController extends Controller
{
    
    private $orderDetailRepository;
    private $orderRepository;
    public function __construct(OrderRepositoryInterface $orderRepository, OrderDetailRepositoryInterface $orderDetailRepository)
    {
        $this->orderDetailRepository = $orderDetailRepository;
        $this->orderRepository= $orderRepository;
    }

    public function index($id)
    {
        $order= $this->orderRepository->getById($id);
        return view('admin.layout.orderDetail',compact('order'));
   }
}
