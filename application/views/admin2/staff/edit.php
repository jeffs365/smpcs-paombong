<div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Teacher & Staff</h4>
        </div>
        <div class="modal-body">
         <form id="form-staff" action="<?php echo base_url('admin2/manage_staff/save'); ?>" >

          <input type="hidden" name="staffid" id="staffid" value="<?php echo $staff->staffid; ?>" />
          <div class="row">
            <div class="col-sm-12">

              <div id="return_message"></div>

              <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                      <label>Salutation</label>
                      <input type="text" class="form-control input-sm" id="salutation" name="salutation" 
                              placeholder="Salutation" value="<?php echo $staff->salutation; ?>">
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                      <label>First Name</label>
                      <input type="text" class="form-control input-sm" id="firstname" name="firstname" 
                              placeholder="First Name" value="<?php echo $staff->firstname; ?>">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                      <label>Middle Initial</label>
                      <input type="text" class="form-control input-sm" id="middlename" name="middlename" 
                              placeholder="Middle Initial" value="<?php echo $staff->middlename; ?>" >   
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                      <label>Last Name</label>
                      <input type="text" class="form-control input-sm" id="lastname" name="lastname" 
                              placeholder="Last Name" value="<?php echo $staff->lastname; ?>">
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
                <div class="col-sm-8">
                    <div class="form-group">
                      <label>Additional Information</label>
                      <input type="text" class="form-control input-sm" id="otherinfo" name="otherinfo" 
                              placeholder="Additional Information" value="<?php echo $staff->otherinfo; ?>" >
                    </div>
                </div>
              </div>
            </div>
          </div>
         </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" data-formid="form-staff" onclick="save(this);" >Save</button>
        </div>
      </div>
      
    </div>