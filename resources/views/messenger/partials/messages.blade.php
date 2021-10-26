<div style="margin-top: 10px">
    <div class="header">
        <img src=" {{ asset('storage/'. $message->user->image->image_path ) }}"
             alt="{{ $message->user->name }}" class="avatar">
        <div class="from">
            <span>{{$message->user->email}} {{$message->user->surname}}</span>
            {{$message->user->email}}
        </div>
        <div class="date">{{ $message->created_at->diffForHumans() }}</div>
    </div>

    <div class="content" style="padding: 10px">
        {{ $message->body }}
    </div>

</div>
