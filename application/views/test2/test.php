<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>CodeIgniter/DataGrid Sample</title>
 
        <!-- CSS References -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.dataTables.min.css'); ?>" />

        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery-ui.css'); ?>" />

        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/datatablestyle.css'); ?>" />
        <!-- JavaScript References-->
        <script type='text/javascript' src="<?php echo base_url('assets/js/jquery-2.1.4.min.js'); ?>" ></script>
        <script type='text/javascript' src="<?php echo base_url('assets/js/jquery.dataTables.min.js'); ?>" ></script>
        
    </head>
 
    <body>
        <div id="wrapper">
            <div id="banner">
                <h1>CodeIgniter/DataGrid Sample</h1>
            </div>
 
            <div id="content-wrapper">
                <div id="content">
                    <div class="content-top"></div>
                    <div class="content">

 
<h1>CodeIgniter/DataGrid Sample</h1>
<br/>
 
<?php
 
//Initialized the Table Controller
$CI = & get_instance();
$CI->load->library('table');
 
//Set the Table using discrete parameters
$tmpl = array('table_open' => '<table id="myTable"; class="table table-hover"> ');
$CI->table->set_template($tmpl);
 
//Set the Table heading
$CI->table->set_heading('Staff ID', 'Salutation', 'First Name', 'Middle Name', 'Last Name');
 
//Generate Table based on Array from my_class-->getDataForDataGridSample
echo $CI->table->generate($datatable);
 
?>
<div style="clear:both"><br/></div>



<script type="text/javascript" charset="utf-8">
     $(document).ready(function() {
          var oTable = $('#myTable').dataTable( {
                "bJQueryUI": true,
                "sPaginationType": "full_numbers"
          } );
     } );            
</script>