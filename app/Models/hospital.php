<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hospital extends Model
{
    use HasFactory;
    

    public $timestamps = true;
    protected $fillable = ['created_at','updated_at']; 
}
