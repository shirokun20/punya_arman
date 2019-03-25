<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Profile Saya</h1>

</div>
<!-- /.container-fluid -->

<!-- card profile -->
<div class="card mb-4 ml-4" style="max-width: 540px;">
    <div class="row no-gutters">
        <div class="col-md-4">
            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><?= $user['nama']; ?></h5>
                <p class="card-text"><?= $user['email']; ?></p>
                <p class="card-text"><small class="text-muted">Member Sejak : <?= date('d F Y', $user['date_created']); ?></small></p>
            </div>
        </div>
    </div>
</div>
<!-- akhir card profile -->

</div>
<!-- End of Main Content --> 