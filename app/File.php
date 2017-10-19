<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class File extends Model
{
    protected $fillable = ['storages_id', 'name', 'description'];

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
    }
}
