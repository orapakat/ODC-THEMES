<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
    $SQLCount = "SELECT * FROM widget WHERE isi LIKE '%widget_%'";
    $COUNT = $this->db->query($SQLCount); 
    $jml = $COUNT->num_rows();

    $SQLSTK = "SELECT * FROM menu WHERE nama='konten_statistik'";
    $COUNTSTK = $this->db->query($SQLSTK); 
    $jmlSTK = $COUNTSTK->num_rows();
?>            
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view($folder_themes.'/layouts/head.tpl.php');?>
    </head>

    <body id="top" class="has-header-search">

        <!-- Top bar start -->
        <?php if ($jml != 0 || $jmlSTK != 0) { $this->load->view($folder_themes.'/layouts/topbar.tpl.php'); } ?>
        <!-- Top bar end -->
                
        <!--header start-->
        <?php if ($jml != 0 || $jmlSTK != 0) { $this->load->view($folder_themes.'/layouts/header.tpl.php'); } ?>
        <!--header end-->

        <!-- conten start -->
        <?php 
             
            if ($_SESSION['siteman'] == 1 && ($jml == 0 || $jmlSTK == 0 )) {
                $this->load->view($folder_themes.'/partials/setup.php');
            }else{
                $this->load->view($folder_themes.'/partials/content.php');
            }
            
        ?>
        <!-- conten end -->                	

        <!-- footer start -->
        <?php if ($jml != 0 || $jmlSTK != 0) { $this->load->view($folder_themes.'/layouts/footer.tpl.php'); } ?>
        <!-- footer end -->

        <!-- Preloader -->
        <?php $this->load->view($folder_themes.'/layouts/preload.tpl.php');?>
        <!-- End Preloader --> 

        <!-- jQuery start -->
        <?php $this->load->view($folder_themes.'/layouts/jQuery.tpl.php');?>
        <!-- jQuery start -->
        
    </body>
  
</html>