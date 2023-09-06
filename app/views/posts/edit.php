<?php require APPROOT . "/views/inc/header.php";?>
<a class="btn btn-light" href="<?=URLROOT?>/posts">
    <i class="fa fa-backward"></i>
        Back
    </a>
    <div class="card card-body bg-light mt-5">
        <h2>Edit Post</h2>
        <p>Edits a post with this form</p>
        <form action="<?=URLROOT?>/posts/edit/<?=$data["id"]?>" method="POST">
            <div class="form-group">
                <label for="title">Title: <sup>*</sup></label>
                <input class="form-control form-control-lb <?=!empty($data["title_error"]) ? "is-invalid" : ""?>" name="title" type="text" value="<?=$data["title"]?>">
                <span class="invalid-feedback"><?=$data["title_error"]?></span>
            </div>
            <div class="form-group">
                <label for="body">Text: <sup>*</sup></label>
                <textarea class="form-control form-control-lb <?=!empty($data["body_error"]) ? "is-invalid" : ""?>" name="body" type="text"><?=$data["body"]?></textarea>
                <span class="invalid-feedback"><?=$data["body_error"]?></span>
            </div>
            <input type="submit" class="btn btn-success mt-3" value="Submit">
        </form>
    </div>
<?php require APPROOT . "/views/inc/footer.php";?>
