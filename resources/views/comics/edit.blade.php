@extends('layouts.layouts_base')

@section('content')
    <h1>inserisci fumetto</h1>
    <form action="{{route("comics.update" , $comic->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Nome</label>
        <input value="{{$comic->title}}" type="text" class="form-control" id="title" name="title" placeholder="titolo">
    </div>

    <div class="form-group">
        <label for="thumb">foto</label>
        <input value="{{$comic->thumb}}" type="text" class="form-control" id="thumb" name="thumb" placeholder="foto">
    </div>

    <div class="form-group">
        <label for="price">Prezzo</label>
        <input value="{{$comic->price}}" type="number" class="form-control" id="price" name="price" placeholder="prezzo">
    </div>

    <div class="form-group">
        <label for="series">Serie</label>
        <input value="{{$comic->series}}" type="text" class="form-control" id="series" name="series" placeholder="Serie">
    </div>

    <div class="form-group">
        <label for="sale_date">sale_date</label>
        <input value="{{$comic->sale_date}}" type="text" class="form-control" id="sale_date" name="sale_date" placeholder="data">
    </div>

    <div class="form-group">
        <label for="type">type</label>
        <input value="{{$comic->type}}" type="text" class="form-control" id="type" name="type" placeholder="type">
    </div>

    <div class="form-group">
        <label for="description">description</label>
        <input value="{{$comic->description}}" type="text" class="form-control" id="description" name="description" placeholder="description">
    </div>

    <button type="submit">VAI</button>
    </form>
@endsection