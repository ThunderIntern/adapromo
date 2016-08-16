<div class="modal fade" id="modalLogout" tabindex="-1" role="dialog" aria-labelledby="modalLogoutLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modalLogoutLabel">Confirm</h4>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin ingin Log Out?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                    <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
