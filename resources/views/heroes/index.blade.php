@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md">
            @if(count($fivestar) > 0)
                <h3>5 stars heroes</h3>
                <x-display-heroes faction="shadow" :collection="$fivestar"/>
                <x-display-heroes faction="fortress" :collection="$fivestar"/>
                <x-display-heroes faction="albyss" :collection="$fivestar"/>
                <x-display-heroes faction="forest" :collection="$fivestar"/>
                <x-display-heroes faction="dark" :collection="$fivestar"/>
                <x-display-heroes faction="light" :collection="$fivestar"/>
                <x-display-heroes faction="void" :collection="$fivestar"/>
            @else
                <p>No 5 stars hero data</p>
            @endif
        </div>
        <div class="col-md">
            @if(count($sixstar) > 0)
                <h3>6 stars heroes</h3>
                <x-display-heroes faction="shadow" :collection="$sixstar"/>
                <x-display-heroes faction="fortress" :collection="$sixstar"/>
                <x-display-heroes faction="albyss" :collection="$sixstar"/>
                <x-display-heroes faction="forest" :collection="$sixstar"/>
                <x-display-heroes faction="dark" :collection="$sixstar"/>
                <x-display-heroes faction="light" :collection="$sixstar"/>
                <x-display-heroes faction="void" :collection="$sixstar"/>
            @else
                <p>No 6 stars hero data</p>
            @endif
        </div>
        <div class="col-md">
            @if(count($tenstar) > 0)
                <h3>10 stars heroes</h3>
                <x-display-heroes faction="shadow" :collection="$tenstar"/>
                <x-display-heroes faction="fortress" :collection="$tenstar"/>
                <x-display-heroes faction="albyss" :collection="$tenstar"/>
                <x-display-heroes faction="forest" :collection="$tenstar"/>
                <x-display-heroes faction="dark" :collection="$tenstar"/>
                <x-display-heroes faction="light" :collection="$tenstar"/>
                <x-display-heroes faction="void" :collection="$tenstar"/>
            @else
                <p>No 10 stars hero data</p>
            @endif
        </div>
        
    </div>
@endsection