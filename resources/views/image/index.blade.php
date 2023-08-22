@extends('layouts.app')

@section('content')
    <h1>Bilder</h1>
    <ul>
        @foreach ($images as $image)
            <li><a href="{{ route('images.show', $image->id) }}">{{ $image->title }}</a></li>
        @endforeach
    </ul>
@endsection