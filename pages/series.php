<?php include ("header.php")?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        Sum Of Series
                    </div>
                    <div class="card-body">

                        <form action="action.php" method="POST" >
                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label" >starting Number</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="starting_number" value="<?php echo isset($results['starting_number'])? $results['starting_number']:''; ?>"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label" >Ending Number</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="ending_number" value="<?php echo isset($results['ending_number'])? $results['ending_number']:''; ?>"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label" >Result</label>
                                <div class="col-md-9">
                                    <textarea class="form-control"><?php echo isset($results['result'])? $results['result']:''; ?></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-dark btn-block" value="submit" name="srs_btn">
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
