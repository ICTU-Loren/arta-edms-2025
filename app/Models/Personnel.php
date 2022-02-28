<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    use HasFactory;
    
    protected $table ='personnel';
    protected $fillable = [
        'id',
        'name',
        'slug',
        'department_id',
        'office_id',
        'div_unit_id'
    ];
}
