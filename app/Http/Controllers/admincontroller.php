<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productmodel;
use App\Models\newmodel;
use Session;
use Illuminate\Support\Facades\DB;

class admincontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products=productmodel::all();
        return view('viewallproducts',compact('products'));
    }
    public function cust()
    {
        //
        $customers=newmodel::all();
        return view('viewallcust',compact('customers'));
    }
    public function booking()
    {
        //
        $orders=DB::table('orders')->join('newmodels','orders.newmodel_id','=','newmodels.id')
        ->join('productmodels','orders.productmodel_id','=','productmodels.id')
        ->where('payment_status','pending')
        ->get();
        return view('viewbookings',compact('orders'));
    }
    public function Pay($id,$uid)
    {
        $cost=DB::table('orders')
        ->where('productmodel_id',$id)
        ->where('Email',$uid)
        ->get();
        return view('payment',compact('cost'));
    }
    public function paymentStatus($id,$uid)
    {
        echo $id;
        //return redirect('/viewbookings');
        DB::table('orders')
              ->where('productmodel_id', $id)
              ->where('Email',$uid)
              ->update(['payment_status' => 'paid']);
              return redirect('/viewbookings');
    }
    public function deletepay($id,$uid)
    {
        echo $id;
        DB::table('orders')
              ->where('productmodel_id', $id)
              ->where('Email',$uid)
              ->delete();
              return redirect('/viewbookings');
    }
    public function payHis()
    {
        //echo $id;
        $orders=DB::table('orders')
              ->select('productmodel_id','booking_date','Email','Price')
              ->where('payment_status', 'paid')->get();
              return view('/payhis',compact('orders'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin');
    }
    public function product()
    {
        //
        return view('adproduct');
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
        $getproname=request('pname');
        $getpropri=request('ppri');
        $getprodes=request('pdes');
        $getprogal=request('pgal');
        echo $getproname;
        echo "<br>";
        echo $getpropri;
        echo "<br>";
        echo $getprodes;
        echo "<br>";
        echo $getprogal;
        echo "<br>";
        $item=new productmodel();
        $item->Name=$getproname;
        $item->Price=$getpropri;
        $item->Description=$getprodes;
        $item->Gallery=$getprogal;
        $item->save();
        return redirect('/adproduct');
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
        $products=productmodel::find($id);
        return view('editview',compact('products'));
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
        $item=productmodel::find($id);
        $getproname=request('pname');
        $getpropri=request('ppri');
        $getprodes=request('pdes');
        $getprogal=request('pgal');
        
        $item->Name=$getproname;
        $item->Price=$getpropri;
        $item->Description=$getprodes;
        $item->Gallery=$getprogal;
        $item->save();
        return redirect('/viewallproducts');
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
        $products=productmodel::find($id);
        $products->delete();
        return redirect('viewallproducts');
    }
    public function deletecust($id)
    {
        $customers=newmodel::find($id);
        $customers->delete();
        return redirect('viewallcust');
    }
}
