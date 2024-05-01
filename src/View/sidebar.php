<script src="./js/scripts.js"></script>

<!-- Sidebar Start -->
<aside class="left-sidebar">
  <!-- Sidebar scroll-->
  <div>
    <div class="brand-logo d-flex align-items-center justify-content-center">
      <a href="./index.php" class="text-nowrap logo-img">
        <img src="./images/logos/bookling-logo.svg" width="180" alt="booklings" />
      </a>
      <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
        <i class="ti ti-x fs-8"></i>
      </div>
    </div>
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
      <ul id="sidebarnav">
        <!-- Acoordion1 -->
        <div class="accordion accordion-flush" id="accordionFlush">
          <li class=" sidebar-item">
            <a class="sidebar-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne">
              <span>
                <i class="ti ti-home"></i>
              </span>
              <span class="hide-menu">Início</span>
            </a>
          </li>
        </div>
        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlush">
          <li class="sidebar-item ">
            <div class="accordion accordion-flush">
              <a class="sidebar-link" href="./index.php" aria-expanded="false">
                <span>
                  <i class="ti ti-apps"></i>
                </span>
                <span class="hide-menu">Painel</span>
              </a>
              <a class="sidebar-link" href="./index.php" aria-expanded="false">
                <span>
                  <i class="ti ti-user"></i>
                </span>
                <span class="hide-menu">Perfil</span>
              </a>
            </div>
          </li>
        </div>
        </li>
        <!-- End-Acoordion1 -->


        <!-- Acoordion2 -->
        <div class="accordion accordion-flush" id="accordionFlush2">
          <li class=" sidebar-item">
            <a class="sidebar-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne2">
              <span>
                <i class="ti ti-book-2"></i>
              </span>
              <span class="hide-menu">Livros</span>
            </a>
          </li>
        </div>
        <div id="flush-collapseOne2" class="accordion-collapse collapse" data-bs-parent="#accordionFlush2">
          <li class="sidebar-item ">
            <div class="accordion accordion-flush">
              <a class="sidebar-link" href="./mybooksList.php" aria-expanded="false">
                <span>
                  <i class="ti ti-books"></i>
                </span>
                <span class="hide-menu">Meus Livros</span>
              </a>
              <a class="sidebar-link" href="./catalogoBook.php" aria-expanded="false">
                <span>
                  <i class="ti ti-shopping-cart-plus"></i>
                </span>
                <span class="hide-menu">Comprar</span>
              </a>
              <a class="sidebar-link" href="./index.php" aria-expanded="false">
                <span>
                  <i class="ti ti-bookmark"></i>
                </span>
                <span class="hide-menu">Reservar</span>
              </a>
            </div>
          </li>
        </div>
        </li>
        <!-- End-Acoordion1 -->
        <li class="sidebar-item">
          <a class="sidebar-link" href="#" aria-expanded="false">
            <span>
              <i class="ti ti-book"></i>
            </span>
            <span class="hide-menu">Leitura</span>
          </a>
        </li>
        <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">Área do Usuário</span>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="./authentication-login.php" aria-expanded="false">
            <span>
              <i class="ti ti-user-circle"></i>
            </span>
            <span class="hide-menu">Login</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="./authentication-register.php" aria-expanded="false">
            <span>
              <i class="ti ti-user-plus"></i>
            </span>
            <span class="hide-menu">Cadastre-se</span>
          </a>
        </li>
      </ul>
    </nav>
    <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>
<!--  Sidebar End -->