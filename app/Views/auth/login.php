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
  </style>


  <div class="container2 position-relative position-absolute top-50 start-50 translate-middle">
    <i class="bi bi-box-arrow-in-right" style="font-size: 2rem; color: cornflowerblue;"></i>
    <h3 class="mt-2">Sign in to continue</h3>

    <form method="post" action="<?= base_url('login') ?>">
      <div class="mb-3 mt-4">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username">
        <div id="emailHelp" class="form-text">We'll never share your data with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
      </div>
      
      <div class="d-flex">
      <?php #if () echo "<h6 class='error-msg'>Sadly, username or password is wrong.<h6>"; ?>
        <div class="me-auto"><button type="submit" name="submit" class="btn btn-primary">Sign In</button></div>
        <div class="p-2">Or maybe <a href="<?= base_url('register') ?>">register</a> first?</div>
      </div>
    </form>
  </div>
<?= $this->endSection() ?>