<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
        <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="sistema.php"><span class="sr-only">(Página atual)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sistema.php?tela=usuario">Usuario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sistema.php?tela=funcio">Funcionario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sistema.php?tela=fornecedor">Fornecedor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sistema.php?tela=produto">Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sistema.php?tela=movimentacao">Movimentações</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sistema.php?tela=localestoque">Local estoque</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sistema.php?tela=itemestoque">Item estoque</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sistema.php?tela=os">Ordem de serviço</a>
                </li>
                </ul>
                <ul class="navbar-nav">
      <!-- Avatar -->
      <li class="nav-item dropdown">
        <a
          data-mdb-dropdown-init
          class="nav-link dropdown-toggle d-flex align-items-center"
          href="#"
          id="navbarDropdownMenuLink"
          role="button"
          aria-expanded="false"
        >
          <img
            src="img/logo.png.png"
            class="rounded-circle"
            height="22"
            alt="Portrait of a Woman"
            loading="lazy"
          />
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li>
            <a class="dropdown-item" href="#">My profile</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Settings</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Logout</a>
          </li>
        </ul>
      </li>
    </ul>
    </nav>

    <!-- <div class="col-sm-2 " style="background-color: darkgrey;">
        <p>ID: <?=$idUsuarioSessao?><br>
        Nome: <?=$nomeUsuarioSessao?><br>
        Login: <?=$loginUsuarioSessao?><br></p>
        <a href="_logoff.php" class="btn btn-danger">Sair</a>
    </div> -->
    </nav>
       