<?php

namespace App\Http\Controllers\API;
use Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comic;
use App\Chapter;
use App\Image;

class ChapterController extends Controller
{
    public function getChapterByComic($comicId) {
        return response()->json(Chapter::where('comic_id', $comicId)->get());
    }
}
