<?php include "conexao.php"; ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</head>




<body>
  <div class="container">

    <div class="mt-4 p-5 bg-primary rounded text-center text-white">
      <h1>Lista Convidados</h1>
    </div>

    <form class="row mt-4 " action="#" method="GET">

      <div class="col-4">
        <!-- <label for="staticEmail2">Nome</label> -->
        <input type="text" class="form-control" id="nome" placeholder="nome" name="nome" value="<?php echo $convidado['nome']; ?> ">
      </div>
      <div class="col-3">
        <!-- <label for="staticEmail2">acompanhante</label> -->
        <input type="number" class="form-control" id="nome" placeholder="acompanhante" name="acompanhante">

      </div>
      <div class="col-5 text-left">
        <button type="submit" class="btn btn-primary mb-3">Salvar</button>
      </div>
    </form>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome convidado</th>
          <th>Qtd acompanhante</th>
          <th>Acão</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($resultado  as $convidado) : ?>
          <tr>
            <td> <?php echo $convidado['id_convidados'] ?> </td>
            <td><?php echo $convidado['nome'] ?></td>
            <td><?php echo $convidado['acompanhantes'] ?></td> 
            <td> 
               <a href="editar.php?id=<?php echo $convidado['id_convidados']; ?>">
                    <button type="button" class="btn btn-success">
                        Atualizar
                    </button>                
                </a>
            </td>          
            
            <td> 
               <a href="excluir.php?id=<?php echo $convidado['id_convidados']; ?>">
                    <button type="button" class="btn btn-danger">
                        Excluir
                    </button>                
                </a>
            </td> 
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    </form>
  </div>
</body>

</html>