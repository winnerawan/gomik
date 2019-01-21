<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chapter;
use App\Image;
use App\Comic;

class ChapterController extends Controller
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
        return view('chapters.index')->with(['chapters' => Chapter::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('chapters.create')->with(['comics' => Comic::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $chapter = new Chapter();
        $chapter->comic_id = $request->comic_id;
        $chapter->chapter = $request->chapter;
        $chapter->url = $request->url;
        $chapter->save();

        return redirect('chapters/create');
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
        return view('chapters.edit')->with(['chapter' => Chapter::find($id), 'comics' => Comic::all()]);
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
        $chapter = Chapter::find($id);
        $chapter->comic_id = $request->input('comic_id');
        $chapter->chapter = $request->input('chapter');
        $chapter->url = $request->input('url');
        $chapter->save();

        return redirect('chapters');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chapter = Chapter::find($id);
        $chapter->delete();
        return redirect('chapters');

    }

    public function look($id) {
       return view('chapters.look')->with(['image' => Image::where('chapter_id', $id)->get()]);
    }
}
