<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class temoignages extends Model
{
    use HasFactory;
    public $table = "temoignages";
    protected $fillable = ["nom_prenom","poste","temoignagetext"];
    
    
}
