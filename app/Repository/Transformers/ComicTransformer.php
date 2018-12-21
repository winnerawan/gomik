<?php

namespace App\Repository\Transformers;

class ComicTransformer extends Transformer{

    public function transform($comic){

        return [
            'id' => $comic->id,
            'title' => $comic->title,
            'image' => $comic->image,
            'description' => $comic->description,
            'created_at' => $comic->created_at,
            'updated_at' => $comic->updated_at,
        ];

    }

}