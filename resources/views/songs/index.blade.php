@extends('master')

@section('content')
<h1>Lyrics Site</h1>
@foreach($songs as $song)
    <li><a href="songs/{{$song->slug}}">{{$song->title}}</a></li>
@endforeach
@endsection