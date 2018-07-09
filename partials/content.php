<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>  
        <style type="text/css">
          .owl-carousel .owl-nav .owl-prev,
            .owl-carousel .owl-nav .owl-next,
            .owl-carousel .owl-dot {
              font-family: 'fontAwesome';

          }
          .owl-carousel .owl-nav .owl-prev:before{
              content: "\f053";
              margin-right:10px;
          }
          .owl-carousel .owl-nav .owl-next:after{
              content: "\f054";
              margin-right:10px;
          }
        </style>      
        <!-- start revolution slider 5.0 -->
        <section class="rev_slider_wrapper">
         <div class="rev_slider materialize-slider" >
          <ul>
          	<?php foreach ($slider_gambar['gambar'] as $gambar) : ?>
            <!-- slide 2 start --> 
            <li data-transition="fade" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="<?php echo base_url().$slider_gambar['lokasi'].'sedang_'.$gambar['gambar']?>"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Unique Design" data-description="">
                <?php if(is_file($slider_gambar['lokasi'].'sedang_'.$gambar['gambar'])) : ?>
                <!-- MAIN IMAGE -->
                <img src="<?php echo base_url().$slider_gambar['lokasi'].'sedang_'.$gambar['gambar']?>"  alt=""  data-bgposition="center center" data-bgfit="contain" width="100%" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <div class="tp-caption large_text skewfromrightshort fadeout"
                  data-x="85"
                  data-y="224"
                  data-speed="500"
                  data-start="1200"
                  data-easing="Power4.easeOut"><?php echo $gambar['judul']; ?>
                </div>
                <!-- <div class="tp-caption tp-resizeme rev-subheading text-center"
                    data-x="center"
                    data-y="center" 
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                    data-start="1000" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    style="z-index: 6; white-space: nowrap;font-size: 28px;"><?php echo $gambar['judul']; ?>
                </div> -->

                <!-- LAYER NR. 7 -->
                <div class="tp-caption tp-resizeme rev-btn"
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['100','100','100','100']" 
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-style_hover="cursor:default;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                    data-start="1200" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    style="z-index: 7; white-space: nowrap;">
                    <!-- <a href="<?php echo site_url('first/artikel/').$gambar['id']; ?>" class="btn btn-lg  waves-effect waves-light">Explore More</a> -->
                </div>

                <?php endif; ?>
            </li>
            <!-- slide 2 end -->
         	<?php endforeach; ?>
          </ul>             
         </div><!-- end revolution slider -->
        </section><!-- end of slider wrapper -->

        <section class="banner-6 parallax-bg bg-fixed overlay light-9" data-stellar-background-ratio="0.5">
            <div class="container">
              <div class="featured-carousel">
              <?php
      					$SQLMenu = "SELECT * FROM menu WHERE parrent = (select id from menu where nama='konten_statistik' order by id limit 1) ORDER BY nama ASC";
      		          	$mnu = $this->db->query($SQLMenu); 
      					foreach($mnu->result() as $num => $datam): 
      				?>
					      <a href="<?php echo site_url('first/').$datam->link; ?>">
                  	<div class="featured-item border-box radius-4 hover brand-hover">
                      	<div class="icon mb-30">
                          	<i class="large material-icons brand-icon">insert_chart</i>
                      	</div>
                      	<div class="desc">
                          	<h2><?php echo $datam->nama; ?></h2>
                      	</div>
                  	</div><!-- /.featured-item -->
                </a>
              <?php endforeach; ?>
              </div>

            </div><!-- /.container -->
        </section>

        <!-- Grid News -->
        <section class="section-padding grid-news-hover grid-blog">
            <div class="container">
              <div class="text-center mb-80">
                  <h2 class="section-title text-uppercase">Artikel & Berita Terbaru</h2>
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
        					echo "<li><a href=\"".site_url("first/".$paging_page."/$paging->start_link" . $paging->suffix)."\" title=\"Halaman Pertama\" class=\"waves-effect waves-light\"><i class=\"fa fa-angle-double-left\"></i>&nbsp;</a></li>";
        				}
        				if($paging->prev){
        					echo "<li><a href=\"".site_url("first/".$paging_page."/$paging->prev" . $paging->suffix)."\" title=\"Halaman Sebelumnya\" class=\"waves-effect waves-light\"><i class=\"fa fa-angle-left\"></i>&nbsp;</a></li>";
        				}

        				// for($i=$paging->start_link;$i<=$paging->end_link;$i++){
        				// 	if ($p != $i) {
        				// 		echo "<li><a href=\"".site_url("first/".$paging_page."/$i" . $paging->suffix)."\" title=\"Halaman ".$i."\"  class=\"waves-effect waves-light\">".$i."</a></li>";
        				// 	}else{
        				// 		echo "<li><span class=\"current waves-effect waves-light\">".$i."</span></li>";
        				// 	}
        										
        				// }

        				if($paging->next){
        					echo "<li><a href=\"".site_url("first/".$paging_page."/$paging->next" . $paging->suffix)."\" title=\"Halaman Selanjutnya\" class=\"waves-effect waves-light\"><i class=\"fa fa-angle-right\"></i>&nbsp;</a></li>";
        				}
        				if($paging->end_link){
        					echo "<li><a href=\"".site_url("first/".$paging_page."/$paging->end_link" . $paging->suffix)."\" title=\"Halaman Terakhir\" class=\"waves-effect waves-light\"><i class=\"fa fa-angle-double-right\"></i>&nbsp;</a></li>";
        				}
        				?>
              </ul>

            </div>
        </section>
         <!-- grid gutter-less style start -->
        <section class="padding-bottom-100">
            <div class="container">
              <div class="text-center mb-80">
                  <h2 class="section-title text-uppercase">Sinergi Program</h2>
              </div>
              <div class="clients-grid no-gutter">
                <?php foreach($sinergi_program as $key => $program) : ?>
                <div class="col-md-3 col-sm-6">
                    <div class="border-box">
                        <a href="<?php echo $program['tautan']?>" title="<?php echo $program['judul']?>" target="_blank">
                          <img src="<?php echo base_url()?>desa/upload/widget/<?php echo $program['gambar']?>" alt="<?php echo $program['judul']?>" style="max-height: 100px;">
                        </a>
                    </div><!-- /.border-box -->
                </div><!-- /.col-md-3 -->
                <?php endforeach; ?>
              </div><!-- /.clients-grid --> 
            </div><!-- /.container -->
        </section>
        <!-- grid gutter-less style end -->

        <!-- Featured SEO Carousel -->
        <section class="">
            <div class="container">

              <div class="text-center mb-80">
                  <h2 class="section-title">Aparatur <?php echo ucwords($this->setting->sebutan_desa); ?></h2>
              </div>

              <div class="seo-featured-carousel brand-dot">
                  <?php foreach($aparatur_desa as $data) : ?>
                  <div class="featured-item seo-service">
                      <?php if(AmbilFoto($data['foto'],"besar") AND is_file(LOKASI_USER_PICT.$data['foto'])) : ?>
                      <div class="icon">
                          <img class="img-responsive" src="<?php echo AmbilFoto($data['foto'],"besar") ?>" alt="<?php echo $data['pamong_nama'] ?>">
                      </div>
                      <?php endif; ?>
                      <div class="desc" style="background: transparent;text-align: center;">
                          <h2><?php echo $data['pamong_nama'] ?></h2>
                          <p><?php echo $data['jabatan'] ?></p>
                      </div>
                  </div><!-- /.featured-item -->
                  <?php endforeach; ?>
              </div><!-- /.seo-featured -->

            </div><!-- /.container -->
        </section>
        <!-- Featured Carousel End -->

        <br /><br />