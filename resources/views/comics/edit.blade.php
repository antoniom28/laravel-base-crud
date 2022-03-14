@extends('layouts.layouts_base')

@section('content')
    <h1>modifica fumetto</h1>
    <form action="{{route("comics.update" , $comic->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Nome</label>
        <input value="{{old('title') != null ? old('title') : $comic->title}}" type="text" class="form-control" id="title" name="title" placeholder="titolo">
        @error('title')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="thumb">foto</label>
        <input value="{{old('thumb') != null ? old('thumb') : $comic->thumb}}" type="text" class="form-control" id="thumb" name="thumb" placeholder="foto">
        @error('thumb')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="price">Prezzo</label>
        <input value="{{old('price') != null ? old('price') : $comic->price}}" type="number" class="form-control" id="price" name="price" placeholder="prezzo">
        @error('price')
        <div class="alert alert-danger">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="series">Serie</label>
        <input value="{{old('series') != null ? old('series') : $comic->series}}" type="text" class="form-control" id="series" name="series" placeholder="Serie">
        @error('series')
        <div class="alert alert-danger">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="sale_date">sale_date</label>
        <input value="{{old('sale_date') != null ? old('sale_date') : $comic->sale_date}}" type="text" class="form-control" id="sale_date" name="sale_date" placeholder="data">
        @error('sale_date')
        <div class="alert alert-danger">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="type">Tipologia</label>
        <div class="input-group">
            <div class="input-group-prepend">
              <label class="input-group-text" for="type">Tipologia</label>
            </div>
            <select class="custom-select" id="type" name="type">
              <option>scegli..</option>
              <option value="graphic novel" {{((old("type")??$comic->type) == "graphic novel") ? "selected" : ""}}>graphic novel</option>
              <option value="comic book" {{((old("type")??$comic->type) == "comic book") ? "selected" : ""}}>comic book</option>
            </select>
          </div>
          @error('type')
              <div class="alert alert-danger">
                  {{$message}}
              </div>
          @enderror
    </div>

    <div class="form-group">
        <label for="description">Descrizione</label>
        <div class="form-floating">
            <textarea class="form-control" id="description" name="description" placeholder="Descrizione" style="height: 100px">{{old('description') != null ? old('description') : $comic->description}}</textarea>
        </div>
        @error('description')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">MODIFICA</button>
    <div  class="btn btn-danger">
        <a href="{{route("comics.index")}}">
            BACK
        </a>
    </div>
   
    </form>

    @if ($errors->any())
        <div class="alert alert-danger mt-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection