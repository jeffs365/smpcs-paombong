<div class="modal-dialog modal-lg">
    
    <form id="modal-form" action="../admin/staff/edit_save" method="post" enctype="multipart/form-data" >
    <input type="hidden" name="dataid" value="<?php echo $staff[0]->staffid; ?>" >
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Staff</h4>
        </div>
        <div class="modal-body">

          <div class="row">
            <div class="col-sm-12">

              <div id="return_message"></div>

              <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                      <label>Salutation</label>
                      <input type="text" class="form-control input-sm" id="salutation" name="salutation" 
                              placeholder="E.g Ms., Mrs." value="<?php echo $staff[0]->salutation; ?>" >
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                      <label>First Name</label>
                      <input type="text" class="form-control input-sm" id="firstname" name="firstname" 
                              placeholder="First Name" value="<?php echo $staff[0]->firstname; ?>" >
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                      <label>Middle Initial</label>
                      <input type="text" class="form-control input-sm" id="middlename" name="middlename" 
                              placeholder="Middle Initial" value="<?php echo $staff[0]->middlename; ?>" >
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                      <label>Last Name</label>
                      <input type="text" class="form-control input-sm" id="lastname" name="lastname" 
                              placeholder="Last Name" value="<?php echo $staff[0]->lastname; ?>" >
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                      <label>Designation</label>
                      <select name="designation" id="designation" class="form-control input-sm" >
                          <?php echo $designation; ?>
                      </select>
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                      <label>Other Details</label>
                      <input type="text" class="form-control input-sm" id="otherinfo" name="otherinfo" 
                              placeholder="Other Details" value="<?php echo $staff[0]->otherinfo; ?>" >
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
