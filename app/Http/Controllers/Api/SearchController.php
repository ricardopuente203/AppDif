<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Beneficiarios;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $error = ['error' => 'Sin resultados, ingrese otros campos para la búsqueda.'];
        if($request->has('text')){
            $beneficiarios = Beneficiarios::search($request->get('text'))->get();
            return view("busqueda", compact("beneficiarios"));
    }
    return $error;
   }
   public function index()
   {
    return view("search");
   }
}
