

<div class="dataTable_wrapper">
    <table class="table table-striped table-bordered table-hover" id="dataTables-staff">
        <thead>
            <tr>
                <th style="width:150px;">Title</th>
                <th>Details</th>
                <th style="width:130px;">Date Created</th>
                <th style="width:50px;"></th>
            </tr>
        </thead>
        <tbody>
            <?php

                if(count($newslist) > 0)
                {
                    foreach ($newslist as $news) {
                        $id = $news->id;
                        $title = $news->title;
                        $details = $news->details;
                        $datecreated = $news->datecreated;

                        echo '<tr>
                                <td>'.$title.'</td>
                                <td>'.$details.'</td>
                                <td>'.date("M j, Y g:i a",strtotime($datecreated)).'</td>
                                <td>
                                    <a href="'.base_url('admin/news/edit').'" 
                                                class="edit-button" 
                                                style="width:170px;" 
                                                onclick="return false;"
                                                data-id="'.$id.'"
                                                >
                                        <p><i class="glyphicon glyphicon-edit margin-right-10"></i>Edit</p></a>
                                    '.anchor('admin/news/delete/'.$id, 
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

  
