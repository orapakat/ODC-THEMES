<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view($folder_themes.'/layouts/head.tpl.php');?>
    </head>

    <body id="top" class="has-header-search">

        <!-- Top bar start -->
        <?php $this->load->view($folder_themes.'/layouts/topbar.tpl.php');?>
        <!-- Top bar end -->
                
        <!--header start-->
        <?php $this->load->view($folder_themes.'/layouts/header.tpl.php');?>
        <!--header end-->

        <!-- conten start -->
        <?php $this->load->view($folder_themes.'/partials/content.php');?>
        <!-- conten end -->                	

        <!-- footer start -->
        <?php $this->load->view($folder_themes.'/layouts/footer.tpl.php');?>
        <!-- footer end -->

        <!-- Preloader -->
        <?php $this->load->view($folder_themes.'/layouts/preload.tpl.php');?>
        <!-- End Preloader --> 

        <!-- jQuery start -->
        <?php $this->load->view($folder_themes.'/layouts/jQuery.tpl.php');?>
        <!-- jQuery start -->
        
    </body>
  
</html>