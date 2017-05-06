<div class="modal fade" id="fllid" tabindex="-1" role="dialog" aria-hidden="true">
    <form action="id/store" method="POST">

        {{ csrf_field() }}

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title">FLL ID</h4>
                    <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </small>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <h4 class="m-t-xs text-center">
                                <input type="text" class="datumy" id="ids" name="ids" placeholder="100-110 alebo 110">
                            </h4>
                        </div>
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