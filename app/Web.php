<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Web extends Model
{
  

  	protected  $fillable = ['BU','type_of_serv','details','exp_date','provider','price'];

  	public function setExp_dateAttribute ($value)
  	{
  	 // return $this->attributes['exp_date']->format('Y-m-d H:i:s');

  	 return  $this->attributes['exp_date'] = format('Y-m-d H:i:s',$value);
  	}

  	
}
