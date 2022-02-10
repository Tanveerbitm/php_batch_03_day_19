<?php include ("header.php")?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $element) {?>

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="assets/img/<?php echo $element['image']  ?>" alt="" class="card-img-top" height="270"/>
                        <div class="card-body">
                            <h2 class="card-title"><?php echo $element['name']?></h2>
                            <h4>Price: <?php echo  $element['price'] ?></h4>
                            <p>brand: <?php echo  $element['brand'] ?></p>
                            <p>category: <?php echo  $element['category'] ?></p>
                            <hr/>
                            <a href="action.php?pages=detail&id=<?php echo $element['id']?>" class="btn btn-outline-success">Read more</a>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>

</section>

<?php include ("footer.php")?>
