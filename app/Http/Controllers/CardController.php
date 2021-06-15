<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardController extends Controller
{
    public function index(){
        return \App\Models\Card::all();
    }

    public function show($id){
        return \App\Models\Card::find($id);
    }

    public function set_EM(){
        return \App\Models\Card::all()->where('set', 'EldritchMoon');
    }

    public function set_AR(){
        return \App\Models\Card::all()->where('set', 'AetherRevolt');
    }
}
