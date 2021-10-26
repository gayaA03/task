@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="email-app mb-4">
            @include('messenger.nav')
            <main class="message">
                <div class="details">
                    <div class="title">{{ $thread->subject }}</div>
                    @each('messenger.partials.messages', $thread->messages, 'message')
                </div>
                <br>
                <br>
                <br>
                <hr>
                @include('messenger.partials.form-message')

            </main>


        </div>

    </div>
@stop
