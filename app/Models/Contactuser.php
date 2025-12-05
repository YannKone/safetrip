<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactuser extends Model
{
    use HasFactory;
    protected $fillable = ["nameuser","email","objetuser","messageuser"];
}
