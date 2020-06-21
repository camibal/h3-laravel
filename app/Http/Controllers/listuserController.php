<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\usuarios;
use Illuminate\Http\Request;

class listuserController extends Controller
{
    //crear usuario
    public function create(Request $request){

        //validacion
        Request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'identificacion' => 'required',
        ]);

        //verificando si el usuario existe en la DB
        if (usuarios::where('identificacion', $request->identificacion)->first()){

            // si existe
            echo "<script>alert('El usuario ya esta registrado');</script>";
            return view('admin/register-user');

      }else{
          // si no existe
          //verificando si el correo existe en la DB
        if (usuarios::where('email', $request->email)->first()){

            // si existe
            echo "<script>alert('El correo ya esta registrado');</script>";
            return view('admin/register-user');

      }else{
        // no existe

        //envio de datos a la DB
         usuarios::create([
            'name' => request('name'),
            'email' => request('email'),
            'identificacion' => request('identificacion'),
         ]);
         echo "<script>alert('Registro exitoso');</script>";
         return view('admin/register-user');

         }
        }
    }

    //lstar usuarios
    public function show(usuarios $usuarios){
        $usuarios = DB::table('usuarios')->select('id', 'identificacion', 'name', 'email')->get();
        return view('admin/list-user', compact('usuarios'));
      }
  
      //eliminar registro de usuario
      public function destroy($id){
        $usuarios = usuarios::findOrfail($id);
        $usuarios->delete();
        return redirect('/admin/list-user');
    }

      //editar registro de usuario
      public function edit(usuarios $usuarios){
        return view('admin/list-user-edit', [
            'usuarios' => $usuarios
        ]);
    }

      //editar registro de usuario
      public function update(usuarios $usuarios){
return $usuarios;
    }
}
