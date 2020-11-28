<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;
use App\Models\User;
use App\Models\Entrega;
use Illuminate\Support\Facades\DB;

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
        $tareas = Tarea::all();

        // Para los pendientes
        $id=auth()->user()->id;
        $entregas = DB::table('entregas')->where('user_id', $id)->get();
        $bandera=0;
        $user = auth()->user();


        return view('home',['tareas'=>$tareas, 'entregas'=>$entregas, 'bandera'=>$bandera, 'user'=>$user]);
    }

    public function cal(){
        $id=auth()->user()->id;
        $entregas=Entrega::where('user_id', $id)->get();
        $user = auth()->user();

        return view('cal', ['entregas'=>$entregas, 'id'=>$id, 'user'=>$user]);
    }
    public function formattedDate()
    {
        return $this->created_at->format('M d Y');
    }


}
