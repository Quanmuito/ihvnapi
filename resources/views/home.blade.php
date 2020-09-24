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

                    {{ __('You are logged in!') }}
                </div>

                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                @if (count($heroes[0]) > 0)
                                    <p>5 stars hero</p>
                                    @foreach ($heroes[0] as $hero)
                                        <img style="width: 80px; height: 80px" src="/storage/avatar_images/{{$hero->avatar}}">
                                    @endforeach
                                @else
                                    <p>No 5 stars hero data</p>
                                @endif
                            </div>
                            <div class="col-sm">
                                @if (count($heroes[1]) > 0)
                                    <p>6 stars hero</p>
                                    @foreach ($heroes[1] as $hero)
                                        <img style="width: 80px; height: 80px" src="/storage/avatar_images/{{$hero->avatar}}">
                                    @endforeach
                                @else
                                    <p>No 6 stars hero data</p>
                                @endif
                            </div>
                            <div class="col-sm">
                                @if (count($heroes[2]) > 0)
                                <p>10 stars hero</p>
                                    @foreach ($heroes[2] as $hero)
                                        <img style="width: 80px; height: 80px" src="/storage/avatar_images/{{$hero->avatar}}">
                                    @endforeach
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
