<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
		<!--page title start-->
        <section class="page-title ptb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Artikel & Berita / Halaman</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Beranda</a></li>
                            <li class="active">Detail Artikel & Berita</li>
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
                    	<?php if($single_artikel['id']) : ?>
                      <div class="posts-content single-post">

                        <article class="post-wrapper">

                          <header class="entry-header-wrapper clearfix">

                            <div class="author-thumb waves-effect waves-light">

                              	<a href="#"><img src="<?php echo LogoDesa($desa['logo']) ?>" alt=""></a>

                            </div>

                            <div class="entry-header">
                              <h2 class="entry-title"><?php echo $single_artikel["judul"]?></h2>

                              <div class="entry-meta">
                                  <ul class="list-inline">
                                      <li>
                                          <i class="fa fa-user"></i><a href="#"><?php echo $single_artikel['owner']?></a>
                                      </li>

                                      <li>
                                          <i class="fa fa-clock-o"></i><a href="#"><?php echo tgl_indo2($single_artikel['tgl_upload']);?></a>
                                      </li>

                                      <!-- <li>
                                          <i class="fa fa-heart-o"></i><a href="#"><span>1</span></a>
                                      </li>

                                      <li>
                                          <i class="fa fa-comment-o"></i><a href="#">3</a>
                                      </li> -->
                                  </ul>
                              </div><!-- .entry-meta -->
                            </div>

                          </header><!-- /.entry-header-wrapper -->

                          <div class="thumb-wrapper">
                          	<?php if($single_artikel['gambar']!='' and is_file(LOKASI_FOTO_ARTIKEL."sedang_".$single_artikel['gambar'])): ?>
                            	<img src="<?php echo AmbilFotoArtikel($single_artikel['gambar'],'sedang')?>" class="img-responsive" alt="" >
                            <?php endif; ?>
                          </div><!-- .post-thumb -->


                          <div class="entry-content">
                            <p><?php echo $single_artikel["isi"]?></p>
                          </div><!-- .entry-content -->


                          <footer class="entry-footer">
                            <div class="post-tags">
                              <span class="tags-links">
                                <i class="fa fa-tags"></i> <a href="<?php echo site_url('first/kategori/'.$single_artikel['id_kategori'])?>"><?php echo $single_artikel['kategori']?></a>
                              </span>
                            </div> <!-- .post-tags -->

                            <ul class="list-inline right share-post">
                                <li><a name="fb_share" href="http://www.facebook.com/sharer.php?u=<?php echo site_url().'first/artikel/'.$single_artikel['id']?>" target="_blank"><i class="fa fa-facebook"></i> <span>Share</span></a>
                                </li>
                                <li><a href="http://twitter.com/share?url=<?php echo site_url().'first/artikel/'.$single_artikel['id']?>" target="_blank"><i class="fa fa-twitter"></i> <span>Tweet</span></a>
                                </li>
                                <li><a href="https://plus.google.com/share?url=<?php echo site_url().'first/artikel/'.$single_artikel['id'].'&hl=id'?>" target="_blank"><i class="fa fa-google-plus"></i> <span>Plus</span></a>
                                </li>
                            </ul>
                          </footer>

                        </article><!-- /.post-wrapper -->

                        <!-- <nav class="single-post-navigation" role="navigation">
                          <div class="row">

                            <div class="col-xs-6">
                              <div class="previous-post-link">
                                <a class="waves-effect waves-light" href="#"><i class="fa fa-long-arrow-left"></i>Read Previous Post</a>
                              </div>
                            </div>


                            <div class="col-xs-6">
                              <div class="next-post-link">
                                <a class="waves-effect waves-light" href="#">Read Next Post<i class="fa fa-long-arrow-right"></i></a>
                              </div>
                            </div>
                          </div>
                        </nav> -->

                        <div class="comments-wrapper">
                          <?php if($single_artikel['boleh_komentar']): ?>

                          <div class="comments-tab">

                            <!-- Nav tabs -->
                            <!-- <ul class="nav nav-tabs nav-justified" role="tablist">
                              <li role="presentation" class="active"><a href="#default-comment" class="waves-effect waves-light"  role="tab" data-toggle="tab">Komentar Website</a></li>
                              <li role="presentation"><a href="#facebook-comment" class="waves-effect waves-light" role="tab" data-toggle="tab">Komentar Facebook</a></li>
                            </ul> -->

                            <!-- Tab panes -->
                            <div class="panel-body">
                              <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="default-comment">
                                  <div class="comment-respond">
                                  	<center>Formulir Komentar (Komentar baru terbit setelah disetujui Admin)</center><br />
                                  	<!-- Tampilkan hanya jika 'flash_message' ada -->
									<?php $label = !empty($_SESSION['validation_error']) ? 'danger' : 'success'; ?>
									<?php if ($flash_message): ?>

						                  <div class="alert <?php echo $label; ?>-border" role="alert">
						                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						                      <i class="fa fa-check-circle-o"></i> <?php echo $flash_message?>
						                  </div>
									<?php endif; ?>
                                    <form id="form-komentar" name="form" action="<?php echo site_url('first/add_comment/'.$single_artikel['id'])?>" method="POST" onSubmit="return validasi(this);">
                                      <div class="form-group">
                                        <div class="row">

                                          <div class="col-sm-6 comment-form-author">
                                            <input type="text" placeholder="masukkan nama anda" class="form-control" id="author" name="owner" maxlength="30" value="<?php echo !empty($_SESSION['post']['owner']) ? $_SESSION['post']['owner'] : $_SESSION['nama'] ?>" required>
                                          </div>

                                          <div class="col-sm-6 comment-form-email">
                                            <input id="email" type="email" placeholder="masukkan email" class="form-control" name="email" maxlength="30" value="<?php echo $_SESSION['post']['email'] ?>" required>
                                          </div>

                                          <div class="col-sm-6 comment-form-subject">
                                            <img id="captcha" src="<?php echo base_url().'securimage/securimage_show.php'?>" alt="CAPTCHA Image" style="height: 80px;width: 100%;" /><br />
											<a href="#" onclick="document.getElementById('captcha').src = '<?php echo base_url()."securimage/securimage_show.php?"?>' + Math.random(); return false">[ Ganti gambar ]</a>
                                          </div>

                                          <div class="col-sm-6 comment-form-subject">
                                            <input type="text" placeholder="isi sesuai gambar disamping" class="form-control" name="captcha_code" maxlength="6" value="<?php echo $_SESSION['post']['captcha_code']?>" required>
                                          </div>

                                        </div>

                                      </div>

                                      <div class="form-group comment-form-comment">
                                        <textarea class="form-control" id="comment" name="komentar" placeholder="tulis komentar anda disini" rows="8" required><?php echo $_SESSION['post']['komentar']?></textarea>
                                      </div>

                                      <div class="form-submit">
                                          <button class="btn btn-lg pink waves-effect waves-light" name="submit" type="submit" id="submit" value="" >Kirim</button>
                                      </div>
                                    </form>

                                  </div>

                                </div>
                                <!-- <div role="tabpanel" class="tab-pane fade" id="facebook-comment">
                                    <p>
                                    	<div class="fb-comments" data-href="<?php echo site_url().'first/artikel/'.$single_artikel['id']?>" data-width="100%" data-numposts="10">
                                    		<div placeholder>
											    <div class="loading">
											      <i class="fa fa-spinner fa-pulse fa-fw"></i> loading form facebook, please wait
											    </div>
											</div>
                                    	</div>
									</p>
                                </div> -->
                              </div><!-- /.tab-content -->
                            </div><!-- /.panel-body -->

                          </div><!-- /.comments-tab -->
                          <?php endif; ?>

                          <?php if(is_array($komentar)): ?>
                          <ul class="media-list comment-list mt-30">
                          		<?php foreach($komentar AS $data): ?>
									<?php if($data['enabled']==1): ?>
	                              	<!-- Comment Item start-->
	                              	<li class="media">

	                                  <div class="media-left">
	                                      <a href="#">
	                                          <img class="avatar" src="<?php echo THEMES_PATH.$this->theme_folder.'/'.$this->theme.'/'; ?>assets/img/blog/commenter-2.jpg" alt="<?php echo $data['owner']?>">
	                                      </a>
	                                  </div>

	                                  <div class="media-body">

	                                      <div class="comment-info">
	                                          <h4 class="author-name"><?php echo $data['owner']?></h4>

	                                          <div class="comment-meta">
	                                            <a class="comment-report-link" href="#"><?php echo tgl_indo2($data['tgl_upload'])?></a>
	                                          </div>
	                                      </div>

	                                      <p><?php echo $data['komentar']?></p>

	                                  </div>
	                              	</li>
	                              	<!-- End Comment Item -->
	                            	<?php endif; ?>
								<?php endforeach; ?>

                          </ul>
                          <?php endif; ?>

                        </div><!-- /.comments-wrapper -->

                      </div><!-- /.posts-content -->
                      	<?php else: ?>
							<center>Anda telah terdampar di halaman yang datanya tidak ada lagi di web ini. Mohon periksa kembali, atau laporkan kepada kami</center>
						<?php endif; ?>
                    </div><!-- /.col-md-8 -->

                    <!-- widget start -->
        			<?php $this->load->view($folder_themes.'/layouts/widget.tpl.php');?>
        			<!-- widget end -->

                  </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
        <!-- blog section end -->
