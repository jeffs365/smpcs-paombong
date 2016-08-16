$(document).ready(function() {

        $('.add-button').click(function(){
        	var uri = $(this).attr('href');
            var userdata = [];
            get_modal(uri,userdata);
        });

        $('.edit-button').click(function(){
            var uri = $(this).attr('href');
            var dataid = $(this).attr('data-id');
            var userdata = {};
            userdata['dataid'] = dataid;
            get_modal(uri,userdata);
        });

        $('.view-button').click(function(){
            var uri = $(this).attr('href');
            var userdata = [];
            get_modal(uri,userdata);
        });

        $('#myModal').on('hidden.bs.modal', function () {
		    $('#myModal').html('');
            tinymce.remove();
		});

    });

function get_modal(uri,userdata){
        $.ajax({
            type    : 'POST', 
            url     : uri,
            data    : userdata,
            cache   : false,
            success : function(data){ 
               if(data){
                    $('#myModal').html(data);
                    $('#myModal').modal();
               }
            }   
        });
    }