 <div class="modal fade" id="patchDate" tabindex="-1" role="dialog" aria-hidden="true">
    <form action="" method="POST" id="patchDate-form">
        {{ method_field('PATCH') }} 
        
        {{csrf_field()}}

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title">Úprava dátumu</h4>
                    <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Názov dátumu</label>
                        <input type="text" class="form-control" id="nameD" name="name" placeholder="Názov dátumu" required>
                    </div>

                    <div class="form-group">
                        <label for="date">Dátum</label>
                        <input type="text" class="form-control" id="dateD" name="date" placeholder="Dátum" required>
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