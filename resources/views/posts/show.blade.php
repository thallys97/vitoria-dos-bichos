<x-layout>

    <main class="container">
        <h1>{{ $post->title }}</h1>
        
        @if ($post->media->count() > 0)
            <img src="{{ asset('storage/' . $post->media[0]->path) }}" class="img-fluid" alt="Imagem do post">
        @endif

        <p>{{ $post->content }}</p>
        
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Lista de Posts</a>
        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Editar Post</a>
        <form id="delete-form-{{ $post->id }}" action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="button" class="btn btn-danger delete-post" data-post-id="{{ $post->id }}">Excluir Post</button>
        </form>
    </main>

    <script src="{{ asset('js/posts/delete-modal-confirmation.js') }}"></script>

</x-layout>
