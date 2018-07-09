<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>  
						<div class="widget widget_search">
                            <form role="search" method="get" action="<?php echo site_url('first');?>" class="search-form" >
                              <input type="text" class="form-control" value="<?php echo $_GET['cari']; ?>" name="cari" id="s" placeholder="cari artikel ...">
                              <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div><!-- /.widget_search -->