<?php

include 'templates/header.php';

 ?>


  <div class="card" style="width: 90%; margin-left: auto; margin-right: auto; margin-top: 50px; background-color: #E6E6FA;">

  <form action="<?php echo base_url(). 'kas/tambah_aksi'; ?>" method="post">
  <div class="card bg-success">
    <h1 style="font-family: sans-serif; margin-top: 5px; margin-left: 15px; color: white;"><b>Pembayaran Kas</b></h1>
    <p style="margin-left: 15px; color: white;">Tolong Isi Kolom Di Bawah Ini Untuk Membuat Pembayaran Kas Baru</p>
  </div>
  <div class="container">
    <center>
    <hr>

    <div class="form-group">
    <label for="tgl_bayar" style="margin-left: -275px;"><b>Tanggal Bayar :</b></label>
    <input type="text" placeholder="Masukkan Tanggal Bayar" style="width: 350px;" class="form-control" name="tgl_bayar" autofocus="" autocomplete="off">
    <small class="form-text text-danger" style="margin-left: -195px"><?= form_error('tgl_bayar') ?></small>
    </div>

    <div class="form-group">
    <label for="absen" style="margin-left: -275px;"><b>Absen Siswa :</b></label>
    <input type="text" placeholder="Masukkan Absen Siswa" style="width: 350px;" class="form-control" name="absen" autofocus="" autocomplete="off">
    <small class="form-text text-danger" style="margin-left: -195px;"><?= form_error('absen'); ?></small>
    </div>

    <div class="form-group">
    <label for="nama" style="margin-left: -273px;"><b>Nama Siswa :</b></label>
    <input type="text" placeholder="Masukkan Nama Siswa" style="width: 350px;" class="form-control" name="nama" autocomplete="off">
    <small class="form-text text-danger" style="margin-left: -200px"><?= form_error('nama') ?></small>
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
    <small class="form-text text-danger" style="margin-left: -160px"><?= form_error('jml_bayar') ?></small>
    </div>

    <button type="submit" class="btn btn-success">Simpan</button>&nbsp<a class="btn btn-danger" href="http://localhost/aplikasi_CI/kas">Kembali</a>
    </div>
  </center>
  </div>
  <center>
    <div class="card shadow mb-4" style="margin-top: 20px; width: 90%">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Petunjuk Pemakaian</h6>
      </div>
      <div class="card-body">
        <p>Isi Kolom Sesuai Data Yang Akan Dimasukkan, Apabila Terjadi Kekeliruan Saat Memasukkan Data, Harap Segera Di Edit Agar Tidak Terjadi Salah Perhitungan</p>
        <p class="mb-0">Terima Kasih Telah Menggunakan Aplikasi "Di Kas In Aja" Semoga Aplikasi Ini Dapat Mempermudah Keuangan Dalam Kelas.</p>
      </div>
    </div>
  </center>
</form>
</div>

<?php

include 'templates/footer.php'

?>