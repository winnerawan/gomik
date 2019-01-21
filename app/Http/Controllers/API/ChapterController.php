<?php

namespace App\Http\Controllers\API;
use Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comic;
use App\Chapter;
use App\Image;
use DB;

class ChapterController extends Controller
{
    public function getChapterByComic($comicId) {
        return response()->json(Chapter::where('comic_id', $comicId)->get());
    }

    public function getNewChapter() {
        $chapters = DB::select(
            "SELECT chapters.id, chapters.comic_id, comics.title, chapters.chapter, chapters.url, comics.image, chapters.created_at FROM chapters INNER JOIN comics ON comics.id = chapters.comic_id ORDER BY chapters.created_at DESC LIMIT 10"
        );

        return response()->json($chapters);

    }
}
