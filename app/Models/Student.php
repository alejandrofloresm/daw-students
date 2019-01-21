<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model {
    protected $fillable = [
        'student_id',
        'name',
        'program',
        'personal_email',
        'gpa'
    ];
}
