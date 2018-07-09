<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
        <header id="header" class="tt-nav nav-border-bottom">

            <div class="header-sticky light-header ">

                <div class="container">

                    <div class="search-wrapper">
                        <div class="search-trigger pull-right">
                            <div class='search-btn'></div>
                            <i class="material-icons">&#xE8B6;</i>
                        </div>

                        <!-- Modal Search Form -->
                        <i class="search-close material-icons">&#xE5CD;</i>
                        <div class="search-form-wrapper">
                            <form method="get" action="<?php echo site_url('first');?>" class="white-form">
                                <div class="input-field">
                                    <input type="text" name="cari" value="<?php echo $_GET['cari']; ?>" id="search">
                                    <label for="search" class="">Cari Artikel disini ...</label>
                                </div>
                                <button class="btn pink search-button waves-effect waves-light" type="submit"><i class="material-icons">&#xE8B6;</i></button>

                            </form>
                        </div>
                    </div><!-- /.search-wrapper -->

                    <div id="materialize-menu" class="menuzord">

                        <!--logo start-->
                        <a href="<?php echo site_url(); ?>first/" class="logo-brand">
                            <img class="retina" src="<?php echo LogoDesa($desa['logo']) ?>" alt=""/>
                            <div id="txtlogo" style="font-size: small;margin: 0px 0 0 60px;line-height: 1.5em;padding-bottom: 10px;"><span style="font-size: larger;font-weight: bolder;"><?php echo ucwords($this->setting->sebutan_desa) . ' ' . $desa['nama_desa'] ?></span><br /><?php echo ucwords($this->setting->sebutan_kecamatan . ' ' . $desa['nama_kecamatan'] . ' - ' . $desa['nama_kabupaten']) ?></div>
                        </a>
                        <!--logo end-->

                        <!--mega menu start-->
                        <ul class="menuzord-menu pull-right">
                            <li><a href="<?php echo site_url(); ?>first/">Beranda</a></li>
                            <?php foreach($menu_atas as $data){?>
                            <li><a href="<?php echo $data['link']; ?>"><?php echo $data['nama']; ?></a>
                                <?php if(count($data['submenu'])>0): ?>
                                <ul class="dropdown">
                                    <?php foreach($data['submenu'] as $submenu): ?>
                                    <li><a href="<?php echo $submenu['link']?>"><?php echo $submenu['nama']?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                                <?php endif; ?>
                            </li>
                            <?php } ?>
                            <li><a href="javascript:void(0)">Kategori</a>
                                <ul class="dropdown">
                                    <?php foreach($menu_kiri as $sub): ?>
                                    <li><a href="<?php echo site_url()."first/kategori/".$sub['id']?>"><?php echo $sub['nama']; ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <?php if(!isset($_SESSION['mandiri']) OR $_SESSION['mandiri']<>1){ ?>
                              <li><a href="javascript:void(0)">Mandiri</a>
                                <ul class="dropdown">
                                  <li style="padding:30px 30px 15px 15px;">
                                    <form action="<?php echo site_url('first/auth')?>" method="post">
                                      <div class="input-container">
                                          <input type="number" style="border:1px solid #e0e0e0;border-radius:3px;padding:8px;" placeholder="masukkan NIK" required="required" name="nik" />
                                          <div class="bar"></div>
                                      </div>
                                      <div class="input-container">
                                          <input type="password" style="border:1px solid #e0e0e0;border-radius:3px;padding:8px;" name="pin" placeholder="masukkan PIN" required="required" autocomplete="off" />
                                          <div class="bar"></div>
                                      </div>
                                      <div class="button-container">
                                          <button class="btn btn-lg btn-block waves-effect waves-light" type="submit">Masuk Layanan</button>
                                      </div>
                                    </form>
                                    <?php
                                      if(isset($_SESSION['mandiri']) AND $_SESSION['mandiri']==-1){
                                        echo "<script>alert('NIK atau PIN yang anda masukkan salah')</script>";
                                      }
                                    ?>
                                  </li>
                                </ul>
                              </li>
                            <?php }else{ ?>
                              <li><a href="#"><b>Mandiri</b></a>
                                  <ul class="dropdown">
                                  	<li><a href="<?php echo site_url();?>first/mandiri/1/1"><i class="fa fa-user"></i> &nbsp;&nbsp; Profil Pengguna</a></li>
                                      <li><a href="<?php echo site_url();?>first/mandiri/1/2"><i class="fa fa-file"></i> &nbsp;&nbsp; Semua Layanan</a></li>
                                      <li><a href="<?php echo site_url();?>first/mandiri/1/3"><i class="fa fa-comment"></i> &nbsp;&nbsp; Lapor Pengaduan</a></li>
                                      <li><a href="<?php echo site_url();?>first/mandiri/1/4"><i class="fa fa-gift"></i> &nbsp;&nbsp; Daftar Bantuan</a></li>
                                      <li><a href="<?php echo site_url();?>first/logout"><i class="fa fa-sign-out"></i> &nbsp;&nbsp; Keluar</a></li>
                                  </ul>
                              </li>
                        	<?php } ?>
                        </ul>
                        <!--mega menu end-->

                    </div>
                </div>
            </div>

        </header>
