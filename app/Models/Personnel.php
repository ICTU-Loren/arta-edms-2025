<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    use HasFactory;

    protected $table ='users';
    protected $fillable = [
        'id',
        'div_unit_id',
        'name'
    ];

    public function div_unit()
    {
        return $this->belongsTo(Div_unit::class);
    }
}
