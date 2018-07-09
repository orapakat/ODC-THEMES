<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
        <?php define('THEMES_PATH',APP_URL); ?>
		    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="material design, tema desa, open sid, sid, sistem informasi, themes, sistem informasi desa, tema, Kab.Tuban, Diskominfo Tuban">
        <meta name="author" content="Orapakat.com">
        <meta property="og:site_name" content="<?php echo $desa['nama_desa'];?>"/>

        <title>
        	<?php
			echo $this->setting->website_title
				. ' ' . ucwords($this->setting->sebutan_desa)
				. (($desa['nama_desa']).' '.ucwords($this->setting->sebutan_kecamatan." ".$desa['nama_kecamatan']).' '.ucwords($this->setting->sebutan_kabupaten." ".$desa['nama_kabupaten']) ? ' ' . $desa['nama_desa'].' '.ucwords($this->setting->sebutan_kecamatan." ".$desa['nama_kecamatan']).' '.ucwords($this->setting->sebutan_kabupaten." ".$desa['nama_kabupaten']) : '')
				. get_dynamic_title_page_from_path();
			?>
        </title>
        <script src="<?php echo base_url()?>assets/front/js/jquery.js"></script>

    		<?php if(isset($single_artikel)): ?>
    	    <meta property="og:title" content="<?php echo $single_artikel["judul"];?>"/>
    	    <meta property="og:url" content="<?php echo base_url()?>index.php/first/artikel/<?php echo $single_artikel['id'];?>"/>
    	    <meta property="og:image" content="<?php echo base_url()?><?php echo LOKASI_FOTO_ARTIKEL?>sedang_<?php echo $single_artikel['gambar'];?>"/>
    	    <meta property="og:description" content="<?php echo potong_teks($single_artikel['isi'], 300)?> ..."/>
    			<meta name="description" content="<?php echo potong_teks($single_artikel['isi'], 300)?> ..."/>
    	  <?php else: ?>
    			<meta name="description" content="Website <?php echo ucwords($this->setting->sebutan_desa).' '.$desa['nama_desa'];?>"/>
    		<?php endif; ?>

        <!--  favicon -->
		<?php if(is_file(LOKASI_LOGO_DESA.'/'.$desa['logo'])): ?>
			<link rel="shortcut icon" href="<?php echo base_url()?><?php echo LOKASI_LOGO_DESA.'/'.$desa[logo]; ?>" />
		<?php else: ?>
			<link rel="shortcut icon" href="<?php echo base_url()?>favicon.ico" />
		<?php endif; ?>
    
        <style type="text/css">
            .loading{padding: 10px; border: 1px solid #eee; margin-top: 10px; text-align: center;}
        </style>


        <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,900' rel='stylesheet' type='text/css'>
        <!-- Material Icons CSS -->
        <link href="<?php echo THEMES_PATH.$this->theme_folder.'/'.$this->theme.'/'; ?>assets/fonts/iconfont/material-icons.css" rel="stylesheet">
        <!-- FontAwesome CSS -->
        <link href="<?php echo THEMES_PATH.$this->theme_folder.'/'.$this->theme.'/'; ?>assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- magnific-popup -->
        <link href="<?php echo THEMES_PATH.$this->theme_folder.'/'.$this->theme.'/'; ?>assets/magnific-popup/magnific-popup.css" rel="stylesheet">
        <!-- owl.carousel -->
        <link href="<?php echo THEMES_PATH.$this->theme_folder.'/'.$this->theme.'/'; ?>assets/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
        <link href="<?php echo THEMES_PATH.$this->theme_folder.'/'.$this->theme.'/'; ?>assets/owl.carousel/assets/owl.theme.default.min.css" rel="stylesheet">
        <!-- flexslider -->
        <link href="<?php echo THEMES_PATH.$this->theme_folder.'/'.$this->theme.'/'; ?>assets/flexSlider/flexslider.css" rel="stylesheet">
        <!-- materialize -->
        <link href="<?php echo THEMES_PATH.$this->theme_folder.'/'.$this->theme.'/'; ?>assets/materialize/css/materialize.min.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="<?php echo THEMES_PATH.$this->theme_folder.'/'.$this->theme.'/'; ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- shortcodes -->
        <link href="<?php echo THEMES_PATH.$this->theme_folder.'/'.$this->theme.'/'; ?>assets/css/shortcodes/shortcodes.css" rel="stylesheet">
        <!-- Style CSS -->
        <link href="<?php echo THEMES_PATH.$this->theme_folder.'/'.$this->theme.'/'; ?>assets/fonts/flaticon/flaticon.css" rel="stylesheet">
        <link href="<?php echo THEMES_PATH.$this->theme_folder.'/'.$this->theme.'/'; ?>assets/style.css" rel="stylesheet">


        <!-- RS5.0 Main Stylesheet -->
        <link rel="stylesheet" type="text/css" href="<?php echo THEMES_PATH.$this->theme_folder.'/'.$this->theme.'/'; ?>assets/revolution/css/settings.css">
        <!-- RS5.0 Layers and Navigation Styles -->
        <link rel="stylesheet" type="text/css" href="<?php echo THEMES_PATH.$this->theme_folder.'/'.$this->theme.'/'; ?>assets/revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="<?php echo THEMES_PATH.$this->theme_folder.'/'.$this->theme.'/'; ?>assets/revolution/css/navigation.css">


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style type="text/css">
            .wrapper-logo-text-brand{
                margin-top: 5px;
            }
            .wrapper-logo-text-brand img .logo-text-brand-image{
                float: left;
                height: 40px;
            }
            .logo-text-brand-text{
                margin: -55px 0 0 60px;
                line-height: 1.5em;
                padding-bottom: 10px;
            }
            .logo-text-brand-span{
                font-weight: bolder;
                font-size: larger;
                color: #555;
                text-transform: uppercase;
            }
            @media only screen and (max-width: 500px){
                .wrapper-logo-text-brand{
                    margin-top: 5px;
                    margin-left: -40px;
                }

                .logo-text-brand-text{
                    margin: -55px 0 0 60px;
                    line-height: 1em;
                    padding-bottom: 10px;
                }
                .logo-text-brand-span{
                    font-weight: bolder;
                    font-size: large;
                    color: #555;
                    text-transform: uppercase;
                }
            }
        </style>
