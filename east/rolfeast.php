<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
require_once '../app/header.php';

?>
  <link rel="stylesheet" href="../public/css/printpage.css">


<body>
<?php if(!empty($_SESSION["login"])) :?>
<p><a class="btn btn-outline-dark mt-6 ml-2" href ="../admin/testform.php" > + New printer </a>
<?php endif?>
<div class="d-grid gap-2">
<?php      
$printers = mysqli_query($link, "SELECT * FROM east");
$printers = mysqli_fetch_all($printers)

?>
 <section class="py-5">
    <div class="container px-4 px-lg-2 mt-5">  
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        <?php foreach($printers as $printer): ?>
            <div class="col mb-5" id = "info-table">
                <div class="card h-100">
                    <!-- image-->
                    <img class="card-img-top" src="../admin/img/<?=$printer[4]?>" alt="..." />
                    <!--  details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!--  name-->
                            <h5 class="fw-bolder"><?=$printer[1]?></h5>
                            <!-- admin information -->
                             <?php if(!empty($_SESSION["login"])) : ?>
                              <?=$printer['2']?> 
                              <p>
                              <?=$printer['3']?>
                              
                              <div class="text-center"><a class="text-info" href="action/edit.php?id=<?= $printer[0] ?>">Changename/ip</a></div>
                              <div class="text-center"><a class="text-info" href="action/edit_img.php?id=<?= $printer[0] ?>">Change IMG</a></div>
                              <div class="text-center"><a class="text-info" href="action/edit_script.php?id=<?= $printer[0] ?>">Edit script</a></div>

                                                        
                              <?php endif?>
                        </div>
                    </div>
                    <!--actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="../admin/scripts/<?=$printer['3']?>">Подключить</a></div>        
                    </div>
                  </div>
                </div> 
                <?php endforeach; ?>  
              </div>
                      
            </div>
               
</section>
  </body>

<!-- Модальное окно -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Как установить принтер?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body font-weight-bold">
          <p>Выберите из списка нужный вам принтер</p>
          <p>Нажмите кнопку "Подключить"</p>
          <p>Снизу отобразится скачанный файл, запустите его и дождитесь окончания загрузки</p>
          <p>Проверьте установку, зайдя через пуск в "Принтеры и сканеры"</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
  


</div>
</div>
</div>
</div>
<?php
require '../app/footer.php';
require '../app/include/historyuser.php';
?>
