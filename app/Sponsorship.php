<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsorship extends Model
{
    protected $fillable = ['name', 'duration', 'price'];

    public function users() {
        return $this->belongsToMany('App\User','sponsorship_user', 'user_id', 'sponsorship_id')->withPivot('starts_at', 'ends_at')->using('App\SponsorshipUser');
    }
}
