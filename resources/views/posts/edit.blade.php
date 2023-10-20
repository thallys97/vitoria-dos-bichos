<x-layout>
    <main class="container">
        <h1>Editar o Post</h1>
        <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" name="title" class="form-control" value="{{ $post->title }}">
            </div>
            

            @if ($post->media->count() > 0)
                <div>    
                    <h5>imagem atual</h5>
                    <img src="{{ asset('storage/' . $post->media[0]->path) }}" alt="Current Image" class="mb-3" style="max-width: 100%">
                </div>    
            @endif

            <div class="form-group">
                <label for="media">(opcional) insira uma nova imagem</label>
                <input type="file" name="media"  id="media"  accept="image/*" class="form-control-file">
            </div>

            <div class="form-group">
                <label for="content">Conteúdo</label>
                <textarea name="content" class="form-control" rows="5">{{ $post->content }}</textarea>
            </div>


            <button type="submit" class="btn btn-primary">Atualizar Post</button>
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Voltar para a Lista de Posts</a>

        </form>
    </main>
</x-layout>  
