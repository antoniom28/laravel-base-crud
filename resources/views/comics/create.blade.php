@extends('layouts.layouts_base')

@section('content')
    <h1>inserisci fumetto</h1>
    <form action="{{route("comics.store")}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">Nome</label>
        <input value="{{old("title")}}" type="text" class="form-control @error('title') is-invalid @enderror " id="title" name="title" placeholder="titolo">
        @error('title')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="thumb">Immagine</label>
        <input value="{{old("thumb")}}" type="text" class="form-control" id="thumb" name="thumb" placeholder="Immagine">
        @error('thumb')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="price">Prezzo</label>
        <input value="{{old("price")}}" type="number" class="form-control" id="price" name="price" placeholder="Prezzo">
        @error('price')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="series">Serie</label>
        <input value="{{old("series")}}" type="text" class="form-control" id="series" name="series" placeholder="Serie">
        @error('series')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="sale_date">Sale_date</label>
        <input value="{{old("sale_date")}}" type="text" class="form-control" id="sale_date" name="sale_date" placeholder="data">
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
              <option value="graphic novel" {{old("type") == "graphic novel" ? "selected" : ""}}>graphic novel</option>
              <option value="comic book" {{old("type") == "comic book" ? "selected" : ""}}>comic book</option>
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
            <textarea class="form-control" id="description" name="description" placeholder="Descrizione" style="height: 100px">{{old('description')}}</textarea>
        </div>
        @error('description')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">CREA</button>
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