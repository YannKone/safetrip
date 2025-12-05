<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class demopagemodel extends Model
{

    use HasFactory;
    public $table = "demopages";
    protected $fillable = ["ID","entreprise_name","name","email","pays","num_tel","profession","description","status"];

}
