@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
         <h1>Create Post</h1>
        {!! Form::open(['action' => 'Hero\HeroesController@store', 'method' => 'POST', 'files' => true]) !!}
            <div class="form-group">
                {{Form::label('stars', 'Stars')}}
                {{
                    Form::select('stars', [
                        '5 stars' => 5,
                        '6 stars' => 6,
                        '10 stars' => 10
                    ], 
                    '5 stars')
                }}
            </div>
            <div class="form-group">
                {{Form::label('faction', 'Faction')}}
                {{
                    Form::select('faction', [
                        'Shadow' => 'shadow',
                        'Fortress' => 'fortress',
                        'Albyss' => 'albyss',
                        'Forest' => 'forest',
                        'Light' => 'light',
                        'Dark' => 'dark'
                    ], 
                    'Shadow')
                }}
            </div>
            <div class="form-group">
                {{Form::label('name', 'Name')}}
                {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
            </div>
            <div class="form-group">
                {{Form::label('class', 'Hero class')}}
                {{Form::text('class', '', ['class' => 'form-control', 'placeholder' => 'Class'])}}
            </div>
            <div class="form-group">
                {{Form::label('skill1', 'Active skill')}}
                {{Form::textarea('skill1', '', ['class' => 'form-control', 'placeholder' => 'Active skill description'])}}
            </div>
            <div class="form-group">
                {{Form::label('skill2', 'Passive skill 1')}}
                {{Form::textarea('skill2', '', ['class' => 'form-control', 'placeholder' => 'Passive skill 1 description'])}}
            </div>
            <div class="form-group">
                {{Form::label('skill3', 'Passive skill 2')}}
                {{Form::textarea('skill3', '', ['class' => 'form-control', 'placeholder' => 'Passive skill 2 description'])}}
            </div>
            <div class="form-group">
                {{Form::label('skill4', 'Passive skill 3')}}
                {{Form::textarea('skill4', '', ['class' => 'form-control', 'placeholder' => 'Passive skill 3 description'])}}
            </div>
            <div class="form-group">
                {{Form::label('hp', 'Stats: HP')}}
                {{Form::number('hp', 0)}}
            </div>
            <div class="form-group">
                {{Form::label('atk', 'Stats: ATK')}}
                {{Form::number('atk', 0)}}
            </div>
            <div class="form-group">
                {{Form::label('armor', 'Stats: ARMOR')}}
                {{Form::number('armor', 0)}}
            </div>
            <div class="form-group">
                {{Form::label('speed', 'Stats: SPEED')}}
                {{Form::number('speed', 0)}}
            </div>
            <div class="form-group">
                {{Form::label('aoe', 'Hero has AOE damage: ')}}
                {{Form::checkbox('aoe', 'value', false)}}
            </div>
            <div class="form-group">
                {{Form::label('cc', 'Crowd Controll Types')}}
                {{Form::text('cc', '', ['class' => 'form-control', 'placeholder' => 'Name of cc types'])}}
            </div>
            <div class="form-group">
                {{Form::label('heal', 'Heal type')}}
                {{
                    Form::select('heal', [
                        'None' => 'None',
                        'Self-heal' => 'Self-heal',
                        'Heal others' => 'Heal others',
                        'Both' => 'Both self-heal and heal others'
                    ], 
                    'None')
                }}
            </div>

            <div class="form-group">
                {{Form::label('img', 'Hero Image')}}
                {{Form::file('img')}}
            </div>
            <div class="form-group">
                {{Form::label('avatar', 'Hero Avatar')}}
                {{Form::file('avatar')}}
            </div>
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
</div>
@endsection