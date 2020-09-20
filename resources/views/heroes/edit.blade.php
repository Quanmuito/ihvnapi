@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
         <h1>Edit Hero Data</h1>
        {!! Form::open(['action' => ['Hero\HeroesController@update', $hero->name],'method' => 'POST', 'files' => true]) !!}
            <div class="form-group">
                {{Form::label('stars', 'Stars')}}
                {{
                    Form::select('stars', [
                        5 => 5,
                        6 => 6,
                        10 => 10
                    ], 
                    $star)
                }}
            </div>
            <div class="form-group">
                {{Form::label('faction', 'Faction')}}
                {{
                    Form::select('faction', [
                        'shadow' => 'shadow',
                        'fortress' => 'fortress',
                        'albyss' => 'albyss',
                        'forest' => 'forest',
                        'light' => 'light',
                        'dark' => 'dark'
                    ], 
                    $hero->faction)
                }}
            </div>
            <div class="form-group">
                {{Form::label('name', 'Name')}}
                {{Form::text('name', $hero->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
            </div>
            <div class="form-group">
                {{Form::label('class', 'Hero class')}}
                {{Form::text('class', $hero->class, ['class' => 'form-control', 'placeholder' => 'Class'])}}
            </div>
            <div class="form-group">
                {{Form::label('skill1', 'Active skill')}}
                {{Form::textarea('skill1', $hero->skill1, ['class' => 'form-control', 'placeholder' => 'Active skill description'])}}
            </div>
            <div class="form-group">
                {{Form::label('skill2', 'Passive skill 1')}}
                {{Form::textarea('skill2', $hero->skill2, ['class' => 'form-control', 'placeholder' => 'Passive skill 1 description'])}}
            </div>
            <div class="form-group">
                {{Form::label('skill3', 'Passive skill 2')}}
                {{Form::textarea('skill3', $hero->skill3, ['class' => 'form-control', 'placeholder' => 'Passive skill 2 description'])}}
            </div>
            <div class="form-group">
                {{Form::label('skill4', 'Passive skill 3')}}
                {{Form::textarea('skill4', $hero->skill4, ['class' => 'form-control', 'placeholder' => 'Passive skill 3 description'])}}
            </div>
            <div class="form-group">
                {{Form::label('hp', 'Stats: HP')}}
                {{Form::number('hp', $hero->hp)}}
            </div>
            <div class="form-group">
                {{Form::label('atk', 'Stats: ATK')}}
                {{Form::number('atk', $hero->atk)}}
            </div>
            <div class="form-group">
                {{Form::label('armor', 'Stats: ARMOR')}}
                {{Form::number('armor', $hero->armor)}}
            </div>
            <div class="form-group">
                {{Form::label('speed', 'Stats: SPEED')}}
                {{Form::number('speed', $hero->speed)}}
            </div>
            <div class="form-group">
                    {{Form::label('aoe', 'AOE damage')}}
                    {{
                        Form::select('aoe', [
                            'None' => 'None',
                            'Front line' => 'Front line',
                            'Back line' => 'Back line',
                            'Random target' => 'Random target',
                            'All targets' => 'All targets'
                        ], 
                        $hero->aoe)
                    }}
                </div>
            <div class="form-group">
                    {{Form::label('cc', 'Hero has crowd control ability')}}
                    {{Form::text('cc', $hero->cc, ['class' => 'form-control', 'placeholder' => 'stun, freeze, petrify, silence, horrify, transform. If not, type: none'])}}
            </div>
            <div class="form-group">
                {{Form::label('heal', 'Heal type')}}
                {{
                    Form::select('heal', [
                        'None' => 'None',
                        'Self-heal' => 'Self-heal',
                        'Heal others' => 'Heal others',
                        'Both' => 'Both'
                    ], 
                    $hero->heal)
                }}
            </div>

            <div class="form-group">
                {{Form::label('img', 'Hero Image')}}
                {{Form::file('img')}}
                <img style="width: 192px; height: 108px" src="/storage/hero_images/{{$hero->img}}">
            </div>
            <div class="form-group">
                {{Form::label('avatar', 'Hero Avatar')}}
                {{Form::file('avatar')}}
                <img style="width: 80px; height: 80px" src="/storage/avatar_images/{{$hero->avatar}}">
            </div>
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
</div>
@endsection