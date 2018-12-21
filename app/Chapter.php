<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    public function images() {
        return $this->hasMany(Image::class);
    }

    public function comic() {
        return $this->belongsTo(Comic::class);
    }
}
