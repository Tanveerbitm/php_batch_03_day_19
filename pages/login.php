
<?php include 'header.php'; ?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <h1>LogIn</h1>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label" >Email</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label">Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="password"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-12 col-form-label text-right">
                                    <p><?php echo isset($msg)? $msg:'' ?></p>
                                </label>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-dark btn-block" value="submit" name="login_btn">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-12 col-form-label text-right">
                                    <span>Don't Have any Account ? </span><a href="action.php?pages=registration">SignUp Here</a>
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


