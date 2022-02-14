<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocClass extends Model
{
    use HasFactory;
    protected $table = 'doc_class';
    protected $fillable = ['id', 'name'];
}