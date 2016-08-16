$(document).ready(function() {

		tinymce.init({
			selector:'#adm_req',
            height: 500,
			init_instance_callback : function(editor) {
			    	editor.setContent($('#adm_req').text());
			  	},
			  	menubar: false,
			  	plugins: "fullscreen save table textcolor",
			  	toolbar: [
			  			"fullscreen | save | undo redo | styleselect formatselect fontselect fontsizeselect",
				        "bold italic underline strikethrough alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | forecolor backcolor | table "
				    ],
				setup: function(editor) {
					        editor.on('SaveContent', function(e) {
					            save_content(tinymce.activeEditor.getContent());
					        });
					    }
			});

    });


function save_content(content)
{
	var data = { 'content' : content };

	$.ajax({
            type    : 'POST', 
            url     : '../admin/procedure/update',
            data 	: data,
            cache   : false,
            success : function(data){ 
            		if(data != "")
            			alert('Error upon saving content...');
               }
            	
        });
}