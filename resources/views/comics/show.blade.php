@extends('layouts.layouts_base')

@section('content')
<div class="turn-back">
    <a href="{{route("comics.index")}}">
        TURN BACK
    </a>
</div>

<div class="details">
    <div class="box">
        <h5>Series : <span> {{$comic->series}} </span></h5>
    </div>
    <div class="box">
        <h5>Sale Date : <span> {{$comic->sale_date}} </span></h5>
    </div>
    <div class="box">
        <h5>Type : <span> {{$comic->type}} </span></h5>
    </div>
    <div class="box">
        <h5>Price : <span> {{$comic->price}} $ </span></h5>
    </div>
</div>

<div class="open-book">
    <div class="page-left">
        <div class="title">
            <h2> {{$comic->title}} </h2>
          </div>
        <div class="image">
            <img src="{{$comic->thumb}}" alt="">
        </div>
    </div>

    <div class="page-right">
        <div class="overview">
            <p> {{$comic->description}} </p>
        </div>
    </div>
</div>

@endsection