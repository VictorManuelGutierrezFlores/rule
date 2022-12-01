<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarcadorController extends Controller
{
    public function index(){
        return view('marcadorfinal');
    }

    public function setinfo($team1,$team2){
        //return view('marcadorfinal')->with(['E1'=>$e1, 'E2'=>$e2,'NameTeam1'=>$NameTeam1,'NameTeam2'=>$NameTeam2]);
        $nameteams = [
            'equipo1' => $team1,
            'equipo2' => $team2
        ];

        return view('marcadorfinal',['finalistas'=>$nameteams]);
    }
}
