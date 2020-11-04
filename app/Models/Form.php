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
}
