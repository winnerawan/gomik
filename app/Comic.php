<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function chapters() {
        return $this->hasMany(Chapter::class);
    }
}
