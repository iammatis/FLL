 <div class="modal fade" id="deleteDate" tabindex="-1" role="dialog" aria-hidden="true">
    <form action="" method="POST" id="deleteDate-form">
        {{ method_field('DELETE') }} 
        
        {{csrf_field()}}

        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 id="deleteDateTitle" class="modal-title"></h4>
                    <small>Zmazanie Datumu</small>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Zavrieť</button>
                    <button type="submit" class="btn btn-danger">Zmazať</button>
                </div>
            </div>
        </div>
    </form>
</div>