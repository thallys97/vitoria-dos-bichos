<x-layout>

    @section('head')
        <link rel="stylesheet" href="{{ asset('css/posts/posts.css') }}">
    @endsection    

<main class="container">
    <h1>Criar Novo Post</h1>

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
            <label for="title">Título do Post:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
        </div>

        <div class="form-group">
            <label for="content">Conteúdo do Post:</label>
            <textarea class="form-control" id="content" name="content">{{ old('content') }}</textarea>
        </div>

        <div class="form-group">
            <label for="media">Conteúdo do Post:</label>
            <input type="file" id="media" name="media" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary">Criar Post</button>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Lista de Posts</a>
    </form>
</main>



</x-layout>  
