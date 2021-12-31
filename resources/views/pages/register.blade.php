@extends('layouts.base')

@section('title', 'Register')

@section('content')

    <!-- CONTENT SING UP -->

    <div class="content-center display-flex align-items-center justify-content-center">
        <div class="display-flex align-items-start justify-content-center">
            <div class="form-input display-flex justify-content-center align-items-center">
                <form method="POST">
                    <div class="display-flex flex-direction-column align-items-start justify-content-center">
                        <h2>Sing Up</h2>
                        <input class="input-digit" type="text" name="username" placeholder="username">
                        <input class="input-digit" type="email" name="email" placeholder="email">
                        <input class="input-digit" type="password" name="password" placeholder="password">
                        <input class="input-digit" type="password" name="confirm-password" placeholder="confirm password">
                        <button class="button-green button-input" type="submit">Register</button>
                        <p>Já possui conta? <a href="#">SingIn</a></p>
                        <p>Deseja retornar? <a href="#">Home</a></p>
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
