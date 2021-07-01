<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Set as Set;
use App\Models\User as User;



class SetController extends Controller
{
    public function show(){
        $set = Set::get();
      
        return $set;
    }
    public function getCards($set){
        return Set::where('setIdCode', $set)->cards();
    }
    // Dubbelop en werkt niet (wordt later verwijdert)
    // public function show(){
    //     $id = User::get();
      
    //     return $id;
    // }
    // public function getCards($set){
    //     return Set::where('setIdCode', $set)->cards();
    // }
}
