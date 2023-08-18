@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Bild anzeigen</h2>
        <img src="data:image/jpeg;base64,{{ base64_encode($image->image_data) }}" alt="{{ $image->name }}">
        <p>Name: {{ $image->name }}</p>
    </div>
@endsection