<?php
include './cabecalho.php'

?>

<body>
<main>
        
        <form class="row g-2">
            <label for="exampleDataList" class="form-label">Lista de Salas</label>
            <div class="col-auto">
                <button type="submit" class="btn btn-dark mb-3">Nova Sala</button>
            </div>
            <div class="col-auto">
                <label for="inputPassword2" class="visually-hidden">Sala</label>
                <input type="disciplina" class="form-control" id="inputPassword2" placeholder="Digite a sala">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Pesquisar</button>
            </div>
        </form>

        <!-- Tabela -->
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Sigla</th>
      <th scope="col">Apelido</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Laboratorio</td>
      <td>Lab</td>
      <td>Laborat</td>
      <td>
      <button type="button" class="btn btn-warning">Editar</button>
      <button type="button" class="btn btn-danger">Excluir</button>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Reuniao</td>
      <td>Rna</td>
      <td>Reu</td>
      <td>
      <button type="button" class="btn btn-warning">Editar</button>
      <button type="button" class="btn btn-danger">Excluir</button>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Diretoria</td>
      <td>Dtr</td>
      <td>Diret</td>
      <td>
      <button type="button" class="btn btn-warning">Editar</button>
      <button type="button" class="btn btn-danger">Excluir</button>
      </td>
    </tr>
  </tbody>
</table>

</main>
</body>
</html>