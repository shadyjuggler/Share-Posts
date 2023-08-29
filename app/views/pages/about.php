<?php require APPROOT . "/views/inc/header.php";?>
    <h1>Welcome to <?=$data["title"]?></h1>
    <p class="lead"><?= $data["descr"]?></p>
    <p><strong><?=APPVERSION?></strong></p>
<?php require APPROOT . "/views/inc/footer.php";?>