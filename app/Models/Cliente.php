<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function user(){
        //belongsTo{pertenece a} //metodo para recibir la foreing key
    return $this->belongsTo(User::class);
    }

}
