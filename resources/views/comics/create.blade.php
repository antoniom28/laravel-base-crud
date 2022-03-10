@extends('layouts.layouts_base')

@section('content')
    <h1>inserisci fumetto</h1>
    <form action="{{route("comics.store")}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">Nome</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="titolo">
    </div>

    <div class="form-group">
        <label for="thumb">foto</label>
        <input type="text" class="form-control" id="thumb" name="thumb" placeholder="foto">
    </div>

    <div class="form-group">
        <label for="price">Prezzo</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="prezzo">
    </div>

    <div class="form-group">
        <label for="series">Serie</label>
        <input type="text" class="form-control" id="series" name="series" placeholder="Serie">
    </div>

    <div class="form-group">
        <label for="sale_date">sale_date</label>
        <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="data">
    </div>

    <div class="form-group">
        <label for="type">type</label>
        <input type="text" class="form-control" id="type" name="type" placeholder="type">
    </div>

    <div class="form-group">
        <label for="description">description</label>
        <input type="text" class="form-control" id="description" name="description" placeholder="description">
    </div>

    <button type="submit" class="btn btn-primary">VAI</button>
    </form>
@endsection