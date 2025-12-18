<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    //table name singuler, model er name plural hoy tahole protected korte hoy
    //table name plural, model er name singular hole protected use kora hoy
    
    protected $table ='customers';
}


