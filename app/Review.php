<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['name', 'surname', 'review_text', 'vote', 'user_id'];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
