<table border="1" class="table table-bordered table-striped table-hover" style="width: 900px;" align="center">
    <thead align="center" class="bg-success" style="color: white;">
        <tr align="center">
            <th>No</th>
            <th>Tanggal Bayar</th>
            <th>Absen</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Nominal Yang Dibayar</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $no = 1;
        foreach ($byrkas as $u) : ?>
        <tr align="center">
            <td><?php echo $no++; ?></td>
            <td><?php echo $u->tgl_bayar; ?></td>
            <td><?php echo $u->absen; ?></td>
            <td><?php echo $u->nama; ?></td>
            <td><?php echo $u->kelas; ?></td>
            <td><?php echo $u->jurusan; ?></td>
            <td><?php echo $u->jml_bayar; ?></td>
            <td>
                <a class="badge badge-danger" href="<?php echo base_url(); ?>kas/hapus/<?= $u->id_siswa; ?>">Hapus</a>
                <a class="badge badge-success" href="<?php echo base_url(); ?>kas/edit/<?= $u->id_siswa; ?>">Edit</a>
            </td>
        </tr>
        <?php endforeach; ?>


    </tbody>
</table>

<br />
<center>
    <a class="btn btn-success" href="http://localhost/aplikasi_CI/kas/tambah">Tambah</a>&nbsp<a class="btn btn-danger" href="http://localhost/aplikasi_CI/home">Kembali</a>
</center>
<br /> 