<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <form action="" method="POST" id="modal-form">
        {{ method_field('PATCH') }} 
        {{-- UPDATE method => PATCH method --}}
        {{ csrf_field() }}

        <div class="modal-dialog modal-sm">
            <div class="modal-content">

                <div class="modal-header text-center">
                    <h4 class="modal-title"></h4>
                    <small id="modal-small"></small>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="registration">Registrácia do turnaja</label>
                        <input type="text" class="form-control" id="registration" name="registration" placeholder="Registrácia do turnaja">
                    </div>

                    <div class="form-group">
                        <label for="sent">Zaslanie faktúry</label>
                        <input type="text" class="form-control" id="sent" name="sent" placeholder="Zaslanie faktúry">
                    </div>

                    <div class="form-group">
                        <label for="paid">Zaplatenie faktúry</label>
                        <input type="text" class="form-control" id="paid" name="paid" placeholder="Zaplatenie faktúry">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Zavrieť</button>
                    <button type="submit" class="btn btn-accent">Uložiť zmeny</button>
                </div>

            </div>
        </div>
    </form>
</div>