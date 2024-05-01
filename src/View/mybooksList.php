<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Booklings</title>
  <link rel="shortcut icon" type="image/png" href="./images/logos/favicon.png"/>
  <link rel="stylesheet" href="./css/styles.min.css"/>
  <script src="./js/scripts.js"></script>
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <!--  ASIDE PHP AQUI -->
    <?php
    include 'sidebar.php';
    ?>
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <div>
        <?php
        include 'navigator.php';
        ?>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Recent Transactions</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Código</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Autor</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Livro</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Gênero</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Preço</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">1</h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">Cixin Liu</h6>
                            <span class="fw-normal">Editora Suma</span>                          
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">O Problema dos 3 Corpos</p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-primary rounded-3 fw-semibold">Hard Sci-fi</span>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 fs-4">R$ 89,90</h6>
                        </td>
                      </tr> 
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">2</h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">Jorge Orwell</h6>
                            <span class="fw-normal">Companhia das Letras</span>                          
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">A Revolução dos Bichos</p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-secondary rounded-3 fw-semibold">Ficção</span>
                            <span class="badge bg-danger rounded-3 fw-semibold">Política</span>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 fs-4">R$ 29,90</h6>
                        </td>
                      </tr> 
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">3</h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">William Gibson</h6>
                            <span class="fw-normal">Aleph</span>                          
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">Neuromancer</p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-secondary rounded-3 fw-semibold">Ficção</span>
                            <span class="badge bg-primary rounded-3 fw-semibold">Hard Sci-fi</span>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 fs-4">R$ 89,90</h6>
                        </td>
                      </tr>      
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">4</h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">Math Maig</h6>
                            <span class="fw-normal">Bernand Brasil</span>                          
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">A Biblioteca da Meia-Noite</p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-success rounded-3 fw-semibold">Ficção</span>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 fs-4">R$ 39,90</h6>
                        </td>
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">5</h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">Cixin Liu</h6>
                            <span class="fw-normal">Editora Suma</span>                          
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">O Problema dos 3 Corpos</p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-primary rounded-3 fw-semibold">Hard Sci-fi</span>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 fs-4">R$ 89,90</h6>
                        </td>
                      </tr> 
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">6</h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">Jorge Orwell</h6>
                            <span class="fw-normal">Companhia das Letras</span>                          
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">A Revolução dos Bichos</p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-secondary rounded-3 fw-semibold">Ficção</span>
                            <span class="badge bg-danger rounded-3 fw-semibold">Política</span>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 fs-4">R$ 29,90</h6>
                        </td>
                      </tr> 
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">7</h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">William Gibson</h6>
                            <span class="fw-normal">Aleph</span>                          
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">Neuromancer</p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-secondary rounded-3 fw-semibold">Ficção</span>
                            <span class="badge bg-primary rounded-3 fw-semibold">Hard Sci-fi</span>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 fs-4">R$ 89,90</h6>
                        </td>
                      </tr>      
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">8</h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">Math Maig</h6>
                            <span class="fw-normal">Bernand Brasil</span>                          
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">A Biblioteca da Meia-Noite</p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-success rounded-3 fw-semibold">Ficção</span>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 fs-4">R$ 39,90</h6>
                        </td>
                      </tr>                       
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
  <script src="./libs/jquery/dist/jquery.min.js"></script>
  <script src="./libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./js/sidebarmenu.js"></script>
  <script src="./js/app.min.js"></script>
  <script src="./libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="./libs/simplebar/dist/simplebar.js"></script>
  <script src="./js/dashboard.js"></script>
</body>

</html>