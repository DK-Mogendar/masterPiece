@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Bild anzeigen</h2>
        <img src="data:image/jpeg;base64,{{ base64_encode($image->logblob) }}" alt="{{ $image->title }}">
        <p>Name: {{ $image->title }}</p>
    </div>
@endsection