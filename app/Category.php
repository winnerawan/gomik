<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function comics() {
        return $this->hasMany(Comic::class);
    }
}
