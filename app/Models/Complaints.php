<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class complaints extends Model
{
    use HasFactory;
    
    protected $table = 'complaints_table';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'category_id', 'course_id','description'];

    public function categories()
    {
        return $this->belongsTo(categories::class);
    }
    public function courses()
    {
        return $this->belongsTo(course::class);
    }



}

