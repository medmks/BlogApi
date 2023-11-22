<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\controllerressource;

class stagiaire extends Model
{
    protected $table="stagiaire";
    protected $fillable = ["name","email"];
    use HasFactory;
}
