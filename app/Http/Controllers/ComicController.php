<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // dd($request->query());
        if(!empty($request->query('search'))){
            $type = $request->query('search');
            $comics = Comic::where('type', $type)->get();
        } else{
        $comics = Comic::all();
    }
    return view("comics.index" , compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $form_comic = $request->all();
        // dd($form_comic);
        $new_comic = new Comic();
        $new_comic->title = $form_comic['title'];
        $new_comic->description = $form_comic['description'];
        $new_comic->thumb = $form_comic['thumb'];
        $new_comic->price = $form_comic['price'];
        $new_comic->series = $form_comic['series'];
        $new_comic->sale_date = $form_comic['sale_date'];
        $new_comic->type = $form_comic['type'];
        $new_comic->save();
        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $comic = Comic::find($id);
        $form_comic = $request->all();
        // dd($form_comic);
        $comic->title = $form_comic['title'];
        $comic->description = $form_comic['description'];
        $comic->thumb = $form_comic['thumb'];
        $comic->price = $form_comic['price'];
        $comic->series = $form_comic['series'];
        $comic->sale_date = $form_comic['sale_date'];
        $comic->type = $form_comic['type'];
        $comic->update();
        return redirect()->route('comics.index', $comic->id);
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
        //
    }
}
