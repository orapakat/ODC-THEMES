<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>  
				<?php
				if(!isset($_SESSION['mandiri']) OR $_SESSION['mandiri']<>1){

				  	if($_SESSION['mandiri_wait']==1){
				?>
						<div class="widget widget_categories">
                            <h3 class="widget-title">Layanan Mandiri</h3>  
                            Silakan datang atau hubungi operator <?php echo $this->setting->sebutan_desa?> untuk mendapatkan kode PIN anda.<br />
                            <div class="alert danger-border" role="alert">
			                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			                      <i class="fa fa-times-circle"></i> Gagal 3 kali, silakan coba kembali dalam <?php echo waktu_ind((time()- $_SESSION['mandiri_timeout'])*(-1));?> detik lagi.
			                </div>
                        </div>
				<?php }else{ ?>
						<div class="widget widget_categories">
                            <h3 class="widget-title">Layanan Mandiri</h3>  
                            Silakan datang atau hubungi operator <?php echo $this->setting->sebutan_desa?> untuk mendapatkan kode PIN anda.<br />
                            <form action="<?php echo site_url('first/auth')?>" method="post">
                            	<div class="input-container">
			                        <input type="number" placeholder="masukkan NIK" required="required" name="nik" />
			                        <div class="bar"></div>
			                    </div>
			                    <div class="input-container">
			                        <input type="password" name="pin" placeholder="masukkan PIN" required="required" autocomplete="off" />
			                        <div class="bar"></div>
			                    </div>
			                    <div class="button-container">
			                        <button class="btn btn-lg btn-block waves-effect waves-light" type="submit">Masuk</button>
			                    </div>
			                    <?php  if($_SESSION['mandiri_try'] AND isset($_SESSION['mandiri']) AND $_SESSION['mandiri']==-1){ ?>
		                            <div class="alert danger-border" role="alert">
					                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					                      <i class="fa fa-times-circle"></i> Kesempatan mencoba <?php echo ($_SESSION['mandiri_try']-1); ?> kali lagi.
					                </div>
							    <?php }?>
							    <?php  if(isset($_SESSION['mandiri']) AND $_SESSION['mandiri']==-1){ ?>
		                            <div class="alert danger-border" role="alert">
					                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					                      <i class="fa fa-times-circle"></i> Login Gagal. Username atau Password yang Anda masukkan salah!
					                </div>
							    <?php }?>
                            </form> 
                        </div>
                <?php
            		}
				}else{
				?>
					<div class="widget widget_categories">
                        <h3 class="widget-title">Layanan Mandiri</h3>  
                        	<blockquote style="font-size: small;">
                        		Nama : <?php echo $_SESSION['nama']; ?><br />
                        		NIK : <?php echo $_SESSION['nik']; ?><br />
                        		No.KK : <?php echo $_SESSION['no_kk']; ?><br />
                        	</blockquote>
                        <ul>
                            <li><a href="<?php echo site_url();?>first/mandiri/1/1"><i class="fa fa-user"></i> &nbsp;&nbsp; Profil Pengguna</a></li>
                            <li><a href="<?php echo site_url();?>first/mandiri/1/2"><i class="fa fa-file"></i> &nbsp;&nbsp; Semua Layanan</a></li>
                            <li><a href="<?php echo site_url();?>first/mandiri/1/3"><i class="fa fa-comment"></i> &nbsp;&nbsp; Lapor Pengaduan</a></li>
                            <li><a href="<?php echo site_url();?>first/mandiri/1/4"><i class="fa fa-gift"></i> &nbsp;&nbsp; Daftar Bantuan</a></li>
                            <li><a href="<?php echo site_url();?>first/logout"><i class="fa fa-sign-out"></i> &nbsp;&nbsp; Keluar</a></li>
                        </ul>
                        
                    </div>
                <?php
				}
				?>