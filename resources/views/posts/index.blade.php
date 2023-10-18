<x-layout>

    <main class="container">
        <h1>Lista de Posts</h1>
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        @if ($post->media->count() > 0)
                            <img src="{{ asset('storage/' . $post->media[0]->path) }}" class="card-img-top" alt="Imagem do post">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ $post->content }}</p>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

</x-layout>  
