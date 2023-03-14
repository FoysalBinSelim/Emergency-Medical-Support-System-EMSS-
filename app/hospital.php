<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hospital extends Model
{
    public function images()
    {
      return $this->hasMany(HospitalImage::class);
    }
  
}
