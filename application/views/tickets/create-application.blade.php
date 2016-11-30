<div id="newApplication" class="modal fade" role="dialog">
  <div class="modal-dialog">

    {{-- Modal content--}}
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Maak nieuwe applicatie aan.</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="{{ base_url('app/insert') }}" method="POST">
            {{-- name form-group --}}
            <div class="form-group">
                <label class="control-label col-sm-3">
                    Naam: <span class="text-danger">*</span>
                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="name" placeholder="Applicatie naam">
                </div>
            </div>

            {{-- Server url form-group --}}
            <div class="form-group">
                <label class="col-sm-3 control-label">
                    Hyperlink: <span class="text-danger">*</span>
                </label>

                <div class="col-sm-9">
                    <input type="text" class="form-control" name="server_url" placeholder="Server url">
                </div>
            </div>

            {{-- Git url form-group --}}
            <div class="form-group">
                <label class="col-sm-3 control-label">Git url:</label>

                <div class="col-sm-9">
                    <input type="text" name="git_url" class="form-control" placeholder="GitHub url">
                </div>
            </div>

            {{-- Submit button and reset button not needed --}}
            {{-- They are located in the modal bottom --}}
      </div>
      <div class="modal-footer">
          <button type="submit" class="btn btn-success">Aanmaken</button>
        </form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
