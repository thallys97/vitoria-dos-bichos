<x-layout>

@push('head')
    <link rel="stylesheet" href="{{ asset('css/users/users.css') }}">
@endpush 


<main class="container">
    <h2>Editar Usuário</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form id="update-form-{{ $user->id }}"  method="post" action="{{ route('users.update', $user->id) }}">
        @csrf
        @method('PUT') 

        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" required>
        </div>

        <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" class="form-control" value="{{ $user->password }}" required>
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirmar Senha</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" value="{{ $user->password }}" required>
        </div>

        <div class="form-group">
            <label for="role">Função</label>
            <select name="role" id="role" class="form-control" required>
                <option value="autor" {{ $user->role === 'autor' ? 'selected' : '' }}>Autor</option>
                <option value="editor" {{ $user->role === 'editor' ? 'selected' : '' }}>Editor</option>
                <option value="administrador" {{ $user->role === 'administrador' ? 'selected' : '' }}>Administrador</option>
            </select>
        </div>

        <div class="form-group">
            <label for="phone">Telefone</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{ $user->phone }}" required>
        </div>

        <button type="button" class="btn btn-primary update-user" data-user-id="{{ $user->id }}">Salvar</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Lista de Usuários</a>
    </form>
</main>

<script src="{{ asset('js/users/update-modal-confirmation.js') }}"></script>

</x-layout> 
