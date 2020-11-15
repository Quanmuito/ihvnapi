@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (!is_null($data['fivestar']))
                <x-display-heroes-detail star="5" :hero="$data['fivestar']"/>
            @endif
            @if (!is_null($data['sixstar']))
                <x-display-heroes-detail star="6" :hero="$data['sixstar']"/>
            @endif
            @if (!is_null($data['tenstar']))
                <x-display-heroes-detail star="10" :hero="$data['tenstar']"/>
            @endif            
        </div>
    </div>
@endsection