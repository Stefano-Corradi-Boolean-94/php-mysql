<main class="my-5 container">
  <h1 class="py-5">Elenco studenti</h1>
 
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Cognome</th>
        <th scope="col">Matricola</th>
        <th scope="col">azioni</th>
      </tr>
    </thead>
    <tbody>

    <?php if($result->num_rows > 0){
        while($row = $result->fetch_object()){ ?>
              <tr>
                <th scope="row"><?php echo $row->id ?></th>
                <td><?php echo $row->name ?></td>
                <td><?php echo $row->surname ?></td>
                <td><?php echo $row->registration_number ?></td>
                <td><a href="http://<?php echo $_SERVER['HTTP_HOST']  ?>/php-mysql/student.php?id=<?php echo $row->id ?>"class="btn btn-success">Vai</a></td>
              </tr>
    <?php
          }
        }else{
          echo '<h4>Nessun risultato trovato</h4>';
        }
    ?>
     
    </tbody>
    
</table>

<div class="text-center">
  <?php if($offset > 0): ?>
    <a href="http://<?php echo $_SERVER['HTTP_HOST']  ?>/php-mysql/students.php?offset=<?php echo $offset - $limit ?>"class="btn btn-success"> << </a>
  <?php endif; ?>

  <?php if($offset + $limit < $totale_studenti): ?>
    <a href="http://<?php echo $_SERVER['HTTP_HOST']  ?>/php-mysql/students.php?offset=<?php echo $offset + $limit ?>"class="btn btn-success"> >> </a>
  <?php endif; ?>
</div>

</main>