<x-app-layout>
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="h3">Posts</h1>
            <a href="{{ route('posts.create') }}" class="btn btn-primary">New Post</a>
        </div>

        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif

        <div class="list-group">
            @foreach ($posts as $post)
                <a href="{{ route('posts.show', $post) }}" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{ $post->title }}</h5>
                        <small>{{ $post->created_at->diffForHumans() }}</small>
                    </div>
                    <p class="mb-1 text-truncate">{{ Str::limit($post->content, 140) }}</p>
                    <small>by {{ $post->user->name }}</small>
                </a>
            @endforeach
        </div>

        <div class="mt-3">
            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>