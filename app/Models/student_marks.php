<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student_marks extends Model
{
    use HasFactory;
    protected $table="student_marks";
    private $primarykey="id";
}
