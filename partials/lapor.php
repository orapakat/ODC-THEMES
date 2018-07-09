<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="comments-wrapper">
	<div class="comments-tab">
<?php if($_SESSION['sukses']==1){echo "Data telah terkirim, dan akan segera kami proses";unset($_SESSION['sukses']);} ?>
<form id="validasi" action="<?php echo site_url()?>first/add_comment/775" method="POST">
	<div class="form-group">
        <div class="row">
        	<div class="col-sm-6 comment-form-author"">
                <input type="text" placeholder="nama pengirim" readonly class="form-control" name="owner" value="<?php echo $_SESSION['nama']?>" required>
            </div>
        	<div class="col-sm-6 comment-form-subject">
                <input type="text" placeholder="nama pengirim" readonly class="form-control" name="email" value="<?php echo $_SESSION['nik']?>" required>
            </div>
        </div>
    </div> 
	<div class="form-group comment-form-comment">
        <textarea class="form-control" placeholder="tulis laporan anda disini" name="komentar" rows="15" cols="80" ></textarea>
    </div>
	<div class="form-submit">
        <button class="btn btn-lg pink waves-effect waves-light" type="submit" >Kirim Laporan</button>
    </div>        
</form>
	</div>
</div>
