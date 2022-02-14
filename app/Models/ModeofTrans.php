<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModeofTrans extends Model
{
    use HasFactory;
    protected $table = 'mode_of_trans';
    protected $fillable = ['id', 'name'];
}