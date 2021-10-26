@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="main-body">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 gutters-sm">
                @foreach($users as $user)
                    <div class="col mb-3">
                        <div class="card">
                            <img src="https://via.placeholder.com/340x120/FFB6C1/000000" alt="Cover"
                                 class="card-img-top">
                            <div class="card-body text-center">
                                <img src="{{ asset('storage/'.$user->image->image_path) }}"
                                     style="width:100px;margin-top:-65px" alt="User"
                                     class="img-fluid img-thumbnail rounded-circle border-0 mb-3">
                                <h5 class="card-title">{{ $user->name }}</h5>
                                <p class="text-secondary mb-1">{{$user->email}}</p>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-light btn-sm bg-white has-icon btn-block" type="button"><i
                                        class="material-icons"></i>
                                    @if($user->role == 0)
                                        {{ 'admin' }}
                                    @elseif( $user-> role == 1)
                                        {{ 'user' }}
                                    @endif
                                </button>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
