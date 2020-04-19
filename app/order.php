<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    public function waiter()
    {
    	return $this->belongsTo(Waiter::class);
    }

    public function main_dishes()
    {
        return $this->belongsToMany(Main_dishe::class);   
    }
}
