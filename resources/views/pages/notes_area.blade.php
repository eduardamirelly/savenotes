@extends('layouts.base')

@section('title', 'Notas')

@section('content')

    <div>
        <p></p>
    </div>

    <!-- CONTENT NOTES AREA -->

    <div class="content display-flex flex-direction-column align-items-center justify-content-between">

        <!-- HEADER -->

        <header class="display-flex justify-content-center">
            <nav class="navbar display-flex flex-direction-column align-items-center justify-content-center">
                <div id="navbar-header" class="display-flex align-items-center justify-content-between">
                    <div>
                        <h1 id="savenote"><img src="./images/post-it.png" alt="post-it">SaveNotes</h1>
                    </div>
                    <div id="menu">
                        <div id="name_menu">Menu</div>
                        <ul class="display-flex align-items-center justify-content-end">
                            <li><a href="#"><img src="./images/user.png" alt="user">{{ $user->name }}</a></li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <li>
                                    <a 
                                        href="{{ route('logout') }}" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                        <img src="./images/logout.png" alt="user">
                                        Logout
                                    </a>
                                </li>
                            </form>
                        </ul>
                    </div>
                    <div class="menu-bar">
                        <div class="display-flex align-items-center justify-content-end">
                            <button type="button" id="button-open" onclick="openMenu()"><img src="./images/menu.png" alt="menu"><button>
                            <button type="button" id="button-close" onclick="closeMenu()"><img src="./images/close.png" alt="close"></button>
                        </div>
                    </div>
                </div>
                <ul id="navbar-body" class="display-flex align-items-center">
                    <div id="div-search" class="display-flex align-items-center">
                        <li id="search"><input type="search" name="search" placeholder="Buscar"><button type="submit"><img src="./images/loupe.png" alt="loupe"></button></li>
                        <li>
                            <select id="marks-select">
                                <option selected id="selected">Marcadores</option>
                                <option>Livros</option>
                                <option>Week</option>
                                <option>Videogames</option>
                            </select>
                        </li>
                    </div>
                    <div id="div-plus" class="display-flex align-items-center">
                        <li><a href="#" id="addnote" onclick="initialModal()"><img src="./images/plus.png" alt="plus">Nota</a></li>
                        <li><a href="#" id="addmark" onclick="initialModalMark()"><img src="./images/plus.png" alt="plus">Marcador</a></li>
                    </div>
                </ul>
            </nav> 
        </header>

        <!-- END HEADER -->

        <!-- NOTES -->

        <main>
            <div class="notes">
                @foreach ($notes as $note)
                    <div class="note-item dark-green display-flex flex-direction-column">
                        <a id="delete-note" href="{{ route('delete-note', ['id' => $note->id]) }}"><img src="./images/trash.png" alt="trash"></a>
                        <h3>{{ $note->title }}</h3>
                        <p>{{ $note->content }}</p>
                        <div class="marks-note">
                            <p href="#">Marcador</p>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </main>

        <!-- END NOTES -->

    </div>

    <!-- END NOTES AREA -->

    <!-- MODAL EDIT/CREATE NOTE -->

    @extends('modais.modal-note')

    <!-- END MODAL EDIT/CREATE NOTE -->

    <!-- MODAL MARK -->

    @extends('modais.modal-mark')

    <!-- END MODAL MARK -->

    <!-- JAVASCRIPT -->

    <script>
        //Menu
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

        //Modal mark
        function initialModalMark(){
            const modal = document.getElementById('modal-mark');
            if(modal){
                const closeModal = document.getElementById('close-mark');
                modal.classList.add('modal-show');

                modal.addEventListener('click', function (e) {
                    if(e.target.id == 'modal-mark' || e.target.id == 'close-mark'){
                        modal.classList.remove('modal-show');
                    }
                });
            }
        }

        //Modal edit/create
        function initialModal(){
            const modal = document.getElementById('modal-note');
            if(modal){
                const closeModal = document.getElementById('close');
                modal.classList.add('modal-show');

                textarea_title.style.height = 'auto';
                textarea_title.style.height = textarea_title.scrollHeight + 'px';

                textarea_text.style.height = 'auto';
                textarea_text.style.height = textarea_text.scrollHeight + 'px';

                modal.addEventListener('click', function (e) {
                    if(e.target.id == 'modal-note' || e.target.id == 'close'){
                        modal.classList.remove('modal-show');
                    }
                });
            }
        }

        var textarea_title = document.getElementById('textarea-title');
        var textarea_text = document.getElementById('textarea-text');

        textarea_title.addEventListener('input', autoResize, false)
        textarea_text.addEventListener('input', autoResize, false);
      
        function autoResize() {
            this.style.height = 'auto';
            this.style.height = this.scrollHeight + 'px';
        }

        var modal = document.getElementById('modal-note-content');
        var colorOld = null;
        var strColorOld = '';

        function FindColorActual() {
            const colors = ['dark-green', 'medium-green', 'yellow', 'orange', 'red'];
            const colorsID = ['c-d-green', 'c-m-green', 'c-yellow', 'c-orange', 'c-red'];
            console.log(colors.length);
            for(var i = 0; i<colors.length; i++){
                if(modal.classList.contains(colors[i])){
                    colorOld = document.getElementById(colorsID[i]);
                    strColorOld = colors[i];
                    console.log(strColorOld);
                    break;
                }
            }
        }

        function ChangeColor(color) {

            FindColorActual();
            const colorNew = document.getElementById(color);

            colorNew.addEventListener('click', function() {
                if(colorNew.classList.contains('hidden')){
                    colorNew.classList.remove('hidden');
                    colorOld.classList.add('hidden');
                    console.log(colorOld.classList);
                    modal.classList.remove(strColorOld);
                    modal.classList.add(colorNew.className);
                }
            });
        }
    </script>

@endsection
