<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    // allows to use create:: function
    protected $fillable = [
        'post_id',
        'user_id',
        'content'
    ];

    
    public function post()
    {
        return $this->belongsTo(Comment::class );
    }

    public function user(){
        return $this->belongsTo(User::class );
    }
}
