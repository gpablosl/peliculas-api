<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pelicula;

class PeliculasController extends Controller
{
    public function index(){
        $peliculas = Pelicula::paginate(2);

        return $peliculas;
    }
}
