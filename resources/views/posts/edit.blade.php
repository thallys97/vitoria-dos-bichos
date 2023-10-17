<x-layout>
    <main class="container">
        <h1>Edit Post</h1>
        <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="{{ $post->title }}">
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" class="form-control" rows="5">{{ $post->content }}</textarea>
            </div>

            <div class="form-group">
                <label for="media">Media</label>
                <input type="file" name="media" class="form-control-file">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </main>
</x-layout>  
