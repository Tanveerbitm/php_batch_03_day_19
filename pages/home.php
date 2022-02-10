<?php include ("header.php")?>
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            Please Input Field carefully
                        </div>
                        <div class="card-body">
                            <?php if(isset($message)){ ?>
                                <h2 class="text-center font-weight-bold"><?php echo $message; ?></h2>
                            <?php } ?>
                            <form action="action.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label" >Blog Title</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="title"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label" >Author Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="author_name"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label" >Description</label>
                                    <div class="col-md-9">
                                        <textarea name="description" class="form-control" rows="5"></textarea>
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
                                        <input type="submit" class="btn btn-outline-dark btn-block" value="save" name="btn">
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