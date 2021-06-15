<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    protected $table = 'cards';
    protected $primaryKey = 'setIdCode';

    public function cards(){
        return $this->belongsTo('App\Set');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
