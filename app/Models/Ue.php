<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ue extends Model
{
    use HasFactory;
    protected $table = 'ue'; 
    protected $fillable = ['id','nomue', 'prerequis', 'objectifs', 'cout', 'coefficient'];
}