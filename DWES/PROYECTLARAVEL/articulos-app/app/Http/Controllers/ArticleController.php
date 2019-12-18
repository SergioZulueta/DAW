<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ArticleController extends Controller
{
    public function mostrar($id){
        return view('mostrar', ['article' => 'Mi primer articulo sobre laravel']);
    }
}
