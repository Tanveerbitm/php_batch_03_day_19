<?php include ("header.php")?>
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            File Upload
                        </div>
                        <div class="card-body">
                            <form action="action.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label" > Image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control-file" name="image"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-dark btn-block" value="submit" name="img_btn">
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