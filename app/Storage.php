<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Storage extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'description'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

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
}
