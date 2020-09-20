@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <ul>
            @foreach ($heroes[0] as $hero)
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
                <li><img style="width: 80px; height: 60px" src="/storage/hero_images/{{$hero->img}}"></li>
                <li><img style="width: 80px; height: 60px" src="/storage/avatar_images/{{$hero->avatar}}"></li>
                <li>{{$hero->user_id}}</li> 
                <p><a  target="blank" class="btn btn-primary" href="/heroes/5/{{$hero->name}}/edit">Edit hero data</a></p>
                <p>
                    {!!Form::open(['action' => ['Hero\HeroesController@destroy', 5, $hero->name], 'method' => 'POST', 'class' => 'pull-right'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}
                </p>           
            @endforeach

            @foreach ($heroes[1] as $hero)
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
                <li><img style="width: 80px; height: 60px" src="/storage/hero_images/{{$hero->img}}"></li>
                <li><img style="width: 80px; height: 60px" src="/storage/avatar_images/{{$hero->avatar}}"></li>
                <li>{{$hero->user_id}}</li>
                <p><a target="blank" class="btn btn-primary" href="/heroes/6/{{$hero->name}}/edit">Edit hero data</a></p>
                <p>
                    {!!Form::open(['action' => ['Hero\HeroesController@destroy', 6, $hero->name], 'method' => 'POST', 'class' => 'pull-right'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}
                </p>                   
            @endforeach

            @foreach ($heroes[2] as $hero)
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
                <li><img style="width: 80px; height: 60px" src="/storage/hero_images/{{$hero->img}}"></li>
                <li><img style="width: 80px; height: 60px" src="/storage/avatar_images/{{$hero->avatar}}"></li>
                <li>{{$hero->user_id}}</li>
                <p><a target="blank" class="btn btn-primary" href="/heroes/10/{{$hero->name}}/edit">Edit hero data</a></p>
                <p>
                    {!!Form::open(['action' => ['Hero\HeroesController@destroy', 10, $hero->name], 'method' => 'POST', 'class' => 'pull-right'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}
                </p>                  
            @endforeach
        </ul>
    </div>
</div>
@endsection