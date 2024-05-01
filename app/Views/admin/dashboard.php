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
            <div class="list-group">
                <ul class="list-group list-group-horizontal">
                    <li class="list-group-item d-flex justify-content-between align-items-center" style="width: 30%;">
                        <span class="col" style="overflow: hidden;">asdadasdasdasdasdadsaasdasdadas</span>
                        <span class="col-sm-2 ms-2 badge text-bg-primary rounded-pill">L</span>
                    </li>
                    <li class="list-group-item">
                        <button class="btn btn-success">accept reservation</button>
                    </li>
                    <li class="list-group-item">
                        <button class="btn btn-danger">reject reservation</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>