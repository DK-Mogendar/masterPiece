@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-8">
            <div class="card bg-indigo-100">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>

                <div class="btn btn-primary ml-3" style="height: auto; width: 50%;border-radius: 50px;">
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </div>

                <br>

                <div class="btn btn-primary ml-3" style="height: auto; width: 50%;border-radius: 50px;">
                    <a href="{{ url('start') }}" class="btn btn-primary" style="height: auto; width: 50%;border-radius: 50px;">Home/Start</a>
                </div>

                <br>
            </div>
        </div>
    </div>
</div>
@endsection
