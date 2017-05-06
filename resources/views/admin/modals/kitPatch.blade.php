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
                        <label for="sent">Zaslanie stavebnice</label>
                        <input type="text" class="form-control" id="sent" name="sent" placeholder="Zaslanie stavebnice" required>
                    </div>

                    <div class="form-group">
                        <label for="package">Číslo balíčka</label>
                        <input type="text" class="form-control" id="package" name="package" placeholder="Číslo balíčka" required>
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