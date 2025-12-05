<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newslettermodels extends Model
{
    use HasFactory;
    public $table = "newsletters";
    protected $fillable = ["id","email2"];
}

