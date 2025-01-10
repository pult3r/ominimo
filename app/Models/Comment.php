<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /** @use HasFactory<\Database\Factories\CommentFactory> */
    use HasFactory, HasUuids;

    protected $table = 'comments';
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'post_id',
        'user_id', 
        'comment'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
    
    public function post() {
        return $this->belongsTo(Post::class);
    }
}