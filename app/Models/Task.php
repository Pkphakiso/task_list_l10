<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = ["title","description","long_description"];
    
    // line below is the opposite of fillable however it is not safe to use it 
    // protected $guarded = []; 

}
