<?php require APPROOT . "/views/inc/header.php";?>
    <a class="btn btn-light" href="<?=URLROOT?>/posts">
        <i class="fa fa-backward"></i>
            Back
    </a>
    <h1><?=$data["post"]->title?></h1>
    <div class="bg-secondary text-white p-2 mt-3 mb-3">
        Written by <?=$data["user"]->name?> on <?=$data["post"]->created_at?>
    </div>
    <p><?=$data["post"]->body?></p>

    <?php if ($data["post"]->user_id == $_SESSION["user_id"]) : ?>
        <hr>
        <a href="<?=URLROOT?>/posts/edit/<?=$data["post"]->id?>" class="btn btn-dark">Edit</a>

        <form class="mt-2" method="post" action="<?=URLROOT?>/posts/delete/<?=$data["post"]->id?>">
            <input type="submit" value="Delete" class="btn btn-danger">
        </form>
    <?php endif; ?>
    
<?php require APPROOT . "/views/inc/footer.php";?>
