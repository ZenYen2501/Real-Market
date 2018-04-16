<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table= "customer";

    public function bill(){
    	return $this->hasMyny('App\Bill', 'id_customer', 'id');
    }
}
}
