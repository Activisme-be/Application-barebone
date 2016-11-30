<div id="newCategory" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Nieuwe categorie</h4>
      </div>
      <div class="modal-body">
          <form class="form-horizontal" action="{{ base_url('categories/insert') }}" method="post">
              {{-- Name form-group --}}
              <div class="form-group">
                  <label class="control-label col-sm-3">
                      Naam: <span class="text-danger">*</span>
                  </label>
                  <div class="col-sm-9">
                      <input type="text" name="name" class="form-control" placeholder="Categorie naam">
                  </div>
              </div>

              {{-- Description form-group --}}
              <div class="form-group">
                  <label class="control-label col-sm-3">
                      Beschrijving: <span class="text-danger">*</span>
                  </label>
                  <div class="col-sm-9">
                      <textarea name="description" rows="7" class="form-control" placeholder="Beschrijving"></textarea>
                  </div>
              </div>
      </div>
      <div class="modal-footer">
          <button type="submit" class="btn btn-success">Aanmaken</button>
        </form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
