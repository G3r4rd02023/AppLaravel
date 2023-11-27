<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index(){
        $personas = HTTP::get('http://localhost:3000/personas');
        $personasArray = $personas->json();
        return View('admin.index',compact('personasArray'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $response = Http::post('http://localhost:3000/personas', [
            'COD_PERSONA' => $request->input('COD_PERSONA'),
            'IDENTIDAD' => $request->input('IDENTIDAD'),
            'NOM_PERSONA' => $request ->input('NOM_PERSONA'),
            'APE_PERSONA' => $request ->input('APE_PERSONA'),
            'GEN_PERSONA' => $request ->input('GEN_PERSONA'),
            'IND_CIVIL' => $request ->input('IND_CIVIL'),
            'EDA_PERSONA' => $request ->input('EDA_PERSONA'),
            'IND_PERSONA' => $request ->input('IND_PERSONA'),
            'USR_REGISTRO' => $request ->input('USR_REGISTRO'),
            'FEC_REGISTRO' => $request ->input('FEC_REGISTRO'),
            // ... resto de los campos ...
        ]);

        // Verificar la respuesta de la API y manejarla según sea necesario

        return redirect('/admin')->with('success', 'Registro creado exitosamente');
    }

    public function edit($id)
    {
        // Obtener los datos de la persona para editar
        $persona = HTTP::get("http://localhost:3000/personas/{$id}");
        $personaArray = $persona->json();

        return view('admin.edit', compact('personaArray'));
    }

    public function update(Request $request, $id)
    {
        // Enviar la solicitud para actualizar los datos en la API
        HTTP::put("http://localhost:3000/personas/{$id}", $request->all());

        return redirect('/admin')->with('success', 'Registro actualizado exitosamente');
    }

    public function destroy($id)
    {
        // Enviar la solicitud para eliminar los datos en la API
        HTTP::delete("http://localhost:3000/personas/{$id}");

        return redirect('/admin')->with('success', 'Registro eliminado exitosamente');
    }
}
