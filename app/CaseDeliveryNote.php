<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaseDeliveryNote extends Model
{
    protected $fillable =['product_name', 'amount','delivery_note_id','UOM','good_id'];

    public function deliveryNote()
    {
        return $this->belongsTo(\App\DeliveryNote::class);
    }

    public function good()
    {
        return $this->belongsTo(\App\Good::class);
    }
}
