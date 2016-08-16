<div class="modal-dialog modal-lg">
    
    <form id="modal-form" action="<?php echo base_url("admin/gallery/add_save"); ?>" method="post" enctype="multipart/form-data" >

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Folder</h4>
        </div>
        <div class="modal-body">

          <div class="row">
            <div class="col-sm-12">

              <div id="return_message"></div>

              <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                      <label>Label</label>
                      <input type="text" class="form-control input-sm" id="label" name="label" 
                              placeholder="Label" >
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-8">
                    <div class="form-group">
                      <label>Details</label>
                      <textarea type="text" class="form-control input-sm" id="details" name="details" 
                              placeholder="Details" style="resize:vertical;height:200px;max-height:300px;" ></textarea>
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
