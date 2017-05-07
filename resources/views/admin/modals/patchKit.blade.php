 <div class="modal fade" id="patchKitsLeft" tabindex="-1" role="dialog" aria-hidden="true">
    <form action="{{ route('patchKitsLeft') }}" method="POST" id="patchKitsLeft-form">
        {{ method_field('PATCH') }} 
        
        {{csrf_field()}}

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title">Pridávanie stavebníc</h4>
                    <small>Zadajte počet prijatých stavebníc.</small>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="count">Počet stavebníc</label>
                        <input type="text" class="form-control" id="count" name="count" placeholder="Počet stavebníc" required>
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