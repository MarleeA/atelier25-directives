@extends('layout.app')

@section('content')
<form action="{{route('police.store')}}" method="POST">
@csrf
        <input name="name" type="text">
        <input name="age" type="number">
        <input name="country" type="text">
        <button type="submit">Valider</button>
</form>
@endsection