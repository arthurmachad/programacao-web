<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Revisao</title>

</head>
<body>

<?php
    include './cabecalho.php'
?>

<main>
        
        <form class="row g-2">
            <label for="exampleDataList" class="form-label">Lista de Disciplinas</label>
            <div class="col-auto">
                <button type="submit" class="btn btn-dark mb-3">Nova Disciplina</button>
            </div>
            <div class="col-auto">
                <label for="inputPassword2" class="visually-hidden">Discilina</label>
                <input type="disciplina" class="form-control" id="inputPassword2" placeholder="Digite a disciplina">
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
      <td>Administração Geral</td>
      <td>Adm</td>
      <td>Adm Geral</td>
      <td>
      <button type="button" class="btn btn-warning">Editar</button>
      <button type="button" class="btn btn-danger">Excluir</button>
      </td>
    </tr>
    
    <tr>
      <th scope="row">2</th>
      <td>Psicologia</td>
      <td>Psico</td>
      <td>Psicolog</td>
      <td>
      <button type="button" class="btn btn-warning">Editar</button>
      <button type="button" class="btn btn-danger">Excluir</button>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Medicina Veterinaria</td>
      <td>Med</td>
      <td>Medvet</td>
      <td>
      <button type="button" class="btn btn-warning">Editar</button>
      <button type="button" class="btn btn-danger">Excluir</button>
      </td>
    </tr>
  </tbody>
</table>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>