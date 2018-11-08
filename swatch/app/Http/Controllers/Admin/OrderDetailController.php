<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class OrderDetailController extends Controller
{
    

    // public function __construct(OrderRepositoryInterface $orderRepository)
    // {
    //     $this->orderRepository = $orderRepository;
    // }

    public function index($id)
    {
        // $search = $request->input('search');
        // $orders = $this->orderRepository->getSearch($search);
        return view('admin.layout.orderDetail');
    //         [
    //             'search' => $search,
    //             'orders' => $orders
    //         ]);
   }
}
