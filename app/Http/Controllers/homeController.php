<?php

namespace App\Http\Controllers;

use App\Relato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{
    public function dashboard(){
        if($usuario = Auth::guard('usuario')->user()){
            $db =new Relato();
            $relatos = $db->listar();

            return view("pages.dashboard.index")
                        ->with('usuario', $usuario)
                        ->with('relatos', $relatos);
        }

        return redirect()->route('login');


    }
}
