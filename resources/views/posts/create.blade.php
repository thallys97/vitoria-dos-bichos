<x-layout>


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

    <form method="post" action="{{ route('posts.store') }}">
        @csrf

        <div class="form-group">
            <label for="title">Título do Post:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
        </div>

        <div class="form-group">
            <label for="content">Conteúdo do Post:</label>
            <textarea class="form-control" id="content" name="content">{{ old('content') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Criar Post</button>
    </form>
</main>



</x-layout>  
