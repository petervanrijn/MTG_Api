<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardSet extends Model
{
    protected $table = 'card_set';

    public function AllCards(){
        return $this->hasMany('\App\Models\Card', 'set', 'set');
    }
}
