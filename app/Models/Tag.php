<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    protected $fillable = [
        'tag', 'tag_description'
    ];

    protected $primaryKey = 'tag_id';
}
