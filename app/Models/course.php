<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;
    protected $table = 'course_categories';

    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'course_category',];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
