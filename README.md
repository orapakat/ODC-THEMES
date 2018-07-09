# ODC-THEMES
Themes for OpenSID

Ada beberapa hal yang perlu di ubah mendukung tema ini (Optional) :
- Letakkan tema di folder desa/themes. nama folder teama harus "odc". untuk menyesuaikan hal" yang terkait dengan config tema
- ubah artikel per-page menjadi 6 di "donjo-app/models/first-artikel_m.php" --> lakukan pengeditan pada baris 52 dari $cfg['per_page'] = 8; jadi $cfg['per_page'] = 6;
- tambah kode :  
		if (is_file($this->theme_folder.'/'.$this->theme.'/layouts/kategori.php')) {
			$this->set_template('layouts/kategori.php');
		}
  dibawah kode 
  $this->_get_common_data($data); (pada baris 320, di function kategori) 
  file terletak di "donjo-app/controllers/First.php",	
  tujuannya digunakan untuk memisahkan tampilan kategori dengan menu utama artikel
- Ukuran peta embeded width 100% height 300px agar sesuai tema.
- ukuran gambar slide yang recommend dengan tema ini width 1920px height 900px
- menambahkan slide statistik dibawah slider:
  Masuk ke siteman -> pilih menu Admin Web -> Pilih Tab Menu -> Pilih Menu Statis di Tab samping kiri -> pilih menu yang konten_statis dan tambahkan rinciannya. "konten_statis" merupakan menu yg otomatis ditambahkan saat dilakukan setup tema.


  Demo Tema ODC di https://odc.orapakat.com
