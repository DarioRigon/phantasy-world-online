<?php

namespace App\Content\Character;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $guarded = [];
    
    public function race(){
        return $this->hasOne(Race::class);
    }
}
