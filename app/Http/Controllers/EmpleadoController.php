<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    public function getAll()
    {
        return Empleado::all();
    }

    public function getById(Empleado $empleado)
    {
        return $empleado;
    }

    public function create(Request $request)
    {
        $empleado = Empleado::create($request->all());

        return response()->json($empleado, 201);
    }

    public function update(Request $request, Empleado $empleado)
    {
        $empleado->update($request->all());

        return response()->json($empleado, 200);
    }

    public function delete(Empleado $empleado)
    {
        $empleado->delete();

        return response()->json(null, 204);
    }
}
