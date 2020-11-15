@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md">
            @if(count($data['fivestar']) > 0)
                <h3>5 stars heroes</h3>
                <x-display-heroes faction="shadow" :collection="$data['fivestar']"/>
                <x-display-heroes faction="fortress" :collection="$data['fivestar']"/>
                <x-display-heroes faction="albyss" :collection="$data['fivestar']"/>
                <x-display-heroes faction="forest" :collection="$data['fivestar']"/>
                <x-display-heroes faction="dark" :collection="$data['fivestar']"/>
                <x-display-heroes faction="light" :collection="$data['fivestar']"/>
                <x-display-heroes faction="void" :collection="$data['fivestar']"/>
            @else
                <p>No 5 stars hero data</p>
            @endif
        </div>
        <div class="col-md">
            @if(count($data['sixstar']) > 0)
                <h3>6 stars heroes</h3>
                <x-display-heroes faction="shadow" :collection="$data['sixstar']"/>
                <x-display-heroes faction="fortress" :collection="$data['sixstar']"/>
                <x-display-heroes faction="albyss" :collection="$data['sixstar']"/>
                <x-display-heroes faction="forest" :collection="$data['sixstar']"/>
                <x-display-heroes faction="dark" :collection="$data['sixstar']"/>
                <x-display-heroes faction="light" :collection="$data['sixstar']"/>
                <x-display-heroes faction="void" :collection="$data['sixstar']"/>
            @else
                <p>No 6 stars hero data</p>
            @endif
        </div>
        <div class="col-md">
            @if(count($data['tenstar']) > 0)
                <h3>10 stars heroes</h3>
                <x-display-heroes faction="shadow" :collection="$data['tenstar']"/>
                <x-display-heroes faction="fortress" :collection="$data['tenstar']"/>
                <x-display-heroes faction="albyss" :collection="$data['tenstar']"/>
                <x-display-heroes faction="forest" :collection="$data['tenstar']"/>
                <x-display-heroes faction="dark" :collection="$data['tenstar']"/>
                <x-display-heroes faction="light" :collection="$data['tenstar']"/>
                <x-display-heroes faction="void" :collection="$data['tenstar']"/>
            @else
                <p>No 10 stars hero data</p>
            @endif
        </div>
        
    </div>
@endsection