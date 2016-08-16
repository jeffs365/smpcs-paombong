

<div class="dataTable_wrapper">
    <table class="table table-striped table-bordered table-hover" id="dataTables-staff">
        <thead>
            <tr>
                <th>Salutation</th>
                <th>First Name</th>
                <th>M.I.</th>
                <th>Last Name</th>
                <th>Designation</th>
                <th>Additional Info</th>
                <th style="width:80px;"></th>
            </tr>
        </thead>
        <tbody>
            <?php

                if(count($staffs) > 0)
                {
                    foreach ($staffs as $staff) {
                        $staffid = $staff->staffid;
                        $salutation = $staff->salutation;
                        $fname = $staff->firstname;
                        $lname = $staff->lastname;
                        $mname = $staff->middlename;
                        $designation = $staff->label;
                        $otherinfo = $staff->otherinfo;

                        echo '<tr>
                                <td>'.$salutation.'</td>
                                <td>'.$fname.'</td>
                                <td>'.$mname.'</td>
                                <td>'.$lname.'</td>
                                <td>'.$designation.'</td>
                                <td>'.$otherinfo.'</td>
                                <td>
                                    <a href="'.base_url('admin/staff/edit').'" 
                                                class="edit-button" 
                                                style="width:170px;" 
                                                onclick="return false;"
                                                data-id="'.$staffid.'"
                                                >
                                        <p><i class="glyphicon glyphicon-edit margin-right-10"></i>Edit</p></a>
                                    '.anchor('admin/staff/delete/'.$staffid, 
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

  
