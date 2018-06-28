<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tags;
class Inicial2Controller extends Controller
{
   public function index(){

$dados = Tags::all();

return $dados;

}

}
