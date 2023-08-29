<?php require APPROOT . "/views/inc/header.php"; ?>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card card-body bg-light mt-5">
                <h2>Create An Account</h2>
                <p>Please fill out this form to register with us</p>
                <form action="<?=URLROOT?>/users/register" method="POST">
                    <div class="form-group">
                        <label for="name">Name: <sup>*</sup></label>
                        <input class="form-control form-control-lb <?=!empty($data["name_err"]) ? "is-invalid" : ""?>" name="name" type="text" value="<?=$data["name"]?>">
                        <span class="invalid-feedback"><?=$data["name_error"]?></span>
                    </div>
                    <div class="form-group">
                        <label for="email">Email: <sup>*</sup></label>
                        <input class="form-control form-control-lb <?=!empty($data["email_err"]) ? "is-invalid" : ""?>" name="email" type="email" value="<?=$data["email"]?>">
                        <span class="email-feedback"><?=$data["email_error"]?></span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password: <sup>*</sup></label>
                        <input class="form-control form-control-lb <?=!empty($data["password_err"]) ? "is-invalid" : ""?>" name="password" type="password" value="<?=$data["password"]?>">
                        <span class="invalid-feedback"><?=$data["password_error"]?></span>
                    </div>
                    <div class="form-group">
                        <label for="confirm_pasword">Confirm pasword: <sup>*</sup></label>
                        <input class="form-control form-control-lb <?=!empty($data["confirm_pasword_error"]) ? "is-invalid" : ""?>" name="confirm_pasword" type="passwrod" value="<?=$data["confirm_pasword"]?>">
                        <span class="invalid-feedback"><?=$data["confirm_pasword_error"]?></span>
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                            <input type="submit" class="btn btn-success btn-block" value="Register">
                        </div>
                        <div class="col">
                            <a href="<?=URLROOT?>/users/login" class="btn btn-light btn-block">Have an account? Login</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php require APPROOT . "/views/inc/footer.php"; ?>
