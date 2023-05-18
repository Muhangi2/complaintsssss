<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentmodel extends Model
{
    use HasFactory;
protected $table="students";
protected $primarykey="id";
protected $fillable=['name','studentnumber','address','mobile'];
}
 