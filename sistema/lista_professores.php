<?php
session_start();
if(empty($_SESSION['active'])) {
  header("Location: ../");
}
require_once 'includes/session.php';
require_once 'includes/header.php';
require_once 'includes/Modals/modal_professor.php';
?>
 <main class="app-content">
      <div class="app-title">
        <div>
          <h1>
          <i class="app-menu__icon fas fa-chalkboard-teacher"></i> Lista de Professores
              <button class="btn btn-primary" type="button" onclick="openModalProfessor()">Novo</button>
          </h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Lista de Professores</a></li>
        </ul>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="tableProfessores">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nome</th>
                      <th>Apelido</th>
                      <th>Endereço</th>
                      <th>Cedular</th>
                      <th>Telefone</th>
                      <th>E-mail</th>
                      <th>Nivel de Est.</th>
                      <th>Estatus</th>
                      <th>Ação</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>


<?php require_once 'includes/footer.php'; ?>