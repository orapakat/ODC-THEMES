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
                        <h2>Layanan Mandiri</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Beranda</a></li>
                            <li class="active">Layanan Mandiri</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!--page title end-->
        
        <section class="blog-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                    <?php 
                        $views_partial_layout = '';
                        switch($m){
                            case 1 :
                                $views_partial_layout = $folder_themes.'/partials/mandiri.php';
                                break;
                            case 2 :
                                $views_partial_layout = $folder_themes.'/partials/layanan.php';
                                break;
                            case 4 :
                                $views_partial_layout = $folder_themes.'/partials/bantuan.php';
                                break;
                            default:
                                $views_partial_layout = $folder_themes.'/partials/lapor.php';
                        }
                        $this->load->view($views_partial_layout);
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