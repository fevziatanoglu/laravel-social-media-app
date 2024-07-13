<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'user_id',
        'content',
        'likes'
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
