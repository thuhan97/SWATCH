<?php

namespace App\Http\Controllers\Page;
use App\Http\Controllers\Controller;
use App\Repositories\Product\ProductRepositoryInterface;
use Cart;
use View;
use Illuminate\Http\Request;


class CartController extends Controller
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
    public function index()
    {
        // print_r($cartItem);
        $cartItem= Cart::getContent();
        // View::share('carts', $cartItem->count());
        // print_r($cartItem);
         return view('layouts.cart',['cartItem'=>$cartItem]);
    }
    public function countCarts(){
        $carts = Cart::getContent()->count();
        return $carts;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        // $cartItem= Cart::content();
        // print_r($cartItem);
        $product=$this->productRepository->getById($id);
       
                $id = $product->id;
                $name = $product->name;
                $image= $product->image;
                $price = (isset($product->sale->discount))? $product->sale->discount : $product->price;
                $quantity = 1;
               // $option=[$product->image];
                print_r($image);
                
        Cart::add($id,$name,$price,$quantity,['image' =>$image]);
        return Cart::getContent();
       // return redirect()->back();

       
        

    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update($id,$quantity)
    {           
                $id=$id;
                $quantity=$quantity;
               // print_r($id);
                Cart::update($id, array(
                'quantity' => $quantity, 
                ));
                
             return redirect('/swatch/cart');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Cart::remove($id);
        echo json_encode("success");
    }
    public function clear(){
        Cart::clear();
    }

    public function buy(Request $request){
        $data=[
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'gender'=>$request->gender,
            'address'=>$request->address,
            'cartItem'=> Cart::getContent()
        ]; 
        // print_r($data);
        return view('layouts.checkout',compact('data'));
    }
}
