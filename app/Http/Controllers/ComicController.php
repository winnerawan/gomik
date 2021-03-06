<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;
use DB;
use App\Chapter;
use App\Category;
use App\Genre;
use App\GenreComic;


class ComicController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $iChap = DB::select('SELECT COUNT(*) as jumlah FROM chapters WHERE comic_id = 1 ');
        return view('comics.index')->with(['comics' => Comic::all(), 'jumlah' => $iChap]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('comics.create')->with(['categories' => Category::all(), 'genres' => Genre::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comic = new Comic();
        $comic->category_id = $request->category_id;
        $comic->title = $request->title;
        $comic->image = $request->image;
        $comic->description = $request->description;
        $comic->save();

        for ($i=0; $i<sizeof($request->input('genres')); $i++) {
            $genre = new GenreComic();
            $genre->comic_id = $comic->id;
            $genre->genre_id = $request->genres[$i];
            $genre->save();
        }

        // dd($request->input('genres'));

        return redirect('comics');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('comics.edit')->with(['comic' => Comic::find($id), 'categories' => Category::all(), 'genres' => Genre::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comic = Comic::find($id);
        $comic->category_id = $request->input('category_id');
        $comic->title = $request->input('title');
        $comic->image = $request->input('image');
        $comic->description = $request->input('description');
        $comic->save();

        // $genre = GenreComic::where('comic_id', $comic->id)->get();
        // $genre = GenreComic::updateOrCreate(["comic_id", $comic->id, "genre_id", $request->input('genres')]);
        //dd($request->input('genres'));
        

        return redirect('comics/create');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::find($id);
        $comic->delete();
        return redirect('comics');

    }
}
