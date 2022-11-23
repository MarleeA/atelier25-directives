@extends('layouts.app')

@section('title', 'Séries')

@section('content')
<ul>
    @foreach($tableauSeries as $key)
    <li>
    {{$key}}
    </li>
    <a href="{{route('series.show',['tableauSeries'=>$key])}}">
    @endforeach
    
</ul>
@endsection