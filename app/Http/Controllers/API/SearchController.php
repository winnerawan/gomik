<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Response;
use App\Comic;
use App\Chapter;
use App\Category;
use DB;

class SearchController extends Controller
{
    public function search(Request $request) {
        $keyword = $request->keyword;
        $comics = DB::select("SELECT m.*,group_concat(g.name) as genre
                        from comics m inner join genre_comics mg
                        on m.id=mg.comic_id
                        inner join genres g
                        on g.id=mg.genre_id WHERE m.title LIKE '%$keyword%' 
                        group by m.id");
        return Response()->json($comics);
    }
}
