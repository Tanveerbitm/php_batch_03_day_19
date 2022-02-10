<?php include("header.php");
include("navbar.php"); ?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-tabs nav-justified">
                        <li class="nav-item">
                            <a href="#home" class="nav-link <?php if(!isset($_POST['prm_btn']) && !isset($_POST['srs_btn'])){echo 'active';}elseif(isset($_POST['prm_btn'])){echo 'active';}else{echo '';} ?>" data-toggle="tab">Prime Detector</a>
                        </li>
                        <li class="nav-item">
                            <a href="#about" class="nav-link <?php if(isset($_POST['srs_btn'])){echo 'active';}else{echo '';} ?>" data-toggle="tab">Series</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade  <?php if(!isset($_POST['prm_btn']) && !isset($_POST['srs_btn'])){echo 'show active';}elseif(isset($_POST['prm_btn'])){echo 'show active';}else{echo '';} ?>" id="home">
                            <div class="card card-body">
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
                        <div class="tab-pane fade  <?php if(isset($_POST['srs_btn'])){echo 'show active';}else{echo '';} ?>" id="about">
                            <div class="card card-body">
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
                                            <textarea class="form-control" readonly><?php echo isset($results['result'])? $results['result']:''; ?></textarea>
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
        </div>
    </section>
<?php include("footer.php") ?>