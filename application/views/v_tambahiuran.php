<?php

  include 'templates/header.php';

?>

  <div class="card" style="width: 90%; margin-left: auto; margin-right: auto; margin-top: 50px; background-color: #E6E6FA;">

  <form action="<?php echo base_url(). 'iuran/tambah_aksi'; ?>" method="post">
  <div class="card bg-success">
    <h1 style="font-family: sans-serif; margin-top: 5px; margin-left: 15px; color: white;"><b>Pembayaran Iuran</b></h1>
    <p style="margin-left: 15px; color: white;">Tolong Isi Kolom Di Bawah Ini Untuk Membuat Pembayaran Iuran Baru</p>
  </div>
  <div class="container">
    <center>
    <hr>

    <div class="form-group">
    <label for="tgl_bayar" style="margin-left: -275px;"><b>Tanggal Bayar :</b></label>
    <input type="text" placeholder="Masukkan Tanggal Bayar" style="width: 350px;" class="form-control" name="tgl_bayar" autofocus="" autocomplete="off">
    </div>

    <div class="form-group">
    <label for="absen" style="margin-left: -275px;"><b>Absen Siswa :</b></label>
    <input type="text" placeholder="Masukkan Absen Siswa" style="width: 350px;" class="form-control" name="absen" autofocus="" autocomplete="off">
    </div>

    <div class="form-group">
    <label for="nama" style="margin-left: -273px;"><b>Nama Siswa :</b></label>
    <input type="text" placeholder="Masukkan Nama Siswa" style="width: 350px;" class="form-control" name="nama" autocomplete="off">
    </div>

    <div class="form-group">
    <label for="kelas" style="margin-left: -323px;"><b>Kelas :</b></label>
    <select name="kelas" class="form-control" style="width: 350px;">
      <option>---Silahkan Pilih---</option>
      <option>X</option>
      <option>XI</option>
      <option>XII</option>
    </select>
    </div>

    <div class="form-group">
    <label for="jurusan" style="margin-left: -300px;"><b>Jurusan :</b></label>
    <select name="jurusan" class="form-control" style="width: 350px;">
      <option>---Silahkan Pilih---</option>
      <option>RPL</option>
      <option>TKJ</option>
      <option>MM</option>
      <option>AK</option>
      <option>OTKP</option>
      <option>PBK</option>
      <option>PMS</option>
      <option>ALFA</option>
      <option>KIN</option>
      <option>PDG</option>
      <option>PSG</option>
      <option>GEO</option>
    </select>
    </div>
    
    <div class="form-group">
    <label for="jml_bayar" style="margin-left: -255px;"><b>Jumlah Bayar :</b></label>
    <input type="text" placeholder="Masukkan Nominal Yang Dibayar" style="width: 350px;" class="form-control" name="jml_bayar" autocomplete="off">
    </div>

    <div class="form-group">
    <label for="jenis_iuran" style="margin-left: -255px;"><b>Jenis Iuran :</b></label>
    <input type="text" placeholder="Masukkan Jenis Iuran" style="width: 350px;" class="form-control" name="jenis_iuran" autocomplete="off">
    </div>

    <button type="submit" class="btn btn-success">Simpan</button>&nbsp<a class="btn btn-danger" href="http://localhost/aplikasi_CI/iuran">Kembali</a>
  </center>
  </div>
</form>
</div>

<?php

include 'templates/footer.php';

?>