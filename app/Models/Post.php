<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    public function categories(){
        return $this->belongsTo('App\Models\Categories', 'categoryId', 'id');
    }
    public function user(){
        return $this->belongsTo("App\Models\User", 'userId', 'id');
    }
}
