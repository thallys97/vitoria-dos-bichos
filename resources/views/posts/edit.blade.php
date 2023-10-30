<x-layout>

    @push('head')
        <link rel="stylesheet" href="{{ asset('css/posts/posts.css') }}">
    @endpush   

    <main class="container">
        <h1>Editar o Post</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" name="title" class="form-control" value="{{ $post->title }}">
            </div>
            

            @if ($post->media->count() > 0)
                <div>    
                    <h5>Imagem atual</h5>
                    <img src="{{ asset('storage/' . $post->media[0]->path) }}" alt="Current Image" class="mb-3" style="max-width: 100%">
                </div>    
            @endif

            <div class="form-group">
                <label for="media">(Opcional) Troque a imagem atual por outra</label>
                <input type="file" name="media"  id="media"  accept="image/*" class="form-control">
            </div>

            <span id="file-icon" class="fa-stack fa-2x" style="cursor: pointer; display: none;">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fas fa-file-upload fa-stack-1x fa-inverse"></i>
            </span>
    
            <span id="file-name" style="display: none;"></span>

            <div class="form-group">
                <label for="content">Conteúdo</label>
                <textarea name="content" class="form-control" rows="5">{{ $post->content }}</textarea>
            </div>


            <button type="submit" class="btn btn-primary">Atualizar Post</button>
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Lista de Posts</a>

        </form>
    </main>

    <script src="{{ asset('js/posts/file-upload-icon.js') }}"></script>

</x-layout>  
