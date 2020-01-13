<li class="media mt-4 mb-4">
    <a href="{{ route('users.show', $user->id) }}">
        <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="mr-3 gravatar"/>
    </a>
    <div class="media-body">
        <h5 class="mt-0 mb-1">{{ $user->name }} <smail> / {{ $status->created_at->diffForHumans() }}</smail></h5>
        {{ $status->content }}
    </div>
    @can('destroy', $status)
        <form action="{{ route('statuses.destroy', $status->id) }}" method="post" onsubmit="return confirm('Are you sure to delete this blog?')">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
        </form>
    @endcan
</li>
