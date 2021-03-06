<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function boot()
    {
        parent::boot();

        // create a event to creating
        static::creating(function ($model) {
            $model->created_by = (Auth::user() != null) ? Auth::user()->username : 'system';
        });

        // create a event to updating
        static::updating(function ($model) {
            $model->updated_by = (Auth::user() != null) ? Auth::user()->username : 'system';
        });

        // create a event to deleting
        static::deleting(function ($model) {
            $model->deleted_by = (Auth::user() != null) ? Auth::user()->username : 'system';
            $model->save();
        });

        // create a event to restoring
        static::restoring(function ($model) {
            $model->deleted_by = null;
        });
    }
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
