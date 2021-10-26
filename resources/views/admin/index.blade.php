@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
    <div class="container mt-3 mb-4">
        <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="row">
                <div class="col-md-12">
                    <div class="user-dashboard-info-box table-responsive mb-0 bg-white p-4 shadow-sm">
                        <table class="table manage-candidates-top mb-0">
                            <thead>
                            <tr>
                                <th>Users</th>
                                <th class="text-center">Status</th>
                                <th class="action text-right">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr class="candidates-list">
                                    <td class="title">
                                        <div class="thumb">
                                            <img class="img-fluid" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="">
                                        </div>
                                        <div class="candidate-list-details">
                                            <div class="candidate-list-info">
                                                <div class="candidate-list-title">
                                                    <h5 class="mb-0"><a href="#">{{ $user->name  }}</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="candidate-list-favourite-time text-center">
                                        <span class="candidate-list-time order-1">{{ \App\Enums\UserStatus::getDescription( $user->status ) }}</span>
                                    </td>
                                    <td>
                                        <ul class="list-unstyled mb-0 d-flex justify-content-end">

                                            <li><a href="/admin/user/{{$user->id}}/status/active" class="text-info" data-toggle="tooltip" title="" data-original-title="activ"><i class="far fa-check-square"></i></a></li>

                                            <li><a href="/admin/user/{{$user->id}}/status/block"  class="text-info" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-ban"></i></a></li>

                                            <li><a href="/admin/user/{{$user->id}}/status/delete"  class="text-danger" data-toggle="tooltip" title="" data-original-title="Delete"><i class="far fa-trash-alt"></i></a></li>

                                        </ul>
                                    </td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>

                     {{ $users->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
