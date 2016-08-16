

<div class="dataTable_wrapper">
    <table class="table table-striped table-bordered table-hover" id="dataTables-staff">
        <thead>
            <tr>
                <th style="width:150px;" >Filename</th>
                <th style="width:200px;" >Date Added</th>
                <th>Details</th>
                <th style="width:80px;"></th>
                <th style="width:80px;"></th>
            </tr>
        </thead>
        <tbody>
            <?php

                if(count($images) > 0)
                {
                    foreach ($images as $image) {
                        $id = $image->id;
                        $folderid = $image->folderid;
                        $filename = $image->filename;
                        $datecreated = $image->datecreated;
                        $label = $image->label;

                        echo '<tr>
                                <td>'.$filename.'</td>
                                <td>'.$datecreated.'</td>
                                <td>'.$label.'</td>
                                <td>
                                    <a href="'.base_url('admin/gallery/view/'.$id.'?folderid='.$folderid).'" 
                                                class="view-button" 
                                                style="width:170px;" 
                                                onclick="return false;"
                                                data-id="'.$id.'"
                                                >
                                        <p><i class="fa fa-image margin-right-10"></i>View</p></a>
                                </td>
                                <td>
                                    '.anchor('admin/gallery/delete_img/'.$id.'?folderid='.$folderid, 
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

  
