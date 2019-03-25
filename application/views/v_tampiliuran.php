
  <table border="1" class="table table-bordered table-striped table-hover" style="width: 900px;" align="center">
  <thead align="center">
    <tr>
      <th>No</th>
      <th>Tanggal Bayar</th>
      <th>Absen</th>
      <th>Nama</th>
      <th>Kelas</th>
      <th>Jurusan</th>
      <th>Nominal Yang Dibayar</th>
      <th>Jenis Iuran</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    
    <?php
    $no = 1;
    foreach($byriuran as $u){
    ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $u->tgl_bayar; ?></td>
        <td><?php echo $u->absen; ?></td>
        <td><?php echo $u->nama; ?></td>
        <td><?php echo $u->kelas; ?></td>
        <td><?php echo $u->jurusan; ?></td>
        <td><?php echo $u->jml_bayar; ?></td>
        <td><?php echo $u->jenis_iuran; ?></td>
        <td> 
          <?php echo anchor('iuran/edit/'.$u->id_siswa,'Edit');?>
          <?php echo anchor('iuran/hapus/'.$u->id_siswa,'Hapus');?>

      </tr>
    <?php } ?>
    
    
  </tbody>
  </table>

  <br/>
  <center>
  <a class="btn btn-success" href="http://localhost/aplikasi_CI/iuran/tambah">Tambah</a>&nbsp<a class = "btn btn-danger" href="http://localhost/aplikasi_CI/home">Kembali</a>
  </center>
  <br/>