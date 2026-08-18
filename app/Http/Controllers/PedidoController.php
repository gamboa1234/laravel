<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidoController extends Controller
{
    public function guardar(Request $request)
    {
        Pedido::create([
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'pedido' => $request->pedido,
        ]);

return redirect('/')->with('exito', '¡Pedido enviado correctamente!');    }
}