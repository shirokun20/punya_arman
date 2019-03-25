<?php

  include 'templates/header.php';

?>

  <div class="card" style="width: 90%; margin-left: auto; margin-right: auto; margin-top: 50px; background-color: #E6E6FA;">

    <?php foreach($byriuran as $u){ ?>
  <form action="<?php echo base_url(). 'iuran/update'; ?>" method="post">
  <div class="card bg-success">
    <h1 style="font-family: sans-serif; margin-top: 5px; margin-left: 15px; color: white;"><b>Edit Pembayaran Iuran</b></h1>
    <p style="margin-left: 15px; color: white;">Tolong Isi Kolom Di Bawah Ini Untuk Mengedit Pembayaran Iuran Baru</p>
  </div>
  <div class="container">
    <center>
    <hr>

    <div class="form-group">
    <label for="tgl_bayar" style="margin-left: -275px;"><b>Tanggal Bayar :</b></label>
    <input type="hidden" name="id_siswa" value="<?php echo $u->id_siswa ?>">
    <input type="text" name="tgl_bayar" value="<?php echo $u->tgl_bayar ?>" style="width: 350px;" class="form-control" autocomplete="off">
    </div>

    <div class="form-group">
    <label for="absen" style="margin-left: -275px;"><b>Absen Siswa :</b></label>
    <input type="text" name="absen" value="<?php echo $u->absen ?>" style="width: 350px;" class="form-control" autocomplete="off">
    </div>

    <div class="form-group">
    <label for="nama" style="margin-left: -273px;"><b>Nama Siswa :</b></label>
    <input type="text" name="nama" value="<?php echo $u->nama ?>" style="width: 350px;" class="form-control" autocomplete="off">
    </div>

    <div class="form-group">
    <label for="kelas" style="margin-left: -323px;"><b>Kelas :</b></label>
    <select name="kelas" value="<?php echo $u->kelas?>" class="form-control" style="width: 350px;">
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
      <option value="<?php echo $u->jurusan?>">RPL</option>
      <option value="<?php echo $u->jurusan?>">TKJ</option>
      <option value="<?php echo $u->jurusan?>">MM</option>
      <option value="<?php echo $u->jurusan?>">AK</option>
      <option value="<?php echo $u->jurusan?>">OTKP</option>
      <option value="<?php echo $u->jurusan?>">PBK</option>
      <option value="<?php echo $u->jurusan?>">PMS</option>
      <option value="<?php echo $u->jurusan?>">ALFA</option>
      <option value="<?php echo $u->jurusan?>">KIN</option>
      <option value="<?php echo $u->jurusan?>">PDG</option>
      <option value="<?php echo $u->jurusan?>">PSG</option>
      <option value="<?php echo $u->jurusan?>">GEO</option>
    </select>

    </div>
    <div class="form-group">
    <label for="jml_bayar" style="margin-left: -255px;"><b>Jumlah Bayar :</b></label>
    <input type="text" value="<?php echo $u->jml_bayar ?>" style="width: 350px;" class="form-control" name="jml_bayar" autocomplete="off">
    </div>

    <div class="form-group">
    <label for="jenis_iuran" style="margin-left: -255px;"><b>Jenis Iuran :</b></label>
    <input type="text" value="<?php echo $u->jenis_iuran ?>" style="width: 350px;" class="form-control" name="jenis_iuran" autocomplete="off">
    </div>

    <input type="submit" class="btn btn-success" value="Simpan">&nbsp<a class="btn btn-danger" href="http://localhost/aplikasi_CI/iuran">Kembali</a>
  </center>
  </div>
</form>
</div>
<?php } ?>

<?php

include 'templates/footer.php';