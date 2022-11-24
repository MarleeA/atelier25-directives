@extends('layout.app')

@section('content')

@if ($errors->any())
@foreach ($errors->all() as $error)
<ul>
    <li>{{ $error }}</li>
</ul>
@endforeach
@endif

<form action="{{route('police.store')}}" method="POST">
@csrf
        <input name="name" type="text">
        <input name="age" type="number">
        <input name="country" type="text">
        <button type="submit">Valider</button>
</form>
@endsection