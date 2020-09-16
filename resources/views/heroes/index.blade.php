@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        @if(count($heroes) > 0)
        <ul>
            @foreach ($heroes[0] as $item)
                <li><a href="/heroes/{{$item->name}}">{{$item->name}}</a></li>              
            @endforeach
        </ul>

        <ul>
            @foreach ($heroes[1] as $item)
                <li><a href="/heroes/{{$item->name}}">{{$item->name}}</a></li>              
            @endforeach
        </ul>

        <ul>
            @foreach ($heroes[2] as $item)
                <li><a href="/heroes/{{$item->name}}">{{$item->name}}</a></li>              
            @endforeach
        </ul>
        @endif
    </div>
</div>
@endsection