    $(document).ready(function() {
        $('#dataTables-staff').DataTable({
                responsive: true,
                "columnDefs": [
                            { "orderable": false, "targets": 6 }
                        ],
                "order": [[ 1, 'asc' ]]
        });

        $('.open-edit-modal').click(function(){
        	var controller = $(this).attr('data-class');
        	var action  = $(this).attr('data-action');
        	var id = $(this).attr('data-id');
        	var data = { "id" : id };
        	get_modal(controller,action,data);
        });

        $('#myModal').on('hidden.bs.modal', function () {
		    $('#myModal').html('');
		});

    });



    function get_modal(controller, action, userdata){
        $.ajax({
            type    : 'POST', 
            url     : '../' + controller + '/' + action,
            data 	: userdata,
            cache   : false,
            success : function(data){ 
               if(data){
                    $('#myModal').html(data);

                    //This shows the modal
                    $('#myModal').modal();
               }
            }	
        });
    }

    function save(obj)
    {
    	var formid = $(obj).attr('data-formid');
    	var form =  $("#" + formid);
    	var formuri = $(form).attr('action');
    	var formdata = formDatatoJSON(form);

    	$.ajax({
    		type	: 'POST',
    		url		: formuri,
    		data 	: formdata,
    		cache	: false,
    		dataType: 'json',
    		success	: function(data){
    			if(data['isSuccess'] == 1){
    				update_datatable(data);
    				$('#myModal').modal('hide');
    			}
    			else
    				$("#return_message").html(data['error_message']);
    		},
    		error 	: function(a,b,c)
    		{
    			console.log(a);
    			console.log(b);
    			console.log(c);
    		}
    	});
    }

    function formDatatoJSON(form)
    {
    	var unindexed_array = $(form).serializeArray();
    	var indexed_array = {};

    	$.map(unindexed_array,function(n,i)
    	{
    		indexed_array[n['name']]  = n['value']; 
    	});

    	return indexed_array;
    }

    function update_datatable(data)
    {
    	$('.open-edit-modal[data-id="'+data['postdata']['staffid']+'"]').parent('td').parent('tr').children().eq(0).text(data['postdata']['salutation']);
    	$('.open-edit-modal[data-id="'+data['postdata']['staffid']+'"]').parent('td').parent('tr').children().eq(1).text(data['postdata']['firstname']);
    	$('.open-edit-modal[data-id="'+data['postdata']['staffid']+'"]').parent('td').parent('tr').children().eq(2).text(data['postdata']['middlename']);
    	$('.open-edit-modal[data-id="'+data['postdata']['staffid']+'"]').parent('td').parent('tr').children().eq(3).text(data['postdata']['lastname']);
    	$('.open-edit-modal[data-id="'+data['postdata']['staffid']+'"]').parent('td').parent('tr').children().eq(4).text(data['designationlabel']);
    	$('.open-edit-modal[data-id="'+data['postdata']['staffid']+'"]').parent('td').parent('tr').children().eq(5).text(data['postdata']['otherinfo']);
    }