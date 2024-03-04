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
    <div class="col-sm-2 " style="background-color: darkgrey;">
      <p>ID: <?=$idUsuarioSessao?><br>
      Nome: <?=$nomeUsuarioSessao?><br>
      Login: <?=$loginUsuarioSessao?><br></p>
      <a href="_logoff.php" class="btn btn-danger">Sair</a>
  </div>
  </div>

</nav>
