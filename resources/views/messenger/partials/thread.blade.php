<?php $class = $thread->isUnread(Auth::id()) ? 'unread' : ''; ?>
<li class="message {{ $class }}">
    <a href="{{ route('messages.show', $thread->id) }}">

        <div class="header">
            <span class="from">{{ $thread->creator()->name }}</span>
            <span class="date">  <span class="fa fa-paper-clip"></span> {{ $thread->created_at->diffForHumans() }}</span>
        </div>
        <div class="title">
            {{ $thread->subject }}
        </div>
        <div class="description">
            {{ $thread->latestMessage->body }}
        </div>
    </a>
</li>
