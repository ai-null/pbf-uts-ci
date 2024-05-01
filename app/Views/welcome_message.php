<?= $this->extend('/components/app') ?>

<?= $this->section('content')  ?>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Reservasi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="<?= base_url('/') ?>">
                <?= csrf_field() ?>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama Anda">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Jenis Kelamin:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="L" name="kelamin" id="lelaki">
                            <label class="form-check-label" for="lelaki">
                                Laki - laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="P" name="kelamin" id="perempuan" checked>
                            <label class="form-check-label" for="perempuan">
                                Perempuan
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Reservasi Sekarang</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Reservation</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php
            if ($post_response) {
                echo 'Reservasi berhasil dibuat!';
            } else {
                echo 'Reservasi gagal dibuat!';
            }
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
    <div class="mt-5 row justify-content-center">
        <div class="col-md-5" style="height: 100vh;">
            <img width="100%" src="/img/doctor_sitting.webp" />
        </div>
        <div class="col-md-5">
            <h2>Selamat Datang di Apotek.id</h2>
            <p>
                Apotek.id menyediakan pelayanan paling profesional
                diantara apotek lainnya. Kami melayani segala macam pasien,

                Datanglah ke Apotek.id, reservasi sekarang!
            </p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Reservasi Sekarang</button>
        </div>
    </div>
</div>

<?php if ($is_from_post): ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var modal = document.getElementById('staticBackdrop');
            var modalInstance = new bootstrap.Modal(modal);
            modalInstance.show();
        });
    </script>
<?php endif; ?>
<?= $this->endSection() ?>