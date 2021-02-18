<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Users;
//use DB;  // jv

class RequisitosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //aqui



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

    public function show($id)
    {
        //aqui 
        //dd($id);


        $data=Users::join('persona', 'Users.fkCodigo', '=', 'persona.idCodigo')
        -> join ('requisitos', 'persona.idCodigo', '=', 'requisitos.fkCodigo')
        -> select ('requisitos.voucher', 'requisitos.encuesta', 'requisitos.ficha', 'Users.id')
        //-> where ('requisitos.fkCodigo = persona.idCodigo')
           ->where('Users.id',$id)

        ->get();
            
          //dd($requisitos[0]);

          
      //Pasando resultado a un array




       // dd($requisitos[0]->voucher,$requisitos[0]->encuesta,$requisitos[0]->ficha);

      //   $nuevo_array[]=requisitos[0];

         //array_push($nuevo_array, $requisitos[0]->voucher,$requisitos[0]->encuesta,$requisitos[0]->ficha);
          
         

       // $nuevo_array=[$data[0]->voucher,$data[0]->encuesta,$data[0]->ficha];
        //($nuevo_array);

     
    
         

           // $new_array=[];
           

          



       //Recorriendo array

      // $activar=false;




      

       return view('Requisitos',compact('data'));
             
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
