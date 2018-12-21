<?php

namespace App\Http\Controllers\API;
use Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comic;
use App\Chapter;
use App\Category;

class ComicController extends Controller
{
    public function getComics() {

        return Response()->json(Comic::all());
    }

    public function getComicById($comicId) {
        return Response()->json(Comic::find($comicId));
    }
}
