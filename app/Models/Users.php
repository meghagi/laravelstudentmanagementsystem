<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class  Users extends Model
{
    use HasFactory;
    protected $table="user1";
    private $primarykey="id";
 protected $fillable = ['name', 'password', 'file1','Role'];

}
