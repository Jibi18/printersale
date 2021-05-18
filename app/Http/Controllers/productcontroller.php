<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productmodel;
use App\Models\cartmodel;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;

class productcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=productmodel::all();
        return view('product',['products'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        //
        $data=productmodel::find($id);
        return view('detail',['productmodel'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        //
        $data=productmodel::
        where('Name','like','%'.$request->input('query').'%')
        ->get();
        return view('search',['products'=>$data]);
    }
    public function addtocart(Request $request)
    {
        //
        /*if($request->session()->has('newmodel'))*/
         $cartmodels=new cartmodel();
            $cartmodels->newmodel_id=session('LoggedUser');//$request->session()->get('newmodel')['id'];
            $cartmodels->productmodel_id=$request->productmodel_id;
            $cartmodels->save();
            if($cartmodels)
            {
                return redirect('product');
                //echo "success";
            }
        else
        {
            echo "fail";
            //return redirect('auth/login');
        }
        
    }
    static function cartitem()
    {
        $newmodelId=Session::get('LoggedUser');
        return cartmodel::where('newmodel_id',$newmodelId)->count();
    }
    function cartList()
    {
        //echo "hello";
        $newmodelId=Session::get('LoggedUser');
        $productmodels=DB::table('cartmodels')->join('productmodels','cartmodels.productmodel_id','=','productmodels.id')
        ->where('cartmodels.newmodel_id',$newmodelId)
        ->select('productmodels.*','cartmodels.id as cartmodels_id')->get();
        return view('cartlist',['productmodels'=>$productmodels]);
    }
    function removeCart($id)
    {
        cartmodel::destroy($id);
        return redirect('cartlist');
    }
    function orderNow()
    {
        $newmodelId=Session::get('LoggedUser');
       $productmodels=DB::table('cartmodels')->join('productmodels','cartmodels.productmodel_id','=','productmodels.id')
        ->where('cartmodels.newmodel_id',$newmodelId)
        ->select('productmodels.*','cartmodels.id as cartmodels_id')->sum('productmodels.Price');
        return view('ordernow',compact('productmodels'));
    }
    function orderPlace(Request $request)
    {
        $newmodelId=Session::get('LoggedUser');
        $allCart=cartmodel::where('newmodel_id',$newmodelId)->get();
        foreach($allCart as $cartmodels)
        {
            $order=new Order;
            $order->productmodel_id=$cartmodels['productmodel_id'];
            $p=DB::table('productmodels')
            ->select('Price')->where('id',$cartmodels['productmodel_id'])->get();
            $order->newmodel_id=$cartmodels['newmodel_id'];
            $order->Email=Session::get('LoggedMail');
            $order->Price=$p[0]->Price;
            $order->booking_date=date("y/m/d");
            $order->payment_method=$request->payment;
            $order->payment_status="pending";
            $order->save();
            cartmodel::where('newmodel_id',$newmodelId)->delete();
        }
        $request->input();
        return redirect('product');

    }
    function myOrders()
    {
        $newmodelId=Session::get('LoggedUser');
       $orders=DB::table('orders')->join('productmodels','orders.productmodel_id','=','productmodels.id')
        ->where('orders.newmodel_id',$newmodelId)
        ->get();
        return view('myorders',compact('orders'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
    public function destroy($id)
    {
        //
    }
}
