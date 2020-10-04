<div>
    @if (count($collection) > 0)
        <h3>{{intval($star)}} stars form</h3>
        @foreach ($collection as $hero)
            <!-- Stack the columns on mobile by making one full-width and the other half-width -->
            <div class="row">
                <div class="col-6 col-md-4">
                    <img style="width: 80px; height: 80px" src="{{$hero->avatar}}">

                    <table class="table table-srtiped">
                        <tr>
                            <th scope="row">{{strtoupper('id')}}</th>
                            <td>{{$hero->id}}</td>
                        </tr>
                        <x-display-attribute key="faction" :collection="$hero"/>
                        <x-display-attribute key="class" :collection="$hero"/>
                        <tr>
                            <th scope="row">{{strtoupper('name')}}</th>
                            <td>{{$hero->name}}</td>
                        </tr>
                        <x-display-attribute key="hp" :collection="$hero"/>
                        <x-display-attribute key="atk" :collection="$hero"/>
                        <x-display-attribute key="armor" :collection="$hero"/>
                        <x-display-attribute key="speed" :collection="$hero"/>
                        <tr>
                            <th scope="row">{{strtoupper('aoe')}}</th>
                            <td>{{$hero->aoe}}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{strtoupper('cc')}}</th>
                            <td>{{$hero->cc}}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{strtoupper('heal')}}</th>
                            <td>{{$hero->heal}}</td>
                        </tr>
                        <tr>
                            <th scope="row">CONTRIBUTOR</th>
                            <td>{{App\User::find($hero->user_id)->name}}</td>
                        </tr>
                    </table> 
                </div>
                <div class="col-12 col-md-8">
                    <p>{{$hero->skill1}}</p>
                    <p>{{$hero->skill2}}</p>
                    <p>{{$hero->skill3}}</p>
                    <p>{{$hero->skill4}}</p>
                    <p><img style="width: 384px; height: 216px" src="{{$hero->img}}"></p>
                </div>
            </div>
            <div style="display: flex">
                @if (! is_null(Auth::user()) && strval(Auth::user()->id) === $hero->user_id)
                    <p><a target="blank" class="btn btn-primary" href="/heroes/{{$star}}/{{$hero->name}}/edit">Edit hero data</a></p>
                    <p>
                        {!!Form::open(['action' => ['Hero\HeroesController@destroy', intval($star), $hero->name], 'method' => 'POST', 'class' => 'pull-right'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {!!Form::close()!!}
                    </p>        
                @else
                    <p>You cannot edit or delete this data</p>
                @endif   
            </div>                
        @endforeach
    @else
        <h3>No data for {{$star}} stars form</h3>
    @endif
</div>