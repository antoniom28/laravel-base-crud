<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    protected $toValidate = [
        "title"=>"required|string|max:50|unique:comics",
        "type"=>[],
        "price"=>"required|numeric|min:2|between:0,99.99",
        "series"=>"required|string|max:50",
        "sale_date"=>"required|string|max:10",
        "description"=>"string|unique:comics|min:15|max:1000",
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index' , compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Comic $comic)
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //,title,{$comic->id}
        $this->toValidate["type"] = Rule::in(['graphic novel' , 'comic book']);
        $request->validate($this->toValidate);

        $data = $request->all();

        $newComic = new Comic();
        $newComic->title = $data["title"];
        $newComic->description = $data["description"];
        $newComic->thumb = $data["thumb"];
        $newComic->price = $data["price"];
        $newComic->series = $data["series"];
        $newComic->sale_date = $data["sale_date"];
        $newComic->type = $data["type"];
        $newComic->save();

        return redirect()->route('comics.show' , $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show' , compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit' , compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //,title,{$comic->id}
        $this->toValidate["title"] = "required|string|max:40|unique:comics,title,$comic->id";
        $this->toValidate["description"] = "string|unique:comics,description,$comic->id|min:15|max:1000";
        $this->toValidate["type"] = Rule::in(['graphic novel' , 'comic book']);
        $request->validate($this->toValidate);

        $data = $request->all();

        $comic->title = $data["title"];
        $comic->description = $data["description"];
        $comic->thumb = $data["thumb"];
        $comic->price = $data["price"];
        $comic->series = $data["series"];
        $comic->sale_date = $data["sale_date"];
        $comic->type = $data["type"];
        $comic->save();

        return redirect()->route('comics.show' , $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index')->with(['mes'=>'cancellato']);
    }
}
