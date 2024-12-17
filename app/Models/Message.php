<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['name', 'surname', 'title', 'email', 'message_text','user_id'];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
