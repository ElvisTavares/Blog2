<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExibeController extends Controller
{
    function recebe(Request $request){
        $nome = $request->nome;

        return "<h3> $nome </h3>";

    }
}
