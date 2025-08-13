<x-app-layout>
    <div class="container mt-4">
        <h1 class="h3 mb-3">Create Post</h1>

        <form method="POST" action="{{ route('posts.store') }}">
            @csrf

            <div class="mb-3">
                <label class="form-label">Title</label>
                <input name="title" class="form-control" value="{{ old('title') }}" required>
                @error('title') <div class="text-danger small">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Content</label>
                <textarea name="content" rows="6" class="form-control" required>{{ old('content') }}</textarea>
                @error('content') <div class="text-danger small">{{ $message }}</div> @enderror
            </div>

            <button class="btn btn-primary">Save</button>
            <a href="{{ route('posts.index') }}" class="btn btn-link">Cancel</a>
        </form>
    </div>
</x-app-layout>