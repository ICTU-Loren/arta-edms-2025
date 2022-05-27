<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExRoute extends Model
{
    use HasFactory;

    protected $table = 'ex_route';
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    protected $fillable = [
        'id',
        'dts',
        'dts_no',
        'status',
        'department',
        'department_id',
        'office',
        'office_id',
        'div_unit',
        'div_unit_id',
        'personnel',
        'personnel_id',
        'email',
        'subject',
        'action_req',
        'file_upload',
        'sharepoint_link',
        'note_comment_routed',
        'assigned_date',
        'due_date',
        'cc_email',
        'doc_class',
        'doc_type',
        'sent_date',
        'sent_time',
        'modeoftrans',
        'outgoing',
        'note_comment_personnel',
        'routed_by',
        'routed_by_div_unit',
        'modified_at',
        'created_at',
        'updated_at',
        'open_at'
    ];

    protected $casts = [
        'date' => 'datetime',
    ];
    
    protected $guarded = [];

    public function externals()
    {
        return $this->belongsTo(Externals::class);
    }
}
