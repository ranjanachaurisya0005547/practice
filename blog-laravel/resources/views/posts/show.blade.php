<x-app-layout>
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="h3">{{ $post->title }}</h1>
            @can('update', $post)
                <div>
                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-secondary">Edit</a>
                    <form method="POST" action="{{ route('posts.destroy', $post) }}" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Delete post?')">Delete</button>
                    </form>
                </div>
            @endcan
        </div>

        <p class="text-muted">by {{ $post->user->name }} • {{ $post->created_at->toDayDateTimeString() }}</p>

        <div class="mt-3">{!! nl2br(e($post->content)) !!}</div>

        <div class="mt-3">
            <a href="{{ route('posts.index') }}" class="btn btn-link">Back to posts</a>
        </div>
    </div>
</x-app-layout>