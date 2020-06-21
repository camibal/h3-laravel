<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\facturas;
use App\usuarios;
use Illuminate\Http\Request;

class listfacController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     //crear factura
     public function create(Request $request){

      //validacion
      Request()->validate([
          'id_cliente' => 'required',
          'id_factura' => 'required',
          'concepto' => 'required',
          'fecha' => 'required',
          'valor_pagar' => 'required',
          'pdf' => 'required',
      ]);

      //verificando si la identificacion existe en la DB
      if (usuarios::where('identificacion', $request->id_cliente)->first()){

          //verificando si existe la factura
          if (facturas::where('id_factura', $request->id_factura)->first()){
          // si la factura ya existe en la DB
            echo "<script>alert('La factura ya esta registrada');</script>";
              return view('admin/register-fac');
              
          }else{
               // si la factura no existe en la DB
               //envio de datos a la DB
              facturas::create([
                  'id_cliente' => request('id_cliente'),
                  'id_factura' => request('id_factura'),
                  'concepto' => request('concepto'),
                  'fecha' => request('fecha'),
                  'valor_pagar' => request('valor_pagar'),
                  'pdf' => request('pdf'),
              ]);
              echo "<script>alert('Registro de factura exitoso');</script>";
              return view('admin/register-fac');
          }
        // no existe
                //verificando si la factura existe en la DB

      }else{
          //no existe la identificacion
          echo "<script>alert('Ingresa una identificaciòn que ya este registrada');</script>";
              return view('admin/register-fac');
      }
  }

     //listar facturas
    public function show(facturas $facturas){
      $facturas = DB::table('facturas')->select('id', 'id_cliente', 'id_factura', 'concepto', 'fecha', 'valor_pagar', 'pdf')->get();
      return view('admin/list-fac', compact('facturas'));
    }

    //eliminar registro de factura
    public function destroy($id){
      $facturas = facturas::findOrfail($id);
      $facturas->delete();
      return redirect('/admin/list-fac');
  }

    //descargar pdf
    public function download($file){
      $pathtoFile = public_path().'download/'.$file;
      return response()->download($pathtoFile);
    }
}
