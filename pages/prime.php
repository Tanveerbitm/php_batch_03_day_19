
<?php include ("header.php")?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        Prime Number
                    </div>
                    <div class="card-body">


                        <form action="action.php" method="POST" >
                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label" >Enter Number</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="given_number"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label" >Result</label>
                                <div class="col-md-9">
                                    <input type="text" value="<?php echo isset($result)? $result:''; ?>" readonly class="form-control" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-dark btn-block" value="submit" name="prm_btn">
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
