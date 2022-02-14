<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SProfile extends Model
{
    use HasFactory;
    protected $table = 's_profile';
    protected $fillable = ['id', 'name'];
}