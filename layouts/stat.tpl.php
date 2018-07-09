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
        <!--page title start-->
        <section class="page-title ptb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Halaman Statistik</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Beranda</a></li>
                            <li class="active">Statistik Berdasarkan <?php echo $heading; ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!--page title end-->
        <!-- blog section start -->
        <section class="blog-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                    <?php
                        if($tipe == 2){
                            if($tipex==1){
                                $this->load->view($folder_themes.'/partials/statistik_sos.php');
                            }
                        }elseif($tipe == 3){
                            $this->load->view($folder_themes.'/partials/wilayah.php');
                        }elseif($tipe == 4){
                            $this->load->view($folder_themes.'/statistik/dpt.php');
                        }else{
                            $this->load->view($folder_themes.'/partials/statistik.php');
                        }
                    ?>
                    </div>
                    <!-- widget start -->
                    <?php $this->load->view($folder_themes.'/layouts/widget.tpl.php');?>
                    <!-- widget end -->
                </div>
            </div>
        </section>    
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