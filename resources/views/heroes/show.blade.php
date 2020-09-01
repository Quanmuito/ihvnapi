@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <ul>
            @foreach ($heroes as $item)
                @foreach ($item as $hero)
                    <li>{{$hero->id}}</li>
                    <li>{{$hero->faction}}</li>
                    <li>{{$hero->name}}</li>
                    <li>{{$hero->class}}</li>
                    <li>{{$hero->skill1}}</li>
                    <li>{{$hero->skill2}}</li>
                    <li>{{$hero->skill3}}</li>
                    <li>{{$hero->skill4}}</li>
                    <li>{{$hero->hp}}</li>
                    <li>{{$hero->atk}}</li>
                    <li>{{$hero->armor}}</li>
                    <li>{{$hero->speed}}</li>
                    <li>{{$hero->aoe}}</li>
                    <li>{{$hero->cc}}</li>
                    <li>{{$hero->heal}}</li>
                    <li>{{$hero->img}}</li>
                    <li>{{$hero->avatar}}</li>
                    <li>{{$hero->user_id}}</li>         
                @endforeach  
            @endforeach
        </ul>
    </div>
</div>
@endsection