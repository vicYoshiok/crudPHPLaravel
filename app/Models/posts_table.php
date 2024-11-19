<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posts_table extends Model
{
    // nombre del modelo es igual al nombre de la tabla pero  no son iguales usar +
    use HasFactory;
    //protected $table = 'table_name';
    protected $fillable = ['posts1','description'];
}
