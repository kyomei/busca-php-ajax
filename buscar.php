<?php
require_once 'config.php';
require_once 'classes/Usuarios.class.php';

$search = addslashes($_POST['valor']);
$user = new Usuarios($pdo);
?>
<?php if(count($user->search($search)) < 1): ?>
<div class="card bg-light text-dark">
   <div class="card-body">Nenhum registro encontrado...</div>
</div>
<?php else: ?>
<div class="card">
   <div class="card-header">Dados da busca:</div>
   <div class="card-body">

      <table class="table table-striped table-bordered">
         <thead class="thead-dark">
            <tr>
               <th>ID</th>
               <th>NOME</th>
               <th>EMAIL</th>
            </tr>
         </thead>
         <tbody>
            <?php foreach($user->search($search) as $row): ?>
            <tr>
               <td><?php echo $row->id; ?></td>
               <td><?php echo $row->nome; ?></td>
               <td><?php echo $row->email; ?></td>
            </tr>
            <?php endforeach; ?>
         </tbody>
      </table>
   </div> 
</div>
<?php endif; ?>
