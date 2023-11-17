<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
USE \Illuminate\Support\Facades\Http;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected static $url = "http://ejeplo.com/Quinto/api.php";
    public function index()
    {
        $estudiantes = http::get(static::$url);
        $estudiantesArray = $estudiantes->json();
        return view('estudiante.mostrar', compact('estudiantesArray'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('estudiante.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Http::asForm()->post(static::$url,[
            'cedula' => $request->input('cedula'),
            'nombre'=> $request->input('nombre'),
            'apellido'=> $request->input('apellido'),
            'direccion'=> $request->input('direccion'),
            'telefono'=> $request->input('telefono'),

        ]);
        return redirect('/estudiante');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $estudiantes = Http::get(static::$url)->json();
        $estudiante1 = collect($estudiantes)->firstWhere("cedula", $id);
        return view("estudiante.edit",with(['estudiante1'=>$estudiante1]));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $cedula = $request ->input('cedula');
        $nombre = $request ->input('nombre');
        $apellido = $request ->input('apellido');
        $direccion = $request ->input('direccion');
        $telefono = $request ->input('telefono');
        $data = [
            'cedula'=> $cedula,
            'nombre'=> $nombre,
            'apellido'=> $apellido,
            'direccion'=> $direccion,
            'telefono'=> $telefono
        ];
        Http::asForm()->put(static::$url, $data);
        return redirect("/estudiante");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $cedula)
    {
        Http::delete(static::$url."?cedula=".$cedula);
        return redirect("/estudiante");
    }
}
