<div class="modal fade" id="createDate" tabindex="-1" role="dialog" aria-hidden="true">
    <form action="dates/create" method="POST">
        {{ csrf_field() }}

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title">Pridanie dátumu</h4>
                    <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Názov dátumu</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Názov dátumu" required>
                    </div>

                    <div class="form-group">
                        <label for="date">Dátum</label>
                        <input type="text" class="form-control" id="date" name="date" placeholder="Dátum" required>
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