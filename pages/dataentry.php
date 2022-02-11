<?php include ("header.php");
      include ("navbar.php"); ?>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center">Add Product</h1>
                        </div>
                        <div class="card-body">
                            <?php if(isset($msg)){ ?>
                                <h2 class="text-center font-weight-bold"><?php echo ($msg)? $msg : ''; ?></h2>
                            <?php } ?>
                            <form action="action.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label" >Product Code</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="code"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label" >Product Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label" >Product Price</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="price"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label" >Product Quantity</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="quantity"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label" >Upload Image </label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control-file" name="image"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-dark btn-block" value="save" name="dataentry_btn">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include ("footer.php")?>