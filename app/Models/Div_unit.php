<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Div_unit extends Model
{
    use HasFactory;

    protected $table ='div_unit';
    protected $fillable = [
        'id',
        'name',
        'slug',
        'department_id',
        'office_id'
    ];

    public function users()
    {
        return $this->hasMany(Users::class);
    }

    public function office()
    {
        return $this->belongsTo(Office::class);
    }
}
