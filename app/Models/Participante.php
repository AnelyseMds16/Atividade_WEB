<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    use HasFactory;

    protected $fillable = ['dicaPresente', 'user_id', 'Sorteio_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function sorteio(){
        return $this->belongsTo(Sorteio::class);
    }
}