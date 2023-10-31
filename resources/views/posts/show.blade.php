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
            
        <a href="{{ route('posts.index') }}" class="btn btn-secondary button-post-list rounded-pill fw-bold mb-4">Lista de Posts</a>
        @auth
            <div class="mb-4">
                <a href="{{ route('posts.edit', $post->id) }}" class="btn button-post rounded-pill fw-bold">Editar Post</a>
                <form id="delete-form-{{ $post->id }}" action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger rounded-pill delete-post button-delete fw-bold" data-post-id="{{ $post->id }}">Excluir Post</button>
                </form>
            </div>
        @endauth
            
    </main>

    <script src="{{ asset('js/posts/delete-modal-confirmation.js') }}"></script>

</x-layout>
