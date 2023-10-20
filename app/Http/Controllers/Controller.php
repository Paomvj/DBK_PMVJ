<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="API de Paola Margarita Vasquez Juarez",
 *      description="API de ejemplo para clase de Desarrollo de BackEnd Y APIs",
 *      @OA\Contact(
 *          email="ia.paomvj@ufg.edu.sv",
 *          name="Paola Margarita Vasquez Juarez",
 *          url="https://localhost/api/"
 *      ),
 *      @OA\License(
 *          name="Apache 2.0",
 *          url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *      )
 * )
 */

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
