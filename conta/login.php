<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../util/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../util/css/adminlte.min.css">
  <link rel="stylesheet" href="../util/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../util/css/bootstrap.min.css">
  <link rel="stylesheet" href="../util/css/toastr.min.css">
</head>

<div class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <img class="profile-user-image img-fluid rounded-circle" width="80px" src="../util/images/Tecnología.png" alt="">
      <a href="../index.php" class="text-primary badge fs-1"><b>Digital </b>Market</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Iniciar Sessão</p>

        <form id="form-login">
          <div class="input-group mb-3">
            <input id="user" type="text" class="form-control" placeholder="Nome de Utilizador ou Email" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input id="pass" type="password" class="form-control" placeholder="Palavra-Passe" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>

          <button type="submit" href="../index.php" class="btn btn-block btn-primary">
            Iniciar Sessão
          </button>

          <div class="social-auth-links text-center mb-3">
            <p>- OU -</p>
            <a href="#" class="btn btn-block btn-primary">
              <i class="bi bi-facebook mr-2"></i> Iniciar com Facebook
            </a>
            <a href="#" class="btn btn-block btn-danger">
              <i class="bi bi-google mr-2"></i> Iniciar com Google
            </a>
          </div>
        </form>

        <p class="mb-1">
          <a href="forgot-password.html">Esqueci meu Palavra-Passe</a>
        </p>
        <p class="mb-0">
          <a href="register.html" class="text-center">Registrar novo Utilizador</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->
</div>

<?php include_once '../inc/footer.php'; ?>
<script src="../util/js/login.js"></script>
<script src="../util/js/toastr.min.js"></script>
</body>

</html>