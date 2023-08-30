<?php require APPROOT . "/views/inc/header.php"; ?>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card card-body bg-light mt-5">
                <h2>Login</h2>
                <p>Please fill in your credentials to login</p>
                <form action="<?=URLROOT?>/users/login" method="POST">
                    <div class="form-group">
                        <label for="email">Email: <sup>*</sup></label>
                        <input class="form-control form-control-lb <?=!empty($data["email_error"]) ? "is-invalid" : ""?>" name="email" type="email" value="<?=$data["email"]?>">
                        <span class="invalid-feedback"><?=$data["email_error"]?></span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password: <sup>*</sup></label>
                        <input class="form-control form-control-lb <?=!empty($data["password_error"]) ? "is-invalid" : ""?>" name="password" type="password" value="<?=$data["password"]?>">
                        <span class="invalid-feedback"><?=$data["password_error"]?></span>
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                            <input type="submit" class="btn btn-primary btn-success" value="Login">
                        </div>
                        <div class="col">
                            <a href="<?=URLROOT?>/users/login" class="btn btn-light btn-block">No account? Register</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php require APPROOT . "/views/inc/footer.php"; ?>
