<div id="modal-note" class="modal-container display-flex flex-direction-column align-items-center justify-content-center">
    <div class="colors display-flex align-items-center">
        <div onclick="ChangeColor('c-d-green')" id="c-d-green" class="dark-green"><img src="./images/button_x.png" alt="x"></div>
        <div onclick="ChangeColor('c-m-green')" id="c-m-green" class="medium-green hidden"><img src="./images/button_x.png" alt="x"></div>
        <div onclick="ChangeColor('c-yellow')" id="c-yellow" class="yellow hidden"><img src="./images/button_x.png" alt="x"></div>
        <div onclick="ChangeColor('c-orange')" id="c-orange" class="orange hidden"><img src="./images/button_x.png" alt="x"></div>
        <div onclick="ChangeColor('c-red')" id="c-red" class="red hidden"><img src="./images/button_x.png" alt="x"></div>
    </div>
    <div id="modal-note-content" class="modal dark-green display-flex flex-direction-column">
        <form action="{{ route('create-note') }}" method="GET">
            <div class="controls display-flex justify-content-end">
                <div class="circle">
                    <a href="#"><img src="./images/trash.png" alt="trash"></a>
                </div>
                <div class="circle">
                    <a href="#" id="close"><img src="./images/button_x.png" alt="x"></a>
                </div>
            </div>
            <div class="title">
                <textarea name="title" id="textarea-title" rows="1" placeholder="Title"></textarea>
            </div>
            <div class="text">
                <textarea name="content" id="textarea-text" rows="1" placeholder="Text"></textarea>
            </div>
            <div class="marks display-flex align-items-center">
                {{-- <p href="#" class="display-flex align-items-center">Marcador<img src="./images/button_x.png" alt="x"></p> --}}
                <a href="#" class="display-flex align-items-center"><img src="./images/plus.png" alt="plus">Novo Marcador</a>
            </div>
            <div class="edit-note">
                <p>Editado em {dia} de {mês} de {ano}</p>
            </div>

            <button class="button-green button-input" type="submit">Create</button>
        </form>
    </div>
</div>