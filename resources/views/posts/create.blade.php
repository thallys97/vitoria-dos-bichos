<x-layout>

    @push('head')
        <link rel="stylesheet" href="{{ asset('css/posts/posts.css') }}">
    @endpush   

<main class="container">
    <h1 class="title">Criar Novo Post</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="title" class="form-label">Título do Post:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
        </div>

        <div class="form-group">
            <label for="content" class="form-label">Conteúdo do Post:</label>
            <textarea class="form-control" id="content" name="content">{{ old('content') }}</textarea>
        </div>

        <div class="form-group">
            <label for="media" class="form-label">Imagem para o post:</label>
            <input type="file" id="media" class="form-control w-100" name="media" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary">Criar Post</button>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Lista de Posts</a>
    </form>
</main>



</x-layout>  
