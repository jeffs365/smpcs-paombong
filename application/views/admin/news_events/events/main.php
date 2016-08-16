

<div class="dataTable_wrapper">
    <table class="table table-striped table-bordered table-hover" id="dataTables-staff">
        <thead>
            <tr>
                <th style="width:70px;">That</th>
                <th style="width:70px;">Where</th>
                <th style="width:70px;">When</th>
                <th>Details</th>
                <th style="width:50px;"></th>
            </tr>
        </thead>
        <tbody>
            <?php

                if(count($eventlist) > 0)
                {
                    foreach ($eventlist as $event) {
                        $id = $event->id;
                        $what = $event->what;
                        $where = $event->where;
                        $when = $event->when;
                        $details = $event->details;

                        echo '<tr>
                                <td>'.$what.'</td>
                                <td>'.$where.'</td>
                                <td>'.date("M j, Y g:i a",strtotime($when)).'</td>
                                <td>'.$details.'</td>
                                <td>
                                    <a href="'.base_url('admin/events/edit').'" 
                                                class="edit-button" 
                                                style="width:170px;" 
                                                onclick="return false;"
                                                data-id="'.$id.'"
                                                >
                                        <p><i class="glyphicon glyphicon-edit margin-right-10"></i>Edit</p></a>
                                    '.anchor('admin/events/delete/'.$id, 
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

  
