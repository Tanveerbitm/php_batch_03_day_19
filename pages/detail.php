<?php include ("header.php")?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <?php foreach ($details as $element) {?>
                <div class="col-md-8 mb-4 mx-auto">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-5">
                                <img src="assets/img/<?php echo $element['image']  ?>" alt="image" class="card-img-top p-3" />
                                <h2 class="card-title px-5"><?php echo $element['name']?></h2>

                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <p><b>Price: <?php echo  $element['price'] ?></b></p>
                                    <p>brand: <?php echo  $element['brand'] ?></p>
                                    <p>category: <?php echo  $element['category'] ?></p>
                                    <hr />
                                    <b>Description: </b>
                                    <br />
                                    <p><?php echo  $element['description'] ?></p>
                                    <hr />
                                    <a href="action.php?pages=products" class="btn btn-outline-success">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            <?php }?>
        </div>
    </div>

</section>

<?php include ("footer.php")?>

