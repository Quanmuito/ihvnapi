@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div style="position: absolute; right: 1rem">
                    <a href="/heroes/create" class="btn btn-primary">Create new hero data</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in! Your contribution:') }}
                </div>

                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                @if (count($fivestar) > 0)
                                    <h4>5 stars hero</h4>
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
                            <div class="col-sm">
                                @if (count($sixstar) > 0)
                                    <h4>6 stars hero</h4>
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
                            <div class="col-sm">
                                @if (count($tenstar) > 0)
                                    <h4>10 stars hero</h4>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
