<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class respuestaController extends Controller
{
//

/**
 * 
 * Descripción de la prueba para la clase de Desarrollo de BackEdn y API desarrollo.
 * @return \Illuminate\Http\Response
 *
 * @OA\Get(
 *     path="/api/ejecutar",
 *     tags={"ejecutar"},
 *     summary="Este es un endpoint o metodo para obtener datos y mostrarlos al usuario",
 *     @OA\Response(
 *         response=200,
 *         description="Se devuelve todos los registros cuando la consulta cuando la consulta sea satisfactoria"
 *     ),
 *     @OA\Response(
 *         response=500,
 *         description="No se pudo ejectar la ejecución"
 *     )
 * ) 
 */

    public function index(){
        return response() ->json([
            "success"=>true,
            "data"=>"HOLA, SOY PAOLA VASQUEZ",
            "message"=>"registro encontrado",
            "cantidad"=>1
        ]);

    }
}
