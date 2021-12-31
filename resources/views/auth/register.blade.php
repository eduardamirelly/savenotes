@extends('layouts.base')

@section('title', 'Register')

@section('content')

    <!-- CONTENT SING UP -->

    <div class="content-center display-flex align-items-center justify-content-center">
        <div class="display-flex align-items-start justify-content-center">
            <div class="form-input display-flex justify-content-center align-items-center">

                {{-- CUSTOMIZAR ESSA PARTE DE ERROS --}}

                <x-jet-validation-errors class="mb-4" />
                
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="display-flex flex-direction-column align-items-start justify-content-center">
                        <h2>Sing Up</h2>
                        <input class="input-digit" type="text" name="name" placeholder="username" :value="old('name')" required autofocus autocomplete="name" >
                        <input class="input-digit" type="email" name="email" placeholder="email" :value="old('email')" required>
                        <input class="input-digit" type="password" name="password" placeholder="password" required autocomplete="new-password">
                        <input class="input-digit" type="password" name="password_confirmation" placeholder="confirm password" required autocomplete="new-password">

                        {{-- CONFIRMAR SE VOU QUERER UTILIZAR ESSA FUNCIONALIDADE --}}

                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="mt-4">
                                <x-jet-label for="terms">
                                    <div class="flex items-center">
                                        <x-jet-checkbox name="terms" id="terms"/>
            
                                        <div class="ml-2">
                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                            ]) !!}
                                        </div>
                                    </div>
                                </x-jet-label>
                            </div>
                        @endif

                        <button class="button-green button-input" type="submit">Register</button>

                        <p>Já possui conta? <a href="{{ route('login') }}">SingIn</a></p>
                        <p>Deseja retornar? <a href="{{ route('index') }}">Home</a></p>
                    </div>
                </form>
            </div>
            <div id="img-input">
                <img src="./images/img.jpg" alt="img" width="600px">
            </div>
        </div>
    </div>

    <!-- END CONTENT SING UP -->

@endsection