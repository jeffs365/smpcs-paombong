<div class="modal-dialog modal-lg">
    
    <form id="modal-form" action="../admin/staff/add_save" method="post" enctype="multipart/form-data" >

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Staff</h4>
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
                              placeholder="E.g Ms., Mrs." >
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                      <label>First Name</label>
                      <input type="text" class="form-control input-sm" id="firstname" name="firstname" 
                              placeholder="First Name" >
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                      <label>Middle Initial</label>
                      <input type="text" class="form-control input-sm" id="middlename" name="middlename" 
                              placeholder="Middle Initial" >
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                      <label>Last Name</label>
                      <input type="text" class="form-control input-sm" id="lastname" name="lastname" 
                              placeholder="Last Name" >
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
                              placeholder="Other Details" >
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
