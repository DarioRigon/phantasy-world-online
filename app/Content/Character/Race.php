<?php

namespace App\Content\Character;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    protected $guarded = [];

    public function characters(){
        return $this->belongsToMany(Character::class);
    }
}
