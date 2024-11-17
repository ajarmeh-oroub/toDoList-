<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = [
    'title',
    'description',
    'user_id',
    'isCompleted'
];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
