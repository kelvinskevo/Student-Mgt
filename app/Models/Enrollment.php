<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Enrollment extends Model
{
    use HasFactory;

    protected $fillable = [
        'enrollment_no', 'batch_id', 'student_id', 'join_date', 'fee'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
