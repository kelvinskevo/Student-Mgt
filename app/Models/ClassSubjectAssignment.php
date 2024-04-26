<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassSubjectAssignment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'class_id', 'subject_id', 'created_by', 'status'
    ];

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function class_id()
    {
        return $this->belongsTo(Course::class, 'id');
    }


    public function subject()
    {
        return $this->belongsTo(Subject::class, 'id');
    }

    public function class()
    {
        return $this->belongsTo(Course::class, 'class_id');
    }

    public function subjectassign()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }
}
