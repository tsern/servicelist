<a href="{{ $message->link }}" class="dropdown-item d-flex">
    <span class="avatar mr-3 align-self-center" style="background-image: url( {{ $message->user->logo }})"></span>
    <div>
        {{ $message->text }}
        <div class="small text-muted">{{ $message->time_ago }} ago</div>
    </div>
</a>
