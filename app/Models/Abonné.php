<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abonné extends Model
{
    use HasFactory;
    protected $fillable = [
      'nom',
      'prénom',
      'email'
    ];
}
