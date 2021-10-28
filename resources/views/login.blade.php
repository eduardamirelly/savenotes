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
                <form>
                    <div class="display-flex flex-direction-column align-items-start justify-content-center">
                        <h2>Sing In</h2>
                        <input class="input-digit" type="email" name="email" placeholder="email">
                        <input class="input-digit" type="password" name="password" placeholder="password">
                        <button class="button-green button-input" type="submit">Login</button>
                        <p>Não tem uma conta? <a href="#">SingUp</a></p>
                        <p>Deseja retornar? <a href="#">Home</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- END CONTENT SING IN -->

@endsection
