<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Booklings</title>
  <link rel="shortcut icon" type="image/png" href="./images/logos/favicon.png" />
  <link rel="stylesheet" href="./css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <?php
    include 'sidebar-admin.php';
    ?>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <!--  Header End -->
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="container-fluid">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Cadastre um novo livro</h5>
                <div class="card">
                  <div class="card-body">
                    <form>
                      <div class="row col-12">
                        <div class="col-md-8 col-lg-6 col-xxl-2 mb-3 ">
                          <label for="nomeLivro" class="form-label">Quantidade</label>
                          <input type="text" class="form-control" id="nomeLivro">
                        </div>
                        <div class="col-md-8 col-lg-6 col-xxl-10 mb-3">
                          <label for="nomeLivro" class="form-label">Nome Livro</label>
                          <input type="text" class="form-control" id="nomeLivro">
                        </div>
                        <div class="col-md-8 col-lg-6 col-xxl-6 mb-3 ">
                          <label for="nomeLivro" class="form-label">Autor</label>
                          <input type="text" class="form-control" id="nomeLivro">
                        </div>
                        <div class="col-md-8 col-lg-6 col-xxl-4 mb-3 ">
                          <label for="nomeLivro" class="form-label">Editora</label>
                          <input type="text" class="form-control" id="nomeLivro">
                        </div>
                        <div class="col-md-8 col-lg-6 col-xxl-2 mb-3 ">
                          <label for="nomeLivro" class="form-label">Gênero</label>
                          <input type="text" class="form-control" id="nomeLivro">
                        </div>
                        <div class="col-md-8 col-lg-6 col-xxl-2 mb-3 ">
                          <label for="nomeLivro" class="form-label">Ano</label>
                          <input type="date" class="form-control" id="nomeLivro">
                        </div>
                        <div class="col-md-8 col-lg-6 col-xxl-4 mb-3 ">
                          <label for="nomeLivro" class="form-label">Edição</label>
                          <input type="text" class="form-control" id="nomeLivro">
                        </div>
                        <div class="col-md-8 col-lg-6 col-xxl-3 mb-3 ">
                          <label for="nomeLivro" class="form-label">Estado</label>
                          <input type="text" class="form-control" id="nomeLivro">
                        </div>
                        <div class="col-md-8 col-lg-6 col-xxl-3 mb-3 ">
                          <label for="nomeLivro" class="form-label">Preço</label>
                          <input type="number" placeholder="R$" class="form-control" id="nomeLivro">
                        </div>
                        <div class="col-md-8 col-lg-6 col-xxl-12 mb-3 ">
                          <label for="nomeLivro" class="form-label">Capa</label>
                          <input type="file" class="form-control" id="nomeLivro">
                          <div id="capaDanger" class="form-text">Arquivo com tamanho máximo de 2mb</div>
                        </div>
                      </div>
                      <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Visível na Loja</label>
                      </div>
                      <div class="container-fluid d-flex justify-content-center">
                        <button type="submit" class=" btn btn-primary">Cadastrar</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <script src="./libs/jquery/dist/jquery.min.js"></script>
  <script src="./libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./js/sidebarmenu.js"></script>
  <script src="./js/app.min.js"></script>
  <script src="./libs/simplebar/dist/simplebar.js"></script>
</body>

</html>