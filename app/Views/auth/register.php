<?= $this->extend('/components/app') ?>

<?= $this->section('content') ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
<style>
    body {
        background-color: #fefefe;
    }

    .container2 {
        width: 600px;
    }

    .error-msg {
        color: red;
    }

    .success-msg {
        color: green;
    }
</style>

<div class="container2 position-relative position-absolute top-50 start-50 translate-middle">
    <a class="bi bi-arrow-left" style="font-size: 2rem; color: cornflowerblue;" href="<?= base_url('login') ?>"></a>
    <h3 class="mt-2">Register page</h3>

    <form method="post" action="<?= base_url('register') ?>">
    <?= csrf_field() ?>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" id="username" required>
            <div class="form-text">Make a username with something you can remember!</div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" required>
        </div>
        <?php if ($is_from_register && !$register_result) echo "<h6 class='error-msg'>Sadly, something went wrong.<h6>"; ?>
        <?php if ($is_from_register && $register_result) echo "<h6 class='success-msg'>Register success!<h6>"; ?>
        <button type="submit" name="submit" class="btn btn-primary">Register</button>
    </form>
</div>
<?= $this->endSection() ?>