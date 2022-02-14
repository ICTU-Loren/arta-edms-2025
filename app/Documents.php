<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    protected $table = 'documents';
    protected $fillable = [
        'id',
        'name',
        'created_at',
        'date_received',
        'time_received',
        'doc_class',
        'doc_type',
        'department',
        'office',
        'div_unit',
        'personnel',
        'doc_title',
        'subject',
        'mode_of_trans',
        's_profile',
        's_name',
        's_address',
        's_email',
        's_contact',
        'file_title',
        'filename',
        'created_by_user_id',
    ];

    public static function boot()
    {
        parent::boot();

        static::addGlobalScope('document_created_user', function(Builder $builder) {
            if (auth()->check()) {
                return $builder->where('created_by_user_id', auth()->id());
            }
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by_user_id');
    }
}
