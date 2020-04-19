<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class main_dishe extends Model
{
    public function orders()
    {
    	return $this->belongsToMany(Order::class);
    }
}
