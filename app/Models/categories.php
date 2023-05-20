<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;
    protected $table = 'complaint_categories';

    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'category_id'];
    public function user()
{
    return $this->belongsTo(User::class);
}


}
