<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        return view('crearequipos');
    }

    public function create(Request $request)
    {
        $dataTeam = [
            'team1' => $request->input('team1'),
            'team2'=>$request->input('team2')
        ];

        if (!is_null($request->input('team3'))) {
            $dataTeam['team3']=$request->input('team3');
        }else{
            $dataTeam['team3']="Nombre equipo 3";
        }

        return view('comienzajuego',['teams'=>$dataTeam]);
    }
}