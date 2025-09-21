<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datauser extends Model
{
    use HasFactory;
    protected $table = 'datauser';
    public $timestamps = true;
    protected $fillable = ['username','email', 'password'];
}
