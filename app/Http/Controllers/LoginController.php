<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Redirector;
use DB;
use App\Users;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $credentials =  request()->only('email','password');
            $data = usuario::where('email',$credentials['email'])
                            ->where('password',$credentials['password'])
                            ->get();
                            
        if(empty($data[0])){
            
            return redirect('login');
        }
        return redirect('dashboard');
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

           
            
            $credentials =  request()->only('email','password');
            //$users = DB::select('select * from users');
            

            $data =  Users::where('email',$credentials['email'])
                     ->where('password',$credentials['password'])            
                     ->get();
              
                    
            if(!empty($data[0]->id)){
                $parametro=$data[0]->id;
            }
                     
                     
            if(empty($data[0])){
                return redirect('login');
            }else{
               
                if(Auth::attempt($credentials)){
                      
                   request()->session()->regenerate();
                   
                   return redirect('dashboard/'.$parametro);
                   
            }
            
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

    /** 
    *@param  \Illuminate\Http\Request
    **/
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('login');
    }
}
