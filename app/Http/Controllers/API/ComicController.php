<?php

namespace App\Http\Controllers\API;
use Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comic;
use App\Chapter;
use App\Category;
use DB;

class ComicController extends Controller
{
    public function getComics() {
        $comics = DB::select("SELECT m.*,group_concat(g.name) as genre
                        from comics m inner join genre_comics mg
                        on m.id=mg.comic_id
                        inner join genres g
                        on g.id=mg.genre_id
                        group by m.id");
        return Response()->json($comics);
    }

    public function byGenre($id) {
        $comics = DB::select("SELECT m.*,group_concat(g.name) as genre
                        from comics m inner join genre_comics mg
                        on m.id=mg.comic_id
                        inner join genres g
                        on g.id=mg.genre_id WHERE g.id = $id
                        group by m.id");
        return Response()->json($comics);
    }

    public function getComicById($comicId) {
        return Response()->json(Comic::find($comicId));
    }
}
