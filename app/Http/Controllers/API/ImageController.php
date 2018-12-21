<?php

namespace App\Http\Controllers\API;
use Response;
use App\Http\Controllers\Controller;
use App\Image;
use App\Chapter;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ImageController extends Controller
{

    public function getImageByChapter($chapter_id) {
        return Response::json(Image::where('chapter_id', $chapter_id)->get());
        //return response()->json(Image::where('chapter_id', $chapter_id)->get());
    }

    public function store() {
        $request = Input::json();
        foreach ($request as $key => $value) {
            Image::insert($value);
        }
    }
}
