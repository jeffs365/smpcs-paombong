<?php 

    if(!isset($this->session->userdata['userid'])) {
        header("Location: ".base_url('admin/authentication'));
        die();
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>cPanel</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <?php echo $settings['css']; ?>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;z-index:0;">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">cPanel | Admin</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <a href="<?php echo base_url('admin/authentication/logout'); ?>">
                        <i class="fa fa-sign-out fa-fw"></i> 
                        Logout
                    </a>
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">

                    <?php if(isset($adminmenu)) echo $adminmenu; ?>

                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-header" style="width:100%;
                                                        border-bottom: 1px solid rgba(29, 67, 121, 1);
                                                        padding:10px 0 20px 0px;
                                                        margin-top:20px; ">
                            <span class=" margin-top-20" style="width:100%;font:normal normal normal 33px/1.1em 'Times New Roman',times,serif;">
                                <?php echo isset($settingsdata['foldername']) ? $settingsdata['foldername'] : $settings['title']; ?>
                            </span>
                            <?php

                                if(isset($add_button_uri))
                                    echo '<a href="'.base_url($add_button_uri).'" 
                                                class="btn btn-primary btn-block pull-right add-button" 
                                                style="width:170px;" 
                                                onclick="return false;"
                                                >Add</a>';
                            ?>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">

