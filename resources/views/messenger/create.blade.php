@extends('layouts.app')

@section('content')
    <br>
    <br>
    <div class="container bootdey">
        <div class="email-app">
            @include('messenger.nav')
            <main>
                <p class="text-center">New Message</p>
                <form action="{{ route('messages.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-row mb-3">
                        <label for="to" class="col-2 col-sm-1 col-form-label">To:</label>
                        <div class="col-4 col-sm-4">
                            <select name="recipients[]" class="form-control" >
                                <option value="">Type email</option>
                                @foreach($users as $id => $email)
                                    <option value="{{$id}}">{{$email}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <label for="to" class="col-2 col-sm-1 col-form-label">Subject:</label>
                        <div class="col-4 col-sm-4">
                            <input type="text" class="form-control" name="subject" placeholder="Subject"
                                   value="{{ old('subject') }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-11 ml-auto">

                            <div class="form-group mt-4">
                                <textarea class="form-control" id="message" name="message"  rows="12" placeholder="Click here to reply">{{ old('message') }}</textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-danger">Send</button>
                            </div>
                        </div>
                    </div>
                </form>
            </main>
        </div>
    </div>
@stop
