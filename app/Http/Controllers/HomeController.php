<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Inventario;
use App\Models\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $productos=Producto::count();
        // dd($productos);
        $categorias=Categoria::count();
        $inventarios=Inventario::count();
        $usuarios=User::count();
        return view('home',compact('productos','categorias','inventarios','usuarios'));
    }
}
