
<ul>
    @foreach($tableauSeries as $key)
    <li>
    {{$key}}
    </li>
    <a href="{{route('serie.show',['tableauSeries'=>$key])}}">
    @endforeach
    
</ul>
