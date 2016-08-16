

<div class="dataTable_wrapper">
    <table class="table table-striped table-bordered table-hover" id="dataTables-staff">
        <thead>
            <tr>
                <th style="width:150px;" >Folders</th>
                <th style="width:200px;" >Date Added</th>
                <th>Details</th>
                <th style="width:80px;"></th>
                <th style="width:80px;"></th>
            </tr>
        </thead>
        <tbody>
            <?php

                if(count($folders) > 0)
                {
                    foreach ($folders as $folder) {
                        $id = $folder->id;
                        $name = $folder->name;
                        $datecreated = $folder->datecreated;
                        $description = $folder->description;

                        echo '<tr>
                                <td>'.$name.'</td>
                                <td>'.$datecreated.'</td>
                                <td>'.$description.'</td>
                                <td>
                                    
                                    '.anchor('admin/gallery/folder/'.$id, 
                                            '<p><i class="fa fa-folder-open-o margin-right-10"></i>Open</p>').'
                                </td>
                                <td>
                                    <a href="'.base_url('admin/gallery/edit').'" 
                                                class="edit-button" 
                                                style="width:170px;" 
                                                onclick="return false;"
                                                data-id="'.$id.'"
                                                >
                                        <p><i class="glyphicon glyphicon-edit margin-right-10"></i>Edit</p></a>
                                    '.anchor('admin/gallery/delete/'.$id, 
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

  
