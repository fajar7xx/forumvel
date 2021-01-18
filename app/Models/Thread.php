<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Thread extends Model
{
    use SoftDeletes;
    protected $table = 'threads';
    protected $fillable = [
        'subject',
        'thread',
        'type'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}

