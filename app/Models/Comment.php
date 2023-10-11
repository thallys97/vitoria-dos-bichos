<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['post_id', 'author_id', 'name', 'email', 'content']; 
    public function author() 
    { 
        return $this->belongsTo(Author::class, 'author_id'); 
    } 
    public function post() 
    { 
        return $this->belongsTo(Post::class); 
    } 
}
