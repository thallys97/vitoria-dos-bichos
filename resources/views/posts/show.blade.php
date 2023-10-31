<x-layout>

    @push('head')
        <link rel="stylesheet" href="{{ asset('css/posts/posts.css') }}">
    @endpush

    <main class="container">
        <section class="post">
            <h1 class="text-center fw-bold post-title">{{ $post->title }}</h1>
            
            @if ($post->media->count() > 0)                
                <img src="{{ asset('storage/' . $post->media[0]->path) }}" class="img-fluid" alt="Imagem do post">                
            @endif

            <p class="post-content">{{ $post->content }}</p>

        </section>    
            
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Lista de Posts</a>
        @auth
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Editar Post</a>
            <form id="delete-form-{{ $post->id }}" action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="button" class="btn btn-danger delete-post" data-post-id="{{ $post->id }}">Excluir Post</button>
            </form>
        @endauth
            
    </main>

    <script src="{{ asset('js/posts/delete-modal-confirmation.js') }}"></script>

</x-layout>
