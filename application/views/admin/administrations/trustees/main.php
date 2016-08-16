

<div class="dataTable_wrapper">
    <table class="table table-striped table-bordered table-hover" id="dataTables-staff">
        <thead>
            <tr>
                <th style="width:150px;" >Name</th>
                <th style="width:200px;" >Address</th>
                <th>Details</th>
                <th style="width:80px;"></th>
            </tr>
        </thead>
        <tbody>
            <?php

                if(count($trustees) > 0)
                {
                    foreach ($trustees as $trust) {
                        $id = $trust->id;
                        $name = $trust->name;
                        $address = $trust->address;
                        $otherinfo = $trust->otherinfo;

                        echo '<tr>
                                <td>'.$name.'</td>
                                <td>'.$address.'</td>
                                <td>'.$otherinfo.'</td>
                                <td>
                                    <a href="'.base_url('admin/trustees/edit').'" 
                                                class="edit-button" 
                                                style="width:170px;" 
                                                onclick="return false;"
                                                data-id="'.$id.'"
                                                >
                                        <p><i class="glyphicon glyphicon-edit margin-right-10"></i>Edit</p></a>
                                    '.anchor('admin/trustees/delete/'.$id, 
                                            '<p><i class="fa fa-trash-o margin-right-10"></i>Delete</p>', 
                                            array("onClick" => "return confirm('Are you sure you want to delete?')")).'
                                </td>
                            </tr>';
                    }
                }

             ?>     
        </tbody>
    </table>
</div>

  
