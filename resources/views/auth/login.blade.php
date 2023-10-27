<x-minimal-layout>

<main class="container vh-100 d-flex justify-content-center align-items-center login-main">
    <div class="row justify-content-center w-100">
        <div class="col-md-6">
            <div class="card custom-card">
                <div class="card-header"><h3 class="fw-bold mt-2">Login</h3></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login.request') }}">
                        @csrf

                        <div class="form-group mb-3 fw-bold">
                            <label for="email">E-Mail</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback bg-danger-subtle text-center" role="alert">
                                <strong class="fs-5">{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3 fw-bold">
                            <label for="password">Senha</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback bg-danger-subtle text-center" role="alert">
                                <strong class="fs-5">{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3 fw-bold">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    Lembrar-me
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn login-button rounded-pill fw-bold">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

</x-minimal-layout>
