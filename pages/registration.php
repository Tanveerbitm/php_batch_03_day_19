
<?php include 'header.php'; ?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <h1>SignUp</h1>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label" >User Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="user_name"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label">email</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email"/>
                                    <p><?php echo isset($msg)? $msg:'' ?></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label">Password</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="password"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-dark btn-block" value="submit" name="reg_btn">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-12 col-form-label text-right">
                                    <span>Already Have Account ? </span><a href="action.php?pages=login">SignIn Here</a>
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>


