<?php require_once '../app/include/database.php';  ?>

<!-- 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://bootstraptema.ru/plugins/2016/snackbarjs/snackbar.min.css" />
<script src="https://bootstraptema.ru/plugins/jquery/jquery-1.11.3.min.js"></script>
<script src="https://bootstraptema.ru/plugins/2016/snackbarjs/snackbar.min.js"></script> -->
<link rel="stylesheet" href="../css/testedit.css">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script> 

<div class="container">
<div class="col-md-12 col-12 col-sm-12">
    <div class="card">
    <form class="form-inline align-right">
                    <a href="../index.php"  class="btn btn-navbar  btn-success ml-3"> Главная</a>
                    <a href="../admin/listprinter.php"  class="btn btn-navbar  btn-success ml-3"> Волгоградка </a>
                    <a href="../east/listprinterEAST.php"  class="btn btn-navbar  btn-success ml-3"> Восток </a>
                    <a href="../reg/listprinterREG.php"  class="btn btn-navbar  btn-success ml-3"> Регионы </a>                    
                </form>
      <div class="card-header">
        <h4>Printer list - Восток</h4>
        <input class="form-control" type="text" placeholder="поиск" id="search-text" onkeyup="tableSearch()">


      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped" id = "info-table">
            <tbody><tr>
              <th>ID</th>
              <th>NAME</th>
              <th>IP</th>
              <th>SCRIPT</th>
              <th>IMAGE</th>
            </tr>
            <?php
             
             $printers = mysqli_query($link, "SELECT * FROM east");
             $printers = mysqli_fetch_all($printers);
              foreach ($printers as $printer) {
        ?>
            <tr>
              <td class="p-auto text-left">   <!--  id -->
                <p> <?= $printer[0] ?></p>
              </td>

              <td><?= $printer[1] ?></td> <!--  name -->
              <td class="align-middle">
                <p><?= $printer[2] ?></p>    <!--  ip adr -->
              </td>
              <td><?= $printer[3] ?></td>  <!--  script -->
              <td>    <img class="card-img-top" style="height:130px; width: 123px;" src="action/img/<?=$printer[4] ?>" alt="..."></td>
              <td>
<div class="btn-group">
  <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-pencil-alt"></i></a>
  </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="action/edit.php?id=<?= $printer[0] ?>">Редактировать имя/IP</a></li>
          <li><a class="dropdown-item" href="action/edit_img.php?id=<?= $printer[0] ?>">Изменить изображение</a></li>
          <!-- <li><a class="dropdown-item" href="edit_script.php?id=<?= $printer[0] ?>">Изменить скрипт</a></li> -->
      	  <li><a class="dropdown-item" href="action/delete.php?id=<?= $printer[0] ?>">Удалить</a></li>
        </ul>
</div>
            </tr>
            
            <?php
    }
?>

          </tbody></table>
        </div>
      </div>
    </div>
  </div>
</div>

  <script>


function tableSearch() {
    var phrase = document.getElementById('search-text');
    var table = document.getElementById('info-table');
    var regPhrase = new RegExp(phrase.value, 'i');
    var flag = false;
    for (var i = 1; i < table.rows.length; i++) {
        flag = false;
        for (var j = table.rows[i].cells.length - 1; j >= 0; j--) {
            flag = regPhrase.test(table.rows[i].cells[j].innerHTML);
            if (flag) break;
        }
        if (flag) {
            table.rows[i].style.display = "";
        } else {
            table.rows[i].style.display = "none";
        }

    }
}

</script>
