<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Set extends Model
{
    use HasFactory;

    protected $table = "sets";

    public function cards(){
        return $this->belongsTo('App\Card');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
