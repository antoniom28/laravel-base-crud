@extends('layouts.layouts_base')

@section('content')
    <h1>
        <a  style="color: red!important" href="{{route("comics.create")}}">
            crea
        </a>
    </h1>

    <ul class="section-list">
        @foreach ($comics as  $key=>$comic)
        <li>
            <div class="back-face">
                <div class="titolo">
                  <h4>Titolo : &nbsp; </h4>
                  <h4> {{$comic->title}} </h4>
                </div>
          
                <div class="image">
                    <img src="{{$comic->thumb}}" alt="">
                </div>
          
                <div onclick="showOpt({{$key}})" class="show-options">
                    Options
                </div>
                <div class="sub-menu-options">
                    <a href="{{route("comics.show" , $comic->id)}}">
                            See Details
                    </a> 
                    <a href="{{route('comics.edit' , $comic->id)}}">Edit Comic</a>

                    <div class="delete" onclick="confirmBox({{$key}})">
                        Delete Comic
                    </div>

                    <form class="confirm-delete" method="POST" action="{{route('comics.destroy' , $comic->id)}}">
                        @csrf
                        @method("DELETE")
                        <h2>SICURO DI VOLER CANCELLARE QUESTO FUMETTO?</h2>

                        <div class="button-choice">
                            <div onclick="leaveDelete()" class="button no-btn">NO</div>
                            <button class="yes-btn" type="submit" value="cancella">YES</button>
                        </div>
                    </form> 
                </div>
              </div>
        </li>
        @endforeach
    </ul>
@endsection