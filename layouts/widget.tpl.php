<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?> 
				<div class="col-md-4">
                    <div class="tt-sidebar-wrapper" role="complementary">

                        <?php $this->load->view($folder_themes.'/layouts/widget_search.tpl.php');?>

                        <?php

							$SQLWidget = "SELECT * FROM widget WHERE enabled='1' ORDER BY urut ASC";
				          	$w_get = $this->db->query($SQLWidget);
							foreach($w_get->result() as $num => $datawidget):
								if($datawidget->jenis_widget == '1'){
									include($this->theme_folder.'/'.$this->theme.'/layouts/'.trim($datawidget->isi));
								} else {
									echo "
									<div class=\"widget widget_categories\">
			                            <h3 class=\"widget-title\">".$datawidget->judul."</h3>
			                            <p>".html_entity_decode($datawidget->isi)."</p>
			                        </div>
									";
								}
							endforeach;
						

						?>

                    </div><!-- /.tt-sidebar-wrapper -->
                </div><!-- /.col-md-4 -->