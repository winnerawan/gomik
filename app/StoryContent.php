<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoryContent extends Model
{
    public $timestamps = false;

    public function story() {
        return $this->belongsTo(Story::class);
    }
}
