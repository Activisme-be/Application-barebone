<div id="newUser" class="modal fade" role="dialog">
    <div class="modal-dialog">

        {{-- Modal content --}}
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Nieuwe gebruiker aanmaken</h4>
            </div>
            <div class="modal-body">
                <form method="POST" class="form-horizontal" action="{{ base_url('users/insert') }}">
                {{-- Username form-group --}}
                <div class="form-group">
                    <label class="control-label col-sm-3">
                        Username: <span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-9">
                        <input type="text" name="username" placeholder="Gebruikersnaam" class="form-control" />
                    </div>
                </div>

                {{-- Name form-group --}}
                <div class="form-group">
                    <label class="control-label col-sm-3">
                        Uw naam: <span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-9">
                        <input type="text" name="name" placeholder="Naam" class="form-control" />
                    </div>
                </div>

                {{-- Email form-group --}}
                <div class="form-group">
                    <label class="control-label col-sm-3">
                        Email: <span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-9">
                        <input type="text" name="email" placeholder="Email" class="form-control" />
                    </div>
                </div>

                {{-- Password form-group --}}
                <div class="form-group">
                    <label class="control-label col-sm-3">
                        Wachtwoord: <span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-9">
                        <input type="text" name="password" placeholder="wachtwoord" class="form-control" />
                    </div>
                </div>

                {{-- Submit button and reset button not needed --}}
                {{-- They are located in the modal bottom --}}
            </div>
            <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Aanmaken</button>
                </form>
                <button type="button" class="btn btn-default" data-dismiss="modal">sluiten</button>
            </div>
        </div>
    </div>
</div>
