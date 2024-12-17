<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'surname', 'email', 'password', 'address', 'cv', 'profile_pic', 'phone', 'services'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function messages() {
        return $this->hasMany('App\Message');
    }

    public function reviews() {
        return $this->hasMany('App\Review');
    }

    public function specializations() {
        return $this->belongsToMany('App\Specialization','specialization_user');
    }

    public function sponsorships() {
        return $this->belongsToMany('App\Sponsorship')->withPivot('starts_at', 'ends_at');
    }
}
