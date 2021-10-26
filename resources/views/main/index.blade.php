@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($users as $user)
                    @if($user->role === 0)
                        <h1> {{ $user->name . ' admin' }}</h1>
                    @elseif($user->role === 1)
                        <h1> {{ $user->name }}</h1>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
