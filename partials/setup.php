<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
        <link href="<?php echo THEMES_PATH.$this->theme_folder.'/'.$this->theme.'/'; ?>assets/css/shortcodes/login.css" rel="stylesheet">
		<section class="section-padding gray-bg">
            <div class="container">

                <div class="login-wrapper">
                  <div class="card-wrapper"></div>
                  <div class="card-wrapper">
                    <h1 class="title">Set Up Themes ODC 18.06.1</h1>
                    <?php
                    	if (isset($_POST['btn_singkron'])) {
                    		$data = array(
							   array(
							      'isi' => 'widget_layanan_mandiri.tpl.php' ,
							      'enabled' => '1' ,
							      'judul' => 'Layanan Mandiri',
							      'jenis_widget' => '1',
							      'urut' => '1',
							      'form_admin' => 'mandiri',
							      'setting' => ''
							   ),array(
							      'isi' => 'widget_agenda.tpl.php' ,
							      'enabled' => '1' ,
							      'judul' => 'Agenda',
							      'jenis_widget' => '1',
							      'urut' => '2',
							      'form_admin' => 'web/index/1000',
							      'setting' => ''
							   ),array(
							      'isi' => 'widget_katgori.tpl.php' ,
							      'enabled' => '1' ,
							      'judul' => 'Kategori',
							      'jenis_widget' => '1',
							      'urut' => '3',
							      'form_admin' => '',
							      'setting' => ''
							   ),array(
							      'isi' => 'widget_statistik.tpl.php' ,
							      'enabled' => '1' ,
							      'judul' => 'Statistik Desa',
							      'jenis_widget' => '1',
							      'urut' => '4',
							      'form_admin' => '',
							      'setting' => ''
							   ),array(
							      'isi' => 'widget_top_post.tpl.php' ,
							      'enabled' => '1' ,
							      'judul' => '5 Artikel Terbaru',
							      'jenis_widget' => '1',
							      'urut' => '5',
							      'form_admin' => '',
							      'setting' => ''
							   )
							);

							$statis = array('nama' => 'konten_statistik',
											'link' => '##',
											'tipe' => '1',
											'parrent' => '1',
											'link_tipe' => '1',
											'enabled' => '2',
											'urut' => '0');

							$update = $this->db->query("UPDATE widget SET enabled='2'"); 
							if ($update) {
								$this->db->insert_batch('widget', $data);
								$this->db->insert('menu', $statis);
								echo "
									<div style='padding:10px;'>
										<div class=\"alert success-border\" role=\"alert\">
						                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
						                      <i class=\"fa fa-times-circle\"></i> Berhasil singkronisasi data untuk themes odc.<br />
						                      <ol>
						                      	<li>Penambahan otomatis widget baru bawaan tema, selain widget baru akan otomatis terdisabled(non aktif/tidak ditampilkan)</li>
						                      	<li>Penambahan menu statis dengan nama 'konten_statistik' dimana menu ini yang akan muncul dibawah slider (statistik data desa berdasarkan...), anda bisa menambakan rincian menu (statistik) sesuai kebutuhan anda</li>
						                      </ol>
						                </div><br /><br />
						                <a href='".site_url('first')."' class=\"btn btn-lg btn-block waves-effect waves-light\">Selesai</a>
					                </div>
								";
								// header("Refresh: 3; URL=".site_url('first')); 
							}
                    	}
                    ?>
                    <?php if (!isset($_POST['btn_singkron'])) { ?>
                    <form method="POST" action="">
                      <div class="button-container">
                        <button name="btn_singkron" class="btn btn-lg btn-block waves-effect waves-light">Singkronisasi Data Tema</button>
                      </div>
                    </form>
                	<?php } ?>
                  </div>
                </div>

            </div>
        </section>