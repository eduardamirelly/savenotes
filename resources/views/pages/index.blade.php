@extends('layouts.base')

@section('title', 'Home')

@section('content')

    <!-- CONTENT INDEX -->

    <div class="content display-flex flex-direction-column align-items-center justify-content-between">

        <!-- HEADER -->

        <header>
            <nav class="display-flex align-items-center justify-content-between">
                <div>
                    <h1 id="savenote"><img src="./images/post-it.png" alt="post-it">SaveNotes</h1>
                </div>
                <div id="menu">
                    <div id="name_menu">Menu</div>
                    <ul class="display-flex align-items-center justify-content-end">
                        
                        <li><a href="{{ route('login') }}"><img src="./images/user.png" alt="user">Login</a></li>
                        <li><a href="{{ route('register') }}"><img src="./images/user.png" alt="user">Register</a></li>
                        <li><a href="#"><img src="./images/info.png" alt="info">About</a></li>
                    </ul>
                </div>
                <div id="menu-bar">
                    <div class="display-flex align-items-center justify-content-end">
                        <button type="button" id="button-open" onclick="openMenu()"><img src="./images/menu.png" alt="menu"></button>
                        <button type="button" id="button-close" onclick="closeMenu()"><img src="./images/close.png" alt="close"></button>
                    </div>
                </div>
            </nav>
        </header>

        <!-- END HEADER -->

        <!-- SECTION 01 -->

        <section id="section-01">
            <div class="display-flex flex-direction-column justify-content-center align-items-center">
                <div>
                    <h2>Crie suas notas aqui!</h2>
                    <h4>Cadastre-se já!</h4>
                </div>
                <div class="display-flex align-items-center">
                    <img id="img_gif" src="./images/arrow.gif" alt="arrow">
                    <img id="img_paper_notes" src="./images/paper_notes.png" alt="paper_notes">
                    <img id="img_gif" src="./images/arrow.gif" alt="arrow">
                </div>
            </div>
        </section>

        <!-- END SECTION 01 -->

        <!-- SECTION 02 -->
        
        <section id="section-02">
            <div class="display-flex align-items-center justify-content-around">
                <div>
                    <img id="img_idea" src="./images/idea.png" alt="idea">
                </div>
                <div class="display-flex flex-direction-column align-items-center justify-content-center" id="idea_text">
                    <h2>Gerenciador de anotações</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla erat magna, congue ut ligula ut, ultricies ultricies massa. Donec imperdiet eleifend lacus. Integer sed lacus nunc. Duis hendrerit ipsum in nunc varius, et dictum arcu, et finibus ex fermentum. Phasellus tempor ligula vitae.</p>
                    <a class="button-green" href="#">Registre-se Agora</a>
                </div>
            </div>
        </section> 

        <!-- END SECTION 02 -->

        <!-- SECTION 03 -->

        <section id="section-03">
            <div class="display-flex flex-direction-column align-items-center justify-content-center">
                <div>
                    <h2>Tecnologias utilizadas</h2>
                </div>
                <div id="tecnologies">
                    <div><img src="./images/github.png" alt="image"></div>
                    <div><img src="./images/github.png" alt="image"></div>
                    <div><img src="./images/github.png" alt="image"></div>
                    <div><img src="./images/github.png" alt="image"></div>
                    <div><img src="./images/github.png" alt="image"></div>
                    <div><img src="./images/github.png" alt="image"></div>
                    <div><img src="./images/github.png" alt="image"></div>
                    <div><img src="./images/github.png" alt="image"></div>
                </div>
            </div>
        </section>

        <!-- END SECTION 03 -->

    </div>

    <!-- END CONTENT INDEX -->

    <!-- FOOTER -->

    <footer>
        <div class="display-flex align-items-center justify-content-center">
            <div class="display-flex flex-direction-column align-items-center">
                <p>&copy;2021 SaveNotes</p>
                <p>Desenvolvido por Eduarda Mirelly</p>
                <p>Project Open Source <br> Disponível em:</p>
                <a href="https://github.com/eduardamirelly/savenotes"><img src="./images/github.png" alt="image-github" width="100px"></a>
            </div>
        </div>
    </footer>

    <!-- END FOOTER -->

    <!-- JAVASCRIPT -->

    <script>
        var menu = document.getElementById('menu');
        var porcent_left = menu.style.left;
        var button_menu_open = document.querySelector('#button-open');
        var button_menu_close = document.querySelector('#button-close');

        function openMenu(){
            menu.style.left = '0%';
            menu.style.transition = '0.5s';
            button_menu_open.style.display = 'none';
            button_menu_close.style.display = 'block';
        }

        function closeMenu(){
            menu.style.left = porcent_left;
            button_menu_close.style.display = 'none';
            button_menu_open.style.display = 'block';
        }
    </script>

@endsection
