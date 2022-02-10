<?php include ("header.php")?>
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            Pattern Generator
                        </div>
                        <div class="card-body">
                            <form action="action.php" method="POST">
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label" > Length</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="input_length"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label">Your Result</label>
                                    <div class="col-md-9">
                                        <?php echo isset($result)? $result: ''; ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-dark" value="submit" name="ptr">
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