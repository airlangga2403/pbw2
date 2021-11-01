<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{   
    public $timestamps = false;
    protected $fillable = ['name','address'];
    protected $table = 'members';
    use HasFactory;
}
