<?php require_once '../app/include/database.php'; ?>
<?php 
$count_result = mysqli_query($link, "SELECT COUNT(*) FROM history");
$count_array = mysqli_fetch_row($count_result);
$count = $count_array[0];
?> <!-- подсчитывает количество уникальных посещений в БД -->


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script> 

<div class="container">
<div class="col-md-12 col-12 col-sm-12">
    <div class="card">
    <form class="form-inline align-right">
                    <a href="../vol/rolfvolg.php" class="btn btn-navbar  btn-success ml-3"> <<< </a>
                    
                </form>
      <div class="card-header">
        <h4>Журнал посещений</h4>
        <p>Количество уникальных посещений: <b><?=$count?></b></p>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped">
            <tbody><tr>
              <th>IP</th>
              <th>DATE</th>
              <th>URL</th>
            </tr>
            <?php
             $users = mysqli_query($link, "SELECT * FROM history"); 
              $users = mysqli_fetch_all($users);
              foreach ($users as $user) {
             ?>
            <tr>
              <td class="p-auto text-left">   <!--  id -->
                <p> <?= $user[0] ?></p>
              </td>

              <td><?= $user[1] ?></td> <!--  name -->
              <td><?= $user[2] ?> </td> <!-- URL -->
            </tr>
            
            <?php
    }
?>
<a class="btn btn-danger btn-action mr-1 mb-3" data-toggle="tooltip"  title=""  href = 'deletehistory.php' data-original-title="Edit"><i class="fas fa-trash"> Очистить все данные</i></a>
          </tbody></table>
        </div>
      </div>
    </div>
  </div>
</div>