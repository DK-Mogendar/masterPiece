@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Bild hochladen</h2>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @elseif (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Titel:</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="logblob">Bild auswählen:</label>
                <input type="file" name="logblob" class="form-control" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary">Hochladen</button>
        </form>
    </div>
@endsection