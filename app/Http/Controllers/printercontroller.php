<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\newmodel;
use Illuminate\Support\Facades\Hash;


class printercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('home');
    }
    public function login()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }
    function save(Request $request)
    {
        // return $request->input();
       //validate requests
            $request->validate([
            'name'=>'required',
            'address'=>'required',
            'email'=>'required|email|unique:newmodels,Email',
            'password'=>'required|min:5|max:12',
            'phone'=>'required'
        ]);
         //insert data into database
        $newmodel =new newmodel;
        $newmodel->Name=$request->name;
        $newmodel->Add=$request->address;
        $newmodel->Email=$request->email;
        $newmodel->Pass=Hash::make($request->password);
        $newmodel->Phno=$request->phone;
        $save=$newmodel->save();

        if($save){
            return back()->with('success','New User has been successfuly added');
       }
       else{
           return back()->with('fail','Something went wrong,try again later');
       }
    }
    function check(Request $request)
    {
        // return $request->input();
       //validate requests
       $request->validate([
        'email'=>'required|email',
        'password'=>'required|min:5|max:12'
         ]);

        $userInfo =newmodel::where('Email','=',$request->email)->first();
        if(($request->email=='admin@gmail.com') && ($request->password=='admin1'))
        {
            $request->session()->put('LoggedUser','admin');
            $request->session()->put('LoggedMail',$request->email);
            return redirect('admin');
        }
        else{
            if(!$userInfo){
                return back()->with('fail','Invalid login');
                 }
                 else{
                    if(Hash::check($request->password,$userInfo->Pass)){
                        $request->session()->put('LoggedUser',$userInfo->id);
                        $request->session()->put('LoggedMail',$userInfo->Email);
                        return redirect('product');
                    }
                    return back()->with('fail','Invalid login');
                 }
        }
        
        //check password

    }
    function logout() {
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            session()->pull('LoggedMail');
            return redirect('/auth/login');
        }
    }
    function dashboard(Request $request){
        $data=['LoggedUserInfo'=>newmodel::where('id','=',session('LoggedUser'))->first()];
        return view('admin.dashboard',$data);
    }
    function adashboard(Request $request){
        
        return view('admin.adashboard');
    }
    
    public function about()
    {
        return view('about');
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
