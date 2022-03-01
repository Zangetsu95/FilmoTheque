@extends('template.master')

@section('title', 'Liste des locations')

@section('content')
<h1>Liste des {{ $resource }}</h1>

        <ul>
    @foreach($locations as $location)
    <li><a href="{{ route('location_show', $location->id) }}">{{ $location->designation }}</a>
        @if($location->website)
        - <a href="{{ $location->website }}">{{ $location->website }}</a>
        @endif
    </li>
    @endforeach
    </ul>

@endsection
