<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class SponsorshipUser extends Pivot
{
    public function SponsorshipUser() {
        return $this->belongsTo('App\User', "starts_at", "ends_at");
    }

    
    protected $fillable = ['starts_at', 'ends_at'];
}
