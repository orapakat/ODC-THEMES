<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?> 
       <!--footer 3 start -->
        <footer class="footer footer-three">
            <div class="primary-footer brand-bg">
                <div class="container">
                    <a href="#top" class="page-scroll btn-floating btn-large pink back-top waves-effect waves-light tt-animate btt" data-section="#top">
                      <i class="material-icons">&#xE316;</i>
                    </a>

                    <div class="row">
                      <div class="col-md-6">
                          <h2 style="color: #fff;font-weight: bold;">Album Galeri</h2>
                          <div class="gallery-thumb">
                            <ul class="slides">
                              <?php foreach($w_gal As $data){ ?>
                                <?php if(is_file(LOKASI_GALERI . "sedang_" . $data['gambar'])){?>
                                  <li data-thumb="<?php echo AmbilGaleri($data['gambar'],'sedang')?>">
                                    <a href='<?php echo site_url("first/sub_gallery/$data[id]"); ?>' title="<?php echo "Album : $data[nama]" ?>">
                                      <img src="<?php echo AmbilGaleri($data['gambar'],'sedang')?>" alt="<?php echo "Album : $data[nama]" ?>" style="max-height: 300px;border-radius:5px;">
                                    </a>
                                  </li>
                                <?php } ?>
                              <?php } ?>
                            </ul>
                          </div><!-- /.gallery-thumb -->
                      </div><!-- /.col-md-6 -->
                      <div class="col-md-6">
                          <h2 style="color: #fff;font-weight: bold;">Peta <?php echo ucwords($this->setting->sebutan_desa).' '.ucwords($desa['nama_desa']); ?></h2>
                          <?php
                            $mapsz = $this->db->query("SELECT * FROM widget WHERE id='1' ORDER BY id limit 1");
                            foreach($mapsz->result() as $rowmaps){
                              echo $rowmaps->isi;
                            }
                          ?>
                      </div><!-- /.col-md-6 -->

                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.primary-footer -->

            <div class="secondary-footer brand-bg">
                <div class="container">
                    <hr class="mb-20">
                    <div class="row">
                      <div class="col-md-8">
                        <span class="copy-text">&copy; 2018 Aplikasi <a style="color: #fff;font-weight: bold;" target="_blank" href="https://github.com/OpenSID/OpenSID">OpenSID <?php echo AmbilVersi()?></a> &nbsp; | &nbsp;  Themes <a style="color: #fff;font-weight: bold;" href="https://orapakat.com" target="_blank">ODC 18.06.1</a> &nbsp; | &nbsp; Partner of <a style="color: #fff;font-weight: bold;" href="https://kominfo.tubankab.go.id" target="_blank"> Diskominfo Kab.Tuban</a></span>
                      </div><!-- /.col-md-6 -->
                      <div class="col-md-4">
                          <ul class="social-link tt-animate ltr">
                          <?php
                            $SQLSosmed = "SELECT CASE WHEN gambar = 'fb.png' THEN 'fa-facebook' WHEN gambar = 'twt.png' THEN 'fa-twitter' WHEN gambar = 'goo.png' THEN 'fa-google-plus' WHEN gambar = 'yb.png' THEN 'fa-youtube' ELSE 'fa-instagram' END AS icon,media_sosial.* FROM media_sosial ORDER BY nama ASC";
                                  $sosmed = $this->db->query($SQLSosmed); 
                            foreach($sosmed->result() as $num => $datasos): 
                          ?>
                            <li><a href="<?php echo $datasos->link; ?>" title="<?php echo $datasos->nama; ?>" target="_blank"><i class="fa <?php echo $datasos->icon; ?>"></i></a></li>
                          <?php endforeach; ?>
                          </ul>
                      </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.secondary-footer -->
        </footer>
        <!--footer 3 end-->