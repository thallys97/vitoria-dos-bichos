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
        
        <div class="container-lg form-custom">
            <div class="form-group">
                <label for="title" class="form-label fs-5">Título do Post:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
            </div>

            <div class="form-group">
                <label for="content" class="form-label fs-5">Conteúdo do Post:</label>
                <textarea class="form-control" id="content" name="content">{{ old('content') }}</textarea>
            </div>

            <div class="form-group">
                <label for="media" class="form-label fs-5">Envie a imagem para o post:</label>
                <input type="file" id="media" class="form-control form-control-file" name="media" accept="image/*">
            </div>

            <span id="file-icon" class="fa-stack fa-2x" style="cursor: pointer; display: none;">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fas fa-file-upload fa-stack-1x fa-inverse"></i>
            </span>

            <span id="file-name" style="display: none;"></span>

            <div class="form-buttons d-flex justify-content-evenly">
                <button type="submit" class="btn btn-primary button-post rounded-pill fw-bold">Criar Post</button>
                <a href="{{ route('posts.index') }}" class="btn btn-secondary button-post-list rounded-pill fw-bold">Lista de Posts</a>
            </div>
        </div>

    </form>
</main>

<script src="{{ asset('js/posts/file-upload-icon.js') }}"></script>

</x-layout>  
