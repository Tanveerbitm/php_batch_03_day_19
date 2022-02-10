<?php include 'header.php'; ?>
<?php include "navbar.php"; ?>


<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center">Welcome <?php echo $_SESSION['name']; ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include "footer.php"; ?>
