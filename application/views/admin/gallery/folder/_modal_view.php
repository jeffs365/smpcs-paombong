<div class="modal-dialog modal-lg">
    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php echo $folderdata[0]->name.' > '.$imagedata[0]->label; ?></h4>
        </div>
        <div class="modal-body">

          <div class="row">
            <div class="col-sm-12">

              <div id="return_message"></div>

              <div class="row">

                <div class="col-sm-12">
                    <div class="form-group">
                       <center><img style="max-height: 500px;" src="<?php echo base_url($imagepath); ?>" />  </center>
                    </div>
                </div>
              </div>

            </div>
          </div>
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>