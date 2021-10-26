<nav>
    <a href="{{route('messages.create')}}" class="btn btn-danger btn-block">New Email</a>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('messages') }}"><i class="fa fa-inbox"></i> Inbox <span class="badge badge-danger">{{Auth::user()->newThreadsCount()}}</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('messages.sent') }}"><i class="fa fa-rocket"></i> Sent</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-trash-o"></i> Trash</a>
        </li>
    </ul>
</nav>
