<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
		<!--page title start-->
        <section class="page-title ptb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Album Galeri</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Beranda</a></li>
                            <li class="active">Album <?php echo $parrent['nama']; ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!--page title end-->
        <section class="section-padding">
          <div class="container">

            <div class="portfolio-container text-center">

                <div class="portfolio portfolio-masonry col-3 gutter mtb-50">
                  <!-- remove "gutter" class for no spacing -->
                <?php foreach($gallery AS $data): ?>  
                    <div class="portfolio-item">
                        <div class="portfolio-wrapper">
                        <?php if(is_file(LOKASI_GALERI . "sedang_" . $data['gambar'])): ?>	
                          	<div class="thumb">
                              <div class="bg-overlay brand-overlay"></div>

                              <img src="<?php echo AmbilGaleri($data['gambar'], 'sedang'); ?>" alt="">

                              <div class="portfolio-intro">
                                <div class="action-btn">
                                  <a href="<?php echo AmbilGaleri($data['gambar'], 'sedang'); ?>" class="tt-lightbox" title=""><i class="fa fa-search"></i></a>
                                </div>
                                <h2><a href="#"><?php echo $data["nama"]; ?></a></h2>
                              </div>

                          	</div><!-- thumb -->
                        <?php endif; ?>  
                        </div><!-- /.portfolio-wrapper -->
                    </div><!-- /.portfolio-item -->
                <?php endforeach; ?>    
                </div><!-- /.portfolio -->

                <div class="load-more-button text-center">
                  	<ul class="pagination post-pagination text-center mt-50">
              		<?php
              			if($paging->start_link){
        					echo "<li><a href=\"".site_url("first/sub_gallery/".$parrent['id']."/".$paging->start_link)."\" title=\"Halaman Pertama\" class=\"waves-effect waves-light\"><i class=\"fa fa-angle-left\"></i>&nbsp;</a></li>";
        				}
        				if($paging->prev){
        					echo "<li><a href=\"".site_url("first/sub_gallery/".$parrent['id']."/".$paging->prev)."\" title=\"Halaman Sebelumnya\" class=\"waves-effect waves-light\"><i class=\"fa fa-angle-left\"></i>&nbsp;</a></li>";
        				}

        				for($i=$paging->start_link;$i<=$paging->end_link;$i++){
        					if ($p != $i) {
        						echo "<li><a href=\"".site_url("first/sub_gallery/".$parrent['id']."/".$i)."\" title=\"Halaman ".$i."\"  class=\"waves-effect waves-light\">".$i."</a></li>";
        					}else{
        						echo "<li><span class=\"current waves-effect waves-light\">".$i."</span></li>";
        					}
        										
        				}

        				if($paging->next){
        					echo "<li><a href=\"".site_url("first/sub_gallery/".$parrent['id']."/".$paging->next)."\" title=\"Halaman Selanjutnya\" class=\"waves-effect waves-light\"><i class=\"fa fa-angle-right\"></i>&nbsp;</a></li>";
        				}
        				if($paging->end_link){
        					echo "<li><a href=\"".site_url("first/sub_gallery/".$parrent['id']."/".$paging->end_link)."\" title=\"Halaman Terakhir\" class=\"waves-effect waves-light\"><i class=\"fa fa-angle-right\"></i>&nbsp;</a></li>";
        				}
        			?>
              		</ul>
                </div>

            </div><!-- portfolio-container -->
          </div>
        </section>