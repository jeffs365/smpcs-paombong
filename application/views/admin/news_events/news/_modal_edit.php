<div class="modal-dialog modal-lg">
    
    <form id="modal-form" action="../admin/news/edit_save" method="post" enctype="multipart/form-data" >
    <input type="hidden" name="newsid" value="<?php echo $news[0]->id; ?>" >
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit News</h4>
        </div>
        <div class="modal-body">

          <div class="row">
            <div class="col-sm-12">

              <div id="return_message"></div>

              <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                      <label>Title</label>
                      <input type="text" class="form-control input-sm" id="title" name="title" 
                              placeholder="Title" value="<?php echo $news[0]->title; ?>" >
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                      <label>Picture 
                        <i style="font-size:12px;    font-variant: small-caps; color: red;">
                            (this will replace existing picture)
                        </i>
                      </label>
                      <input type="file" class="form-control input-sm" id="picture" name="picture"   >   
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                      <label>Details</label>
                      <textarea type="text" class="form-control input-sm" id="details" name="details" 
                              placeholder="Title" style="resize:vertical;height:200px;max-height:300px;" ><?php echo $news[0]->details; ?></textarea>
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
                  init_instance_callback : function(editor) {
                      editor.setContent($('#details').text())
                    },
                  toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
              });</script>