<div class="modal-dialog modal-lg">
    
    <form id="modal-form" action="../admin/trustees/edit_save" method="post" enctype="multipart/form-data" >
    <input type="hidden" name="dataid" value="<?php echo $trustees[0]->id; ?>" >
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit</h4>
        </div>
        <div class="modal-body">

          <div class="row">
            <div class="col-sm-12">

              <div id="return_message"></div>

              <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" class="form-control input-sm" id="name" name="name" 
                              placeholder="Full Name" value="<?php echo $trustees[0]->name; ?>" >
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                      <label>Picture</label>
                      <input type="file" class="form-control input-sm" id="picture" name="picture"   >   
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-8">
                    <div class="form-group">
                      <label>Address</label>
                      <input type="text" class="form-control input-sm" id="address" name="address" 
                              placeholder="Address" value="<?php echo $trustees[0]->address; ?>" >
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                      <label>Details</label>
                      <textarea type="text" class="form-control input-sm" id="details" name="details" 
                              placeholder="Title" style="resize:vertical;height:200px;max-height:300px;" >
                              <?php echo $trustees[0]->otherinfo; ?>
                              </textarea>
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

    <script type="text/javascript" src="<?php echo base_url('assets/tinymce/tinymce.min.js'); ?>">

      </script>
<script type="text/javascript">tinymce.init({
                  selector: "textarea",
                  plugins: [
                      "advlist autolink lists link image charmap print preview anchor",
                      "searchreplace visualblocks code fullscreen",
                      "insertdatetime media table contextmenu paste"
                  ],
                  toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
              });</script>