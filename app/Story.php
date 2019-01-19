<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    public function story_contents() {
        return $this->hasMany(StoryContent::class);
    }
}
