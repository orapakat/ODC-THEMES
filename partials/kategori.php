<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>        
        <!--page title start-->
        <section class="page-title ptb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Kategori</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Beranda</a></li>
                            <li class="active">Kategori 
                              <?php 
                                foreach ($judul_kategori as $value) {
                                  echo $value;
                                }
                              ?>    
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!--page title end-->

        <!-- Grid News -->
        <section class="section-padding grid-news-hover grid-blog">
            <div class="container">
              <div class="text-center mb-80">
                  <h2 class="section-title text-uppercase">Artikel & Berita</h2>
                  <p class="section-sub">Kumpulan Artikel & Berita terkait <?php echo ucwords($this->setting->sebutan_desa).' '.ucwords($desa['nama_desa']).' '.ucwords($this->setting->sebutan_kecamatan.' '.$desa['nama_kecamatan']).' '.ucwords($this->setting->sebutan_kabupaten.' '.$desa['nama_kabupaten']); ?></p>
              </div>
              <div class="row">
                <div id="blogGrid">
                <?php
                if($artikel){
              		foreach($artikel as $data){
	              		if($data['gambar']!='' && is_file(LOKASI_FOTO_ARTIKEL."sedang_".$data['gambar']) ){
	              			$gmbr = AmbilFotoArtikel($data['gambar'],'sedang');
	              		}else{
	              			$gmbr = THEMES_PATH.$this->theme_folder.'/'.$this->theme.'/'."assets/img/blog/blog-12.jpg";
	              		}	
	              		$expl =explode(" ",$data['tgl_upload']);
	              		$tglexpl = explode("-", $expl[0]);
	              		$bulan = array('01' => 'JAN','02' => 'PEB','03' => 'MAR','04' => 'APR','05' => 'MEI','06' => 'JUN','07' => 'JUL','08' => 'AGU','09' => 'SEP','10' => 'OKT','11' => 'NOP','12' => 'DES');
              	?>	
                  <div class="col-xs-12 col-sm-6 col-md-4 blog-grid-item">
                      <article class="post-wrapper">

                        <div class="thumb-wrapper waves-effect waves-block waves-light">
                          <a href="#"><img src="<?php echo $gmbr; ?>" class="img-responsive" alt="" ></a>
                          <div class="post-date">
                              <?php echo $tglexpl[2]; ?><span><?php echo $bulan[$tglexpl[1]]; ?></span>
                          </div>
                        </div><!-- .post-thumb -->

                        <div class="blog-content">

                          <div class="hover-overlay light-blue"></div>

                          <header class="entry-header-wrapper">
                            <div class="entry-header">
                              <h2 class="entry-title"><a href="<?php echo site_url('first/artikel/').$data['id']; ?>"><?php echo $data['judul']; ?></a></h2>

                              <div class="entry-meta">
                                  <ul class="list-inline">
                                      <li>
                                          By <a href="#"><?php echo $data['owner']; ?></a>
                                      </li>
                                      <li>
                                          In <a href="<?php echo site_url('first/kategori/').$data['id_kategori']; ?>"><?php echo $data['kategori']; ?></a>
                                      </li>
                                  </ul>
                              </div><!-- .entry-meta -->
                            </div><!-- /.entry-header -->
                          </header><!-- /.entry-header-wrapper -->

                          <div class="entry-content">
                            <p><?php echo potong_teks(strip_tags($data['isi']), 150); ?> ...</p>
                          </div><!-- .entry-content -->

                        </div><!-- /.blog-content -->

                      </article><!-- /.post-wrapper -->
                  </div><!-- /.col-md-4 -->
                <?php 
            		} 
            	}else{
            		echo "<center>Tidak ada artikel</center>";
            	}
            	?>

                </div>
              </div>
              <ul class="pagination post-pagination text-center mt-50">
              	<?php
              	if($paging->start_link){
					echo "<li><a href=\"".site_url("first/".$paging_page."/$paging->start_link" . $paging->suffix)."\" title=\"Halaman Pertama\" class=\"waves-effect waves-light\"><i class=\"fa fa-angle-left\"></i>&nbsp;</a></li>";
				}
				if($paging->prev){
					echo "<li><a href=\"".site_url("first/".$paging_page."/$paging->prev" . $paging->suffix)."\" title=\"Halaman Sebelumnya\" class=\"waves-effect waves-light\"><i class=\"fa fa-angle-left\"></i>&nbsp;</a></li>";
				}

				for($i=$paging->start_link;$i<=$paging->end_link;$i++){
					if ($p != $i) {
						echo "<li><a href=\"".site_url("first/".$paging_page."/$i" . $paging->suffix)."\" title=\"Halaman ".$i."\"  class=\"waves-effect waves-light\">".$i."</a></li>";
					}else{
						echo "<li><span class=\"current waves-effect waves-light\">".$i."</span></li>";
					}
										
				}

				if($paging->next){
					echo "<li><a href=\"".site_url("first/".$paging_page."/$paging->next" . $paging->suffix)."\" title=\"Halaman Selanjutnya\" class=\"waves-effect waves-light\"><i class=\"fa fa-angle-right\"></i>&nbsp;</a></li>";
				}
				if($paging->end_link){
					echo "<li><a href=\"".site_url("first/".$paging_page."/$paging->end_link" . $paging->suffix)."\" title=\"Halaman Terakhir\" class=\"waves-effect waves-light\"><i class=\"fa fa-angle-right\"></i>&nbsp;</a></li>";
				}
				?>
              </ul>

            </div>
        </section>