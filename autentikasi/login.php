<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login Admin RS</title>

  <!-- Bootstrap CSS CDN -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />

  <style>
    body {
      background-color: #ecf0f1;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-box {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      padding: 40px 30px;
      width: 100%;
      max-width: 400px;
    }

    .login-box img {
      display: block;
      margin: 0 auto 20px;
      max-width: 100px;
    }

    .login-box h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #2c3e50;
    }

    .form-control {
      margin-bottom: 20px;
    }

    .btn-primary {
      background-color: #3498db;
      border: none;
    }

    .btn-primary:hover {
      background-color: #2980b9;
    }
  </style>
</head>
<body>

  <div class="login-box">
    <!-- Logo Rumah Sakit -->
    <img src="../src/logo-rs.png" alt="Logo RS" />

    <h2>Login Admin</h2>

    <form action="../proses/proses-login.php" method="POST">
      <input
        type="text"
        name="username"
        class="form-control"
        placeholder="Nama"
        required
      />
      <input
        type="password"
        name="password"
        class="form-control"
        placeholder="Password"
        required
      />
      <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
  </div>

</body>
</html>
