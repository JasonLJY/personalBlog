<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $fillable = [
        'comment'
    ];

    protected $primaryKey = 'comment_id';
}
