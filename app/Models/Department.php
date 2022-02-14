<?php

namespace App\Models;

use App\Externals;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $table ='department';
    protected $fillable = [
        'id',
        'name',
        'slug'
    ];

    public function externals()
    {
        return $this->hasMany(Externals::class);
    }
}
