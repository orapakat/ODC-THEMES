<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>  
                          <div class="widget widget_categories">
                            <h3 class="widget-title">Kategori</h3>   
                            <ul>
                            	<?php foreach($menu_kiri as $data){?>
                              	<li><a href="<?php echo site_url()."first/kategori/".$data['id']?>"><?php echo $data['nama']; ?></a></li>
                              	<?php }?>
                            </ul>
                          </div>