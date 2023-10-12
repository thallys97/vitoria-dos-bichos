<x-layout>

@section('content')
<div class="container">
    <h2>Criar um Novo Autor</h2>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <form method="POST" action="{{ route('authors.store') }}">
        @csrf
        <div class="form-group">
            <label for="user_id">ID do Usuário:</label>
            <input type="text" name="user_id" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="full_name">Nome Completo:</label>
            <input type="text" name="full_name" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Adicionar Autor</button>
    </form>
</div>
@endsection


</x-layout> 
