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
            "SELECT chap.id, chap.comic_id, com.title, chap.chapter, chap.url, com.image, chap.created_at FROM chapters AS chap, comics AS com "
        );

        return response()->json($chapters);

    }
}
