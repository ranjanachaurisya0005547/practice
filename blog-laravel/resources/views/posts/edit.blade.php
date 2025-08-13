<x-app-layout>
    <div class="container mt-4">
        <h1 class="h3 mb-3">Edit Post</h1>

        <form method="POST" action="{{ route('posts.update', $post) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Title</label>
                <input name="title" class="form-control" value="{{ old('title', $post->title) }}" required>
                @error('title') <div class="text-danger small">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Content</label>
                <textarea name="content" rows="6" class="form-control" required>{{ old('content', $post->content) }}</textarea>
                @error('content') <div class="text-danger small">{{ $message }}</div> @enderror
            </div>

            <button class="btn btn-primary">Update</button>
            <a href="{{ route('posts.show', $post) }}" class="btn btn-link">Cancel</a>
        </form>
    </div>
</x-app-layout>