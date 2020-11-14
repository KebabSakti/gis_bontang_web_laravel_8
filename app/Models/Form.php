<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function fotos()
    {
        return $this->hasMany('App\Models\Foto', 'form_id', 'form_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'user_id');
    }
}
