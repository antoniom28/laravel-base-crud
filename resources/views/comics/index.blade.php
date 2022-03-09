@extends('layouts.layouts_base')

@section('content')
    <ul class="section-list">
        @foreach ($comics as $comic)
        <li>
            <div class="back-face">
                <div class="titolo">
                  <h4>Titolo : &nbsp; </h4>
                  <h4> {{$comic->title}} </h4>
                </div>
          
                <div class="image">
                    <img src="{{$comic->thumb}}" alt="">
                </div>
          
                <a href="{{route("comics.show" , $comic->id)}}">
                    <p class="see-details">
                        SEE DETAILS
                    </p>
                </a>          
              </div>
        </li>
        @endforeach
    </ul>
@endsection