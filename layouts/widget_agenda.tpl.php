<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>  
                          <div class="widget widget_categories">
                            <h3 class="widget-title">Agenda</h3>   
                            <ul>
                            	<?php foreach ($agenda as $l){ ?>
                              	<li><a href="<?php echo site_url("first/artikel/$l[id]")?>"><div class="row"><div class="col-sm-2"><i class="fa fa-calendar fa-3x"></i></div><div class="col-sm-10"><?php echo $l['judul']?><br /><small><?php echo tgl_indo($l['tgl_upload'])?></small></div></div></a></li>
                              	<?php }?>
                            </ul>
                          </div>