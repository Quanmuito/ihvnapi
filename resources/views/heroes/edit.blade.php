@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Edit Hero Data</h1>
            {!! Form::open(['action' => ['Hero\HeroesController@update', $hero->name],'method' => 'POST']) !!}
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
                            'dark' => 'dark',
                            'void' => 'void'
                        ], 
                        $hero->faction)
                    }}
                </div>
                <div class="form-group">
                    {{Form::label('name', 'Name')}}
                    {{Form::text('name', $hero->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
                </div>
                <div class="form-group">
                    {{Form::label('class', 'Hero Class')}}
                    {{
                        Form::select('class', [
                            'warrior' => 'warrior',
                            'mage' => 'mage',
                            'ranger' => 'ranger',
                            'assasin' => 'assasin',
                            'priest' => 'priest'
                        ], 
                        $hero->class)
                    }}
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
                                'none' => 'none',
                                'frontline' => 'frontline',
                                'backline' => 'backline',
                                'random' => 'random',
                                'all' => 'all'
                            ], 
                            $hero->aoe)
                        }}
                    </div>
                <div class="form-group">
                        {{Form::label('cc', 'Hero has crowd control ability')}}
                        {{Form::text('cc', $hero->cc, ['class' => 'form-control', 'placeholder' => 'stun, freeze, petrify, twine, silence, horrify, transform. If not, type: none'])}}
                </div>
                <div class="form-group">
                    {{Form::label('heal', 'Heal type')}}
                    {{
                        Form::select('heal', [
                                'none' => 'none',
                                'self' => 'self',
                                'others' => 'others',
                                'both' => 'both'
                            ], 
                            $hero->heal)
                    }}
                </div>
                <div class="form-group">
                    {{Form::label('img', 'Hero Image')}}
                    {{Form::text('img', $hero->img, ['class' => 'form-control', 'placeholder' => 'Hero Image'])}}
                </div>
                <div class="form-group">
                    {{Form::label('avatar', 'Hero Avatar')}}
                    {{Form::text('avatar', $hero->avatar, ['class' => 'form-control', 'placeholder' => 'Hero Avatar'])}}
                </div>
                {{Form::hidden('_method','PUT')}}
                {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection