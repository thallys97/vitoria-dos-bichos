<x-layout>
  
@push('head')
    <link rel="stylesheet" href="{{ asset('css/users/users.css') }}">
@endpush   

<main class="container">
    <h1>Criar Novo Usuário</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('users.store') }}">
        @csrf

        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
        </div>

        <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirme a Senha</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="phone">Telefone</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}" required>
        </div>

        <div class="form-group">
            <label for="role">Função</label>
            <div class="input-group"> <!-- Adicione uma classe input-group -->
                <select name="role" id="role" class="form-control" required>
                    <option value="autor">Autor</option>
                    <option value="editor">Editor</option>
                    <option value="administrador">Administrador</option>
                </select>
                <div class="input-group-append"> <!-- Adicione uma classe input-group-append -->
                    <span class="input-group-text">
                        <i class="fas fa-caret-down"></i> <!-- Ícone de seta para baixo do Font Awesome -->
                    </span>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Criar Usuário</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Lista de Usuários</a>
    </form>
</main>

</x-layout> 
