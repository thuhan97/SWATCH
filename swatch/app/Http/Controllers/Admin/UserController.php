<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Repositories\ModelRepositoryInterface;
use yajra\Datatables\Datatables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     private $user;
   

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
        return view('admin.layout.user');
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function disable($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
