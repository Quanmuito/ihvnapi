@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <x-display-heroes-detail star="5" :collection="$fivestar"/>
            <x-display-heroes-detail star="6" :collection="$sixstar"/>
            <x-display-heroes-detail star="10" :collection="$tenstar"/>
        </div>
    </div>
@endsection