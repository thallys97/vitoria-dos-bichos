<x-layout>

    <main class="container">
        <h1>{{ $post->title }}</h1>
        
        @if ($post->media->count() > 0)
            <img src="{{ asset('storage/' . $post->media[0]->path) }}" class="img-fluid" alt="Imagem do post">
        @endif

        <p>{{ $post->content }}</p>
        
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Voltar para a Lista de Posts</a>
    </main>

</x-layout>
