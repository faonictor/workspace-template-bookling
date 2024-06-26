<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Booklings</title>
  <link rel="shortcut icon" type="image/png" href="./images/logos/favicon.png"/>
  <link rel="stylesheet" href="./css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.php" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="./images/logos/bookling-logo.svg" width="180" alt="">
                </a>
                <p class="text-center">Sua Livraria Pessoal</p>
                <form>
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Nome de Usuário</label>
                    <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Endereço de e-mail</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Digite uma senha</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Confirme sua senha</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                  </div>
                  <a href="./authentication-register2.php" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Criar conta</a>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Já tem um conta?</p>
                    <a class="text-primary fw-bold ms-2" href="./authentication-login.php">Entrar</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="./libs/jquery/dist/jquery.min.js"></script>
  <script src="./libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>