<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venta;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventas=Venta::orderBy('id','DESC')->paginate(3);


        return view('Venta.index',compact('ventas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('Venta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   
       $this->validate($request,[ 'calzado'=>'required', 'fecha_de_compra'=>'required', 'tipo_de_pago'=>'required', 'monto'=>'required']);


        Venta::create($request->all());


        return redirect()->route('venta.index')->with('success','Venta agregada satisfactoriamente');


    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $ventas=Venta::find($id);


        return  view('venta.show',compact('ventas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $venta=Venta::find($id);


        return view('venta.edit',compact('venta'));
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
         $this->validate($request,[ 'calzado'=>'required', 'fecha_de_compra'=>'required', 'tipo_de_pago'=>'required', 'monto'=>'required']);




        Venta::find($id)->update($request->all());


        return redirect()->route('venta.index')->with('success','Venta actualizada correctamente');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Venta::find($id)->delete();


        return redirect()->route('venta.index')->with('success','Venta eliminado correctamente');


    }
}
