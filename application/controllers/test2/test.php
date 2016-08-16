<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $d = new Datetime();
		print_r(strtotime($d->format('C')));
	}

	/**
    * getDataForDataGridSample
    * A sample to demonstrate CodeIgniter and a DataGrid 
    */
    public function getDataForDataGridSample() {
        //load the model
        $this->load->model('staff_model', '', TRUE);
        //get data from the model
        $datatable = $this->staff_model->get();
 
        $data = "";
 
        //Loop through data
        if ($datatable->num_rows() > 0) {
            foreach ($datatable->result() as $row) { 
                $data[] = array(
                    $row->staffid,
                    $row->salutation,
                    $row->firstname,
                    $row->middlename,
                    $row->lastname    
                );
            }
        }
 
        //load view with data
        $data['datatable'] = $data;
        $data['main_content'] = 'sample/datagrid';
        $this->load->view('test2/test', $data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */