<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaseAccesion extends Model
{
    protected $fillable =['product_name', 'amount','accesion_id','UOM','good_id'];

    public function accesion()
    {
        return $this->belongsTo(\App\Accesion::class);
    }

    public function good()
    {
        return $this->belongsTo(\App\Good::class);
    }
}
