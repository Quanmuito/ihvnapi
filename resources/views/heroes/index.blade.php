@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        @if(count($heroes[0]) > 0)
            <ul>
                <p>5 stars heroes</p>
                @foreach ($heroes[0] as $item)
                    <li><a target="blank" href="/heroes/{{$item->name}}">{{$item->name}}</a></li>              
                @endforeach
            </ul>
        @else
            <p>No 5 stars hero data</p>
        @endif
        
        @if(count($heroes[1]) > 0)
            <ul>
                <p>6 stars heroes</p>
                @foreach ($heroes[1] as $item)
                    <li><a target="blank" href="/heroes/{{$item->name}}">{{$item->name}}</a></li>              
                @endforeach
            </ul>
        @else
            <p>No 6 stars hero data</p>
        @endif

        @if(count($heroes[2]) > 0)
            <ul>
                <p>10 stars heroes</p>
                @foreach ($heroes[2] as $item)
                    <li><a target="blank" href="/heroes/{{$item->name}}">{{$item->name}}</a></li>              
                @endforeach
            </ul>
        @else
            <p>No 10 stars hero data</p>
        @endif
    </div>
</div>
@endsection