@extends('layouts.app')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

@section('content')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container bootdey">
        <div class="email-app mb-4">
            @include('messenger.nav')

            <main class="inbox">
                <ul class="messages">
                    @each('messenger.partials.thread', $threads, 'thread', 'messenger.partials.no-threads')
                </ul>

            </main>
        </div>
    </div>

@stop
