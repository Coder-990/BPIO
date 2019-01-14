<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accesion extends Model
{
    protected $fillable =['accesion_date', 'company_id'];

    public function company()
    {
        return $this->belongsTo(\App\Company::class);
    }
}

