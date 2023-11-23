<x-layout>

    <main class="container py-5">
        <h1 class="title d-none d-lg-block">Editar Vídeo</h1>

        <form action="{{ route('videos.update', $video->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Título do Vídeo (opcional)</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $video->title }}">
            </div>

            <div class="mb-3">
                <label for="path" class="form-label">Link do Vídeo (YouTube, Vimeo, etc.)</label>
                <input type="text" class="form-control" id="path" name="path" value="{{ $video->path }}" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrição do Vídeo (opcional)</label>
                <textarea class="form-control" id="description" name="description" rows="4">{{ $video->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Atualizar Vídeo</button>
        </form>
    </main>

</x-layout>
