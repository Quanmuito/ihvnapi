<div>
    @if (count($collection) > 0)
        <h3>{{intval($star)}} stars form</h3>
        @foreach ($collection as $hero)
            <!-- Stack the columns on mobile by making one full-width and the other half-width -->
            <div class="row">
                <div class="col-6 col-md-4">
                    <img style="width: 80px; height: 80px" src="/storage/avatar_images/{{$hero->avatar}}">
                    <p>{{$hero->id}}</p>
                    <p>{{$hero->faction}}</p>
                    <p>{{$hero->name}}</p>
                    <p>{{$hero->class}}</p>
                    <p>{{$hero->hp}}</p>
                    <p>{{$hero->atk}}</p>
                    <p>{{$hero->armor}}</p>
                    <p>{{$hero->speed}}</p>
                    <p>{{$hero->aoe}}</p>
                    <p>{{$hero->cc}}</p>
                    <p>{{$hero->heal}}</p>
                    <p>{{$hero->user_id}}</p> 
                </div>
                <div class="col-12 col-md-8">
                    <p>{{$hero->skill1}}</p>
                    <p>{{$hero->skill2}}</p>
                    <p>{{$hero->skill3}}</p>
                    <p>{{$hero->skill4}}</p>
                    <p><img style="width: 384px; height: 216px" src="/storage/hero_images/{{$hero->img}}"></p>
                </div>
            </div>
            <div style="display: flex">
                <p><a target="blank" class="btn btn-primary" href="/heroes/{{$star}}/{{$hero->name}}/edit">Edit hero data</a></p>
                <p>
                    {!!Form::open(['action' => ['Hero\HeroesController@destroy', intval($star), $hero->name], 'method' => 'POST', 'class' => 'pull-right'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}
                </p>           
            </div>
        @endforeach
    @else
        <h3>No data for {{$star}} stars form</h3>
    @endif
</div>