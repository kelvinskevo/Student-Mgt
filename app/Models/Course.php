<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'status', 'created_by'
    ];

    public function batches()
    {
        return $this->hasMany(Batch::class);
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function subjectAssignments()
    {
        return $this->hasMany(ClassSubjectAssignment::class, 'class_id');
    }
}
