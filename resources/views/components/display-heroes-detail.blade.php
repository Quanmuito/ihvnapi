<div>
    <h3>{{ intval($star) }} stars form</h3>
    <!-- Stack the columns on mobile by making one full-width and the other half-width -->
    <div class="row">
        <div class="col-6 col-md-4">
            <img class="hero-icon show" src={{ asset("images/avatar_images/".$hero->faction."/".$hero->avatar) }} alt="hero_avatar">

            <table class="table table-srtiped">
                <x-display-attribute key="id" :collection="$hero"/>
                <x-display-attribute key="faction" :collection="$hero"/>
                <x-display-attribute key="class" :collection="$hero"/>
                <x-display-attribute key="name" :collection="$hero"/>
                <x-display-attribute key="hp" :collection="$hero"/>
                <x-display-attribute key="atk" :collection="$hero"/>
                <x-display-attribute key="armor" :collection="$hero"/>
                <x-display-attribute key="speed" :collection="$hero"/>
                <x-display-attribute key="aoe" :collection="$hero"/>
                <x-display-attribute key="cc" :collection="$hero"/>
                <x-display-attribute key="heal" :collection="$hero"/>
                <tr>
                    <th scope="row">CONTRIBUTOR</th>
                    <td>{{$hero->user->name}}</td>
                </tr>
            </table> 
        </div>
        <div class="col-12 col-md-8">
            <h4>Active skill:</h4>
            <p>{{$hero->skill1}}</p>
            <h4>Passive 1</h4>
            <p>{{$hero->skill2}}</p>
            <h4>Passive 2</h4>
            <p>{{$hero->skill3}}</p>
            <h4>Passive 3</h4>
            <p>{{$hero->skill4}}</p>
            <p><img style="width: 384px; height: 216px" src={{ asset("images/hero_images/".$hero->faction."/".$hero->img)}} alt="hero_image"></p>
        </div>
    </div>
    <div style="display: flex">
        @if (! is_null(Auth::user()) && Auth::user()->id == $hero->user_id)
            <p><a class="btn btn-primary" href="/heroes/{{$star}}/{{$hero->name}}/edit">Edit hero data</a></p>
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
</div>