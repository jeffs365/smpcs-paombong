<?php

/**
* 
*/
class Staff_model extends CI_Model
{

	public function get_designation()
	{
		$q = 'select * from designation order by displayorder,groupid asc';
		return $this->db->query($q)->result();
	}

	public function get_staff(){
		$res = array();
		$designationlist = array();

		$q = 'select * from designation order by displayorder asc';

		$designations = $this->db->query($q)->result();

		if (count($designations) > 0)
		{
			foreach ($designations as $designation) {
				$id = $designation->designationid;
				$label = $designation->label;
				$groupid = $designation->groupid;

				$stafflist = array();
				$staffs = $this->get_stuffbydesignation($id);

				if(count($staffs) > 0)
				{
					foreach ($staffs as $staff) {
						$salutation = $staff->salutation;
						$firstname = $staff->firstname;
						$middlename = $staff->middlename;
						$lastname = $staff->lastname;
						$otherinfo = $staff->otherinfo;

						$name = $salutation.' '.$firstname.' '.$middlename.' '.$lastname;

						array_push($stafflist, array('name' => $name,
											'otherinfo' => $otherinfo
											));
					}

				}

				array_push( $res , array('label' => $label,
											'staff' => $stafflist,
											'groupid' => $groupid ));
			}
		}

		return $res;
	}

	public function get_stuffbydesignation($id)
	{
		$q = 'select * from staff where designationid = '.$id.' order by firstname asc';
		return $this->db->query($q)->result();
	}

	function get() {
        $query = 'select s.*,d.label from staff s join designation d on s.designationid = d.designationid order by d.displayorder';
 		$que = $this->db->query($query); 		
        return $que->result();
    }


    function get_staffbyid($id)
    {
    	$que = $this->db->get_where('staff',array('staffid' => $id));
    	return $que->result();
    }

    function get_designationlabel($id)
    {
    	$que = $this->db->get_where('designation',array('designationid' => $id));
    	$q = $que->result();
    	return $q[0]->label;
    }

    public function get_alldesignation()
    {
    	$que = $this->db->get('designation');
    	return $que->result();
    }

    public function dropdwon_designation($id = '')
    {
    	$ret = '<option value=""></option>';
    	$res = $this->get_alldesignation();

    	foreach ($res as $r) {
    		$selected = ($id == $r->designationid) ? ' selected ' : '';
    		$ret .= '<option value="'.$r->designationid.'" '.$selected.' >'.$r->label.'</option>';
    	}

    	return $ret;
    }

    public function add($data)
	{
		$q = $this->db->insert('staff',$data);
		return $q;
	}

    public function update_staff($id, $data = array())
    {
    	$this->db->where('staffid', $id);
    	$res = $this->db->update('staff',$data);

    	return $res;
    }

    public function delete_staff($id)
    {
    	$this->db->delete('staff',array('staffid' => $id));
    }
}