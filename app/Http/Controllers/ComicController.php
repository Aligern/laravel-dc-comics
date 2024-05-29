<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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
        $form_comic = $this->validation($request->all());
        // we need to validate the form
        // $form_comic = $request->all();
        // dd($form_comic);
        $new_comic = new Comic();
    //     $new_comic->title = $form_comic['title'];
    //     $new_comic->description = $form_comic['description'];
    //     $new_comic->thumb = $form_comic['thumb'];
    //     $new_comic->price = $form_comic['price'];
    //     $new_comic->series = $form_comic['series'];
    //     $new_comic->sale_date = $form_comic['sale_date'];
    //     $new_comic->type = $form_comic['type'];
            $new_comic = Comic::create($form_comic);
            $new_comic->save();
            return redirect()->route('comics.index')->with('status', 'New comic has been added');
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
    public function update(Request $request, Comic $comic)
    {
        //$comic = Comic::find($id);
        $form_comic = $request->all();
        // dd($form_comic);
        // $comic->title = $form_comic['title'];
        // $comic->description = $form_comic['description'];
        // $comic->thumb = $form_comic['thumb'];
        // $comic->price = $form_comic['price'];
        // $comic->series = $form_comic['series'];
        // $comic->sale_date = $form_comic['sale_date'];
        // $comic->type = $form_comic['type'];
         $comic->update($form_comic);
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

    public function validation($data) {
       $validator = Validator::make($data, [
        'title' => 'required|max:100|min:2',
        'description' => 'nullable|max:255',
        'thumb' => 'nullable|max:255',
        'price' => 'required|numeric|max:50',
        'series' => 'required|max:100',
        'sale_date' => 'required|date',
        'type' => 'required|max:20',
    ])->validate();

    return $validator;
    }
}
