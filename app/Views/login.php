<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <style>
    body {
      background-color: #fefefe;
    }

    .container {
      width: 600px;
    }

    .error-msg {
      color: red;
    }
  </style>
</head>

<body>
  <div class="container position-relative position-absolute top-50 start-50 translate-middle">
    <i class="bi bi-box-arrow-in-right" style="font-size: 2rem; color: cornflowerblue;"></i>
    <h3 class="mt-2">Sign in to continue</h3>

    <form method="post" action="/login">
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
        <div class="me-auto"><button type="submit" name="submit" class="btn btn-primary">Sign In</button></div>
        <div class="p-2">Or maybe <a href="/register">register</a> first?</div>
      </div>
    </form>
  </div>
</body>

</html>