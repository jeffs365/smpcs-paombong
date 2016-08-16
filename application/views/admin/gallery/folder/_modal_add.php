<div class="modal-dialog modal-lg">
    
    <form id="modal-form" action="<?php echo base_url("admin/gallery/add_img_save"); ?>" method="post" enctype="multipart/form-data" >
    <input type="hidden" name="dataid" value="<?php echo $folderid; ?>" >
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Images</h4>
        </div>
        <div class="modal-body">

          <div class="row">
            <div class="col-sm-12">

              <div id="return_message"></div>

              <div class="row">

                <div class="col-sm-4">
                    <div class="form-group">
                      <label>Images</label>
                      <input type="file" multiple class="form-control input-sm" id="images" name="images[]"   >   
                    </div>
                </div>
              </div>

            </div>
          </div>
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-primary" value="Save" >
        </div>
      </div>
      </form>
    </div>