@extends('layouts.base')

@section('title', 'Login')

@section('content')

<!-- CONTENT SING IN -->

    <div class="content-center display-flex align-items-center justify-content-center">
        <div class="display-flex align-items-start justify-content-center">
            <div id="img-input">
                <img src="./images/img.jpg" alt="img" width="600px">
            </div>
            <div class="form-input display-flex justify-content-center align-items-center">

                <x-jet-validation-errors class="mb-4" />

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="display-flex flex-direction-column align-items-start justify-content-center">
                        <h2>Sing In</h2>
                        <input class="input-digit" id="email" type="email" name="email" :value="old('email')" placeholder="email" required autofocus>
                        <input class="input-digit" id="password" type="password" name="password" placeholder="password" autocomplete="current-password" required>

                        <button class="button-green button-input" type="submit">Login</button>
                        
                        <p>Não tem uma conta? <a href="#">SingUp</a></p>

                        @if (Route::has('password.request'))
                            <p>
                                Esqueceu sua senha? 
                                <a href="{{ route('password.request') }}">Clique aqui</a>
                            </p>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>

<!-- END CONTENT SING IN -->

@endsection