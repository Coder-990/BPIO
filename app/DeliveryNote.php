<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeliveryNote extends Model
{
    protected $fillable =['delivery_note_date', 'company_id'];

    public function company()
    {
        return $this->belongsTo(\App\Company::class);
    }
}
