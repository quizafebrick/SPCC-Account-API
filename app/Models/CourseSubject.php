<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseSubject extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }

    public function year_level()
    {
        return $this->belongsTo(YearLevel::class);
    }

    public function curriculum_subject()
    {
        return $this->belongsTo(CurriculumSubject::class);
    }
}
