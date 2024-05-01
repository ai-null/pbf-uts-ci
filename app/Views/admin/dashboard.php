<?= $this->extend('/components/app') ?>

<?= $this->section('content')  ?>
<style>
    .container-fluid {
        padding: 0;
    }
</style>

<div class="container-fluid">
    <div style="width: 100%; padding: 25px 0px 25px 0px; background-color: #90CAF9; position: relative; top: 0;text-align: center;">
        <h5>Welcome Admin</h5>
    </div>

    <div class="mt-5 position-relative">
        <div class="position-absolute top-50 start-50 translate-middle" style="transform: translate(-50%,0%)!important; width: 60%;">
            <h5>Pasien Baru</h5>

            <?php foreach ($data as $pasien) : ?>
                <form action="<?= base_url('/dashboard') ?>" method="POST">
                    <div class="list-group">
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item d-flex justify-content-between align-items-center" style="width: 30%;">
                                <input type="hidden" name="id" value="<?= esc($pasien['id']) ?>">
                                <span class="col" style="overflow: hidden;"><?= esc($pasien['nama']) ?></span>
                                <span class="col-sm-2 ms-2 badge text-bg-primary rounded-pill"><?= esc($pasien['kelamin']) ?></span>
                            </li>
                            <li class="list-group-item align-items-center">
                                <?php
                                if ($pasien['status'] == null) {
                                    echo '<span class="badge text-bg-warning">Pending</span>';
                                } else if ($pasien['status'] == 'accepted') {
                                    echo '<span class="badge text-bg-success">Accepted</span>';
                                } else if ($pasien['status'] == 'rejected') {
                                    echo '<span class="badge text-bg-danger">Rejected</span>';
                                }
                                ?>
                            </li>
                            <li class="list-group-item">
                                <button class="btn btn-success" type="submit" name="action" value="1">accept reservation</button>
                            </li>
                            <li class="list-group-item">
                                <button class="btn btn-danger" type="submit" name="action" value="0">reject reservation</button>
                            </li>
                        </ul>
                    </div>
                </form>
            <?php endforeach ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>